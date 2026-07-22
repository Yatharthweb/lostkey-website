<?php
$pageTitle = "About Lostkey | Auckland's Mobile Locksmith Team 24/7";
$pageDescription = "Learn about Lostkey - Auckland's New Zealand-owned mobile locksmith business. 5+ years experience, 5,000+ jobs done, fast 20-40 min response, 24/7 emergency service across homes, businesses & vehicles.";
$currentPage = "about";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Facebook, Twitter, Youtube, Zap, BadgeCheck, DollarSign, Settings, KeyRound,
  Check, ArrowRight, AlertTriangle, Building, CreditCard, ShieldCheck, CheckCircle2
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

const whatWeDoList = [
  {
    title: "Emergency Lockouts",
    subtitle: "Homes, apartments, offices, and vehicles",
    icon: AlertTriangle,
    desc: "Fast emergency lockout response anytime, day or night across Auckland. We gain entry quickly using non-destructive methods wherever possible."
  },
  {
    title: "Lock Repairs & Replacements",
    subtitle: "Front doors, back doors, deadbolts, and windows",
    icon: Wrench,
    desc: "Expert repairs and precision replacements for all types of door and window locks, deadbolts, and high-security lock mechanisms."
  },
  {
    title: "Rekeying",
    subtitle: "For new homeowners, tenants, or lost keys",
    icon: KeyRound,
    desc: "Change lock tumblers so old keys no longer work. An affordable way to restore peace of mind when moving into a new property or after losing keys."
  },
  {
    title: "Car Key & Transponder Replacement",
    subtitle: "Cut and programmed on-site",
    icon: Car,
    desc: "Full automotive locksmith service. Mobile cutting and programming for spare or lost car keys, transponders, and keyless entry remotes."
  },
  {
    title: "Commercial Locksmith Work",
    subtitle: "Master key systems and access control",
    icon: Building,
    desc: "Comprehensive business security including master keying, restricted key systems, digital access control, and commercial door hardware."
  },
  {
    title: "Safes",
    subtitle: "Supply, repair, and servicing",
    icon: ShieldCheck,
    desc: "Safe installation, opening, maintenance, and lock servicing for home and commercial security safes."
  }
];

const whyChooseList = [
  {
    title: "We're there when you need us",
    icon: Clock,
    desc: "Our locksmith team is on call 24 hours a day, every day of the year, including public holidays.",
    tag: "24/7 365 Days"
  },
  {
    title: "We come to you",
    icon: MapPin,
    desc: "As a mobile locksmith service, our vans are spread across Auckland, so most callouts are answered within 20 to 40 minutes.",
    tag: "20-40 Min Response"
  },
  {
    title: "We stand by our work",
    icon: BadgeCheck,
    desc: "Every job comes with a workmanship guarantee. If something we've fitted isn't right, we come back and fix it at no extra cost.",
    tag: "Guaranteed"
  },
  {
    title: "We're upfront about pricing",
    icon: DollarSign,
    desc: "You'll know the cost before we start the job, not after. No hidden fees or unexpected surprises.",
    tag: "Zero Surprises"
  },
  {
    title: "We make it easier to pay",
    icon: CreditCard,
    desc: "Afterpay is available on our services, so an unexpected callout doesn't have to be paid in full upfront.",
    tag: "Afterpay Available"
  }
];

function AboutUsPageContent() {
  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="about" />

      {/* PAGE HERO / BREADCRUMB */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="absolute inset-0 opacity-10 bg-[radial-gradient(#F4C430_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div className="absolute -top-24 -right-24 w-96 h-96 bg-[#F4C430]/15 rounded-full blur-3xl"></div>
        <div className="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">About Us</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Shield size={14} className="mr-2 fill-current" />
              NEW ZEALAND OWNED & OPERATED
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[64px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              About <span style={{ color: COLORS.yellow }}>Lostkey</span>
            </h1>

            <h2 className="text-2xl sm:text-3xl font-bold text-gray-200 mb-6 tracking-tight">
              Auckland's Mobile Locksmith Team, On Call 24/7
            </h2>

            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl font-medium">
              Locked out, lost a key, or need a lock fixed properly? Lostkey is a New Zealand-owned locksmith business in Auckland, covering homes, businesses, and vehicles right across the city. Whatever the job, we come to you, day or night.
            </p>

            <div className="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-12 pt-10 border-t border-gray-800">
              <div className="flex flex-col">
                <span className="text-3xl md:text-4xl font-black" style={{ color: COLORS.yellow }}>5+</span>
                <span className="text-xs uppercase tracking-wider font-bold text-gray-400 mt-1">Years Building Trust</span>
              </div>
              <div className="flex flex-col">
                <span className="text-3xl md:text-4xl font-black" style={{ color: COLORS.yellow }}>5,000+</span>
                <span className="text-xs uppercase tracking-wider font-bold text-gray-400 mt-1">Jobs Completed</span>
              </div>
              <div className="flex flex-col">
                <span className="text-3xl md:text-4xl font-black" style={{ color: COLORS.yellow }}>20-40m</span>
                <span className="text-xs uppercase tracking-wider font-bold text-gray-400 mt-1">Average Response</span>
              </div>
              <div className="flex flex-col">
                <span className="text-3xl md:text-4xl font-black" style={{ color: COLORS.yellow }}>24/7</span>
                <span className="text-xs uppercase tracking-wider font-bold text-gray-400 mt-1">On Call Every Day</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* OUR STORY SECTION */}
      <section className="py-20 lg:py-28 bg-white relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div className="lg:col-span-5 relative">
              <div className="relative z-10 rounded-3xl overflow-hidden shadow-2xl border-4 border-white">
                <img 
                  src="key-locksmith.jpeg" 
                  alt="Lostkey mobile locksmith technician working on lock" 
                  className="w-full h-[480px] object-cover"
                />
                <div className="absolute bottom-6 left-6 right-6 bg-[#0B1F3A]/95 backdrop-blur-md p-6 rounded-2xl border border-white/20 text-white">
                  <div className="flex items-center space-x-3 mb-2">
                    <div className="w-10 h-10 rounded-full flex items-center justify-center font-black text-black" style={{ backgroundColor: COLORS.yellow }}>
                      <Check size={20} strokeWidth={3} />
                    </div>
                    <div>
                      <h4 className="font-bold text-base text-white">Genuinely Local Operation</h4>
                      <p className="text-xs text-gray-300">Trained locksmiths — no call centres, no random contractors.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div 
                className="absolute -bottom-8 -right-8 w-full h-full rounded-3xl z-0 hidden sm:block" 
                style={{ backgroundColor: COLORS.yellow }}
              ></div>
            </div>

            <div className="lg:col-span-7">
              <span 
                className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                NZ OWNED & BUILT FOR SPEED
              </span>

              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-8" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Our Story
              </h2>

              <div className="space-y-6 text-gray-600 text-lg leading-relaxed font-normal">
                <p className="text-xl font-medium text-[#1F2937] leading-relaxed">
                  Lostkey started with a simple idea: locksmith call-outs shouldn't mean waiting around all day or getting hit with a surprise bill.
                </p>
                <p>
                  We've spent 5+ years building a team that turns up fast, explains what's wrong, and fixes it properly the first time. Every van on the road carries the tools and stock to finish most jobs in a single visit, rather than sending someone away to "come back with parts".
                </p>
                <p>
                  We've now completed more than <strong className="text-[#1F2937] font-bold">5,000+ jobs across Auckland</strong>, from simple lockouts to full commercial security fit-outs. That number keeps growing every week, but the way we work hasn't changed — turn up fast, do it right, and treat every job like it's the only one that matters.
                </p>
                <p className="bg-[#FFF8E1] border-l-4 border-[#F4C430] p-5 rounded-r-2xl text-[#1F2937] font-medium">
                  We're proud to be a genuinely local operation. Every job is done by our own trained locksmiths, not a call centre passing your details on to a random contractor.
                </p>
              </div>

              <div className="grid grid-cols-2 sm:grid-cols-3 gap-4 mt-8 pt-6 border-t border-gray-100">
                <div className="flex items-center space-x-3">
                  <BadgeCheck size={24} style={{ color: COLORS.yellow }} />
                  <span className="text-sm font-bold text-gray-800">100% Workmanship Guarantee</span>
                </div>
                <div className="flex items-center space-x-3">
                  <Wrench size={24} style={{ color: COLORS.yellow }} />
                  <span className="text-sm font-bold text-gray-800">Fully Stocked Mobile Vans</span>
                </div>
                <div className="flex items-center space-x-3">
                  <Clock size={24} style={{ color: COLORS.yellow }} />
                  <span className="text-sm font-bold text-gray-800">20-40 Min Auckland Callout</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* WHAT WE DO SECTION */}
      <section className="py-20 lg:py-28 bg-gray-50 border-y border-gray-100 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              COMPREHENSIVE LOCKSMITH SERVICES
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What We Do
            </h2>
            <p className="text-gray-500 text-lg">
              From emergency lockouts to complex commercial installations, our mobile team carries the right equipment to handle your job on the spot.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {whatWeDoList.map((item, idx) => (
              <div 
                key={idx}
                className="bg-white rounded-3xl p-8 border border-gray-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group"
              >
                <div>
                  <div className="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-[#F4C430] border border-gray-100 flex items-center justify-center mb-6 transition-colors duration-300">
                    <item.icon size={28} className="text-[#1F2937]" />
                  </div>
                  <h3 className="text-2xl font-bold text-[#1F2937] mb-2 group-hover:text-[#F4C430] transition-colors leading-tight">
                    {item.title}
                  </h3>
                  <p className="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">
                    {item.subtitle}
                  </p>
                  <p className="text-gray-600 text-base leading-relaxed">
                    {item.desc}
                  </p>
                </div>

                <div className="pt-6 mt-6 border-t border-gray-100 flex items-center justify-between text-xs font-bold uppercase tracking-wider text-[#1F2937] group-hover:text-[#F4C430]">
                  <span>On-Site Service</span>
                  <ArrowRight size={16} className="group-hover:translate-x-1 transition-transform" />
                </div>
              </div>
            ))}
          </div>

          <div className="mt-16 bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
            <div className="space-y-2 text-center md:text-left">
              <h3 className="text-2xl md:text-3xl font-bold">Need assistance right now?</h3>
              <p className="text-gray-300 text-base">Our mobile locksmith units are spread across Auckland, ready to respond.</p>
            </div>
            <a 
              href="tel:0800828345"
              className="px-8 py-4 font-black tracking-wider text-sm uppercase rounded-full shadow-lg hover:brightness-110 transition-all flex items-center flex-shrink-0"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Phone size={18} className="mr-2" />
              Call 0800 828 345
            </a>
          </div>
        </div>
      </section>

      {/* WHY CHOOSE LOSTKEY SECTION */}
      <section className="py-20 lg:py-28 bg-white relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              WHY KIWIS TRUST US
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Choose Lostkey
            </h2>
            <p className="text-gray-500 text-lg">
              We're committed to providing the highest standard of locksmith service with total transparency and care.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {whyChooseList.map((item, idx) => (
              <div 
                key={idx}
                className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col justify-between relative overflow-hidden"
              >
                <div 
                  className="absolute top-0 right-0 px-4 py-1.5 rounded-bl-2xl text-[11px] font-black uppercase tracking-wider"
                  style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                >
                  {item.tag}
                </div>

                <div>
                  <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6">
                    <item.icon size={26} className="text-[#F4C430]" />
                  </div>
                  <h3 className="text-2xl font-bold text-[#1F2937] mb-4 leading-tight">
                    {item.title}
                  </h3>
                  <p className="text-gray-600 text-base leading-relaxed">
                    {item.desc}
                  </p>
                </div>

                <div className="pt-6 mt-6 border-t border-gray-100 flex items-center space-x-2 text-xs font-bold text-gray-400">
                  <CheckCircle2 size={16} className="text-emerald-500" />
                  <span>Lostkey Standard Guarantee</span>
                </div>
              </div>
            ))}

            <div className="bg-[#0B1F3A] text-white rounded-3xl p-8 shadow-xl flex flex-col justify-between">
              <div>
                <span className="inline-block text-[11px] font-black uppercase tracking-widest text-[#F4C430] mb-4">
                  GENUINELY LOCAL & LICENSED
                </span>
                <h3 className="text-2xl font-bold text-white mb-4 leading-tight">
                  Trained Locksmiths on Every Job
                </h3>
                <p className="text-gray-300 text-base leading-relaxed">
                  No third-party call centres. When you call Lostkey, you speak directly with our team and get an authentic Auckland locksmith at your door.
                </p>
              </div>
              <div className="pt-6 mt-6 border-t border-gray-800 flex items-center justify-between text-xs font-bold text-[#F4C430]">
                <span>Auckland Wide Coverage</span>
                <ShieldCheck size={20} />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* WHERE WE WORK SECTION */}
      <section id="areas-we-cover" className="py-20 lg:py-28 bg-[#0B1F3A] text-white relative overflow-hidden">
        <div className="absolute top-1/2 left-0 w-96 h-96 bg-[#F4C430]/10 rounded-full blur-3xl"></div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div className="lg:col-span-5 space-y-6">
              <span 
                className="inline-block text-xs font-black uppercase tracking-widest px-5 py-2 rounded-full"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                MOBILE SERVICE LOCATIONS
              </span>
              
              <h2 className="text-4xl md:text-5xl font-black text-white tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Where We Work
              </h2>

              <p className="text-gray-300 text-lg leading-relaxed font-medium">
                We cover the full Auckland region, with strategically positioned mobile locksmith vans across the city for rapid 20 to 40 minute arrival.
              </p>

              <div className="p-6 bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 space-y-3">
                <div className="flex items-center space-x-3 text-[#F4C430]">
                  <MapPin size={22} />
                  <span className="font-bold text-base text-white">Need a specific suburb checked?</span>
                </div>
                <p className="text-sm text-gray-300">
                  See the full list of suburbs we service on our Areas We Cover section or speak with our dispatcher now.
                </p>
                <a 
                  href="#contact"
                  className="inline-flex items-center text-xs font-bold uppercase tracking-wider text-[#F4C430] hover:underline pt-2"
                >
                  Contact Us For Immediate Dispatch <ArrowRight size={14} className="ml-1" />
                </a>
              </div>
            </div>

            <div className="lg:col-span-7">
              <div className="grid grid-cols-2 sm:grid-cols-4 gap-4">
                {serviceAreas.map((area, idx) => (
                  <div 
                    key={idx}
                    className="bg-white/10 hover:bg-[#F4C430] hover:text-[#0B1F3A] backdrop-blur-sm border border-white/15 p-5 rounded-2xl transition-all duration-300 group cursor-pointer text-center flex flex-col items-center justify-center space-y-3"
                  >
                    <div className="w-10 h-10 rounded-full bg-white/10 group-hover:bg-[#0B1F3A] flex items-center justify-center text-[#F4C430] transition-colors">
                      <MapPin size={18} />
                    </div>
                    <span className="font-bold text-sm md:text-base leading-tight">
                      {area}
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* GET IN TOUCH & CONTACT FORM */}
      <section id="contact" className="py-20 lg:py-28 bg-white border-t border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <div className="flex flex-col justify-center pr-0 lg:pr-12">
              <span 
                className="inline-block text-xs font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6 self-start"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                GET IN TOUCH
              </span>
              <h2 className="text-4xl md:text-[44px] font-black mb-6 leading-tight text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Ready to Help You, Day or Night
              </h2>
              <p className="text-gray-600 text-lg mb-8 leading-relaxed">
                Whether it's a home, a car, or a business, our team is ready to help. Call <strong className="text-[#1F2937]">0800 828 345</strong> to talk to a member of our team now, or get in touch online, and we'll be back to you shortly.
              </p>

              <div className="mb-10">
                <a 
                  href="tel:0800828345" 
                  className="inline-flex items-center space-x-4 border border-gray-300 rounded-full p-2 pr-8 hover:border-[#0B1F3A] transition-all group bg-gray-50"
                >
                  <div 
                    className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform"
                    style={{ backgroundColor: COLORS.yellow }}
                  >
                    <Phone size={22} style={{ color: COLORS.black }} />
                  </div>
                  <div className="flex flex-col text-left">
                    <span className="text-[11px] uppercase tracking-widest text-gray-500 font-bold mb-0.5">Call Us 24/7</span>
                    <span className="font-black text-2xl tracking-wide leading-none text-[#1F2937]">0800 828 345</span>
                  </div>
                </a>
              </div>

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

              <div className="flex space-x-4">
                {[
                  { icon: Facebook, label: 'Facebook' },
                  { icon: Twitter, label: 'Twitter' },
                  { icon: Youtube, label: 'YouTube' }
                ].map((social, idx) => (
                  <a key={idx} href="#" className="w-10 h-10 flex items-center justify-center border border-gray-300 hover:border-[#0B1F3A] hover:bg-[#0B1F3A] hover:text-white transition-all text-[#1F2937]" aria-label={social.label}>
                    <social.icon size={16} />
                  </a>
                ))}
              </div>
            </div>

            <div className="bg-[#0B1F3A] p-10 md:p-14 lg:p-16 relative w-full flex flex-col justify-center rounded-3xl overflow-hidden shadow-2xl">
               <h3 className="text-3xl font-bold text-white mb-2" style={{ fontFamily: "'Inter Tight', sans-serif" }}>Get In Touch Online</h3>
               <p className="text-gray-400 text-sm mb-8">Send us your inquiry and our Auckland team will respond shortly.</p>
               <form className="space-y-6 relative z-10 w-full">
                  <div>
                    <input type="text" placeholder="Your Name" className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" />
                  </div>
                  <div>
                    <input type="email" placeholder="Your Email Address" className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors" />
                  </div>
                  <div className="flex border-b border-[#132B4F] focus-within:border-[#F4C430] transition-colors items-center">
                    <div className="flex items-center pr-3 py-3 text-gray-400 text-xs font-bold">
                      <span className="mr-2 text-white">🇳🇿 +64</span>
                    </div>
                    <input type="tel" placeholder="Phone Number" className="w-full bg-transparent text-white placeholder-gray-500 py-3 text-sm pl-2 focus:outline-none" />
                  </div>
                  <div>
                    <textarea placeholder="Describe how we can help..." rows={3} className="w-full bg-transparent border-b border-[#132B4F] text-white placeholder-gray-500 py-3 text-sm focus:outline-none focus:border-[#F4C430] transition-colors resize-none"></textarea>
                  </div>
                  <div className="pt-4">
                    <button type="button" className="px-8 py-4 font-black tracking-widest text-xs uppercase transition-all hover:brightness-110 shadow-lg rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                      SEND INQUIRY
                    </button>
                  </div>
               </form>
               <div className="absolute bottom-0 right-0 w-40 h-28 opacity-40" style={{ backgroundImage: `radial-gradient(${COLORS.yellow} 3px, transparent 3px)`, backgroundSize: '16px 16px' }}></div>
            </div>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="about" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<AboutUsPageContent />);
</script>

<?php
include 'footer.php';
?>
