<?php
$pageTitle = "Lost Key Locksmith Auckland | 24/7 Mobile Locksmith Service";
$pageDescription = "LostKey is Auckland's trusted 24/7 locksmith. Fast 20-40 min arrival across Auckland for home, business, and vehicle lockouts, lock repairs, and key cutting.";
$currentPage = "home";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React, { useState, useEffect, useRef } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, ChevronLeft, ChevronDown,
  Key, Clock, Award, MapPin, Wrench, Star, Quote, CheckCircle2,
  ArrowRight, Shield, Mail, Facebook, Twitter, Youtube,
  Zap, BadgeCheck, DollarSign, Settings, Smartphone, KeyRound,
  Users, Check, User, Calendar, Play, ArrowUp, FileText,
  AlertTriangle, Building, PenTool, DoorClosed, Unlock, Power, Layers,
  Plus, Minus, ThumbsUp, ClipboardCheck, Video
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  yellowHover: '#E8B61A',
  yellowLight: '#FFF8E1',
  black: '#0B1F3A',
  darkGray: '#132B4F',
  heroFooter: '#08182F',
  navyHover: '#1C3C6B',
  gray: '#6B7280',
  white: '#FFFFFF',
  offWhite: '#F8FAFC',
  border: '#E5E7EB',
  darkText: '#1F2937',
  lightGray: '#F8FAFC',
};

function HomePageContent() {
  const [heroSlide, setHeroSlide] = useState(0);
  const [actionSlide, setActionSlide] = useState(1);
  const [quoteStep, setQuoteStep] = useState(1);
  const [selectedQuoteService, setSelectedQuoteService] = useState(null);
  const [openFaq, setOpenFaq] = useState(2);
  const [currentSlide, setCurrentSlide] = useState(0);

  const videoSliderRef = useRef(null);
  const aboutCountersRef = useRef(null);

  const heroImages = [
    'car-lockout.jpeg',
    'office-lock.jpeg',
    'key-locksmith.jpeg',
  ];

  const quoteServices = [
    { id: 'home', title: 'Home / Flat', icon: Home, color: '#F97316' },
    { id: 'office', title: 'Commercial', icon: Building, color: '#3B82F6' },
    { id: 'auto', title: 'Auto / Car', icon: Car, color: '#EF4444' },
    { id: 'key', title: 'Key Replace', icon: Key, color: '#A855F7' },
    { id: 'repair', title: 'Lock Repair', icon: Wrench, color: '#06B6D4' },
    { id: 'emergency', title: 'Emergency', icon: AlertTriangle, color: '#EC4899' },
  ];

  const faqData = [
    {
      question: "How quickly can you arrive at my location?",
      answer: "We strive to reach you within 20-40 minutes for all emergency callouts across Auckland.",
      tags: []
    },
    {
      question: "Are you available 24/7 for emergencies?",
      answer: "Yes, our team is on standby 24 hours a day, 7 days a week, including public holidays.",
      tags: []
    },
    {
      question: "Can you unlock my car without damage?",
      answer: "Yes. Our technicians use non-destructive entry methods whenever possible to unlock your vehicle without causing damage.",
      tags: [
        { label: "24/7 Service", icon: Clock },
        { label: "Damage-Free", icon: Shield },
        { label: "Car Lockout", icon: Car }
      ]
    },
    {
      question: "Do you replace lost car keys?",
      answer: "Yes, we can cut and program new transponder keys and key fobs on-site.",
      tags: []
    },
    {
      question: "Do you provide commercial locksmith services?",
      answer: "Absolutely. We install and repair high-security locks, master key systems, and access control for businesses.",
      tags: []
    },
    {
      question: "What payment methods do you accept?",
      answer: "We accept all major credit cards, debit cards, cash, and Afterpay for easy payments.",
      tags: []
    },
    {
      question: "Are your locksmiths licensed and insured?",
      answer: "Yes, all our locksmiths are fully trained, licensed, and insured for your peace of mind.",
      tags: []
    }
  ];

  const actionVideos = [
    {
      id: 1,
      duration: "0:31",
      title: "House Lockout",
      location: "North Shore",
      icon: Home,
      image: "https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=500&q=80"
    },
    {
      id: 2,
      duration: "0:48",
      title: "Smart Lock Installation",
      location: "West Auckland",
      icon: Building,
      image: "https://images.unsplash.com/photo-1563770660941-20978e870e26?auto=format&fit=crop&w=500&q=80"
    },
    {
      id: 3,
      duration: "0:22",
      title: "Car Unlock",
      location: "Auckland CBD",
      icon: Car,
      image: "https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=500&q=80"
    }
  ];

  const testimonials = [
    { name: 'Sarah Jenkins', role: 'Homeowner', text: 'Locked my keys in the car at 10PM. They were there in 20 minutes and let me back in — absolute lifesavers.', rating: 5, img: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&q=80' },
    { name: 'David Chen', role: 'Business Owner', text: 'Upgraded our shop to smart locks and CCTV. The team was professional, clean, and walked us through everything. Highly recommend.', rating: 5, img: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&q=80' },
    { name: 'Emma Thompson', role: 'Property Manager', text: 'We use them for all our rental properties. They\'re fast, well-priced, and the invoicing is always spot on.', rating: 5, img: 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&q=80' },
  ];

  useEffect(() => {
    const timer = setInterval(() => {
      setHeroSlide((prev) => (prev + 1) % heroImages.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="home" />

      {/* HERO SECTION */}
      <section id="home" className="relative text-white overflow-hidden min-h-[600px] md:h-[680px] flex items-center" style={{ backgroundColor: COLORS.black }}>
        {heroImages.map((img, idx) => (
          <div 
            key={idx}
            className="absolute inset-0 transition-opacity duration-1000 ease-in-out"
            style={{ 
              opacity: heroSlide === idx ? 1 : 0,
              zIndex: heroSlide === idx ? 1 : 0,
              position: 'absolute', top: 0, left: 0, width: '100%', height: '100%'
            }}
          >
            <img 
              src={img} 
              alt="" 
              className="w-full h-full object-cover"
              style={{ 
                width: '100%', height: '100%', objectFit: 'cover',
                transform: heroSlide === idx ? 'scale(1.05)' : 'scale(1)',
                transition: 'transform 6s ease-out, opacity 1s ease-in-out',
              }}
            />
            <div className="absolute inset-0 bg-[#08182F]/60" style={{ position: 'absolute', top: 0, left: 0, width: '100%', height: '100%', backgroundColor: 'rgba(0,0,0,0.5)' }}></div>
          </div>
        ))}
        
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full z-10 mt-12 md:mt-0 pb-16 lg:pb-0">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <div className="lg:col-span-7 space-y-7">
              <div 
                className="inline-flex items-center px-4 py-1 text-[13px] font-bold uppercase tracking-wider rounded-full"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                24/7 EMERGENCY CALL OUT
              </div>

              <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[70px] font-black leading-[1.05] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Your Trusted Partner <br />
                in <span style={{ color: COLORS.yellow }}>Locksmith</span> Services
              </h1>

              <p className="text-lg md:text-[17px] text-white max-w-[500px] leading-relaxed font-medium mt-6">
                LostKey provides fast, reliable locksmith services across Auckland — from emergency lockouts to advanced security upgrades. Licensed, insured, and available around the clock when you need us most.
              </p>

              <div className="pt-6">
                <a 
                  href="tel:0800828345" 
                  className="inline-flex items-center space-x-4 border border-white rounded-full px-2 py-2 pr-10 hover:border-white/80 transition-all group bg-[#0B1F3A]/20"
                >
                  <div 
                    className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform"
                    style={{ backgroundColor: COLORS.yellow }}
                  >
                    <Phone size={24} style={{ color: COLORS.black, fill: COLORS.black }} />
                  </div>
                  <div className="flex flex-col">
                    <span className="text-[11px] uppercase tracking-wider text-gray-200 font-bold mb-0.5">CALL NOW</span>
                    <span className="text-white font-bold text-[22px] tracking-wide leading-none whitespace-nowrap">0800 828 345</span>
                  </div>
                </a>
              </div>
            </div>

            <div className="lg:col-span-5 relative z-20">
              <div className="bg-[#0B1F3A] rounded-3xl shadow-2xl overflow-hidden flex flex-col border border-[#132B4F]">
                <div className="text-white px-6 md:px-8 py-6">
                  <h3 className="text-2xl font-bold mb-2 tracking-tight">Get in touch with us today</h3>
                  <p className="text-gray-400 text-[13px] md:text-sm">
                    Hassle-free booking &bull; Quick response &bull; Serving your local community.
                  </p>
                  
                  <div className="mt-6">
                    <div className="text-xs text-gray-400 mb-2 font-medium tracking-wide">
                      Step {quoteStep} of 3
                    </div>
                    <div className="w-full bg-gray-800 h-1 rounded-full overflow-hidden">
                      <div 
                        className="h-full transition-all duration-300"
                        style={{ width: `${(quoteStep / 3) * 100}%`, backgroundColor: COLORS.yellow }}
                      ></div>
                    </div>
                  </div>
                </div>

                <div className="px-6 md:px-8 pb-6 md:pb-8 bg-white pt-6">
                  <h4 className="text-[13px] font-bold text-gray-400 tracking-widest uppercase mb-4">What do you need help with?</h4>
                  
                  <div className="grid grid-cols-2 sm:grid-cols-3 gap-3 mb-8">
                    {quoteServices.map(service => {
                      const isSelected = selectedQuoteService === service.id;
                      return (
                        <button
                          key={service.id}
                          onClick={() => setSelectedQuoteService(service.id)}
                          className={`flex flex-col items-center justify-center py-5 px-2 border rounded-xl transition-all duration-200 bg-gray-50/50 hover:bg-gray-50`}
                          style={{
                             borderColor: isSelected ? service.color : '#F3F4F6',
                             color: isSelected ? '#111827' : '#6B7280',
                             boxShadow: isSelected ? `0 0 0 1px ${service.color}` : 'none'
                          }}
                        >
                          <service.icon size={28} className="mb-3 transition-colors" style={{ color: service.color }} />
                          <span className="text-[12px] font-bold tracking-wide text-center">{service.title}</span>
                        </button>
                      );
                    })}
                  </div>

                  <button 
                    className={`w-full py-4 font-bold rounded-xl flex items-center justify-center space-x-2 transition-all ${
                      selectedQuoteService ? 'hover:brightness-110 shadow-lg cursor-pointer' : 'opacity-80 cursor-not-allowed'
                    }`}
                    onClick={() => {
                      if (selectedQuoteService) setQuoteStep(2);
                    }}
                    disabled={!selectedQuoteService}
                    style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                  >
                    <span className="text-[15px]">NEXT</span>
                    <ArrowRight size={18} />
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div className="absolute bottom-6 lg:bottom-8 left-1/2 transform -translate-x-1/2 z-10 flex space-x-2">
          {heroImages.map((_, idx) => (
            <button 
              key={idx}
              onClick={() => setHeroSlide(idx)}
              className="w-3 h-3 rounded-full transition-all duration-300"
              style={{ 
                backgroundColor: heroSlide === idx ? COLORS.yellow : 'rgba(255,255,255,0.3)',
                transform: heroSlide === idx ? 'scale(1.3)' : 'scale(1)',
              }}
              aria-label={`Go to slide ${idx + 1}`}
            />
          ))}
        </div>
      </section>

      {/* ABOUT US SECTION */}
      <section id="about" className="pt-20 lg:pt-24 pb-24 bg-white overflow-hidden" ref={aboutCountersRef}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="lg:grid lg:grid-cols-2 lg:gap-24 items-center">
            
            <div className="relative mb-20 lg:mb-0">
              <div className="relative z-10 w-full md:w-[85%] md:ml-auto shadow-[0_20px_50px_rgba(0,0,0,0.15)] bg-white rounded-3xl">
                <div 
                  className="absolute -bottom-16 -left-20 w-64 h-64 z-[-1]" 
                  style={{ 
                    backgroundImage: `radial-gradient(${COLORS.yellow} 4px, transparent 4px)`,
                    backgroundSize: '24px 24px' 
                  }}
                ></div>
                <img 
                  src="keys-on-belt.jpeg" 
                  alt="Locksmith keys on belt" 
                  className="w-full h-[550px] object-cover rounded-3xl"
                />
                <div className="absolute -bottom-16 right-0 md:right-[-5%] bg-[#F4C430] p-5 shadow-xl w-[80%] md:w-[60%] border-l-4 border-[#0B1F3A] rounded-2xl z-20">
                  <p className="text-[#1F2937] font-bold text-sm md:text-base leading-snug mb-1.5">"Called LostKey after locking myself out at midnight — they arrived in 20 minutes and had the door open in no time."</p>
                  <p className="text-[#1F2937] font-semibold text-xs md:text-sm">— Satisfied Customer</p>
                </div>
              </div>
            </div>

            <div className="relative">
              <span 
                className="inline-block text-[11px] md:text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                WHAT CAN LOSTKEY DO
              </span>
              <h2 className="text-4xl md:text-5xl lg:text-[52px] font-bold leading-[1.1] text-[#1F2937] mb-6 tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Fast, Friendly and Reliable Locksmith Services
              </h2>
              <p className="text-gray-500 text-[17px] mb-10 leading-relaxed max-w-lg">
                From residential lockouts to commercial security systems, LostKey combines Kiwi reliability with modern locksmith technology. Our fully equipped mobile units carry the tools and parts to solve most jobs on the first visit.
              </p>

              <div className="flex flex-col xl:flex-row gap-10 items-start">
                <div className="flex-1 space-y-10">
                  <ul className="space-y-4">
                    {[
                      'Fully licensed & trained technicians',
                      'Upfront, transparent pricing',
                      'Rapid 20-40 min response across Auckland',
                      'Genuine parts and modern lock systems'
                    ].map((item, i) => (
                      <li key={i} className="flex items-start space-x-3">
                        <div className="mt-1 bg-[#0B1F3A] rounded-full flex items-center justify-center w-[22px] h-[22px] flex-shrink-0">
                           <Check size={14} strokeWidth={4} className="text-white" />
                        </div>
                        <span className="text-[13px] font-extrabold text-gray-800 leading-tight uppercase tracking-wide">{item}</span>
                      </li>
                    ))}
                  </ul>

                  <div className="inline-flex items-center p-2 pr-10 border border-gray-200 rounded-full hover:shadow-xl hover:border-gray-300 transition-all bg-white cursor-pointer group">
                     <a href="about-us.php" className="flex items-center">
                       <div className="w-16 h-16 rounded-full bg-[#F4C430] flex items-center justify-center mr-5 group-hover:scale-105 transition-transform">
                         <Phone size={24} className="text-[#1F2937]" />
                       </div>
                       <div className="flex flex-col">
                         <span className="text-xs font-bold tracking-widest text-gray-500 uppercase mb-0.5">Learn More</span>
                         <span className="text-[22px] font-bold text-[#1F2937] tracking-tight leading-none whitespace-nowrap">Read About Us &rarr;</span>
                       </div>
                     </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* SEE LOST KEY IN ACTION */}
      <section id="in-action" className="py-20 bg-[#F8FAFC]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center">
          <div className="flex flex-col items-center text-center mb-12">
            <span 
              className="inline-flex items-center text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Play size={14} className="mr-2 fill-current" />
              REAL JOBS. REAL RESULTS.
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4">
              See Lost Key <span style={{ color: COLORS.yellow }}>In Action</span>
            </h2>
            <p className="text-gray-500 max-w-2xl text-lg">
              Watch how our expert locksmiths handle real situations with speed, precision and care.
            </p>
          </div>

          <div className="relative w-full max-w-5xl flex items-center justify-center mb-16">
            <button 
              onClick={() => setActionSlide(prev => prev === 0 ? actionVideos.length - 1 : prev - 1)}
              className="absolute left-2 md:left-[-40px] z-30 bg-[#F4C430] text-[#0B1F3A] w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-lg hover:scale-105 transition-all"
            >
              <ChevronLeft size={24} />
            </button>

            <div 
              ref={videoSliderRef}
              className="flex gap-4 lg:gap-8 justify-start lg:justify-center items-center w-full overflow-x-auto lg:overflow-x-visible snap-x snap-mandatory px-4 lg:px-0 pb-6 lg:pb-0"
            >
              {actionVideos.map((video, idx) => {
                const isCenter = idx === actionSlide;
                return (
                  <div 
                    key={video.id}
                    className={`relative rounded-3xl overflow-hidden transition-all duration-500 ease-in-out cursor-pointer shadow-xl snap-center flex-shrink-0 w-[85vw] sm:w-[320px] lg:w-[260px] aspect-[3/4] ${
                      isCenter ? 'lg:w-[320px] lg:z-20 lg:transform lg:scale-105 lg:shadow-2xl' : 'lg:z-10 lg:opacity-75 lg:hover:opacity-100'
                    }`}
                    onClick={() => setActionSlide(idx)}
                  >
                    <img src={video.image} alt={video.title} className="absolute inset-0 w-full h-full object-cover" />
                    <div className="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
                    <div className="absolute top-4 left-4 bg-black/70 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-lg flex items-center">
                      <Play size={12} className="mr-1.5 fill-current" />
                      {video.duration}
                    </div>
                    <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-[#F4C430] rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform">
                      <Play size={24} className="fill-[#1F2937] text-[#1F2937] ml-1" />
                    </div>
                    <div className="absolute bottom-6 left-6 right-6 flex items-end">
                      <div className={`w-10 h-10 rounded-full bg-[#F4C430] flex items-center justify-center flex-shrink-0 mr-4 ${isCenter ? 'w-12 h-12' : ''}`}>
                        <video.icon size={isCenter ? 24 : 20} className="text-[#1F2937]" />
                      </div>
                      <div className="flex-1 pb-1">
                        <h4 className={`text-white font-bold leading-tight mb-1 ${isCenter ? 'text-xl' : 'text-lg'}`}>
                          {video.title}
                        </h4>
                        <div className="flex items-center text-gray-300 text-sm">
                          <MapPin size={12} className="mr-1" />
                          {video.location}
                        </div>
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>

            <button 
              onClick={() => setActionSlide(prev => (prev + 1) % actionVideos.length)}
              className="absolute right-2 md:right-[-40px] z-30 bg-[#F4C430] text-[#0B1F3A] w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-lg hover:scale-105 transition-all"
            >
              <ChevronRight size={24} />
            </button>
          </div>
        </div>
      </section>

      {/* CONTACT FORM SECTION */}
      <section id="contact" className="py-16 bg-white border-t border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <div className="flex flex-col justify-center pr-0 lg:pr-12">
              <span 
                className="inline-block text-sm font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-6 self-start"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                GET IN TOUCH!
              </span>
              <h2 className="text-4xl md:text-[40px] font-bold mb-6 leading-tight text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Have an Emergency Lockout?<br/>Contact Us!
              </h2>
              <p className="text-gray-500 text-base md:text-lg mb-10 max-w-xl leading-relaxed">
                Our team is on call 24/7 for lockouts, lock repairs, and security upgrades anywhere in Auckland. Reach out and we'll have someone on the way in minutes.
              </p>

              <ul className="space-y-5 mb-10">
                <li className="flex items-center space-x-4">
                  <MapPin size={20} className="text-[#1F2937] flex-shrink-0" />
                  <span className="text-base md:text-lg font-bold text-[#1F2937]">12 Queen Street, Auckland 1010</span>
                </li>
                <li className="flex items-center space-x-4">
                  <Phone size={20} className="text-[#1F2937] flex-shrink-0" />
                  <span className="text-base md:text-lg font-bold text-[#1F2937]">0800 828 345</span>
                </li>
                <li className="flex items-center space-x-4">
                  <Mail size={20} className="text-[#1F2937] flex-shrink-0" />
                  <span className="text-base md:text-lg font-bold text-[#1F2937]">hello@lostkey.co.nz</span>
                </li>
              </ul>
            </div>

            <div className="bg-[#0B1F3A] p-10 md:p-14 lg:p-16 relative w-full flex flex-col justify-center rounded-3xl overflow-hidden shadow-2xl">
               <h3 className="text-3xl font-bold text-white mb-10" style={{ fontFamily: "'Inter Tight', sans-serif" }}>Contact Form</h3>
               <form className="space-y-8 relative z-10 w-full max-w-lg">
                  <div>
                    <input type="text" placeholder="Name" className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" />
                  </div>
                  <div className="flex border-b border-[#132B4F] focus-within:border-[#F4C430] transition-colors items-center">
                    <div className="flex items-center pr-3 py-3 text-gray-400 text-xs font-bold">
                      <span className="mr-2 text-white">🇳🇿 +64</span>
                    </div>
                    <input type="tel" placeholder="Phone Number" className="w-full bg-transparent text-white placeholder-gray-500 py-3 text-sm pl-2 focus:outline-none" />
                  </div>
                  <div>
                    <textarea placeholder="Write Your Message Here" rows={3} className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors resize-none"></textarea>
                  </div>
                  <div className="pt-4">
                    <button type="button" className="px-8 py-3.5 font-bold tracking-widest text-xs uppercase transition-all hover:brightness-110 shadow-lg rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                      SEND MESSAGE
                    </button>
                  </div>
               </form>
               <div className="absolute bottom-0 right-0 w-40 h-28 opacity-50" style={{ backgroundImage: `radial-gradient(${COLORS.yellow} 3px, transparent 3px)`, backgroundSize: '16px 16px' }}></div>
            </div>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="home" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<HomePageContent />);
</script>

<?php
include 'footer.php';
?>
