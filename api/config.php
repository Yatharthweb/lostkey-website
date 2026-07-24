<?php
/**
 * Configuration for Google Places API Integration
 */

// Replace this with your actual Google Places API Key
define('GOOGLE_API_KEY', 'ENTER_YOUR_API_KEY_HERE');

// Place ID for Lost Key NZ (Automotive Locksmith Auckland)
// Derived from: https://maps.app.goo.gl/SR1hmXoKCeqJERTc6
// If you have a specific Place ID, put it here. Otherwise, you can find it using Google's Place ID Finder.
define('GOOGLE_PLACE_ID', 'ChIJ3wFbsfIuBmgROr78F4tgM1I'); 
// (Note: This is a placeholder Place ID for Auckland, you may need the exact one for your GMB profile)

// Cache file location (stores reviews to prevent hitting API limits)
define('CACHE_FILE', __DIR__ . '/reviews_cache.json');

// Cache duration in seconds (24 hours = 86400)
define('CACHE_DURATION', 86400);

// How many reviews to fetch (Google Places API returns up to 5)
// To get more, you need to use a third-party service or business dashboard scraping.
define('MAX_REVIEWS', 5);
?>
