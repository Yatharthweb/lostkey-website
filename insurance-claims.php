<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost or Stolen Car Keys - Insurance Claims | Lostkey</title>
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
, DollarSign , CheckCircle2 , ArrowRight , Users } from 'lucide-react';

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

function InsuranceHtmlPage() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [formData, setFormData] = useState({
    name: '', email: '', phone: '', registration: '', make: '', 
    yearModel: '', hasKeys: 'No keys', smartKey: 'Yes', 
    insuranceCompany: '', claimNumber: '', message: ''
  });
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();
    setSubmitted(true);
    // In a real app, you would send the formData to your backend here
  };

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
      <window.HeaderComponent currentPage="insurance-claims" />

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/office-lock.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Insurance Claims</span>
          </div>

          <div className="max-w-4xl">
            <span className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              <Shield size={14} className="mr-2" />
              COMPREHENSIVE COVERAGE
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl font-black leading-[1.1] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Lost or Stolen Car Keys &ndash; Insurance Claims
            </h1>
            <p className="text-gray-300 text-lg md:text-xl leading-relaxed">
              Have Comprehensive Car Insurance? Your Lost Key May Be Covered. Did you lose your vehicle's key, and are you unwilling to pay the actual money for a new one? If you own a comprehensive car insurance policy, you might already qualify for the reimbursement of key replacement in the event you lose your keys, but many car owners do not know this fact until they inquire. Lostkey works directly with various insurers across New Zealand that would assist you in getting the required reimbursement for a new car key with the least effort possible.
            </p>
          </div>
        </div>
      </section>

      {/* MAIN CONTENT */}
      <section className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 text-gray-800 leading-relaxed">

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How the Process Works
            </h2>
            <p className="text-base text-gray-700">
              Once you have communicated with your insurance company and received a claim acknowledgment number from them, we will be able to liaise with them directly and process the necessary documentation on your behalf. Depending on your insurance policy, your replacement key expenses may either be completely financed by your insurance company or require you to just cover part of the expenses while you take care of the rest.
            </p>
            <p className="text-base text-gray-700 pt-2">
              To get started, we'll need your claim number and your insurance company's name. From there, our team verifies the details with your insurer and arranges your car key replacement Auckland-wide, cutting and programming the new key on-site once everything is confirmed.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Insurers We Commonly Work With
            </h3>
            <p className="text-base text-gray-700">
              We regularly coordinate claims with major providers, including <strong>AA Insurance, AMI, AMP, ASB, BNZ, Club Auto, Cove, Protecta, State, Tower, Vero, and Westpac</strong>. If your insurer isn't listed here, get in touch anyway &mdash; we can usually still process the claim.
            </p>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What We'll Need From You
            </h3>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>Your name, phone number, and email</li>
              <li>Vehicle registration number</li>
              <li>Make, model, and year of your car</li>
              <li>Whether you currently have a working key, a faulty one, or none at all</li>
              <li>Whether your car uses a smart key or push-button start system</li>
              <li>Your insurance company name and approved claim number</li>
            </ul>
          </div>

          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h3 className="text-xl md:text-2xl font-bold text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Go Through LostKey?
            </h3>
            <p className="text-base text-gray-700">
              Filing an insurance claim and finding a locksmith are usually two separate headaches. We handle both together, so you're not stuck explaining your car's key system to an insurer, or explaining your insurance details to a locksmith. One call, and we manage the coordination between the two.
            </p>
            <p className="text-base text-gray-700 pt-2">
              We also carry the cutting and programming equipment for most makes and models in our vans, so once your claim is approved, we can usually complete the job the same day.
            </p>
          </div>

          <div className="bg-gray-50 p-8 rounded-3xl border border-gray-200 mt-12">
            <div className="text-center mb-8">
              <h2 className="text-3xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Get Your Claim Started
              </h2>
              <p className="text-gray-600 text-lg">
                Lost your key and already have a claim number from your insurer? Fill in the form below with your vehicle and insurance details, and our team will be in touch to arrange your replacement key.
              </p>
            </div>

            {submitted ? (
              <div className="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl p-8 text-center space-y-3">
                <CheckCircle2 size={48} className="text-emerald-500 mx-auto" />
                <h3 className="text-2xl font-bold">Thank You!</h3>
                <p className="text-emerald-700">Your details have been received successfully. Our team will verify with your insurer and get back to you shortly.</p>
              </div>
            ) : (
              <form onSubmit={handleSubmit} className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Name*</label>
                    <input type="text" required placeholder="e.g. John Smith" value={formData.name} onChange={(e) => setFormData({ ...formData, name: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Email*</label>
                    <input type="email" required placeholder="e.g. john@example.co.nz" value={formData.email} onChange={(e) => setFormData({ ...formData, email: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Phone*</label>
                    <input type="tel" required placeholder="e.g. 021 123 4567" value={formData.phone} onChange={(e) => setFormData({ ...formData, phone: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Registration Number*</label>
                    <input type="text" required placeholder="e.g. ABC123" value={formData.registration} onChange={(e) => setFormData({ ...formData, registration: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Make of Vehicle*</label>
                    <input type="text" required placeholder="e.g. Toyota" value={formData.make} onChange={(e) => setFormData({ ...formData, make: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Year and Model*</label>
                    <input type="text" required placeholder="e.g. 2018 Corolla" value={formData.yearModel} onChange={(e) => setFormData({ ...formData, yearModel: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                </div>

                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Do you currently have keys?</label>
                    <select value={formData.hasKeys} onChange={(e) => setFormData({ ...formData, hasKeys: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium appearance-none">
                      <option>Working key</option>
                      <option>Faulty key</option>
                      <option>No keys</option>
                    </select>
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Does your car use a smart key system?</label>
                    <select value={formData.smartKey} onChange={(e) => setFormData({ ...formData, smartKey: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium appearance-none">
                      <option>Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                </div>
                
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Insurance Company Name*</label>
                    <input type="text" required placeholder="e.g. AA Insurance" value={formData.insuranceCompany} onChange={(e) => setFormData({ ...formData, insuranceCompany: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Approved Claim Number*</label>
                    <input type="text" required placeholder="e.g. CLM-123456" value={formData.claimNumber} onChange={(e) => setFormData({ ...formData, claimNumber: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium" />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Message*</label>
                  <textarea required placeholder="Any other details we should know?" rows="4" value={formData.message} onChange={(e) => setFormData({ ...formData, message: e.target.value })} className="w-full px-4 py-3.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] text-gray-900 font-medium resize-none"></textarea>
                </div>

                <div className="pt-2">
                  <button type="submit" className="w-full flex items-center justify-center px-8 py-4 bg-[#F4C430] text-[#0B1F3A] font-bold text-lg rounded-xl hover:bg-[#E5B520] transition-colors shadow-md group">
                    Send Now
                    <ArrowRight size={20} className="ml-2 group-hover:translate-x-1 transition-transform" strokeWidth={2.5} />
                  </button>
                </div>
              </form>
            )}
            
            <div className="mt-8 pt-8 border-t border-gray-200 text-center">
              <p className="text-gray-500 text-sm">
                Don't have a claim number yet? Contact your insurer first to confirm your cover, then come back and fill in this form &mdash; or call us on <a href="tel:0800828345" className="font-bold text-[#0B1F3A] hover:text-[#F4C430]">0800 828 345</a> and we'll point you in the right direction.
              </p>
            </div>
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
    root.render(<InsuranceHtmlPage />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>
<?php include 'footer.php'; ?>
