<?php
$pageTitle = "Property Managers & Landlords Locksmith Auckland | Lostkey";
$pageDescription = "Lostkey provides fast, reliable lock rekeying and replacement between tenants for property managers and landlords across Auckland. Secure your rental properties with ease.";
$currentPage = "home";
include 'header.php';
?>

<script type="text/babel" data-type="module">

import React, { useState, useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Menu, X, Phone, Lock, Home, Car, 
  ChevronRight, ChevronDown, Key, Clock, MapPin, Wrench,
  Shield, Mail, Facebook, Twitter, Youtube,
  Zap, BadgeCheck, Settings, Smartphone, KeyRound,
  Users, Check, Calendar, ArrowUp,
  AlertTriangle, Building, PenTool, DoorClosed, Unlock, Power, Layers,
  ClipboardCheck, CheckCircle2
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

const services = [
  {
    icon: KeyRound,
    title: "Lock Rekeying Between Tenancies",
    desc: "Same lock, new key — old keys stop working instantly. The most cost-effective way to secure your property between tenants without replacing the hardware.",
  },
  {
    icon: PenTool,
    title: "Full Lock Replacement",
    desc: "For older or damaged locks that need more than a rekey. We supply and fit quality replacement hardware in a single visit.",
  },
  {
    icon: AlertTriangle,
    title: "Eviction Lock Changes",
    desc: "Fast turnaround when a lockout needs to happen the same day. We prioritise urgent situations and can often attend within hours.",
  },
  {
    icon: Smartphone,
    title: "Digital Lock Upgrades",
    desc: "Keyless entry systems — ideal for short-term lets or high-turnover properties where key management becomes a headache.",
  },
  {
    icon: Layers,
    title: "Master Key Systems",
    desc: "One key for your team, individual keys for each unit or tenant. Streamline access management across your entire portfolio.",
  },
  {
    icon: Calendar,
    title: "Scheduled Maintenance",
    desc: "6 or 12-monthly lock checks across your portfolio to identify wear, weakness, or upgrade opportunities before they become problems.",
  },
  {
    icon: DoorClosed,
    title: "Garage Door & Mailbox Keys",
    desc: "Often overlooked, easy to sort in the same visit. We handle the full property — not just the front door.",
  },
  {
    icon: Clock,
    title: "24-Hour Callouts",
    desc: "For tenant lockouts or urgent security issues outside business hours. Our team is on call every day of the year.",
  },
];

const howItWorks = [
  {
    step: "01",
    title: "Tell us the property and situation",
    desc: "Whether it's a routine tenant changeover or an urgent eviction, let us know what's happened and we'll advise the right course of action.",
  },
  {
    step: "02",
    title: "We schedule the visit",
    desc: "Routine changeovers can be booked ahead; urgent situations are prioritised same-day where possible.",
  },
  {
    step: "03",
    title: "We rekey or replace the lock",
    desc: "In most cases, this is done in one visit, with old keys immediately made useless.",
  },
  {
    step: "04",
    title: "You get confirmation",
    desc: "A quick record of what was done — useful for your own property files or for passing on to the new tenant.",
  },
];

const whyChoose = [
  { text: "Work between leases, often with zero notice" },
  { text: "Prompt, efficient team with job records kept" },
  { text: "Free property safety assessments available" },
  { text: "Consistent pricing across your portfolio" },
  { text: "Standing arrangements — book with one call or email" },
  { text: "Covers all Auckland regions" },
];

function ContactForm() {
  const [formData, setFormData] = useState({
    name: '', email: '', phone: '', address: '', message: ''
  });
  const [submitted, setSubmitted] = useState(false);
  const [errors, setErrors] = useState({});

  const validate = () => {
    const e = {};
    if (!formData.name.trim()) e.name = 'Name is required';
    if (!formData.email.trim() || !/\S+@\S+\.\S+/.test(formData.email)) e.email = 'Valid email is required';
    if (!formData.phone.trim()) e.phone = 'Phone is required';
    if (!formData.address.trim()) e.address = 'Property address is required';
    if (!formData.message.trim()) e.message = 'Message is required';
    return e;
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    const errs = validate();
    if (Object.keys(errs).length > 0) { setErrors(errs); return; }
    setSubmitted(true);
  };

  const handleChange = (field, value) => {
    setFormData(prev => ({ ...prev, [field]: value }));
    if (errors[field]) setErrors(prev => ({ ...prev, [field]: undefined }));
  };

  if (submitted) {
    return (
      <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', padding: '4rem 0', textAlign: 'center', gap: '1rem' }}>
        <div style={{ width: 80, height: 80, borderRadius: '50%', backgroundColor: COLORS.yellow, display: 'flex', alignItems: 'center', justifyContent: 'center', marginBottom: '0.5rem' }}>
          <Check size={40} strokeWidth={3} style={{ color: COLORS.black }} />
        </div>
        <h3 className="text-2xl font-black text-white">Enquiry Sent!</h3>
        <p className="text-gray-300 max-w-sm">Thanks — we'll be in touch shortly to arrange a time that works for you.</p>
      </div>
    );
  }

  const inputBase = {
    width: '100%', backgroundColor: 'rgba(255,255,255,0.08)', border: '1px solid rgba(255,255,255,0.2)',
    borderRadius: '0.75rem', padding: '0.75rem 1rem', color: 'white', fontSize: '0.875rem',
    outline: 'none', boxSizing: 'border-box', fontFamily: 'inherit',
  };

  return (
    <form onSubmit={handleSubmit} style={{ display: 'flex', flexDirection: 'column', gap: '1rem' }} noValidate>
      <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-1.5">Your Name <span style={{ color: COLORS.yellow }}>*</span></label>
          <input id="pm-name" type="text" placeholder="John Smith" style={{ ...inputBase, borderColor: errors.name ? '#f87171' : 'rgba(255,255,255,0.2)' }} value={formData.name} onChange={e => handleChange('name', e.target.value)} />
          {errors.name && <p style={{ color: '#f87171', fontSize: '0.75rem', marginTop: '0.25rem' }}>{errors.name}</p>}
        </div>
        <div>
          <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-1.5">Your Email <span style={{ color: COLORS.yellow }}>*</span></label>
          <input id="pm-email" type="email" placeholder="john@example.com" style={{ ...inputBase, borderColor: errors.email ? '#f87171' : 'rgba(255,255,255,0.2)' }} value={formData.email} onChange={e => handleChange('email', e.target.value)} />
          {errors.email && <p style={{ color: '#f87171', fontSize: '0.75rem', marginTop: '0.25rem' }}>{errors.email}</p>}
        </div>
      </div>
      <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-1.5">Your Phone <span style={{ color: COLORS.yellow }}>*</span></label>
          <input id="pm-phone" type="tel" placeholder="021 XXX XXXX" style={{ ...inputBase, borderColor: errors.phone ? '#f87171' : 'rgba(255,255,255,0.2)' }} value={formData.phone} onChange={e => handleChange('phone', e.target.value)} />
          {errors.phone && <p style={{ color: '#f87171', fontSize: '0.75rem', marginTop: '0.25rem' }}>{errors.phone}</p>}
        </div>
        <div>
          <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-1.5">Property Address <span style={{ color: COLORS.yellow }}>*</span></label>
          <input id="pm-address" type="text" placeholder="123 Main St, Auckland" style={{ ...inputBase, borderColor: errors.address ? '#f87171' : 'rgba(255,255,255,0.2)' }} value={formData.address} onChange={e => handleChange('address', e.target.value)} />
          {errors.address && <p style={{ color: '#f87171', fontSize: '0.75rem', marginTop: '0.25rem' }}>{errors.address}</p>}
        </div>
      </div>
      <div>
        <label className="block text-xs font-bold uppercase tracking-wider text-gray-300 mb-1.5">Your Message <span style={{ color: COLORS.yellow }}>*</span></label>
        <textarea id="pm-message" rows={4} placeholder="Tell us about the property and situation..." style={{ ...inputBase, borderColor: errors.message ? '#f87171' : 'rgba(255,255,255,0.2)', resize: 'vertical' }} value={formData.message} onChange={e => handleChange('message', e.target.value)} />
        {errors.message && <p style={{ color: '#f87171', fontSize: '0.75rem', marginTop: '0.25rem' }}>{errors.message}</p>}
      </div>
      <button
        id="pm-submit"
        type="submit"
        className="w-full py-4 font-black text-base uppercase tracking-wider rounded-xl transition-all hover:brightness-110 hover:-translate-y-0.5 shadow-lg"
        style={{ backgroundColor: COLORS.yellow, color: COLORS.black, cursor: 'pointer', border: 'none' }}
      >
        Send Enquiry
      </button>
    </form>
  );
}

function PropertyManagersPageContent() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false);
  const [mobileAreasOpen, setMobileAreasOpen] = useState(false);
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
      
      {/* HEADER */}
      <window.HeaderComponent currentPage="home" />

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div style={{ position: 'absolute', inset: 0, opacity: 0.06, pointerEvents: 'none', background: 'radial-gradient(circle at 75% 50%, #F4C430 0%, transparent 65%)' }} />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Property Managers &amp; Landlords</span>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <span
                className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                <Building size={14} className="mr-2" />
                FOR PROPERTY MANAGERS &amp; LANDLORDS
              </span>

              <h1 className="text-4xl sm:text-5xl md:text-6xl font-black leading-[1.08] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Lock Changes Between Tenants,{' '}
                <span style={{ color: COLORS.yellow }}>Done Right</span>
              </h1>

              <p className="text-gray-300 text-lg md:text-xl leading-relaxed font-medium mb-8 max-w-xl">
                When tenants leave, they return their keys. But you can never be completely sure it's the only set. Lostkey works with property managers and landlords across Auckland to make lock changes between tenancies quick, routine, and easy to schedule.
              </p>

              <div className="flex flex-col sm:flex-row gap-4">
                <a
                  href="tel:0800828345"
                  className="inline-flex items-center justify-center space-x-3 px-8 py-4 rounded-full font-black text-base uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
                  style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                >
                  <Phone size={20} />
                  <span>Call: 0800 828 345</span>
                </a>
                <a
                  href="#enquire"
                  className="inline-flex items-center justify-center space-x-3 px-8 py-4 rounded-full font-black text-base uppercase tracking-wider transition-all"
                  style={{ border: '2px solid rgba(255,255,255,0.3)', color: 'white' }}
                >
                  <Mail size={20} />
                  <span>Send Enquiry</span>
                </a>
              </div>
            </div>

            <div className="grid grid-cols-2 gap-4">
              {[
                { value: "Same Day", label: "Urgent Turnaround", icon: Clock },
                { value: "24/7", label: "On Call Every Day", icon: Phone },
                { value: "1 Visit", label: "Most Jobs Complete", icon: CheckCircle2 },
                { value: "Free", label: "Safety Assessment", icon: Shield },
              ].map((stat, i) => (
                <div key={i} className="rounded-2xl p-6 flex flex-col items-start space-y-3 transition-colors" style={{ backgroundColor: 'rgba(255,255,255,0.05)', border: '1px solid rgba(255,255,255,0.1)' }}>
                  <div className="w-10 h-10 rounded-xl flex items-center justify-center" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                    <stat.icon size={20} />
                  </div>
                  <div>
                    <p className="text-2xl font-black" style={{ color: COLORS.yellow }}>{stat.value}</p>
                    <p className="text-xs font-bold uppercase tracking-wider text-gray-400 mt-0.5">{stat.label}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* WHY THIS MATTERS */}
      <section className="py-20 lg:py-28 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div>
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-6" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                WHY THIS MATTERS
              </span>
              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                A Departing Tenant Doesn't Guarantee a Safe Departure
              </h2>
              <div className="space-y-5 text-gray-600 text-base leading-relaxed">
                <p className="text-lg font-medium text-[#1F2937]">
                  Spare keys could have been made for a partner, a friend, or a housemate you weren't notified about. Sometimes, the previous tenant could still hold a spare key.
                </p>
                <p>
                  If the locks haven't changed, anyone who has ever held a key — past tenants, ex-partners, flatmates — still has access to the property. If anything goes missing, it becomes very challenging to establish liability or explain to a new tenant why proper security wasn't in place.
                </p>
                <p className="bg-[#FFF8E1] border-l-4 border-[#F4C430] p-5 rounded-r-2xl text-[#1F2937] font-medium">
                  New locks make the problem disappear. It's easy to do and a very effective way to assure new tenants that they truly have their own place.
                </p>
              </div>
            </div>
            <div className="relative">
              <div className="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                <img
                  src="office-lock.jpeg"
                  alt="Locksmith changing lock for property manager in Auckland"
                  className="w-full h-[480px] object-cover"
                />
                <div className="absolute bottom-6 left-6 right-6 rounded-2xl p-6 border border-white/20 text-white" style={{ backgroundColor: 'rgba(11,31,58,0.95)', backdropFilter: 'blur(8px)' }}>
                  <div className="flex items-center space-x-3">
                    <div className="w-10 h-10 rounded-full flex items-center justify-center font-black" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                      <BadgeCheck size={20} strokeWidth={3} />
                    </div>
                    <div>
                      <h4 className="font-bold text-base text-white">Trusted by Property Managers</h4>
                      <p className="text-xs text-gray-300">Across Auckland — routine changeovers made simple.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div className="absolute -bottom-8 -right-8 w-full h-full rounded-3xl z-0 hidden sm:block" style={{ backgroundColor: COLORS.yellow }} />
            </div>
          </div>
        </div>
      </section>

      {/* OUR SERVICES */}
      <section className="py-20 lg:py-28 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              OUR SERVICES
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Services for Property Managers
            </h2>
            <p className="text-gray-500 text-lg">
              Everything you need to keep your rental properties secure between tenancies — all in one call.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {services.map((service, idx) => (
              <div
                key={idx}
                className="bg-white rounded-3xl p-7 border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col group"
              >
                <div
                  className="w-12 h-12 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform"
                  style={{ backgroundColor: COLORS.black, color: COLORS.yellow }}
                >
                  <service.icon size={22} />
                </div>
                <h3 className="text-base font-bold text-[#1F2937] mb-2 group-hover:text-[#F4C430] transition-colors leading-snug">
                  {service.title}
                </h3>
                <p className="text-gray-500 text-sm leading-relaxed flex-1">
                  {service.desc}
                </p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* HOW IT WORKS */}
      <section className="py-20 lg:py-28 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              THE PROCESS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How It Works
            </h2>
            <p className="text-gray-500 text-lg">
              Simple, fast, and hassle-free — from your first call to job complete.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {howItWorks.map((step, idx) => (
              <div key={idx} className="rounded-3xl p-8 text-white h-full relative overflow-hidden group hover:shadow-2xl transition-shadow" style={{ backgroundColor: COLORS.black }}>
                <div style={{ position: 'absolute', top: -16, right: -16, fontSize: 80, fontWeight: 900, opacity: 0.08, lineHeight: 1, color: COLORS.yellow, pointerEvents: 'none' }}>{step.step}</div>
                <div className="relative z-10">
                  <span className="inline-block text-2xl font-black mb-4" style={{ color: COLORS.yellow }}>{step.step}</span>
                  <h3 className="text-lg font-bold mb-3 text-white leading-snug">{step.title}</h3>
                  <p className="text-gray-400 text-sm leading-relaxed">{step.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* MULTIPLE PROPERTIES CALLOUT */}
      <section className="py-16" style={{ backgroundColor: COLORS.yellow }}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div>
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.black, color: 'white' }}>
                MANAGING MULTIPLE PROPERTIES?
              </span>
              <h2 className="text-3xl md:text-4xl font-black tracking-tight mb-4" style={{ color: COLORS.black, fontFamily: "'Inter Tight', sans-serif" }}>
                Set Up a Standing Arrangement
              </h2>
              <p className="text-base leading-relaxed font-medium" style={{ color: 'rgba(11,31,58,0.8)' }}>
                If you manage more than one property, a standing arrangement with one locksmith saves time chasing quotes every time a tenant moves out. We can set up your account so changeovers are booked with a phone call or a short email, with consistent pricing across your entire portfolio.
              </p>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
              {whyChoose.map((item, idx) => (
                <div key={idx} className="flex items-start space-x-3 rounded-2xl p-4" style={{ backgroundColor: 'rgba(11,31,58,0.1)' }}>
                  <div className="w-6 h-6 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5" style={{ backgroundColor: COLORS.black }}>
                    <Check size={14} strokeWidth={3} style={{ color: COLORS.yellow }} />
                  </div>
                  <span className="font-semibold text-sm leading-snug" style={{ color: COLORS.black }}>{item.text}</span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* WHY CHOOSE LOSTKEY */}
      <section className="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-6" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                THE LOSTKEY DIFFERENCE
              </span>
              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Why Property Managers Choose Lostkey
              </h2>
              <div className="space-y-5 text-gray-600 text-base leading-relaxed">
                <p className="text-lg font-medium text-[#1F2937]">
                  Landlords and property management companies frequently need these services done between leases — sometimes with zero notice. Our team is prompt, efficient, and takes records of the work done.
                </p>
                <p>
                  We also provide <strong className="text-[#1F2937]">free property safety assessments</strong> that can identify old locks, points of weakness, or possible upgrade opportunities before the new tenant moves in.
                </p>
              </div>
              <div className="mt-8 flex flex-col sm:flex-row gap-4">
                <a
                  href="tel:0800828345"
                  className="inline-flex items-center justify-center space-x-2 px-8 py-4 rounded-full font-black text-sm uppercase tracking-wider shadow-xl transition-all hover:scale-105"
                  style={{ backgroundColor: COLORS.black, color: COLORS.yellow }}
                >
                  <Phone size={18} />
                  <span>Call: 0800 828 345</span>
                </a>
                <a
                  href="#enquire"
                  className="inline-flex items-center justify-center space-x-2 px-8 py-4 rounded-full font-black text-sm uppercase tracking-wider transition-all"
                  style={{ border: '2px solid #0B1F3A', color: '#0B1F3A' }}
                >
                  <ClipboardCheck size={18} />
                  <span>Free Assessment</span>
                </a>
              </div>
            </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
              {[
                { icon: Clock, label: "Fast Response", desc: "Most changeovers handled same day or next day." },
                { icon: ClipboardCheck, label: "Job Records Kept", desc: "Confirmation after every visit for your property files." },
                { icon: Shield, label: "Free Safety Check", desc: "We assess your locks and flag any issues at no cost." },
                { icon: BadgeCheck, label: "Workmanship Guarantee", desc: "If it's not right, we'll come back and fix it." },
              ].map((card, idx) => (
                <div key={idx} className="bg-white rounded-2xl p-6 border border-gray-200 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all group">
                  <div className="w-12 h-12 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform" style={{ backgroundColor: COLORS.black, color: COLORS.yellow }}>
                    <card.icon size={22} />
                  </div>
                  <h4 className="font-bold text-[#1F2937] mb-1 group-hover:text-[#F4C430] transition-colors">{card.label}</h4>
                  <p className="text-gray-500 text-sm leading-relaxed">{card.desc}</p>
                </div>
              ))}
            </div>
          </div>
        </div>
      </section>

      {/* ENQUIRY FORM */}
      <section id="enquire" className="py-20 lg:py-28" style={{ backgroundColor: COLORS.black }}>
        <div className="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-12">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              GET IN TOUCH
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-white tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Send Us an Enquiry
            </h2>
            <p className="text-gray-300 text-lg">
              Whether you manage one rental property or several across Auckland, our team can help keep your properties secure between tenants.
            </p>
          </div>

          <div className="rounded-3xl p-8 md:p-10" style={{ backgroundColor: 'rgba(255,255,255,0.05)', border: '1px solid rgba(255,255,255,0.1)' }}>
            <ContactForm />
          </div>

          <div className="mt-8 text-center">
            <p className="text-gray-400 text-sm">
              Prefer to call?{' '}
              <a href="tel:0800828345" className="font-bold transition-colors" style={{ color: COLORS.yellow }}>
                0800 828 345
              </a>
            </p>
          </div>
        </div>
      </section>

      {/* FOOTER */}
      <window.FooterComponent currentPage="home" />

      {/* SCROLL TO TOP BUTTON */}
      <button
        onClick={scrollToTop}
        className={`fixed bottom-24 md:bottom-8 right-6 md:right-8 z-50 p-4 rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.2)] transition-all duration-300 hover:scale-110 hover:-translate-y-1 ${showScrollTop ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'}`}
        style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
        aria-label="Scroll to top"
      >
        <ArrowUp size={24} strokeWidth={2.5} />
      </button>
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<PropertyManagersPageContent />);

</script>

<?php
include 'footer.php';
?>

