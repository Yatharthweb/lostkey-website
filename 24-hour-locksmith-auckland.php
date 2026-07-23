<?php
$pageTitle = "24 Hour Locksmith Auckland | Around-the-Clock Locksmith Service 24/7";
$pageDescription = "24 Hour Locksmith Auckland – Round-the-clock locksmith services across Auckland. Fast 20-40 min arrival for home, car, and commercial lockouts, repairs, and key cutting anytime.";
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
  CreditCard, Cpu, Plus, Minus
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

const serviceCovers = [
  {
    title: "Home Lockouts",
    desc: "Have you found yourself unable to get into your own home? Our residential locksmith service in Auckland is available round the clock.",
    icon: Home
  },
  {
    title: "Car Lockouts",
    desc: "Have you left your keys inside your car? Our auto locksmith team is at your disposal, even at odd hours.",
    icon: Car
  },
  {
    title: "Lock Repairs",
    desc: "It seems that a locked door will start to stick just as it is most inconvenient to deal with it. Our lock repair services are open 24 hours a day for this reason.",
    icon: Wrench
  },
  {
    title: "Lock Replacement",
    desc: "Are you wondering if it is possible to get a lock replaced urgently after a break in? Our lock replacement service in Auckland can discreetly provide help the same night.",
    icon: Shield
  },
  {
    title: "Rekeying Services",
    desc: "Did you move into a new house? Our lock rekeying service in Auckland is available at all hours.",
    icon: KeyRound
  },
  {
    title: "Car Key Replacement",
    desc: "Have you lost the only set of keys to your car when you went out? Our car key locksmiths in Auckland can help with it during the day and night.",
    icon: Key
  },
  {
    title: "Ignition Update & Repair",
    desc: "Being unable to use the car key can leave someone in the lurch at any time. Our ignition replacement and repair service in Auckland works 24/7.",
    icon: Settings
  },
  {
    title: "Corporate Emergency Services",
    desc: "Robbery and break-ins at commercial places are not bound by business hours. Our commercial locksmith solution works beyond business hours.",
    icon: Building
  },
  {
    title: "Master & Restricted Key Systems",
    desc: "Even complex solutions require a helping hand. Our professionals with knowledge of master and restricted key systems arrive at the scene.",
    icon: Layers
  }
];

const faqs = [
  {
    q: "Is Lostkey really available 24 hours a day?",
    a: "Yes. Our phone line is staffed around the clock, including weekends and public holidays, and locksmiths are on call to respond at any hour."
  },
  {
    q: "Do after-hours call-outs cost more?",
    a: "Late-night and public holiday call-outs are usually priced a little higher than standard daytime jobs, since they require a locksmith on call outside normal working hours. We always confirm the price before starting."
  },
  {
    q: "Can I book a non-urgent job for a late-night time slot?",
    a: "Yes. If it suits you better to have a lock changed or rekeyed in the evening rather than during the day, we can schedule that in."
  },
  {
    q: "Do you cover car key and ignition issues overnight?",
    a: "Yes, our automotive team is part of the same 24-hour roster as our residential and commercial locksmiths."
  }
];

function TwentyFourHourLocksmithHtmlPage() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false);
  
  const [mobileCompanyOpen, setMobileCompanyOpen] = useState(false);
  const [showScrollTop, setShowScrollTop] = useState(false);
  const [openFaq, setOpenFaq] = useState(-1);

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
      <window.HeaderComponent currentPage="home" />

      {/* HERO BANNER */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <a href="index.html#services" className="hover:text-[#F4C430] transition-colors">Services</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">24 Hour Locksmith Auckland</span>
          </div>

          <div className="max-w-4xl">
            <span className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              <Clock size={14} className="mr-2" />
              24/7 AROUND-THE-CLOCK LOCKSMITH
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[60px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              24 Hour Locksmith Auckland – <span style={{ color: COLORS.yellow }}>Around-the-Clock Locksmith Service</span>
            </h1>

            <div className="pt-2">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-4 border border-white rounded-full px-2 py-2 pr-10 hover:border-[#F4C430] transition-all group bg-[#0B1F3A]/40"
              >
                <div className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0" style={{ backgroundColor: COLORS.yellow }}>
                  <Phone size={24} style={{ color: COLORS.black, fill: COLORS.black }} />
                </div>
                <div className="flex flex-col">
                  <span className="text-[11px] uppercase tracking-wider text-gray-200 font-bold mb-0.5">Call Now 24/7 Dispatch</span>
                  <span className="text-white font-black text-2xl md:text-3xl tracking-wide leading-none whitespace-nowrap">0800 828 345</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* PARTNERS LOGO SCROLLER (BELOW HERO BANNER) */}
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

      {/* INTRO SECTION */}
      <section className="py-16 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
          <h2 className="text-3xl md:text-4xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
            Need a Locksmith Any Time, Day or Night?
          </h2>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            Some jobs need to be done beyond the usual course of business. Lostkey provides 24-hour locksmith service in Auckland, meaning that any time during the week or on the weekend, you can call locksmiths to get their assistance at any time. Not every call is a case of an emergency; sometimes there is a malfunction in the locking mechanism going on for a couple of weeks before being finally sorted out, or it is just about a new key that is needed before a flight. In any case, our staff is on duty around the clock.
          </p>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            If your situation is urgent right now, our emergency locksmith page covers fast-response lockouts and break-ins in more detail. This page is about something slightly different: knowing that whatever locksmith job you need, at whatever hour, Lostkey is open and ready.
          </p>
        </div>
      </section>

      {/* WHAT OUR SERVICE COVERS */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              FULL 24/7 COVERAGE
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What Our 24-Hour Locksmith Service Covers
            </h2>
            <p className="text-gray-600 text-lg">
              Our city locksmith teams handle the full range of locksmith work, not just lockouts, at any hour you need us.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {serviceCovers.map((service, idx) => (
              <div key={idx} className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                  <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:scale-110 transition-transform">
                    <service.icon size={26} />
                  </div>
                  <h3 className="text-2xl font-bold text-[#1F2937] mb-3 group-hover:text-[#F4C430] transition-colors">{service.title}</h3>
                  <p className="text-gray-600 leading-relaxed text-sm">{service.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 24-HOUR VS EMERGENCY LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
          
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4 shadow-xl">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              SERVICE COMPARISON
            </span>
            <h2 className="text-3xl md:text-4xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              24 Hour Locksmith vs Emergency Locksmith – What's the Difference?
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              Individuals usually seek either of these options, and the truth is that their meanings are very similar. Let’s clarify it: in the case of an emergency locksmith service in Auckland, you are experiencing trouble at that very moment, such as getting locked out, being robbed or having your key break. The 24-hour locksmith services include all emergency situations as well as other urgent calls, which can be any job. Even if you don’t know which option you need, there’s no need to worry since in any case, you will be answered by the same team.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div className="bg-amber-50 rounded-3xl p-8 md:p-10 border border-amber-200 space-y-4">
              <h3 className="text-2xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Mobile Locksmith Auckland – We Come to You
              </h3>
              <p className="text-gray-700 text-base leading-relaxed">
                We also run a mobile locksmith operation in Auckland; we don't work from a single shopfront. Our vans are spread across the region, each one carrying the tools and stock to finish most jobs in one visit. This is part of what makes 24-hour coverage possible; we're not relying on one location to serve the whole city at 3am.
              </p>
            </div>

            <div className="bg-blue-50 rounded-3xl p-8 md:p-10 border border-blue-200 space-y-4">
              <h3 className="text-2xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                City Locksmith Coverage
              </h3>
              <p className="text-gray-700 text-base leading-relaxed">
                Our city locksmith teams cover Auckland Central and every surrounding region, from the CBD out to Rodney and the Hibiscus Coast. Wherever you're calling from, someone is close enough to reach you within a reasonable window, even outside standard hours.
              </p>
            </div>
          </div>

        </div>
      </section>

      {/* CAR LOCKSMITH & KEY CUTTING & RESPONSE TIMES */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
          
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div className="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-3">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Car size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">Car Locksmith Services Around the Clock</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                Vehicle issues make up a large share of our after-hours calls. Our car locksmith team in Auckland handles lockouts, lost keys, and car door lock repair Auckland-wide at any hour a car leaves someone stuck. If your car's lock mechanism itself has failed, not just the key, this is handled the same way as a standard lockout call.
              </p>
            </div>

            <div className="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-3">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Key size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">Key Cutting Auckland, Any Time</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                Standard key-cutting services in Auckland isn't limited to daytime hours either. Whether it's a spare house key, a car key, or a replacement for a lost one, our vans carry key-cutting equipment on every callout, so most keys are cut and handed over in the same visit.
              </p>
            </div>

            <div className="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-3">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Clock size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">Response Times</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                Response time depends on location and time of day. Across most of Auckland, our 24-hour team typically arrives within 20 to 40 minutes. Late-night callouts in outer regions can take a little longer, but a locksmith is still on the way as soon as you call.
              </p>
            </div>
          </div>

          <div className="bg-white rounded-3xl p-8 md:p-12 border border-gray-200 shadow-sm space-y-4">
            <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Choose Lostkey for 24-Hour Locksmith Auckland
            </h2>
            <p className="text-gray-700 text-base md:text-lg leading-relaxed">
              We answer the phone ourselves, at any hour, rather than routing calls through an overnight answering service that just takes a message. Every locksmith on the team is trained across residential, commercial, and automotive work, so a 3am call gets a locksmith who can actually handle whatever's gone wrong, not just one type of job. Pricing is confirmed with you before work starts, whatever the hour, and every job comes with the same workmanship guarantee as a daytime callout.
            </p>
          </div>

          <div>
            <h3 className="text-2xl font-black text-[#1F2937] mb-3">Areas We Cover</h3>
            <p className="text-gray-600 text-sm mb-6">Our 24-hour service runs across the full region. See the complete list of suburbs and regions on our <a href="areas-we-cover.html" className="text-[#0B1F3A] font-bold underline hover:text-[#F4C430]">Areas We Cover page</a>.</p>
            
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
              {[
                { region: "Auckland Central", desc: "CBD, Ponsonby, Parnell, and nearby suburbs." },
                { region: "North Shore", desc: "Takapuna, Albany, Devonport, and surrounding areas." },
                { region: "West Auckland", desc: "Henderson, New Lynn, Te Atatu, and nearby suburbs." },
                { region: "South Auckland", desc: "Manukau, Papatoetoe, Otahuhu, and surrounding areas." },
                { region: "East Auckland", desc: "Howick, Pakuranga, Botany, and nearby suburbs." }
              ].map((item, idx) => (
                <div key={idx} className="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                  <h4 className="font-bold text-[#0B1F3A] text-base flex items-center"><MapPin size={16} className="mr-1 text-[#F4C430]" /> {item.region}</h4>
                  <p className="text-xs text-gray-500">{item.desc}</p>
                </div>
              ))}
            </div>
          </div>

        </div>
      </section>

      {/* FREQUENTLY ASKED QUESTIONS */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              FREQUENTLY ASKED QUESTIONS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              24-Hour Locksmith FAQs
            </h2>
          </div>

          <div className="space-y-4">
            {faqs.map((faq, idx) => {
              const isOpen = openFaq === idx;
              return (
                <div key={idx} className="bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                  <button 
                    onClick={() => setOpenFaq(isOpen ? -1 : idx)}
                    className="w-full text-left p-6 flex justify-between items-center font-bold text-gray-900 text-base md:text-lg"
                  >
                    <span>{faq.q}</span>
                    <span className="w-8 h-8 rounded-full bg-white flex items-center justify-center ml-4 flex-shrink-0 text-[#0B1F3A]">
                      {isOpen ? <Minus size={18} /> : <Plus size={18} />}
                    </span>
                  </button>
                  {isOpen && (
                    <div className="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200/60 pt-4 bg-white">
                      {faq.a}
                    </div>
                  )}
                </div>
              );
            })}
          </div>
        </div>
      </section>

      {/* CONTACT / CALLOUT SECTION (WITH SPACING & CARD) */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-10 md:p-16 text-white text-center space-y-6 shadow-2xl relative overflow-hidden border border-[#132B4F]">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-2" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              ON CALL 24 HOURS A DAY
            </span>
            <h2 className="text-4xl md:text-6xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact Lostkey – Locksmith Auckland, Any Time
            </h2>
            <p className="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
              Whatever the hour, whatever the job, call <strong className="text-[#F4C430]">0800 828 345</strong>, and our team will help sort it or get you on the way to the right service. For more on who we are, visit our <a href="index.html" className="text-[#F4C430] font-bold underline">homepage</a> or read about our team on the <a href="about-us.html" className="text-[#F4C430] font-bold underline">About Us page</a>.
            </p>
            <div className="pt-4">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-xl uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                <Phone size={24} className="fill-current" />
                <span>Call Now: 0800 828 345</span>
              </a>
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
root.render(<TwentyFourHourLocksmithHtmlPage />);
    
</script>

<?php
include 'footer.php';
?>

