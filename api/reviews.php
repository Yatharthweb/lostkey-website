<?php
/**
 * API Endpoint to fetch Google Reviews
 * Returns cached reviews if available and fresh, otherwise fetches from Google API.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/config.php';

// Function to fetch reviews from Google API
function fetchReviewsFromGoogle() {
    if (GOOGLE_API_KEY === 'ENTER_YOUR_API_KEY_HERE') {
        return ['error' => 'API Key not configured. Please add your Google Places API key to api/config.php'];
    }

    $url = "https://maps.googleapis.com/maps/api/place/details/json" .
           "?place_id=" . GOOGLE_PLACE_ID .
           "&fields=name,rating,user_ratings_total,reviews" .
           "&key=" . GOOGLE_API_KEY;

    // Use cURL to fetch the data
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For local XAMPP development
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200 || !$response) {
        return ['error' => 'Failed to connect to Google API'];
    }

    $data = json_decode($response, true);

    if (isset($data['status']) && $data['status'] !== 'OK') {
        return ['error' => 'Google API Error: ' . $data['status'] . (isset($data['error_message']) ? ' - ' . $data['error_message'] : '')];
    }

    return $data['result'];
}

// Check cache first
$useCache = true;
if (file_exists(CACHE_FILE)) {
    $cacheTime = filemtime(CACHE_FILE);
    if (time() - $cacheTime > CACHE_DURATION) {
        $useCache = false; // Cache expired
    }
} else {
    $useCache = false; // No cache exists
}

// Force refresh if requested via query param ?refresh=1
if (isset($_GET['refresh']) && $_GET['refresh'] == '1') {
    $useCache = false;
}

if ($useCache) {
    $cachedData = file_get_contents(CACHE_FILE);
    echo $cachedData;
    exit;
}

// Fetch fresh data
$freshData = fetchReviewsFromGoogle();

if (isset($freshData['error'])) {
    // If fetching fails, try to return stale cache if it exists, otherwise return the error
    if (file_exists(CACHE_FILE)) {
        $staleData = json_decode(file_get_contents(CACHE_FILE), true);
        $staleData['cached_error'] = $freshData['error'];
        echo json_encode($staleData);
    } else {
        http_response_code(500);
        echo json_encode($freshData);
    }
    exit;
}

// Format the data nicely
$response = [
    'business_name' => $freshData['name'] ?? 'Lost Key NZ',
    'rating' => $freshData['rating'] ?? 5.0,
    'total_reviews' => $freshData['user_ratings_total'] ?? 0,
    'reviews' => [],
    'fetched_at' => date('c')
];

if (isset($freshData['reviews'])) {
    foreach ($freshData['reviews'] as $review) {
        // Filter out low ratings if desired (optional)
        if ($review['rating'] >= 4) {
            $response['reviews'][] = [
                'author_name' => $review['author_name'],
                'author_url' => $review['author_url'] ?? '',
                'profile_photo_url' => $review['profile_photo_url'] ?? '',
                'rating' => $review['rating'],
                'relative_time_description' => $review['relative_time_description'],
                'text' => $review['text'],
                'time' => $review['time']
            ];
        }
    }
}

// Save to cache
$jsonOutput = json_encode($response, JSON_PRETTY_PRINT);
file_put_contents(CACHE_FILE, $jsonOutput);

echo $jsonOutput;
?>
