<?php
$pageTitle = "Frequently Asked Questions | Auckland's Mobile Locksmith Team 24/7";
$pageDescription = "Got a question about locks, keys, or getting a locksmith out to you? Here are the most frequently asked questions about Lostkey. Auckland's New Zealand-owned mobile locksmith business. 5+ years experience, 5,000+ jobs done, fast 20-40 min response, 24/7 emergency service across homes, businesses & vehicles.";
$currentPage = "faq";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, ChevronDown, MapPin, Wrench, Shield, Mail, 
  Clock, Calendar, Check, ArrowRight, AlertTriangle, Building, CreditCard,
  ShieldCheck, CheckCircle2, BadgeCheck, DollarSign, KeyRound, PenTool
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

function FAQItem({ item }) {
  const [isOpen, React_useState] = React.useState(false);
  
  return (
    <div className="border border-gray-200 rounded-2xl mb-4 overflow-hidden bg-white shadow-sm hover:shadow-md transition-all">
      <button 
        className="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none"
        onClick={() => React_useState(!isOpen)}
      >
        <span className="font-bold text-lg text-[#1F2937] pr-8 leading-tight">{item.q}</span>
        <div className={`w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 transition-colors ${isOpen ? 'bg-[#F4C430] text-[#0B1F3A]' : 'bg-gray-100 text-gray-500'}`}>
          <ChevronDown size={18} className={`transition-transform duration-300 ${isOpen ? 'rotate-180' : ''}`} />
        </div>
      </button>
      <div className={`overflow-hidden transition-all duration-300 ${isOpen ? 'max-h-[500px] opacity-100' : 'max-h-0 opacity-0'}`}>
        <div className="px-6 pb-6 text-gray-600 leading-relaxed text-base font-medium">
          {item.a}
        </div>
      </div>
    </div>
  );
}

const faqs = [
  {
    category: "General Questions",
    items: [
      { q: "What areas do you cover?", a: "We're an Auckland-based locksmith, and our mobile locksmith vans cover the wider Auckland region, from the city right out to the surrounding suburbs. If you're not sure whether we reach your area, call us and we'll tell you straight away." },
      { q: "Are you a 24 hour locksmith?", a: "Yes. We run a genuine 24 hour locksmith service, so whether it's 3pm on a Tuesday or 3am on a Sunday, a real person answers and a real van gets sent your way." },
      { q: "Do you only do house calls, or can you fix locks in your workshop too?", a: "We're a mobile locksmith first, so most jobs get sorted right where you are, no towing your car or carrying a broken lock around. For bigger or unusual jobs, we'll let you know upfront if it needs extra time or parts." },
      { q: "Is Lost Key licensed and trustworthy?", a: "Yes. Every technician is trained, vetted, and experienced in both traditional lock work and newer digital and smart lock systems, so whoever turns up actually knows what they're doing." },
    ]
  },
  {
    category: "Home and Lockout Questions",
    items: [
      { q: "I'm locked out of my house, what happens next?", a: "Give us a call and tell us where you are. We'll send a local locksmith to help with your house lockout, and in most cases we can get you back inside without damaging the door or lock." },
      { q: "Can you rekey my locks instead of replacing them?", a: "Usually, yes. Rekeying changes the inside of the lock so old keys stop working, while your existing lock stays in place. It's often cheaper and faster than a full lock replacement, and we'll tell you honestly which option makes more sense for your situation." },
      { q: "My deadbolt is stiff and hard to turn, can that be fixed?", a: "Most of the time, yes. A stiff deadbolt or door lock repair job usually comes down to worn parts, misalignment, or a build-up of grime, and it can often be fixed without replacing the whole unit. We'll check it on site and give you a straight answer." },
      { q: "I've lost my keys, what should I do?", a: "If you've lost keys, the safest move is to get the lock rekeyed rather than just cutting a new key, especially if you're not sure where the old ones ended up. It's a small job that gives you real peace of mind." },
      { q: "What if my key snapped off inside the lock?", a: "Broken keys happen more often than you'd think. We can usually remove the broken piece and get you back in without replacing the whole lock, then cut you a fresh key on the spot." },
      { q: "Do you fix sliding door locks and garage locks too?", a: "Yes. Sliding door locks and garage locks are some of the most common jobs we do, since they take a lot of daily wear and tear. If yours is sticking, loose, or won't lock properly, we can repair or replace it." },
    ]
  },
  {
    category: "Business and Commercial Questions",
    items: [
      { q: "Do you handle office lockouts and commercial properties?", a: "Yes. As a commercial locksmith, we handle everything from a simple office lockout to full security upgrades for shops, offices, and warehouses across Auckland." },
      { q: "Can you set up a master key system for our business?", a: "Yes. A master key system lets staff access what they need without everyone carrying a separate key for every door. We'll talk through how your building is laid out and set up a system that actually fits how your team works." },
      { q: "Can you come out after hours if our business gets locked out overnight?", a: "Yes, our 24 hour locksmith service covers businesses just as much as homes. If your office, shop, or warehouse is locked out outside normal hours, we can still get someone out to you." },
    ]
  },
  {
    category: "Car and Automotive Questions",
    items: [
      { q: "I've locked my keys in my car, can you help?", a: "Yes. Car lockout is one of the most common calls we get. Our automotive locksmith vans carry the tools to get most vehicles open on the spot, without damaging the car." },
      { q: "Can you cut a new car key if I've lost mine completely?", a: "In most cases, yes. As car locksmiths, we can cut and programme replacement keys for a wide range of vehicles, so you're not stuck calling a dealership and waiting days for a spare." },
      { q: "What if my key breaks off in the car's ignition?", a: "We deal with broken keys in ignitions regularly. In most cases we can remove the broken piece and get a working key cut without needing to replace the ignition itself." },
    ]
  },
  {
    category: "Smart Locks and Digital Locks Questions",
    items: [
      { q: "Do you install smart locks and digital locks?", a: "Yes. We supply and fit smart locks with keypads, app control, or Bluetooth access, both for homes wanting a security upgrade and for businesses wanting easier staff access." },
      { q: "My digital lock isn't responding, what should I check first?", a: "Start with the batteries and make sure the app or keypad settings haven't changed. If it's still not working after that, give us a call and we'll come take a proper look rather than you guessing at it." },
      { q: "Can I still have a normal key as a backup with a smart lock?", a: "Yes, most of our smart lock installs can include a physical key override, so if the battery dies or the tech plays up, you're never actually locked out." },
    ]
  },
  {
    category: "Pricing and Booking Questions",
    items: [
      { q: "How much will my job cost?", a: "It depends on what's needed; a lockout costs less than a full lock replacement or smart lock install. We always tell you the price before we start the work, so there's no surprise when we're done." },
      { q: "How do I book a locksmith?", a: "Just call us and tell us what's going on. We'll confirm the nearest available locksmith, give you a realistic arrival time, and get the job sorted properly, not just a quick patch that fails again later." },
      { q: "Do you offer payment plans?", a: "Yes, Afterpay is available on eligible jobs, so an urgent lock repair or replacement doesn't have to mean paying it all upfront in one go." },
    ]
  }
];

function FAQPageContent() {
  const [mobileMenuOpen, setMobileMenuOpen] = React.useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = React.useState(false);
  const [mobileAreasOpen, setMobileAreasOpen] = React.useState(false);
  const [mobileCompanyOpen, setMobileCompanyOpen] = React.useState(false);
  const [mobileMoreOpen, setMobileMoreOpen] = React.useState(false);

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="faq" /> : null}

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/key-locksmith.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight, ChevronDown size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">FAQ</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Shield size={14} className="mr-2 fill-current" />
              ANSWERS YOU NEED
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[64px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Frequently Asked <span style={{ color: COLORS.yellow }}>Questions</span>
            </h1>

            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl font-medium mb-12">
              Got a question about locks, keys, or getting a locksmith out to you? Here are the questions we get asked the most. If you don't see your answer here, just give us a call, we're happy to talk it through.
            </p>
          </div>
        </div>
      </section>

      {/* FAQ SECTION */}
      <section className="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          {faqs.map((group, idx) => (
            <div key={idx} className="mb-12">
              <h2 className="text-3xl font-black text-[#1F2937] mb-6 pl-4 border-l-4 border-[#F4C430]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                {group.category}
              </h2>
              <div className="space-y-4 pl-0 md:pl-5">
                {group.items.map((item, iIdx) => (
                  <FAQItem key={iIdx} item={item} />
                ))}
              </div>
            </div>
          ))}

          {/* CONTACT BOX */}
          <div className="mt-16 bg-[#0B1F3A] rounded-3xl p-10 md:p-16 text-center shadow-xl relative overflow-hidden border border-[#132B4F]">
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              STILL HAVE QUESTIONS?
            </span>
            <h3 className="text-3xl md:text-4xl font-black text-white mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              We're Happy to Talk It Through
            </h3>
            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto mb-8 font-medium">
              Give our team a call and get a straight answer to any lock or security questions you have. We're on call 24/7.
            </p>
            <a 
              href="tel:0800828345" 
              className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-lg md:text-xl uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Phone size={24} className="fill-current" />
              <span>Call Now: 0800 828 345</span>
            </a>
          </div>
        </div>
      </section>

      {typeof window !== 'undefined' && window.FooterComponent ? <window.FooterComponent currentPage="faq" /> : null}
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<FAQPageContent />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<?php
include 'footer.php';
?>
