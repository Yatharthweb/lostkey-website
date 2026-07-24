<?php
$pageTitle = "Locksmith East Auckland | Trusted Local Locksmith Services | Lostkey";
$pageDescription = "Lostkey is the trusted East Auckland Locksmith for residential, commercial, automotive and emergency lockouts. Covering Howick, Pakuranga, Botany, Flat Bush and more.";
$currentPage = "areas";
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

const eaServices = [
  {
    title: "Emergency Locksmith East Auckland",
    desc: "Locked out in Pakuranga at midnight or stuck outside your Botany office on a weekend? We run a genuine 24 hour locksmith service, so the call gets answered and a van gets moving, any hour.",
    icon: Clock
  },
  {
    title: "Residential Locksmith East Auckland",
    desc: "House lockout, a rusted-up deadbolt in Bucklands Beach, or fresh locks needed after moving into a new place in Flat Bush, our residential locksmith work covers all of it.",
    icon: Home
  },
  {
    title: "Commercial Locksmith East Auckland",
    desc: "East Tāmaki's warehouses and Botany's shops both call on us for commercial locksmith jobs, from a quick office lockout to full master key systems for staff access across a whole building.",
    icon: Building
  },
  {
    title: "Automotive Locksmith East Auckland",
    desc: "Snapped a key in the ignition outside Howick Village, or locked your keys in the car at Botany Town Centre? Our automotive locksmith and car locksmith vans carry what's needed to sort most car lockout jobs right there in the car park.",
    icon: Car
  },
  {
    title: "Smart Locks & Keyless Entry",
    desc: "A lot of the newer builds in Flat Bush and Golflands already come smart-lock ready. We install and set up digital locks properly so you're not stuck troubleshooting a code at 11pm.",
    icon: Zap
  },
  {
    title: "Lock Rekeying",
    desc: "Just bought a place in Pakuranga or lost a key somewhere between home and work? We rekey locks so the old keys stop working without needing a whole new lock fitted.",
    icon: KeyRound
  },
  {
    title: "Lock Repairs & Lock Replacement",
    desc: "From a sliding door lock that's jammed at the beach house to a garage lock that won't budge, we cover door lock repair and full lock replacement for homes and businesses across the region.",
    icon: Wrench
  },
  {
    title: "Key Cutting & Key Duplication",
    desc: "Need extra keys cut for the whole family or a tricky older lock matched? Our key cutting service is usually done while you wait.",
    icon: Key
  }
];

const workSteps = [
  {
    num: "01",
    title: "Tell Us the Problem",
    desc: "Call us — Tell us what's happening, a lockout, a broken key, or a job you'd like quoted."
  },
  {
    num: "02",
    title: "Get a Time & Price",
    desc: "We check who's closest across East Auckland and brief them on your job before they head over. You'll get a realistic arrival time and an upfront quote."
  },
  {
    num: "03",
    title: "Job Sorted on the Spot",
    desc: "The job gets done properly — Not a rushed patch job that fails again in a month. We fix it so it actually holds, and we check it works perfectly before leaving."
  }
];

const faqs = [
  {
    q: "Do you cover the industrial areas around East Tāmaki, not just houses?",
    a: "Yes. East Tāmaki's warehouses and factories are a regular part of our commercial locksmith work, from roller door locks to full access control and master key setups for staff."
  },
  {
    q: "I'm in a townhouse in Flat Bush, can you still help with a lockout?",
    a: "Absolutely. Newer townhouse developments often have different door hardware to older standalone homes, and our team is used to working with both, so a Flat Bush house lockout gets handled the same as anywhere else."
  },
  {
    q: "My locks near Bucklands Beach are rusty from the sea air, can they be repaired?",
    a: "Often, yes. Salt air corrosion doesn't always mean the lock needs full replacing. We'll check it in person and give you an honest answer on whether a repair will hold up or whether it's time to replace it."
  },
  {
    q: "How much does a locksmith in East Auckland usually cost?",
    a: "It depends on the job, a simple lockout is cheaper than a full lock replacement or smart lock install. We always confirm the price with you before starting, so you know exactly what you're paying."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Howick Coastal", suburbs: ["Half Moon Bay", "Bucklands Beach", "Cockle Bay"] },
    { title: "Further Coastal", suburbs: ["Shelly Park", "Farm Cove", "Highland Park"] },
    { title: "Howick & Pakuranga", suburbs: ["Howick", "Sunnyhills", "Pakuranga"] },
    { title: "Botany Hub", suburbs: ["Botany", "Botany Downs", "Golflands"] },
    { title: "South & East", suburbs: ["Dannemora", "Flat Bush", "East Tāmaki"] }
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

export default function EastAucklandLocksmith() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="areas" /> : null}

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=2000&q=80" alt="Locksmith East Auckland" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">East Auckland's trusted local locksmith</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">East Auckland</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Need a locksmith in East Auckland you can count on? Don't worry, we can come to your Howick, Pakuranga, Botany, Flat Bush, or other locations you want. Our experienced team will provide you with locksmith services right where you need them, be it at your home or in your workplace.
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
            Every call is different. Sometimes the nature of the service call can change dramatically, but you can be sure that whatever the issue is that you have, whether it concerns your home, office or car, will be successfully resolved without you having to make another call!
          </p>
        </div>
      </section>

      {/* WHY EAST AUCKLAND NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why East Auckland Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                The eastern part of Auckland showcases various parts. Some, such as Pakuranga and Howick, contain older homes constructed in the 1990s. In other places, such as Flat Bush, newer modern homes or townhouses were built. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Additionally, the district of Tāmaki has its industrial sections consisting of many factories and warehouses, which requires advanced security systems instead of padlocks. Lastly, the coastal area of Half Moon Bay is highly affected by salty water.
              </p>
              <div className="bg-gray-50 p-6 rounded-2xl border-l-4 border-[#F4C430]">
                <p className="text-[#0B1F3A] font-medium italic">
                  "Because of this blend of technology, the locksmith in East Auckland must be adept in the use of older-style deadbolts, the latest smart locks, and everything that lies in between. That's where Lostkey comes in."
                </p>
              </div>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="East Auckland Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH EAST AUCKLAND SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Services in East Auckland</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-600 text-lg">Whatever's gone wrong, chances are we've already sorted the exact same problem for someone a few streets over.</p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {eaServices.map((service, idx) => (
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
              Lostkey provides the following areas with residential, automotive, commercial and emergency essential services right across East Auckland. 
            </p>
            <p className="text-gray-300 text-sm italic">
              Every suburb below has its own local page with call-out times and pricing specific to that area.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-4"><span className="text-[#F4C430] font-bold">Note:</span> Along this stretch of coastline, waterfront homes near Half Moon Bay and Shelly Park tend to call us for deadbolt and sliding door lock repairs more than most other parts of East Auckland.</p>
            <p>The newer homes and growing business parks around Flat Bush and East Tāmaki keep our commercial locksmith team busy with master key systems and access control setups.</p>
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
                Residential and Commercial Work in East Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Homes and businesses get handled a bit differently here, because the stakes are different. A house lockout or a broken key at home in Howick or Sunnyhills needs someone there fast, with a fix that leaves the family properly secure that night, so those calls jump the queue. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Commercial jobs around East Tāmaki's industrial estates or Botany's retail strip are more about access and timing, getting a commercial locksmith out before a warehouse opens for deliveries, or sorting a master key system so staff aren't juggling ten separate keys. The same local mobile locksmith van can easily do a home job in Flat Bush in the morning and a business one in East Tāmaki that afternoon.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking an East Auckland Locksmith Works</h2>
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
                Why Choose Lostkey in East Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Our vans operate in East Auckland consistently, thus avoiding a scenario whereby someone inexperienced in the geography of the region is being sent across town. Each job we perform is protected by a workmanship guarantee, and we provide an upfront quote, so you never have to worry about hidden charges appearing on the final invoice. If you are unable to pay for our services right away due to other financial commitments, you can always request Afterpay as a method of payment.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                People who call a local locksmith are usually going through some unfortunate occurrences; either they are locked out, expect someone to break into their homes, or have lost their keys. Therefore, we keep everything cool and simple at our office. Customers say that our technicians always explain the problems to them instead of simply disappearing after fixing something.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in East Auckland
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  In areas of East Auckland such as Pakuranga, Howick, and Botany, our locksmith East Auckland team typically arrives within 20 to 30 minutes. 
                </p>
                <p className="text-gray-300 leading-relaxed">
                  On the other hand, in locations such as Maraetai and Beachlands, it will take around 30 to 45 minutes due to traffic, etc. For any clarifications, give us a call rather than asking for an estimate.
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
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Frequently Asked Questions</h2>
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in East Auckland?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              Whatever the case may be, our locksmith East Auckland team is just a phone call away; get in touch with us day or night.
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

      {typeof window !== 'undefined' && window.FooterComponent ? <window.FooterComponent /> : null}
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<EastAucklandLocksmith />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<div id="root"></div>

<?php
include 'footer.php';
?>
