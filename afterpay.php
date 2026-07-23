<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afterpay - Pay Later Locksmith Auckland | Lostkey</title>
    <meta name="description" content="Privacy Policy for Lostkey Locksmith Auckland. Learn how we collect, protect, and manage your personal details, payment info, cookies, and privacy rights.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="importmap">
      {
        "imports": {
          "react": "https://esm.sh/react@18.2.0",
          "react-dom/client": "https://esm.sh/react-dom@18.2.0/client",
          "lucide-react": "https://esm.sh/lucide-react@0.292.0"
        }
      }
    </script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Inter+Tight:wght@400;500;600;700;800;900&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Syne:wght@700;800&display=swap');
      body { margin: 0; padding: 0; }
      @keyframes ring-shake {
        0% { transform: rotate(0deg); }
        15% { transform: rotate(15deg); }
        30% { transform: rotate(-10deg); }
        45% { transform: rotate(5deg); }
        60% { transform: rotate(-5deg); }
        75% { transform: rotate(2deg); }
        100% { transform: rotate(0deg); }
      }
      .hover-ring:hover .phone-icon {
        animation: ring-shake 0.5s ease-in-out infinite;
      }
    
      /* Hide scrollbar for custom-scrollbar */
      .custom-scrollbar::-webkit-scrollbar {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }
      .custom-scrollbar {
        -ms-overflow-style: none !important;  /* IE and Edge */
        scrollbar-width: none !important;  /* Firefox */
      }
    </style>
</head>
<body>
    <div id="root"></div>
    <script type="text/babel" data-type="module">
import React, { useState, useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Menu, X, Phone, Lock, Home, Car, 
  ShieldCheck, ChevronRight, ChevronDown,
  Key, Clock, MapPin, Wrench,
  Shield, Mail, Facebook, Twitter, Youtube,
  Zap, BadgeCheck, Settings, KeyRound,
  Calendar, ArrowUp, FileText, AlertTriangle, Building, PenTool, DoorClosed, Unlock, Power, Layers
, DollarSign , Users } from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const serviceAreas = [
  "Auckland Central",
  "North Shore",
  "West Auckland",
  "South Auckland",
  "East Auckland",
  "Rodney",
  "Franklin",
  "Orewa & Hibiscus Coast"
];

const MAIN_SERVICES = [
  { name: 'Emergency Locksmith Auckland', icon: AlertTriangle, url: 'emergency-locksmith-auckland.html' },
  { name: '24 Hour Locksmith Auckland', icon: Clock, url: '24-hour-locksmith-auckland.html' },
  { name: 'Residential Locksmith Auckland', icon: Home, url: 'residential-locksmith-auckland.html' },
  { name: 'Commercial Locksmith Auckland', icon: Building, url: 'index.html#contact' },
  { name: 'Automotive Locksmith Auckland', icon: Car, url: 'automotive-locksmith-auckland.html' },
  { name: 'Car Key Replacement Auckland', icon: Key, url: 'index.html#contact' },
  { name: 'Lock Rekeying Auckland', icon: Wrench, url: 'index.html#contact' },
  { name: 'Lock Repair Auckland', icon: PenTool, url: 'index.html#contact' },
  { name: 'Lock Replacement Auckland', icon: Shield, url: 'index.html#contact' },
  { name: 'House Lockout Locksmith Auckland', icon: DoorClosed, url: 'index.html#contact' },
  { name: 'Car Lockout Locksmith Auckland', icon: Unlock, url: 'index.html#contact' },
  { name: 'Ignition Repair Auckland', icon: Settings, url: 'index.html#contact' },
  { name: 'Ignition Replacement Auckland', icon: Power, url: 'index.html#contact' },
  { name: 'Master Key Systems Auckland', icon: Layers, url: 'index.html#contact' },
  { name: 'Restricted Key Systems Auckland', icon: Lock, url: 'index.html#contact' },
];

function AfterpayHtmlPage() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false);
  
  const [mobileCompanyOpen, setMobileCompanyOpen] = useState(false);
  const [mobileMoreOpen, setMobileMoreOpen] = useState(false);
  const [showScrollTop, setShowScrollTop] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
      setShowScrollTop(window.scrollY > 400);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      
      {/* UNIFIED STICKY HEADER */}
      <window.HeaderComponent currentPage="afterpay" />

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/key-cutting.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Afterpay</span>
          </div>

          <div className="max-w-4xl">
            <span className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              <DollarSign size={14} className="mr-2" />
              BUY NOW, PAY LATER
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl font-black leading-[1.1] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Afterpay – Pay Later for Your Locksmith Service
            </h1>
            <p className="text-gray-300 text-lg md:text-xl leading-relaxed">
              Need a locksmith in Auckland, a call-out, but don't want to pay the full amount upfront? Lostkey now accepts Afterpay on our services, so you can get the help you need today and pay it off over time. Along with Afterpay, we also accept Visa, Mastercard, Amex, and debit cards.
            </p>
          </div>
        </div>
      </section>

      {/* MAIN CONTENT */}
      <section className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 text-gray-800 leading-relaxed">

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              We Now Accept Afterpay
            </h2>
            <p className="text-base text-gray-700">
              Afterpay lets you split the cost of your locksmith job into 4 equal payments, made every two weeks. Unlike a lay-by, you don't have to wait to get the work done &ndash; your lock gets fixed, your car gets a new key, or your door gets opened, and you pay it off afterwards.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What Is Afterpay?
            </h3>
            <p className="text-base text-gray-700">
              Afterpay is a "buy now, pay later" service. Instead of paying the full cost in one go, your bill is split into four payments, spaced two weeks apart. There's no interest charged, as long as your payments go through on time.
            </p>
            <p className="text-base text-gray-700 pt-2">
              This means an emergency locksmith Auckland call-out, a car key replacement, or a full lock change doesn't have to be paid for all at once. You get the job done straight away and manage the cost across a few weeks instead.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How Does Afterpay Work With Lostkey?
            </h3>
            <ul className="space-y-4 text-base text-gray-700 list-decimal pl-5">
              <li><strong>Call us or book online.</strong> Tell us what's happened and where you are, whether it's a lockout, a lost car key, or a lock repair.</li>
              <li><strong>Let us know you'd like to use Afterpay.</strong> Our team will confirm this is available for your job before we start.</li>
              <li><strong>Complete your job as normal.</strong> Our locksmith comes to you, fixes the problem, and finishes the work the same visit, just like any other callout.</li>
              <li><strong>Pay in 4 instalments.</strong> Afterpay splits the total cost into four equal payments, taken automatically every two weeks from your linked card.</li>
            </ul>
            <p className="text-base text-gray-700 pt-2">
              If you're a new Afterpay user, or your order is a larger job, you may need to pay the first instalment upfront at the time of booking. This is standard across all Afterpay purchases, not something specific to Lostkey.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Use Afterpay for a Locksmith Callout?
            </h3>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>No interest, as long as payments are made on time</li>
              <li>Instant approval, with no credit check needed</li>
              <li>Spreads the cost, so an unexpected lockout or car key issue doesn't hit your budget in one go</li>
              <li>Same fast service, whether you pay upfront or through Afterpay</li>
            </ul>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Is There a Fee for Using Afterpay?
            </h3>
            <p className="text-base text-gray-700">
              Afterpay doesn't charge a fee for using the service as intended. Late fees only apply if a scheduled payment doesn't go through and isn't paid another way after being notified. Full details on late fees and payment terms are available directly through Afterpay's terms of service.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Is Afterpay Safe to Use?
            </h3>
            <p className="text-base text-gray-700">
              Yes. Afterpay is a PCI DSS Level 1 certified payment provider, which is the highest security standard in the payment industry. Your card and personal details are handled directly by Afterpay, not stored by us.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Questions About Your Afterpay Payment?
            </h3>
            <p className="text-base text-gray-700">
              For anything specific to your Afterpay account, such as payment schedules, declined payments, or account limits, Afterpay's own support team can help directly through the Afterpay Help Centre.
            </p>
          </div>
          
          <div className="bg-gray-50 p-8 rounded-2xl border border-gray-200">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A] mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Book Your Locksmith Now, Pay Later with Afterpay
            </h2>
            <p className="text-base text-gray-700 mb-6">
              Whether it's a house lockout, a car key replacement, or an emergency locksmith in Auckland callout, you don't need to pay the full cost upfront. Call us on <strong>0800 828 345</strong> and ask about Afterpay when you book.
            </p>
            <a href="tel:0800828345" className="inline-flex items-center px-8 py-4 bg-[#F4C430] text-[#0B1F3A] font-bold text-lg rounded-full hover:bg-[#E5B520] transition-colors shadow-lg">
              <Phone size={20} className="mr-2" strokeWidth={2.5} />
              0800 828 345
            </a>
          </div>

        </div>
      </section>

      {/* FOOTER */}
      <window.FooterComponent />

      {/* MOBILE STICKY CTA */}
      <div className="md:hidden fixed bottom-0 left-0 w-full p-4 z-50 shadow-[0_-10px_30px_rgba(0,0,0,0.3)] flex justify-between items-center" style={{ backgroundColor: COLORS.black, borderTop: `2px solid ${COLORS.yellow}` }}>
        <div className="flex flex-col text-white px-2">
          <span className="text-[10px] font-black uppercase tracking-widest mb-0.5" style={{ color: COLORS.yellow }}>Locked Out?</span>
          <span className="font-bold text-sm">24/7 Emergency Service</span>
        </div>
        <a href="tel:0800828345" className="flex items-center justify-center px-6 py-3.5 font-bold rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
          <Phone size={18} className="mr-2" /> Call Now
        </a>
      </div>

      {/* SCROLL TO TOP */}
      <button onClick={scrollToTop} className={`fixed bottom-24 md:bottom-8 right-6 md:right-8 z-50 p-4 rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.2)] transition-all duration-300 ${showScrollTop ? 'opacity-100' : 'opacity-0 pointer-events-none'}`} style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
        <ArrowUp size={24} strokeWidth={2.5} />
      </button>

    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<AfterpayHtmlPage />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>
<?php include 'footer.php'; ?>
