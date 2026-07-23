<?php
$pageTitle = "Residential Locksmith Auckland | Trusted Home Locksmith Services 24/7";
$pageDescription = "Residential Locksmith Auckland – 24/7 home lockout assistance, lock rekeying, lock replacement, deadbolt installation, smart locks, and key cutting across Auckland. Fast 20-40 min arrival.";
$currentPage = "services";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Clock, Calendar, Check, ArrowRight, AlertTriangle, Building, CreditCard,
  ShieldCheck, CheckCircle2, BadgeCheck, DollarSign, KeyRound, PenTool,
  Zap, Settings, Key, Unlock, Plus, Minus, Layers, Cpu, DoorClosed, Power
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const resServices = [
  {
    title: "Home Lockout Assistance",
    desc: "Locked out of your own house? Our home locksmith Auckland team gets you back inside without damaging the door, in most cases. Our emergency residential locksmith callouts run around the clock, not just business hours.",
    icon: DoorClosed
  },
  {
    title: "Lock Repair Services",
    desc: "A lock that sticks or jams usually just needs a repair, not a full replacement. We fix what we can first.",
    icon: Wrench
  },
  {
    title: "Lock Replacement",
    desc: "Sometimes a lock replacement is the better option, especially for older or damaged hardware.",
    icon: Shield
  },
  {
    title: "Lock Rekeying",
    desc: "Rekeying changes the inside of your lock so old keys stop working without swapping the whole lock. Common after moving house or losing a key.",
    icon: KeyRound
  },
  {
    title: "New Lock Installation",
    desc: "Building an extension or adding a new door? We install new locks to match your home's style.",
    icon: PenTool
  },
  {
    title: "Deadbolt Installation",
    desc: "Deadbolts add an extra layer of security to a front or back door, fitted alongside your existing lock.",
    icon: Lock
  },
  {
    title: "Smart Lock Installation",
    desc: "Want to unlock your door with a code or your phone? We install smart locks from most major brands sold in NZ.",
    icon: Cpu
  },
  {
    title: "Digital Door Locks",
    desc: "Digital locks suit family homes and rentals, letting you manage access without cutting a new key for everyone.",
    icon: Zap
  },
  {
    title: "Sliding Door Lock Repairs",
    desc: "Sliding doors use a different mechanism to standard doors. We repair the lock and the track that can cause it to jam.",
    icon: Settings
  },
  {
    title: "Window Lock Repairs & Upgrades",
    desc: "A broken window lock is a common, overlooked security gap. We repair and upgrade these as needed.",
    icon: ShieldCheck
  },
  {
    title: "Patio, Garage & Letterbox Locks",
    desc: "We also handle patio door locks, garage door locks, and letterbox locks, small jobs that matter for everyday security.",
    icon: Home
  },
  {
    title: "Key Cutting",
    desc: "Need a spare or replacement house key? Our vans carry key-cutting equipment, so most keys are ready the same visit.",
    icon: Key
  },
  {
    title: "Safe Installation and Opening",
    desc: "Need a safe installed or are locked out of one you own? We can help with both for most common home safe types.",
    icon: BadgeCheck
  }
];

const signsList = [
  "The key sticks or needs jiggling to turn",
  "The lock feels loose or wobbly",
  "Visible rust or wear on the lock face",
  "You've lost a key and never rekeyed",
  "The lock is more than 10 to 15 years old",
  "A previous break-in attempt left damage"
];

const workSteps = [
  {
    num: "01",
    title: "Contact Our Team",
    desc: "Call us and tell us what's happened, whether it's a lockout, a repair, or a security upgrade."
  },
  {
    num: "02",
    title: "On-Site Security Assessment",
    desc: "Our locksmith checks your current locks before recommending anything."
  },
  {
    num: "03",
    title: "We Recommend the Best Solution",
    desc: "We explain your options clearly, rekey, repair, or replace, with a price, before starting."
  },
  {
    num: "04",
    title: "Professional Installation or Repair",
    desc: "Work is carried out using stock from the van, so most jobs finish in one visit."
  },
  {
    num: "05",
    title: "Final Security Check",
    desc: "We test the lock and confirm everything works before we leave."
  }
];

const faqs = [
  {
    q: "What should I do if I'm locked out of my house?",
    a: "The first thing is to know whether there is a trustworthy neighbour, friend or close relative nearby, in case they do not have a spare key; if that is not the case, then the next thing is to find a reliable locksmith service and wait for assistance in a safe place."
  },
  {
    q: "Is it cheaper to rekey or replace locks?",
    a: "Re-keying is the preferred choice in terms of cost since it replaces the old pins in the lock but does not require the user to change lock systems or devices. A lock replacement is not necessary unless the keys do not work anymore after repeated usage or wear and tear."
  },
  {
    q: "Do I need to change the locks after moving into a new home?",
    a: "Absolutely. Re-keying or lock replacement should be conducted for all houses recently moved into, as you cannot know how many duplicates were made by the owner before you."
  },
  {
    q: "Can a locksmith open a door without damaging the lock?",
    a: "Yes, it is possible under most circumstances. The locksmith will use expert techniques of accessing the lock when it is possible, and drilling the lock will be the last resort."
  },
  {
    q: "Are smart locks safe for residential homes?",
    a: "Indeed. Up-to-date smart locks offer good home protection provided they are properly installed and featuring secure passwords, reliable applications, and timely updates. Some models offer keys as a backup possibility for additional assurance."
  },
  {
    q: "How much does a residential locksmith cost in Auckland?",
    a: "It can be said that the final amount will largely depend on service type, lock characteristics, and urgency of the situation. An excellent locksmith will inform you of the final charge before commencing any work."
  },
  {
    q: "How long does it take to rekey a house?",
    a: "Generally, most service calls for rekeying at the house will take from one hour to two, depending on the number of locks and doors. In some situations, more locks and more sophisticated types of locks may require additional time."
  },
  {
    q: "Can all the locks in my house be keyed alike?",
    a: "Indeed, it is possible to make the locks work with the same key, thus making the job considerably easier and guaranteeing the protection of your home."
  }
];

function ResidentialLocksmithPageContent() {
  const [openFaq, setOpenFaq] = useState(-1);

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="services" />

      {/* PAGE HERO BANNER */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/keys-on-belt.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <a href="index.php#services" className="hover:text-[#F4C430] transition-colors">Services</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Residential Locksmith Auckland</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Home size={14} className="mr-2" />
              24/7 MOBILE RESIDENTIAL LOCKSMITH
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[60px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Residential Locksmith Auckland – <span style={{ color: COLORS.yellow }}>Trusted Home Locksmith Services 24/7</span>
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
            Need a Residential Locksmith in Auckland?
          </h2>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            Are you unable to get into your home? Do you need someone to fix or change your lock? Our team of residential locksmiths in Auckland is available all day and night! We're a locksmith service located in Auckland that provides fast and reliable solutions throughout the region, including lock-outs, rekeying, and installing locks.
          </p>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            Home lock problems aren't always urgent, but sometimes they are. A jammed lock, a key that won't turn, or a lock that feels loose after years of use – whatever the issue, we can usually help the same day, using a fully stocked mobile van rather than sending you to a shop.
          </p>
        </div>
      </section>

      {/* OUR SERVICES GRID */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              FULL HOME SECURITY SOLUTIONS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Our Residential Locksmith Services
            </h2>
            <p className="text-gray-600 text-lg">
              We offer comprehensive locksmith services Auckland-wide, covering every part of a home that needs a lock.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {resServices.map((service, idx) => (
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

      {/* MOVED INTO NEW HOME & REKEY VS REPLACE & SMART LOCKS */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
          
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4 shadow-xl">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              NEW HOME SECURITY
            </span>
            <h2 className="text-3xl md:text-4xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Moved Into a New Home? Here's Why Rekeying Matters
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              You don't always know how many keys exist for a new home. A previous owner, tradesperson, or old tenant could still have one. Rekeying closes that gap without the cost of a full lock replacement, and it takes less time than most people expect.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div className="bg-amber-50 rounded-3xl p-8 md:p-10 border border-amber-200 space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Lock Rekeying vs. Lock Replacement – Which Option Is Right for You?
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Rekeying is generally a less expensive option and works well when you have locks that are still in good condition. However, if the lock itself is damaged, old or no longer secure, it may be advisable to replace the lock. Our locksmiths will come to your site and assess your locks before recommending the best option for your needs and budget.
              </p>
            </div>

            <div className="bg-blue-50 rounded-3xl p-8 md:p-10 border border-blue-200 space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Smart Locks vs Traditional Locks
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Traditional locks are simple and don't depend on batteries or an app. Smart locks add convenience, letting you unlock with a code, fob, or phone. Neither is automatically better, it comes down to your household and how comfortable you are relying on tech for your front door.
              </p>
            </div>
          </div>

        </div>
      </section>

      {/* SIGNS YOUR LOCKS NEED REPLACING */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-14">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              LOCK HARDWARE INSPECTION
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Signs Your Home Locks Need Replacing
            </h2>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            {signsList.map((sign, idx) => (
              <div key={idx} className="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex items-start space-x-4">
                <div className="w-10 h-10 rounded-full bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center flex-shrink-0 mt-0.5">
                  <AlertTriangle size={20} />
                </div>
                <p className="text-gray-800 font-bold text-base">{sign}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* HOW OUR SERVICE WORKS */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              SIMPLE 5-STEP PROCESS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How Our Residential Locksmith Service Works
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
            {workSteps.map((step, idx) => (
              <div key={idx} className="bg-gray-50 rounded-3xl p-6 border border-gray-200 flex flex-col justify-between">
                <div>
                  <span className="text-3xl font-black text-[#F4C430] block mb-4">{step.num}</span>
                  <h3 className="text-lg font-bold text-[#1F2937] mb-2">{step.title}</h3>
                  <p className="text-gray-600 text-xs leading-relaxed">{step.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* WHY CHOOSE & RESPONSE TIMES & TIPS & PRICING */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
          
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4">
            <h2 className="text-3xl md:text-4xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Choose Lostkey Residential Locksmiths?
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              We're a trusted and the best locksmith services provider in Auckland for a simple reason: we turn up, explain things clearly, and fix the problem properly the first time. Our team offers professional, experienced residential locksmith services across every Auckland suburb. Every job comes with a workmanship guarantee, and Afterpay is available if you'd rather spread the cost.
            </p>
          </div>

          <div className="space-y-6">
            <div className="max-w-3xl">
              <h2 className="text-3xl md:text-4xl font-black text-[#1F2937] mb-3" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Residential Locksmith Response Times Across Auckland
              </h2>
              <p className="text-gray-600 text-base leading-relaxed">
                Our residential locksmiths can reach you in 20 to 40 minutes depending on the time and location. Looking for a locksmith near your location? Our cars cover a majority of regions for your convenience to know it is close to your place.
              </p>
            </div>

            <div>
              <h3 className="text-xl font-bold text-[#1F2937] mb-2">Areas We Cover</h3>
              <p className="text-gray-500 text-sm mb-6">We provide 24/7 residential locksmith services across Auckland Central, North Shore, West Auckland, South Auckland, and East Auckland, along with every suburb in between.</p>
              
              <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                {[
                  { region: "Auckland Central", desc: "CBD, Ponsonby, Parnell, and nearby suburbs." },
                  { region: "North Shore", desc: "Takapuna, Albany, Devonport, and surrounding areas." },
                  { region: "West Auckland", desc: "Henderson, New Lynn, Te Atatū, and nearby suburbs." },
                  { region: "South Auckland", desc: "Manukau, Papatoetoe, Ōtāhuhu, and surrounding areas." },
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

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Home Security Tips from Our Locksmiths
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Create a spare key and give it to a trusted individual instead of hiding it under a doormat. Looking for the nearest duplicate key maker? We can provide this service while already working at your residence. Inspect your locks once a year, checking for loose or worn-out parts, and change the locks if you have moved in, lost your key, and so on.
              </p>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Residential Locksmith Pricing Guide
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Factors such as the nature of work, type of hardware used, and timing of service impact the costs of service. For instance, a straightforward lockout job tends to be cheaper than a complete lock change job and a re-key is usually cheaper than hardware replacement. We always give an estimated cost before the work begins.
              </p>
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
              Residential Locksmith FAQs
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
              24/7 HOME LOCKOUT & REKEYING
            </span>
            <h2 className="text-4xl md:text-6xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact Lostkey Residential Locksmith Auckland
            </h2>
            <p className="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
              Need a lock fixed or changed, or a spare key cut? Call our residential locksmith team based in Auckland on <strong className="text-[#F4C430]">0800 828 345</strong>, or call our mobile locksmith team for swift residential key cutting across the region.
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

      <window.FooterComponent currentPage="services" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<ResidentialLocksmithPageContent />);
</script>

<?php
include 'footer.php';
?>
