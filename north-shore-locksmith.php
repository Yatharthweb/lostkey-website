<?php
$pageTitle = "North Shore Locksmith | Trusted Local Locksmith Services in Auckland";
$pageDescription = "Lostkey is the trusted North Shore Locksmith for residential, commercial, automotive and emergency lockouts. Covering Takapuna, Albany, Browns Bay and more.";
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

const nsServices = [
  {
    title: "Residential Locksmith North Shore",
    desc: "We provide services related to home locksmiths, whether you have newly shifted to this place, lost your keys or are looking to make your deadbolt. The list includes installation and replacement of locks of main doors, sliding doors, window doors, garage doors and mailboxes, too.",
    icon: Home
  },
  {
    title: "Commercial Locksmith North Shore",
    desc: "Businesses such as shops, warehouses, and offices need reliable locking mechanisms in place. Our team of commercial locksmiths provides businesses with master key locking mechanisms so that they can access doors while their personnel can only open certain doors as needed.",
    icon: Building
  },
  {
    title: "Automotive Locksmith North Shore",
    desc: "Have you misplaced your keys in the vehicle, broken a key inside of the ignition, or are looking for spare key cutting? The auto locksmith service provides on-site assistance for all car lockout jobs and broken keys, without making you wait excessively as you would at a dealership.",
    icon: Car
  },
  {
    title: "Emergency Locksmith North Shore",
    desc: "Lockouts don't wait for business hours, and neither do we. Our emergency locksmith team in North Shore is on call for house lockout, office lockout, and car lockout jobs, day or night, seven days a week.",
    icon: Clock
  },
  {
    title: "North Shore Mobile Locksmith",
    desc: "Our North Shore mobile locksmith vans carry everything needed to fix, rekey, or replace a lock right there on your doorstep. In most cases, there's no need to remove the lock or take it anywhere.",
    icon: MapPin
  },
  {
    title: "Lock Repair and Replacement",
    desc: "From a sticky deadbolt to a lock that won't turn at all, we take care of lock repair and lock replacement for front doors, garages, and gates.",
    icon: Wrench
  },
  {
    title: "Rekey Locks",
    desc: "Have you recently relocated or collected the keys from a previous tenant? We can handle the rekeying of your locks at a fraction of the cost, as it means you don't have to replace them entirely. Cost to rekey locks North Shore Auckland varies, so call us to find out.",
    icon: KeyRound
  },
  {
    title: "Smart Locks and Keyless Entry",
    desc: "Want to open your front door with your phone instead of a key? We fit smart locks and keyless entry systems for homes and offices, along with digital locks for a bit of extra convenience.",
    icon: Zap
  }
];

const workSteps = [
  {
    num: "01",
    title: "Tell Us the Problem",
    desc: "Booking a locksmith in North Shore with Lostkey takes three simple steps. First, call or message us and tell us what's going on — a lockout, a broken key, or a lock you want changed."
  },
  {
    num: "02",
    title: "Get a Time & Price",
    desc: "Second, we give you a time window and an honest price before anyone drives out. No surprise charges."
  },
  {
    num: "03",
    title: "Job Sorted on the Spot",
    desc: "Third, our North Shore mobile locksmith arrives, sorts the job on the spot, and tests the lock before leaving. No waiting around."
  }
];

const faqs = [
  {
    q: "How much does a locksmith cost in Auckland?",
    a: "Locate a licensed service provider that has real reviews in the area and is transparent about its prices. Find a locksmith North Shore expert who can tell whether your lock needs repairing or has to be replaced."
  },
  {
    q: "Is it cheaper to rekey locks or replace them?",
    a: "Typically, rekeying is less expensive than lock replacement. This is because rekeying only entails using the hardware and making a quick adjustment while changing the keys which opens the lock. Replacement is needed if the lock is broken, too old or you are looking to upgrade to a more secure lock, like a smart lock."
  },
  {
    q: "How to find a reliable locksmith on the North Shore, Auckland?",
    a: "Locate a licensed service provider that has real reviews in the area and is transparent about its prices. Find a locksmith expert in North Shore who can tell whether your lock needs repairing or has to be replaced."
  },
  {
    q: "How quickly can a locksmith reach me in North Shore, Auckland?",
    a: "The majority of emergency locksmith call-outs will arrive in under one hour. Urgent lockouts are also treated as high priority. The specific time will depend on how busy the traffic is around your area and suburb."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Central & East Coast", suburbs: ["Takapuna", "Milford", "Forrest Hill", "Sunnynook", "Hillcrest"] },
    { title: "Coastal North", suburbs: ["Browns Bay", "Mairangi Bay", "Campbells Bay", "Castor Bay", "Torbay", "Long Bay"] },
    { title: "Harbour Side", suburbs: ["Devonport", "Belmont", "Bayswater"] },
    { title: "Upper Harbour & West", suburbs: ["Birkenhead", "Northcote", "Beach Haven", "Birkdale", "Greenhithe"] },
    { title: "North & Commercial", suburbs: ["Albany", "Rosedale", "Glenfield", "Wairau Valley"] }
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
              <li key={j} className="text-gray-600 text-sm flex items-center">
                <span className="w-1.5 h-1.5 rounded-full bg-[#F4C430] mr-2"></span>
                {s} Locksmith
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

export default function NorthShoreLocksmith() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="areas" /> : null}

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=80" alt="North Shore Locksmith Auckland" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">Local North Shore Locksmith Team</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            North Shore <span className="text-[#F4C430]">Locksmith</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Are you locked out of your own home? Did you break your key in the lock? Do you need to change your lock before the weekend? Lostkey is the trusted locksmith in North Shore that Auckland residents turn to when they have a lock issue. We know the ins and outs of every suburb and always arrive on time.
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
            Whether it's a house lockout, lost keys, or a full security upgrade for your office, the locksmiths North Shore families and business owners trust are only a phone call away — any day, any time.
          </p>
        </div>
      </section>

      {/* WHY NORTH SHORE NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why North Shore Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                The salty air and wind by the sea affect locks in a way that people don't always notice. For example, homes that are close to the ocean, such as Browns Bay and Mairangi Bay, experience the deterioration of lock hinges, while homes that are built further inland do not see them rust and break for many years. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                On top of that, there is the everyday life of a family to deal with — sharing keys among the kids, a lock that has aging issues, or a broken-off key in the lock. All this makes it clear why so many people living on the North Shore of Auckland simply have a phone number of a locksmith saved on their phones.
              </p>
              <div className="bg-gray-50 p-6 rounded-2xl border-l-4 border-[#F4C430]">
                <p className="text-[#0B1F3A] font-medium italic">
                  "That's where Lostkey comes in. We handle everything from a quick lock repair to a full lock replacement, so your home, car, or workplace stays safe without the stress of waiting around."
                </p>
              </div>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="North Shore Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR NORTH SHORE LOCKSMITH SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our North Shore Locksmith Services</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-600 text-lg">From residential to commercial work in North Shore, we offer comprehensive services tailored to your security needs.</p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {nsServices.map((service, idx) => (
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
              Lostkey provides the following areas with residential, automotive, commercial, and emergency essential services right across the North Shore.
            </p>
            <p className="text-gray-300 text-sm italic">
              Every suburb below has its own local page with details on call-out times and pricing for that area.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-2"><span className="text-[#F4C430] font-bold">Note:</span> Along the coast, salt air tends to wear down lock hardware faster, so Browns Bay, Mairangi Bay, and Long Bay are suburbs we visit for lock repairs and rekeys on a regular basis.</p>
            <p>This area also covers Locksmiths in Wairau Valley and surrounding North Shore areas, where a lot of our commercial and office lockout call-outs come from.</p>
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
                Residential and Commercial Work in North Shore
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Each job is unique, which is why we divide our services into residential and commercial. In residential services, we take care of house lockouts, broken key issues, deadbolt installations, and rekeying if the customer has moved. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                In commercial locksmithing, we assist in office lockouts, and we also create master keys for the staff and reinforcement of security for the shops that need good locks and doors after hours. In both cases, one of our locksmiths will show up with the right tools right from the start, not later on.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking a North Shore Locksmith Works</h2>
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
                Why Choose Lostkey on the North Shore
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Our company consists of trustworthy and approachable authorized locksmiths. We have been repairing locks across the North Shore for several years and have made our name known throughout many places, such as Albany and Devonport. What makes our customers call us back is their realization of our timeliness, accurate provision of cost estimates beforehand, and avoidance of unnecessary lock replacements at affordable prices.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                We provide expert locksmith services across Auckland's North Shore for residential, automotive, and commercial purposes, which is one of the reasons why we have acquired such great reputation among the locals as one of the top-rated locksmith companies servicing North Shore Auckland. If you have ever looked for North Shore Locksmith at an ungodly hour after being locked out, you probably have heard about us. Reliable and friendly Licensed Locksmiths.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  When you're stuck outside your own front door, minutes matter. That's why every North Shore locksmith call-out is treated as urgent, with most jobs reached within the hour depending on traffic and your suburb.
                </p>
                <p className="text-gray-300 leading-relaxed">
                  We aim to be one of the affordable emergency locksmiths near North Shore Auckland, without cutting corners on the actual work — every job is checked and tested before we leave.
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
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">North Shore Locksmith FAQ</h2>
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith on the North Shore?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              If you're locked out, holding a broken key, or just want stronger locks on your home or office, Lostkey is ready to help. 
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
              Check our <a href="residential-locksmith-auckland.html" className="text-[#F4C430] hover:underline">residential locksmith</a>, <a href="commercial-locksmith-auckland.html" className="text-[#F4C430] hover:underline">commercial locksmith</a>, <a href="automotive-locksmith-auckland.html" className="text-[#F4C430] hover:underline">automotive locksmith</a>, and <a href="emergency-locksmith-auckland.html" className="text-[#F4C430] hover:underline">emergency locksmith</a> pages for more on how we can help.
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
    root.render(<NorthShoreLocksmith />);
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
