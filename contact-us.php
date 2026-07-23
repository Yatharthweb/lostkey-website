<?php
$pageTitle = "Contact Lostkey Locksmith Auckland | Need a Locksmith? Get in Touch Now";
$pageDescription = "Contact Lostkey Locksmith in Auckland. Emergency locksmith services on call 24/7 across Auckland. Call 0800 828 345 for fast 20-40 min arrival.";
$currentPage = "contact";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Clock, Calendar, Check, ArrowRight, AlertTriangle, Building, CreditCard,
  ShieldCheck, CheckCircle2, MessageSquare, Send
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

function ContactPageContent() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    message: ''
  });
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();
    if (formData.name && formData.email && formData.phone && formData.message) {
      setSubmitted(true);
    }
  };

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="contact" />

      {/* PAGE HERO / BREADCRUMB */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="absolute inset-0 opacity-10 bg-[radial-gradient(#F4C430_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div className="absolute -top-24 -right-24 w-96 h-96 bg-[#F4C430]/15 rounded-full blur-3xl"></div>
        <div className="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
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
                <div 
                  className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform"
                  style={{ backgroundColor: COLORS.yellow }}
                >
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
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              CONTACT INFORMATION
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Our Details
            </h2>
            <p className="text-gray-500 text-lg">
              Here is how you can reach our workshop, office, or mobile locksmith units anytime.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {/* Phone */}
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors">
                  <Phone size={26} />
                </div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Phone</h3>
                <p className="text-gray-500 text-sm mb-4">Direct dispatch line for all Auckland callouts.</p>
                <a href="tel:0800828345" className="text-2xl font-black text-[#0B1F3A] hover:text-[#F4C430] transition-colors block">
                  0800 828 345
                </a>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                24/7 Available
              </div>
            </div>

            {/* Email */}
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors">
                  <Mail size={26} />
                </div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Email</h3>
                <p className="text-gray-500 text-sm mb-4">For general inquiries, quotes & invoicing.</p>
                <a href="mailto:info@lostkey.co.nz" className="text-lg font-bold text-[#0B1F3A] hover:text-[#F4C430] transition-colors block">
                  info@lostkey.co.nz
                </a>
                <a href="mailto:hello@lostkey.co.nz" className="text-sm font-semibold text-gray-600 hover:text-[#F4C430] transition-colors block mt-1">
                  hello@lostkey.co.nz
                </a>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                Quick Response
              </div>
            </div>

            {/* Address */}
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors">
                  <MapPin size={26} />
                </div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Address</h3>
                <p className="text-gray-500 text-sm mb-4">Workshop & central office location.</p>
                <p className="text-lg font-bold text-[#0B1F3A]">
                  12 Queen Street, Auckland 1010
                </p>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                Auckland Central
              </div>
            </div>

            {/* Workshop Hours */}
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors">
                  <Building size={26} />
                </div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">Workshop Hours</h3>
                <p className="text-base font-bold text-[#0B1F3A]">
                  Monday to Friday: <span className="text-emerald-600 font-extrabold">Open 24 hours</span>
                </p>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                Workshop Operations
              </div>
            </div>

            {/* On-Road Service */}
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors">
                  <Wrench size={26} />
                </div>
                <h3 className="text-xl font-bold text-[#1F2937] mb-2">On-Road Service</h3>
                <p className="text-base font-bold text-[#0B1F3A]">
                  Monday to Friday: <span className="text-gray-800">8:00am – 5:00pm</span>
                </p>
                <p className="text-xs text-gray-500 mt-1">(Standard callouts & scheduled installations)</p>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-100 text-xs font-bold text-gray-400 uppercase tracking-wider">
                Standard Mobile Service
              </div>
            </div>

            {/* After Hours */}
            <div className="bg-[#0B1F3A] text-white rounded-3xl p-8 shadow-xl flex flex-col justify-between group">
              <div>
                <div className="w-14 h-14 rounded-2xl bg-[#F4C430] flex items-center justify-center mb-6 text-[#0B1F3A]">
                  <Clock size={26} />
                </div>
                <h3 className="text-xl font-bold text-white mb-2">After Hours</h3>
                <p className="text-gray-300 text-sm mb-4">24/7 emergency locksmith service available right across Auckland.</p>
                <a href="tel:0800828345" className="text-2xl font-black text-[#F4C430] hover:underline block">
                  0800 828 345
                </a>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-800 text-xs font-bold text-[#F4C430] uppercase tracking-wider">
                24/7 Emergency Line
              </div>
            </div>

          </div>

        </div>
      </section>

      {/* GOOGLE MAP EMBED */}
      <section className="bg-gray-100 py-12 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="rounded-3xl overflow-hidden shadow-2xl border-4 border-white h-[450px] relative">
            <iframe 
              title="Lostkey Locksmith Location Map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102069.96783852028!2d174.7369081!3d-36.8686223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54062ef2b1bb7df%3A0x5233608b17fcbe38!2sLost%20Key%20NZ%20%7C%20Automotive%20Locksmith%20Auckland!5e0!3m2!1sen!2snz!4v1700000000000!5m2!1sen!2snz" 
              className="w-full h-full border-0" 
              allowFullScreen="" 
              loading="lazy" 
              referrerPolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>

      {/* HOW TO REACH US */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div className="lg:col-span-6 space-y-6">
              <span 
                className="inline-block text-xs font-black uppercase tracking-widest px-5 py-2 rounded-full"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                PROMPT & RELIABLE SERVICE
              </span>
              
              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                How to Reach Us
              </h2>

              <p className="text-gray-600 text-lg leading-relaxed font-normal">
                Whether it is for replacing locks, rekeying locks or for new house keys, our workshop team is ready to help you during business hours. For all urgent requirements, we have mobile locksmiths across Auckland who are ready to help you round the clock in any sort of urgent situation. Just call us and we will send our locksmith to solve the problem for you.
              </p>

              <p className="text-gray-600 text-lg leading-relaxed font-normal bg-[#FFF8E1] border-l-4 border-[#F4C430] p-5 rounded-r-2xl">
                Want to know more about what we do first? Check out our residential, commercial, and automotive locksmith services, or read what our customers have to say on our testimonials page.
              </p>

              <div className="flex flex-wrap gap-4 pt-4">
                <a href="index.php#services" className="px-6 py-3 bg-[#0B1F3A] text-white hover:bg-[#132B4F] font-bold text-sm rounded-full transition-colors inline-flex items-center">
                  <Home size={16} className="mr-2 text-[#F4C430]" /> Residential
                </a>
                <a href="index.php#services" className="px-6 py-3 bg-[#0B1F3A] text-white hover:bg-[#132B4F] font-bold text-sm rounded-full transition-colors inline-flex items-center">
                  <Building size={16} className="mr-2 text-[#F4C430]" /> Commercial
                </a>
                <a href="index.php#services" className="px-6 py-3 bg-[#0B1F3A] text-white hover:bg-[#132B4F] font-bold text-sm rounded-full transition-colors inline-flex items-center">
                  <Car size={16} className="mr-2 text-[#F4C430]" /> Automotive
                </a>
                <a href="index.php#reviews" className="px-6 py-3 bg-[#F4C430] text-[#0B1F3A] hover:brightness-110 font-bold text-sm rounded-full transition-all inline-flex items-center">
                  <Star size={16} className="mr-2 fill-current" /> Testimonials
                </a>
              </div>
            </div>

            <div className="lg:col-span-6 relative">
              <div className="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                <img 
                  src="office-lock.jpeg" 
                  alt="Lostkey mobile locksmith service van in Auckland" 
                  className="w-full h-[480px] object-cover"
                />
                <div className="absolute bottom-6 left-6 right-6 bg-[#0B1F3A]/95 backdrop-blur-md p-6 rounded-2xl border border-white/20 text-white">
                  <div className="flex items-center space-x-3">
                    <div className="w-12 h-12 rounded-full flex items-center justify-center font-black text-black" style={{ backgroundColor: COLORS.yellow }}>
                      <Phone size={22} />
                    </div>
                    <div>
                      <h4 className="font-bold text-lg text-white">On Call 24/7 Auckland Wide</h4>
                      <p className="text-xs text-gray-300">20 to 40 minute average callout arrival time.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* SEND US A MESSAGE FORM */}
      <section id="contact-form-section" className="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <div className="text-center max-w-2xl mx-auto mb-12">
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              ONLINE INQUIRY
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Send Us a Message
            </h2>
            <p className="text-gray-600 text-lg">
              Prefer to write to us instead of calling? Fill in the form below and our team will get back to you as soon as possible.
            </p>
          </div>

          <div className="bg-[#0B1F3A] rounded-3xl p-8 sm:p-12 md:p-16 shadow-2xl text-white relative overflow-hidden">
            {submitted ? (
              <div className="bg-emerald-500/20 border border-emerald-500 text-white p-8 rounded-2xl text-center space-y-4">
                <div className="w-16 h-16 bg-emerald-500 rounded-full flex items-center justify-center mx-auto text-white">
                  <Check size={32} strokeWidth={3} />
                </div>
                <h3 className="text-2xl font-bold">Thank You! Message Sent.</h3>
                <p className="text-gray-200">Our team has received your message and will respond shortly.</p>
                <button 
                  onClick={() => { setSubmitted(false); setFormData({ name: '', email: '', phone: '', message: '' }); }}
                  className="px-6 py-2 bg-white text-black font-bold text-xs uppercase rounded-full hover:bg-gray-100"
                >
                  Send Another Message
                </button>
              </div>
            ) : (
              <form onSubmit={handleSubmit} className="space-y-6 relative z-10">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Your Name*</label>
                    <input 
                      type="text" 
                      required
                      placeholder="John Doe" 
                      value={formData.name}
                      onChange={(e) => setFormData({...formData, name: e.target.value})}
                      className="w-full bg-[#132B4F] border border-white/10 rounded-xl text-white placeholder-gray-400 p-4 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" 
                    />
                  </div>

                  <div>
                    <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Your Email*</label>
                    <input 
                      type="email" 
                      required
                      placeholder="john@example.com" 
                      value={formData.email}
                      onChange={(e) => setFormData({...formData, email: e.target.value})}
                      className="w-full bg-[#132B4F] border border-white/10 rounded-xl text-white placeholder-gray-400 p-4 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" 
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Your Phone*</label>
                  <div className="flex border border-white/10 rounded-xl bg-[#132B4F] overflow-hidden focus-within:border-[#F4C430] transition-colors">
                    <span className="flex items-center px-4 bg-white/5 text-white font-bold text-xs">🇳🇿 +64</span>
                    <input 
                      type="tel" 
                      required
                      placeholder="021 123 4567" 
                      value={formData.phone}
                      onChange={(e) => setFormData({...formData, phone: e.target.value})}
                      className="w-full bg-transparent text-white placeholder-gray-400 p-4 text-sm focus:outline-none" 
                    />
                  </div>
                </div>

                <div>
                  <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-2">Your Message*</label>
                  <textarea 
                    required
                    rows={4} 
                    placeholder="Describe how we can help you..." 
                    value={formData.message}
                    onChange={(e) => setFormData({...formData, message: e.target.value})}
                    className="w-full bg-[#132B4F] border border-white/10 rounded-xl text-white placeholder-gray-400 p-4 text-sm focus:outline-none focus:border-[#F4C430] transition-colors resize-none"
                  ></textarea>
                </div>

                <div className="pt-2">
                  <button 
                    type="submit" 
                    className="w-full sm:w-auto px-10 py-4 font-black tracking-widest text-xs uppercase transition-all hover:brightness-110 shadow-lg rounded-full flex items-center justify-center cursor-pointer" 
                    style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                  >
                    <Send size={16} className="mr-2" />
                    SEND MESSAGE
                  </button>
                </div>
              </form>
            )}

            <div className="absolute bottom-0 right-0 w-40 h-28 opacity-40" style={{ backgroundImage: `radial-gradient(${COLORS.yellow} 3px, transparent 3px)`, backgroundSize: '16px 16px' }}></div>
          </div>

        </div>
      </section>

      {/* OUR GUARANTEE SECTION */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <div className="bg-[#FFF8E1] border-2 border-[#F4C430] rounded-3xl p-8 md:p-12 relative overflow-hidden shadow-lg">
            <div className="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
              
              <div className="lg:col-span-8 space-y-4">
                <span 
                  className="inline-block text-xs font-black uppercase tracking-widest px-4 py-1.5 rounded-full"
                  style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                >
                  PEACE OF MIND GUARANTEE
                </span>
                <h3 className="text-3xl md:text-4xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                  Our Guarantee
                </h3>
                <p className="text-gray-700 text-lg leading-relaxed font-medium">
                  Every job comes with our workmanship guarantee. If a lock or key we've fitted doesn't work as it should, we'll come back and make it right at no extra cost to you. We also offer Afterpay on our services, so an unexpected callout doesn't have to be paid in full upfront.
                </p>
              </div>

              <div className="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-4">
                <div className="bg-white p-5 rounded-2xl border border-yellow-200 shadow-sm flex items-center space-x-4">
                  <div className="w-12 h-12 rounded-full bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center flex-shrink-0">
                    <BadgeCheck size={24} />
                  </div>
                  <div>
                    <h4 className="font-bold text-sm text-[#1F2937]">Workmanship Guarantee</h4>
                    <p className="text-xs text-gray-500">Fixed at zero extra cost</p>
                  </div>
                </div>

                <div className="bg-white p-5 rounded-2xl border border-yellow-200 shadow-sm flex items-center space-x-4">
                  <div className="w-12 h-12 rounded-full bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center flex-shrink-0">
                    <CreditCard size={24} />
                  </div>
                  <div>
                    <h4 className="font-bold text-sm text-[#1F2937]">Afterpay Available</h4>
                    <p className="text-xs text-gray-500">Flexible payment options</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>



      <window.FooterComponent currentPage="contact" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<ContactPageContent />);
</script>

<?php
include 'footer.php';
?>
