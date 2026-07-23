<?php
$pageTitle = "Contact Lostkey Locksmith Auckland | Need a Locksmith? Get in Touch Now";
$pageDescription = "Contact Lostkey Locksmith in Auckland. Emergency locksmith services on call 24/7 across Auckland. Call 0800 828 345 for fast 20-40 min arrival.";
$currentPage = "home";
include 'header.php';
?>

<script type="text/babel" data-type="module">

import React, { useState, useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Menu, X, Phone, Lock, Home, Car, 
  ShieldCheck, ChevronRight, ChevronLeft, ChevronDown,
  Key, Clock, Award, MapPin, Wrench,
  Star, Quote, CheckCircle2,
  ArrowRight, Shield, Mail, Facebook, Twitter, Youtube,
  Zap, BadgeCheck, DollarSign, Settings, Smartphone, KeyRound,
  Users, Check, User, Calendar, Play, ArrowUp, FileText,
  AlertTriangle, Building, PenTool, DoorClosed, Unlock, Power, Layers,
  CreditCard, Send
} from 'lucide-react';

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

function ContactUsHtmlPage() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false);
  const [mobileAreasOpen, setMobileAreasOpen] = useState(false);
  const [mobileCompanyOpen, setMobileCompanyOpen] = useState(false);
  const [showScrollTop, setShowScrollTop] = useState(false);
  const [submitted, setSubmitted] = useState(false);
  const [formData, setFormData] = useState({ name: '', email: '', phone: '', message: '' });

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

  const handleSubmit = (e) => {
    e.preventDefault();
    if (formData.name && formData.email && formData.phone && formData.message) {
      setSubmitted(true);
    }
  };

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      
      {/* TOP INFO BAR */}
      <window.HeaderComponent currentPage="home" />

      {/* HERO SECTION */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Contact</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Phone size={14} className="mr-2 fill-current" />
              24/7 LOCKSMITH SERVICE AUCKLAND
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[64px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact <span style={{ color: COLORS.yellow }}>Lostkey Locksmith Auckland</span>
            </h1>

            <h2 className="text-2xl sm:text-3xl font-bold text-gray-200 mb-6 tracking-tight">
              Need a Locksmith? Get in Touch Now.
            </h2>

            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl font-medium mb-8">
              Is the lockout situation puzzling you? Did you lose your keys? Do you require repairing a lock? Just reach us on <strong className="text-white">0800 828 345</strong>. We offer emergency locksmith services throughout Auckland and are on call 24/7 regardless of the time of the day.
            </p>

            <div className="pt-2">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-4 border border-white rounded-full px-2 py-2 pr-10 hover:border-[#F4C430] transition-all group bg-[#0B1F3A]/40"
              >
                <div className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0" style={{ backgroundColor: COLORS.yellow }}>
                  <Phone size={24} style={{ color: COLORS.black, fill: COLORS.black }} />
                </div>
                <div className="flex flex-col">
                  <span className="text-[11px] uppercase tracking-wider text-gray-200 font-bold mb-0.5">Call Now 24/7</span>
                  <span className="text-white font-black text-2xl md:text-3xl tracking-wide leading-none whitespace-nowrap">0800 828 345</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* ═══════════════ PARTNERS LOGO SCROLLER ═══════════════ */}
      <section className="bg-white py-10 border-b border-gray-100 overflow-hidden relative z-10">
        <div className="relative w-full overflow-hidden flex items-center">
          {/* Gradient Masks for smooth fading edges */}
          <div className="absolute inset-y-0 left-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
          <div className="absolute inset-y-0 right-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
          
          <div className="flex animate-marquee whitespace-nowrap items-center">
            {/* Set 1 */}
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain transition-all duration-300" />
            </div>
            {/* Set 2 */}
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain transition-all duration-300" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR DETAILS SECTION */}
      <section className="py-20 bg-white relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              CONTACT INFORMATION
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Our Details
            </h2>
            <p className="text-gray-500 text-lg">Here is how you can reach our workshop, office, or mobile locksmith units anytime.</p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430]"><Phone size={26} /></div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Phone</h3>
                <p className="text-gray-500 text-sm mb-4">Direct dispatch line for all Auckland callouts.</p>
                <a href="tel:0800828345" className="text-2xl font-black text-[#0B1F3A] hover:text-[#F4C430] transition-colors block">0800 828 345</a>
              </div>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430]"><Mail size={26} /></div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Email</h3>
                <p className="text-gray-500 text-sm mb-4">For general inquiries, quotes & invoicing.</p>
                <a href="mailto:info@lostkey.co.nz" className="text-lg font-bold text-[#0B1F3A] hover:text-[#F4C430] transition-colors block">info@lostkey.co.nz</a>
                <a href="mailto:hello@lostkey.co.nz" className="text-sm font-semibold text-gray-600 hover:text-[#F4C430] transition-colors block mt-1">hello@lostkey.co.nz</a>
              </div>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430]"><MapPin size={26} /></div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Address</h3>
                <p className="text-gray-500 text-sm mb-4">Workshop & central office location.</p>
                <p className="text-lg font-bold text-[#0B1F3A]">12 Queen Street, Auckland 1010</p>
              </div>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430]"><Building size={26} /></div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Workshop Hours</h3>
                <p className="text-base font-bold text-[#0B1F3A]">Monday to Friday: <span className="text-emerald-600 font-extrabold">Open 24 hours</span></p>
              </div>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430]"><Wrench size={26} /></div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">On-Road Service</h3>
                <p className="text-base font-bold text-[#0B1F3A]">Monday to Friday: 8:00am – 5:00pm</p>
              </div>
            </div>

            <div className="bg-[#0B1F3A] text-white rounded-3xl p-8 shadow-xl flex flex-col justify-between">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#F4C430] flex items-center justify-center mb-6 text-[#0B1F3A]"><Clock size={26} /></div>
                <h3 className="text-xl font-bold text-white mb-2">After Hours</h3>
                <p className="text-gray-300 text-sm mb-4">24/7 emergency locksmith service available right across Auckland.</p>
                <a href="tel:0800828345" className="text-2xl font-black text-[#F4C430] hover:underline block">0800 828 345</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* MAP */}
      <section className="bg-gray-100 py-12 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-white rounded-3xl overflow-hidden shadow-xl border border-gray-200">
            <iframe 
              title="Lostkey Auckland Location"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.5188849495786!2d174.7645062!3d-36.8437943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb4d402283%3A0xe54d241fb7bf7dbb!2sQueen%20St%2C%20Auckland%20CBD%2C%20Auckland!5e0!3m2!1sen!2snz!4v1700000000000!5m2!1sen!2snz" 
              width="100%" 
              height="450" 
              style={{ border: 0 }} 
              allowFullScreen="" 
              loading="lazy" 
              referrerPolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>

      {/* HOW TO REACH US TEXT SECTION */}
      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-14 text-white space-y-6 shadow-2xl relative overflow-hidden">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-2" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              24/7 MOBILE & WORKSHOP COVERAGE
            </span>
            <h2 className="text-3xl md:text-4xl lg:text-5xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How to Reach Us
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed font-normal">
              Whether it is for replacing locks, rekeying locks or for new house keys, our workshop team is ready to help you during business hours. For all urgent requirements, we have mobile locksmiths across Auckland who are ready to help you round the clock in any sort of urgent situation. Just call us and we will send our locksmith to your site within 20 to 40 minutes.
            </p>

            <div className="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 border-t border-[#132B4F]">
              <a href="index.html#residential" className="bg-white/10 hover:bg-[#F4C430] hover:text-[#0B1F3A] transition-all p-4 rounded-2xl text-center font-bold text-sm">
                Residential →
              </a>
              <a href="index.html#commercial" className="bg-white/10 hover:bg-[#F4C430] hover:text-[#0B1F3A] transition-all p-4 rounded-2xl text-center font-bold text-sm">
                Commercial →
              </a>
              <a href="index.html#automotive" className="bg-white/10 hover:bg-[#F4C430] hover:text-[#0B1F3A] transition-all p-4 rounded-2xl text-center font-bold text-sm">
                Automotive →
              </a>
              <a href="index.html#reviews" className="bg-white/10 hover:bg-[#F4C430] hover:text-[#0B1F3A] transition-all p-4 rounded-2xl text-center font-bold text-sm">
                Testimonials →
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* SEND US A MESSAGE FORM */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-white rounded-3xl p-8 md:p-12 border border-gray-200 shadow-xl">
            <div className="text-center mb-10">
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-3" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                ONLINE INQUIRY
              </span>
              <h2 className="text-3xl md:text-4xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Send Us a Message
              </h2>
              <p className="text-gray-500 text-sm mt-2">Have a question or need a quote for planned work? Fill out the form below.</p>
            </div>

            {submitted ? (
              <div className="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl p-8 text-center space-y-3">
                <CheckCircle2 size={48} className="text-emerald-500 mx-auto" />
                <h3 className="text-2xl font-bold">Thank You!</h3>
                <p className="text-emerald-700">Your message has been sent successfully. One of our Auckland locksmith team members will get back to you shortly.</p>
              </div>
            ) : (
              <form onSubmit={handleSubmit} className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Name*</label>
                    <input 
                      type="text" 
                      required
                      placeholder="e.g. John Smith"
                      value={formData.name}
                      onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                      className="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] focus:bg-white text-gray-900 font-medium"
                    />
                  </div>
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Email*</label>
                    <input 
                      type="email" 
                      required
                      placeholder="e.g. john@example.co.nz"
                      value={formData.email}
                      onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                      className="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] focus:bg-white text-gray-900 font-medium"
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Phone*</label>
                  <input 
                    type="tel" 
                    required
                    placeholder="e.g. 021 123 4567 or 0800 XXX XXX"
                    value={formData.phone}
                    onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                    className="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] focus:bg-white text-gray-900 font-medium"
                  />
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider text-gray-700 mb-2">Your Message*</label>
                  <textarea 
                    rows="5"
                    required
                    placeholder="Tell us what lock or key service you need help with..."
                    value={formData.message}
                    onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                    className="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F4C430] focus:bg-white text-gray-900 font-medium"
                  ></textarea>
                </div>

                <button 
                  type="submit"
                  className="w-full py-4 rounded-xl font-black text-base uppercase tracking-wider transition-all hover:brightness-110 shadow-lg flex items-center justify-center space-x-2"
                  style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                >
                  <Send size={18} />
                  <span>Send Message</span>
                </button>
              </form>
            )}
          </div>
        </div>
      </section>

      {/* OUR GUARANTEE SECTION */}
      <section className="py-16 bg-white border-t border-gray-200">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-amber-50 rounded-3xl p-8 md:p-12 border border-amber-200 text-[#1F2937] space-y-4 shadow-sm">
            <div className="flex items-center space-x-3 text-[#0B1F3A]">
              <ShieldCheck size={32} className="text-[#F4C430]" />
              <h3 className="text-2xl font-black">Our Guarantee</h3>
            </div>
            <p className="text-gray-700 text-base md:text-lg leading-relaxed">
              Every job comes with our workmanship guarantee. If a lock or key we've fitted doesn't work as it should, we'll come back and make it right at no extra cost to you. We also offer Afterpay on our services, so an unexpected callout doesn't have to be paid in full upfront.
            </p>
          </div>
        </div>
      </section>



      {/* PARTNERS LOGO SCROLLER */}
      <section className="bg-white py-10 border-b border-gray-100 overflow-hidden relative z-10">
        <div className="relative w-full overflow-hidden flex items-center">
          <div className="absolute inset-y-0 left-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
          <div className="absolute inset-y-0 right-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
          
          <div className="flex animate-marquee whitespace-nowrap items-center">
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain" />
            </div>
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain" />
            </div>
          </div>
        </div>
      </section>

      {/* FOOTER */}
      <window.FooterComponent currentPage="home" />

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

      {/* DESKTOP FLOATING BUTTONS */}
      <div className="hidden md:flex fixed top-1/2 right-0 -translate-y-1/2 flex-col z-50 rounded-l-lg overflow-hidden shadow-[0_0_20px_rgba(0,0,0,0.2)]">
        <a href="tel:0800828345" className="bg-[#0B1F3A] text-white hover:text-[#1F2937] hover:bg-white transition-colors py-6 px-2 flex flex-col items-center space-y-3 cursor-pointer group">
          <Phone size={20} className="group-hover:scale-110 transition-transform" />
          <span className="font-bold text-[13px] tracking-widest uppercase" style={{ writingMode: 'vertical-rl', transform: 'rotate(180deg)' }}>Call Now</span>
        </a>
        <a href="contact-us.html" className="bg-[#F4C430] text-[#0B1F3A] hover:bg-white transition-colors py-6 px-2 flex flex-col items-center space-y-3 cursor-pointer border-t border-[#132B4F] group">
          <Calendar size={20} className="group-hover:scale-110 transition-transform" />
          <span className="font-bold text-[13px] tracking-widest uppercase" style={{ writingMode: 'vertical-rl', transform: 'rotate(180deg)' }}>Book Appointment</span>
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
root.render(<ContactUsHtmlPage />);
    
</script>

<?php
include 'footer.php';
?>

