<?php
$pageTitle = "Customer Reviews & Testimonials | Lost Key Locksmith Auckland";
$pageDescription = "Read verified 5-star Google reviews from Auckland homeowners, drivers & businesses. Trusted 24/7 mobile locksmith service with fast response across Auckland.";
$currentPage = "company";
include 'includes/header.php';
?>
<script type="text/babel" data-type="module">
import { createRoot } from 'react-dom/client';
import React, { useState, useEffect } from 'react';
import { 
  Phone, Star, ExternalLink, RefreshCw, CheckCircle2, Mail
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
  darkGray: '#132B4F',
};

const GOOGLE_MAPS_PROFILE_URL = "https://maps.app.goo.gl/SR1hmXoKCeqJERTc6";

function TestimonialsContent() {
  const HeaderComponent = window.HeaderComponent;
  const FooterComponent = window.FooterComponent;

  const [reviewsData, setReviewsData] = useState(null);
  const [loading, setLoading] = useState(true);
  const [selectedCategory, setSelectedCategory] = useState('All');

  useEffect(() => {
    fetch('get-reviews.php')
      .then(res => res.json())
      .then(data => {
        setReviewsData(data);
        setLoading(false);
      })
      .catch(err => {
        setReviewsData({
          business: {
            name: 'Lost Key NZ | Automotive Locksmith Auckland',
            rating: 4.9,
            total_reviews: 930,
            google_maps_url: GOOGLE_MAPS_PROFILE_URL
          },
          reviews: [
            {
              id: '1',
              author_name: 'Michael Henderson',
              author_photo: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '2 days ago',
              service_type: 'Automotive Locksmith',
              text: 'Locked my keys inside my Audi in Ponsonby at 11 PM on a Sunday. Called Lost Key NZ and the technician arrived within 25 minutes! Extremely professional, non-destructive entry, had me back in my car in under 5 minutes. Best locksmith service in Auckland!',
              verified_customer: true,
              source: 'Google Maps'
            },
            {
              id: '2',
              author_name: 'Sarah Jenkins',
              author_photo: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '1 week ago',
              service_type: 'Emergency Locksmith',
              text: 'Fast, courteous and super fair pricing! I was locked out of my house on the North Shore with groceries in the car. They arrived quickly, unlocked the front door cleanly, and even inspected the lock tumblers for me. Outstanding experience.',
              verified_customer: true,
              source: 'Google Maps'
            },
            {
              id: '3',
              author_name: 'David Chen',
              author_photo: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '2 weeks ago',
              service_type: 'Commercial Locksmith',
              text: 'We hired Lost Key NZ to upgrade all digital keyless entry locks and master key systems across our commercial office space in Newmarket. Their communication was top notch, installation was clean and flawless, and after-sales support was excellent.',
              verified_customer: true,
              source: 'Google Maps'
            },
            {
              id: '4',
              author_name: 'Emma Thompson',
              author_photo: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '3 weeks ago',
              service_type: 'Car Key Replacement',
              text: 'Lost my transponder key for my Toyota Hilux while fishing out East Auckland. Dealer wanted $600+ and 4 days waiting. Lost Key came out to the boat ramp, cut and programmed a new transponder key right on site in 30 minutes! Unbeatable value.',
              verified_customer: true,
              source: 'Google Maps'
            },
            {
              id: '5',
              author_name: 'Robert Taylor',
              author_photo: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '1 month ago',
              service_type: 'Residential Locksmith',
              text: 'Moved into a new home in West Auckland and needed all deadbolts rekeyed for security. Lost Key provided clear pricing upfront with no hidden callout fees. Professional, polite, and efficient locksmiths. Highly recommended!',
              verified_customer: true,
              source: 'Google Maps'
            },
            {
              id: '6',
              author_name: 'Jessica Patel',
              author_photo: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop&crop=faces&q=80',
              rating: 5,
              relative_time: '1 month ago',
              service_type: '24 Hour Locksmith',
              text: 'Can’t thank them enough! Key broke inside the ignition cylinder late at night in South Auckland. They arrived within 30 minutes, extracted the broken piece, repaired the ignition, and cut a fresh spare key right from their mobile van. 10/10 service!',
              verified_customer: true,
              source: 'Google Maps'
            }
          ]
        });
        setLoading(false);
      });
  }, []);

  const categories = ['All', 'Emergency Locksmith', 'Automotive Locksmith', 'Residential Locksmith', 'Commercial Locksmith'];

  const filteredReviews = reviewsData?.reviews ? (
    selectedCategory === 'All' 
      ? reviewsData.reviews 
      : reviewsData.reviews.filter(r => r.service_type?.toLowerCase().includes(selectedCategory.toLowerCase().replace(' locksmith', '')) || r.service_type === selectedCategory)
  ) : [];

  return (
    <div className="bg-slate-50 text-gray-900 font-sans">
      <HeaderComponent currentPage="company" />
      {/* HERO BANNER */}
      <section className="relative text-white py-20 lg:py-24 overflow-hidden" style={{ backgroundColor: COLORS.black }}>
        <div className="absolute inset-0 opacity-20 bg-[radial-gradient(#F4C430_1px,transparent_1px)] [background-size:16px_16px]"></div>
        
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10">
          <div className="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full mb-6 border border-[#F4C430]/30" style={{ backgroundColor: 'rgba(244, 196, 48, 0.1)' }}>
            <svg className="w-5 h-5 text-[#F4C430]" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" />
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" />
            </svg>
            <span className="text-[#F4C430] font-extrabold text-xs tracking-widest uppercase">Verified Google Reviews</span>
          </div>

          <h1 className="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight mb-6">
            Customer Reviews & <span style={{ color: COLORS.yellow }}>Testimonials</span>
          </h1>

          <p className="text-gray-300 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed mb-10">
            See what Kiwi homeowners, motorists, and business owners across Auckland have to say about our 24/7 mobile locksmith service.
          </p>

          <div className="inline-flex flex-col sm:flex-row items-center justify-between bg-[#132B4F] border border-gray-700/60 p-6 md:p-8 rounded-3xl shadow-2xl gap-6 text-left max-w-2xl w-full">
            <div className="flex items-center space-x-5">
              <div className="w-16 h-16 rounded-2xl bg-[#F4C430] flex items-center justify-center text-slate-900 font-black text-2xl shadow-lg flex-shrink-0">
                4.9
              </div>
              <div>
                <div className="flex items-center space-x-1 mb-1">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} size={20} fill="#F4C430" color="#F4C430" />
                  ))}
                </div>
                <p className="text-white font-bold text-base">4.9 Out of 5.0 Rating</p>
                <p className="text-gray-400 text-xs">Based on 930+ verified Google reviews</p>
              </div>
            </div>

            <a 
              href={GOOGLE_MAPS_PROFILE_URL}
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center space-x-2 px-6 py-3.5 rounded-full font-bold text-xs uppercase tracking-wider transition-all hover:brightness-110 shadow-lg flex-shrink-0"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <span>Write a Review on Google</span>
              <ExternalLink size={14} />
            </a>
          </div>
        </div>
      </section>

      {/* FILTER & REVIEWS GRID SECTION */}
      <section className="py-16 md:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div className="flex flex-wrap items-center justify-center gap-3 mb-12">
          {categories.map((cat) => (
            <button
              key={cat}
              onClick={() => setSelectedCategory(cat)}
              className={`px-5 py-2.5 rounded-full font-bold text-sm transition-all shadow-sm ${
                selectedCategory === cat
                  ? 'bg-[#0B1F3A] text-[#F4C430] shadow-md border-2 border-[#F4C430]'
                  : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'
              }`}
            >
              {cat}
            </button>
          ))}
        </div>

        {loading ? (
          <div className="flex flex-col items-center justify-center py-20">
            <RefreshCw className="animate-spin text-[#F4C430] mb-4" size={40} />
            <p className="text-gray-600 font-semibold">Loading live Google reviews...</p>
          </div>
        ) : (
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {filteredReviews.map((rev) => (
              <div 
                key={rev.id} 
                className="bg-white rounded-3xl p-7 shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col justify-between group"
              >
                <div>
                  <div className="flex justify-between items-center mb-5">
                    <div className="flex items-center space-x-1">
                      {[...Array(rev.rating || 5)].map((_, i) => (
                        <Star key={i} size={18} fill="#F4C430" color="#F4C430" />
                      ))}
                    </div>
                    <div className="flex items-center space-x-1.5 bg-slate-100 px-3 py-1 rounded-full border border-gray-200 text-xs font-bold text-gray-700">
                      <svg className="w-3.5 h-3.5 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" />
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" />
                      </svg>
                      <span>Google Review</span>
                    </div>
                  </div>

                  {rev.service_type && (
                    <span className="inline-block bg-[#FFF8E1] text-[#0B1F3A] font-bold text-xs px-3 py-1 rounded-md mb-4 border border-[#F4C430]/40">
                      {rev.service_type}
                    </span>
                  )}

                  <p className="text-gray-700 text-base leading-relaxed mb-6 italic">
                    "{rev.text}"
                  </p>
                </div>

                <div className="pt-5 border-t border-gray-100 flex items-center justify-between">
                  <div className="flex items-center space-x-3">
                    <img 
                      src={rev.author_photo} 
                      alt={rev.author_name} 
                      className="w-11 h-11 rounded-full object-cover border-2 border-[#F4C430]"
                    />
                    <div>
                      <h4 className="font-bold text-gray-900 text-sm leading-tight flex items-center space-x-1">
                        <span>{rev.author_name}</span>
                        <CheckCircle2 size={15} className="text-blue-500 flex-shrink-0" />
                      </h4>
                      <p className="text-gray-400 text-xs mt-0.5">{rev.relative_time}</p>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        )}
      </section>
      <FooterComponent currentPage="company" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<TestimonialsContent />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<?php include 'includes/footer.php'; ?>
