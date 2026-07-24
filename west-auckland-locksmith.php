<?php
$pageTitle = "Locksmith West Auckland | Trusted Local Locksmith Services | Lostkey";
$pageDescription = "Lostkey is the trusted West Auckland Locksmith for residential, commercial, automotive and emergency lockouts. Covering Henderson, New Lynn, Te Atatū and more.";
$currentPage = "areas";
include 'includes/header.php';
?>

<script type="text/babel" data-type="module">
import { createRoot } from 'react-dom/client';
import React, { useState } from 'react';
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

const waServices = [
  {
    title: "Residential Locksmith West Auckland",
    desc: "New home, lost keys, or just want a stronger front door? Our residential locksmith West Auckland service covers deadbolts, window locks, sliding doors, garage locks, and general door hardware repairs, so nothing in your home is left as an easy target.",
    icon: Home
  },
  {
    title: "Commercial Locksmith West Auckland",
    desc: "Businesses in the West Auckland area need a reliable locking system to protect their offices, shops, and warehouses. Our licensed commercial locksmiths can install a master key system and restricted key systems so that your business manager can easily restrict access in keeping with the staff changes in your company.",
    icon: Building
  },
  {
    title: "Automotive Locksmith West Auckland",
    desc: "Locked out of your car or need replacement keys cut on the spot? Our automotive locksmith service handles broken keys, lost car keys, and lockouts without the wait times or the price tag of a dealership visit. We also run a dedicated car key replacement service New Lynn residents can book same-day.",
    icon: Car
  },
  {
    title: "Emergency Locksmith West Auckland",
    desc: "Getting locked out never happens at a convenient time. Our emergency locksmith West Auckland crew is on call for house, office, and car lockouts around the clock, including weekends and public holidays.",
    icon: Clock
  },
  {
    title: "Mobile Locksmith West Auckland",
    desc: "Our mobile locksmith vans in West Auckland vans carry the tools to fix, replace, or fit a lock on-site, from a Henderson townhouse to a rural property out past Riverhead — no need to remove anything and drive it into a shop.",
    icon: MapPin
  },
  {
    title: "Lock Repair and Replacement",
    desc: "A broken lock, a sticky deadbolt, or a lock that's simply given up — we repair or replace locks on front doors, garages, and gates, and we'll always tell you honestly which option makes more sense for your situation.",
    icon: Wrench
  },
  {
    title: "Access Control and Master Key Systems",
    desc: "For offices and multi-unit buildings, we design access control setups with master key systems and restricted keys, so you decide exactly who can open which door, and copies can't be cut without your say-so.",
    icon: ShieldCheck
  },
  {
    title: "Digital Locks and Security Upgrades",
    desc: "Want to leave the keys behind altogether? We fit digital locks and other high-security locks for homes and businesses that want a proper security upgrade without a full renovation.",
    icon: Zap
  }
];

const workSteps = [
  {
    num: "01",
    title: "Tell Us the Problem",
    desc: "Booking a Locksmith West Auckland with Lostkey is simple. First, tell us what's happened — a lockout, lost keys, or a lock you'd like upgraded."
  },
  {
    num: "02",
    title: "Get a Time & Price",
    desc: "Second, we quote you a time window and a clear price before anyone drives out to you."
  },
  {
    num: "03",
    title: "Job Sorted on the Spot",
    desc: "Third, our mobile locksmith team arrives, finishes the job, and checks it works properly before leaving. No guessing on price, no second visit needed."
  }
];

const faqs = [
  {
    q: "How much does a locksmith cost in West Auckland?",
    a: "Cost depends on the job. A straightforward lock re-keying and lock repair will cost less than a complete lock replacement, while call-outs incurred on weekends or beyond regular working hours will normally cost slightly more than those done within the normal daytime hours. We always confirm the cost before proceeding with the job."
  },
  {
    q: "How quickly can a locksmith arrive in West Auckland?",
    a: "Most call-outs are reached within the hour, and lockouts are treated as a priority job. Exact timing depends on which suburb you're in and how busy the roads are."
  },
  {
    q: "Can a locksmith replace lost car keys?",
    a: "Absolutely. The automotive locksmith team from West Auckland can manufacture and program new keys for most vehicle brands and types on the site, which is the reason why our car key replacement service customers of New Lynn depend on us a lot."
  },
  {
    q: "Can a locksmith unlock my car without damage?",
    a: "In nearly all situations, that is correct. We make use of the correct lockout equipment that serves its purpose well, meaning that your paint, window seals, and door frame remain intact."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Central West", suburbs: ["Henderson", "Glendene", "Sunnyvale", "Te Atatu", "Te Atatu Peninsula"] },
    { title: "Inner West", suburbs: ["Avondale", "New Lynn", "Blockhouse Bay", "Green Bay", "Kelston"] },
    { title: "Ranges & Foothills", suburbs: ["Titirangi", "Glen Eden", "Swanson", "Ranui"] },
    { title: "North West Harbour", suburbs: ["Massey", "Westgate", "Hobsonville", "Hobsonville Point", "West Harbour", "Whenuapai"] },
    { title: "Rural West", suburbs: ["Waitakere", "Piha", "Muriwai", "Kumeu", "Huapai", "Riverhead"] }
  ];

  return (
    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      {regions.map((r, i) => (
        <div key={i} className="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
          <h4 className="font-bold text-[#0B1F3A] mb-4 flex items-center">
            <MapPin size={18} className="text-[#F4C430] mr-2" />
            {r.title}
          </h4>
          <ul className="space-y-2">
            {r.suburbs.map((s, j) => (
              <li key={j} className="text-gray-600 text-sm flex items-center hover:text-[#F4C430] transition-colors cursor-pointer">
                <span className="w-1.5 h-1.5 rounded-full bg-[#F4C430] mr-2"></span>
                <a href="#">{s} Locksmith</a>
              </li>
            ))}
          </ul>
        </div>
      ))}
    </div>
  );
};

const FAQItem = ({ faq, isOpen, onClick }) => {
  return (
    <div className={`border rounded-2xl transition-all duration-300 ${isOpen ? 'border-[#F4C430] bg-white shadow-md' : 'border-gray-200 bg-gray-50 hover:bg-white'}`}>
      <button className="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none" onClick={onClick}>
        <span className={`font-bold pr-8 leading-tight ${isOpen ? 'text-[#0B1F3A]' : 'text-gray-800'}`}>
          {faq.q}
        </span>
        <div className={`flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center transition-colors ${isOpen ? 'bg-[#F4C430] text-[#0B1F3A]' : 'bg-gray-200 text-gray-500'}`}>
          {isOpen ? <Minus size={16} strokeWidth={3} /> : <Plus size={16} strokeWidth={3} />}
        </div>
      </button>
      <div className={`overflow-hidden transition-all duration-300 ease-in-out ${isOpen ? 'max-h-96 opacity-100' : 'max-h-0 opacity-0'}`}>
        <div className="px-6 pb-6 pt-2 text-gray-600 text-sm leading-relaxed border-t border-gray-100 mt-2">
          {faq.a}
        </div>
      </div>
    </div>
  );
};

export default function WestAucklandLocksmith() {
  const HeaderComponent = window.HeaderComponent;
  const FooterComponent = window.FooterComponent;

  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <HeaderComponent currentPage="areas" />

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?auto=format&fit=crop&w=2000&q=80" alt="Locksmith West Auckland" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">West Auckland's trusted locksmith service</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">West Auckland</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Stuck outside your own front door? Snapped a key in the ignition? Need your locks changed before you hand back a rental? Lostkey is one of the most trusted locksmith companies in West Auckland whom the residents and businesses call when a lock stops working. From the older bungalows near Henderson to the lifestyle blocks out towards Kumeu, we know the area and we turn up when we say we will.
          </p>
          
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="tel:0800828345" className="w-full sm:w-auto px-8 py-4 bg-[#F4C430] hover:bg-white text-[#0B1F3A] rounded-xl font-black text-sm uppercase tracking-wider transition-all duration-300 flex items-center justify-center shadow-[0_0_20px_rgba(244,196,48,0.4)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] transform hover:-translate-y-1">
              <Phone size={18} className="mr-2" /> Call 0800 828 345
            </a>
            <a href="contact-us.html" className="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/20 rounded-xl font-black text-sm uppercase tracking-wider transition-all duration-300 flex items-center justify-center backdrop-blur-sm">
              <Mail size={18} className="mr-2" /> Book Online
            </a>
          </div>
          <p className="text-white mt-8 text-sm font-medium">
            Whether it's someone locked out, with lost keys, or needing a full set of replacement keys for a new home, our team is only a phone call away — day or night, seven days a week.
          </p>
        </div>
      </section>

      {/* WHY WEST AUCKLAND NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why West Auckland Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                West Auckland is a mixed bag of older weatherboard homes, newer builds, and rural properties with long driveways — and each one wears out its locks in a different way. Older doors in suburbs like New Lynn and Avondale often develop a broken lock or worn-out deadbolt long before anyone notices, while lifestyle blocks further out near Riverhead and Kumeu tend to need stronger garage locks and gate locks simply because they're further from everything else.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Add in normal daily life – kids losing keys, a door hardware fitting coming loose, or someone getting locked out after a long day – and it's easy to see why so many West Auckland households keep a locksmith's number handy. 
              </p>
              <div className="bg-gray-50 p-6 rounded-2xl border-l-4 border-[#F4C430]">
                <p className="text-[#0B1F3A] font-medium italic">
                  "That's exactly where Lostkey steps in. We handle everything from a quick lock repair to a full lock replacement, so your home, car, or workplace stays safe without the stress of waiting around."
                </p>
              </div>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="West Auckland Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH WEST AUCKLAND SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Locksmith West Auckland Services</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-600 text-lg">From residential to commercial work in West Auckland, we offer comprehensive services tailored to your security needs.</p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {waServices.map((service, idx) => (
              <div key={idx} className="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                <div className="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center mb-6 group-hover:bg-[#F4C430] group-hover:text-[#0B1F3A] transition-colors border border-gray-100">
                  <service.icon size={24} className="text-[#0B1F3A] group-hover:text-[#0B1F3A]" />
                </div>
                <h3 className="text-xl font-bold text-[#0B1F3A] mb-4 group-hover:text-[#F4C430] transition-colors">{service.title}</h3>
                <p className="text-gray-600 text-sm leading-relaxed flex-grow">{service.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* SUBURBS WE COVER */}
      <section className="py-20 bg-[#0B1F3A] text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-white mb-6">Suburbs We Cover</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-300 text-lg mb-4">
              Lostkey provides the following areas with residential, automotive, commercial and emergency essential services right across West Auckland. 
            </p>
            <p className="text-gray-300 text-sm italic">
              Every suburb below has its own local page with call-out times and pricing specific to that area.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-2"><span className="text-[#F4C430] font-bold">Note:</span> Out towards the ranges, older properties in Titirangi and Glen Eden tend to call us for door hardware repairs and sliding door fixes more than anywhere else, usually down to damp and general age rather than anything unusual.</p>
          </div>
        </div>
      </section>

      {/* RESIDENTIAL AND COMMERCIAL WORK */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="order-2 lg:order-1">
              <div className="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=600&q=80" alt="Residential Work" className="rounded-2xl shadow-lg w-full h-48 object-cover" />
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=600&q=80" alt="Commercial Work" className="rounded-2xl shadow-lg w-full h-48 object-cover mt-8" />
              </div>
            </div>
            <div className="space-y-6 order-1 lg:order-2">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Residential and Commercial Work in West Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                When it comes to home and business calls, they need to be treated differently due to their differences. In the residential case, we deal with issues like lockouts, locks that do not work, and swaps of deadbolts as well as rekeying locks after moving in/out. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                In the commercial situation, we talk about matters involving access control, master key systems, as well as restricted keys for buildings where more than one person has to get access. Nonetheless, the West Auckland Locksmith that you get on the day has all the tools ready to perform the job.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking a Locksmith West Auckland Works</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <div className="hidden md:block absolute top-12 left-1/6 right-1/6 h-0.5 bg-gray-200 z-0"></div>
            {workSteps.map((step, idx) => (
              <div key={idx} className="relative z-10 flex flex-col items-center text-center">
                <div className="w-24 h-24 rounded-full bg-white border-4 border-[#F4C430] flex items-center justify-center text-[#0B1F3A] font-black text-2xl shadow-xl mb-6">
                  {step.num}
                </div>
                <h3 className="text-xl font-bold text-[#0B1F3A] mb-3">{step.title}</h3>
                <p className="text-gray-600 text-sm leading-relaxed px-4">{step.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* WHY CHOOSE US & RESPONSE TIMES */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why Choose Lostkey in West Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Our West Auckland-based mobile locksmith and door repair company specializes in getting to you fast, which means we don't have to drive across the entire city to reach your location. We have years of experience installing and repairing locks from New Lynn to Kumeu, and our customers keep coming back because we are clear with our prices and won't try to sell you a new lock if repairing it is sufficient.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Our expert locksmith services across West Auckland apply to residential, automotive, and commercial locksmith needs, and are part of the reason we are considered one of the top-rated locksmith companies servicing West Auckland in the area. How to find a reliable locksmith in West Auckland? Look no further. If you have searched for a Locksmith West Auckland on an unlucky day, you may already be familiar with our services.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in West Auckland
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  Affordable emergency locksmiths in West Auckland know that when you're stuck outside, minutes seem eternally long. Hence, every Locksmith West Auckland job is taken with utmost care in terms of time.
                </p>
                <p className="text-gray-300 leading-relaxed">
                  Most jobs are completed within an hour barring the fact that traffic may play its part.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ SECTION */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Locksmith West Auckland FAQ</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
          </div>
          <div className="space-y-4">
            {faqs.map((faq, idx) => (
              <FAQItem 
                key={idx} 
                faq={faq} 
                isOpen={openFaq === idx} 
                onClick={() => setOpenFaq(openFaq === idx ? -1 : idx)} 
              />
            ))}
          </div>
        </div>
      </section>

      {/* CTA SECTION */}
      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-gradient-to-br from-[#0B1F3A] to-gray-900 rounded-3xl p-10 md:p-14 text-white text-center shadow-2xl relative overflow-hidden">
            <div className="absolute top-0 right-0 w-64 h-64 bg-[#F4C430] opacity-5 rounded-full blur-3xl transform translate-x-20 -translate-y-20"></div>
            <div className="absolute bottom-0 left-0 w-64 h-64 bg-[#F4C430] opacity-5 rounded-full blur-3xl transform -translate-x-20 translate-y-20"></div>
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in West Auckland?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              In case of getting locked out, having a malfunctioning broken lock, or needing to install better security systems on your property, Lostkey is West Auckland's trusted locksmith service here to help. 
            </p>
            <div className="flex flex-col sm:flex-row justify-center items-center gap-4 relative z-10 mb-8">
              <a href="tel:0800828345" className="px-8 py-4 bg-[#F4C430] hover:bg-white text-[#0B1F3A] rounded-xl font-black text-sm uppercase tracking-wider transition-all duration-300 flex items-center shadow-[0_0_20px_rgba(244,196,48,0.3)] transform hover:-translate-y-1 w-full sm:w-auto justify-center">
                <Phone size={18} className="mr-2" /> 0800 828 345
              </a>
              <a href="contact-us.html" className="px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/20 rounded-xl font-black text-sm uppercase tracking-wider transition-all duration-300 flex items-center backdrop-blur-sm w-full sm:w-auto justify-center">
                <Mail size={18} className="mr-2" /> Contact Us
              </a>
            </div>
            <p className="text-sm text-gray-400 relative z-10">
              Check our <a href="residential-locksmith-auckland.html" className="text-[#F4C430] hover:underline">residential locksmith</a>, <a href="index.html#contact" className="text-[#F4C430] hover:underline">commercial locksmith</a>, <a href="automotive-locksmith-auckland.html" className="text-[#F4C430] hover:underline">automotive locksmith</a>, and <a href="emergency-locksmith-auckland.html" className="text-[#F4C430] hover:underline">emergency locksmith</a> pages for more on how we can help.
            </p>
          </div>
        </div>
      </section>

      <FooterComponent />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<WestAucklandLocksmith />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<div id="root"></div>

<?php
include 'includes/footer.php';
?>
