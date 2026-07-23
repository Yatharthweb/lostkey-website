<?php
$pageTitle = "Locksmith South Auckland | Trusted Local Locksmith Services | Lostkey";
$pageDescription = "Lostkey is the trusted South Auckland Locksmith for residential, commercial, automotive and emergency lockouts. Covering Manukau, Papakura, Otahuhu and more.";
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

const saServices = [
  {
    title: "Residential Locksmith South Auckland",
    desc: "Have you just shifted to a new location, misplaced your keys, or looking for a more secure entrance? Our residential locksmith services in South Auckland include deadlocks, sliding doors, window locks, garage locks, and mailbox locks, so we can ensure the right security for your house in its entirety.",
    icon: Home
  },
  {
    title: "Commercial Locksmith South Auckland",
    desc: "Businesses, storehouses, and professional premises across South Auckland require locks that can handle everyday usage without fail. We are among the most trusted commercial locksmith team who specialize in master key systems.",
    icon: Building
  },
  {
    title: "Automotive and Car Locksmith South Auckland",
    desc: "Are you having a problem getting inside your car or wish to have a car key made? We offer car locksmith service to cut keys apart from dealing with broken keys as well as being helpful with car lockouts.",
    icon: Car
  },
  {
    title: "24 Hour Locksmith South Auckland",
    desc: "Lockouts don't check the clock first. Our 24 hour locksmith team in South Auckland takes calls for house lockout, office lockout, and car lockout situations at any hour, including weekends and public holidays.",
    icon: Clock
  },
  {
    title: "Mobile Locksmith South Auckland",
    desc: "Our mobile locksmith vans are stocked to fix, rekey, or fit a lock right where you are, from an apartment near Onehunga to a lifestyle property out past Wattle Downs, with no need to remove the lock and take it anywhere.",
    icon: MapPin
  },
  {
    title: "Lock Repair and Replacement",
    desc: "A broken lock, a stuck deadbolt, or a door that won't lock properly at all — we handle lock repair and lock replacement for front doors, garages, and gates, and we'll tell you straight which one your lock actually needs.",
    icon: Wrench
  },
  {
    title: "Rekey Locks and Key Cutting",
    desc: "New tenants, a returned rental, or just misplaced a set of keys? We rekey locks so old keys stop working without the cost of swapping the whole unit, and we offer key cutting for spares while we're already on-site.",
    icon: KeyRound
  },
  {
    title: "Smart Locks and Digital Security",
    desc: "Want to leave keys behind altogether? We fit smart locks, keyless entry, and other digital lock options for homes and businesses looking for a straightforward security upgrade.",
    icon: Zap
  }
];

const workSteps = [
  {
    num: "01",
    title: "Tell Us the Problem",
    desc: "Booking a locksmith South Auckland with Lostkey only takes a few steps. First, call or message us and explain what's going on — a lockout, lost keys, or a lock you want upgraded."
  },
  {
    num: "02",
    title: "Get a Time & Price",
    desc: "Second, we give you a time window and a clear price before we drive out."
  },
  {
    num: "03",
    title: "Job Sorted on the Spot",
    desc: "Third, our mobile locksmith arrives, fixes the job, and tests it before leaving. No hidden charges, no second visit."
  }
];

const faqs = [
  {
    q: "How to find a reliable locksmith in South Auckland?",
    a: "Look for a licensed team with genuine local reviews, upfront pricing, and someone who tells you honestly whether your lock needs a repair or a full replacement. That's the standard we hold ourselves to as your local locksmith South Auckland."
  },
  {
    q: "Where to get car keys cut in South Auckland?",
    a: "Lostkey does on-site cutting and programming of duplicate keys for cars throughout South Auckland, which means you don’t have to book in the dealer or wait several days for your spare key to arrive."
  },
  {
    q: "How much does it cost to replace the lock on a car door?",
    a: "The total amount charged by locksmiths can differ depending on the services you need. For instance, changing locks can cost less than fully replacing them; emergency call-outs are more expensive than regular jobs done during the day. We provide you with a clear expectation regarding the total amount of money involved before starting any job at any time."
  },
  {
    q: "How much does a locksmith cost in South Auckland?",
    a: "Pricing depends on the type of job — the cost of rekeying is not the same as that of a complete lock replacement, and there is a slight difference in the cost of calling out a locksmith on a holiday. Our pricing is transparent, giving you an estimate before the work is started."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Central Manukau", suburbs: ["Manukau", "Manukau Heights", "Puhinui", "Wattle Downs"] },
    { title: "Manurewa & South", suburbs: ["Manurewa", "Clendon Park", "Hillpark", "Homai"] },
    { title: "Papakura & Takanini", suburbs: ["Papakura", "Takanini", "Papatoetoe", "Airport Oaks"] },
    { title: "Mangere & Airport", suburbs: ["Mangere", "Mangere Bridge", "Favona", "Middlemore"] },
    { title: "Otahuhu & Onehunga", suburbs: ["Otahuhu", "Onehunga", "Penrose", "Otara"] }
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

export default function SouthAucklandLocksmith() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="areas" /> : null}

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=2000&q=80" alt="Locksmith South Auckland" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">Professional Mobile Locksmith Services</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">South Auckland</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Locked out of the house on your way to work? Snapped a key in the front door? Need your locks changed before new tenants move in? Lostkey is the best locksmith team in South Auckland for homes and businesses when a lock isn't doing its job anymore. From the busy streets around Manukau to the newer subdivisions in Takanini, we know the area and we show up when we say we will.
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
            Whether it's a house lockout, lost keys, or a full security upgrade for your shop, our team is only a phone call away, day or night.
          </p>
        </div>
      </section>

      {/* WHY SOUTH AUCKLAND NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why South Auckland Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Growth in South Auckland creates lock issues of all sorts. Brand-new homes in Takanini and Papakura frequently require installations of additional deadbolts and window locks before they even move into the house, whereas older homes in the Otahuhu and Papatoetoe region face sticking locks or broken keys way before they can get it repaired. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Add in the number of warehouses and offices near Penrose and Airport Oaks, and you've got a part of Auckland where locksmith work never really slows down. On top of that, everyday life causes its own problems — kids losing keys, a garage lock rusting shut, or someone getting stuck outside their own office after hours. That's exactly the kind of call Lostkey handles every day.
              </p>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="South Auckland Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH SOUTH AUCKLAND SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Locksmith South Auckland Services</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {saServices.map((service, idx) => (
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
              Lostkey provides the following areas with residential, automotive, commercial and emergency essential services, right across South Auckland.
            </p>
            <p className="text-gray-300 text-sm italic">
              Every suburb below has its own local page with call-out details and pricing for that area.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-4"><span className="text-[#F4C430] font-bold">Note:</span> As Manukau's trusted locksmith service, we're one of the first calls locals make for both home lockouts and office security jobs in this part of town.</p>
            <p className="mb-4">We run as a 24/7 locksmith company working in the Manurewa area of South Auckland, since this stretch sees a steady mix of residential lockouts and rental turnovers.</p>
            <p className="mb-4">New subdivisions in Papakura and Takanini keep our residential team busy fitting deadbolts and window locks on brand-new doors. Locksmiths for Manukau and surrounding suburbs like Mangere and Favona regularly handle commercial call-outs from businesses near the airport corridor.</p>
            <p>The industrial stretch around Penrose and Otahuhu means a good share of our commercial locksmith works in South Auckland — master key systems, restricted access, and after-hours office lockouts.</p>
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
                Residential and Commercial Work in South Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Homes and businesses need different things from a locksmith, so we treat the two separately. On the home side, that's house lockouts, broken keys, deadbolt repairs, and rekeying after a move. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                On the business side, it's office lockouts, master key systems, and security upgrades for premises that stay locked up overnight. Either way, our local locksmith South Auckland team turns up with the right gear the first time.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking a Locksmith in South Auckland Works</h2>
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
                Why Choose Lostkey in South Auckland
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                We're proud to offer professional mobile locksmith services across South Auckland, covering everything from Manukau apartments to Papakura family homes. Our team has spent years working these streets, and people call us back because we quote honestly and don't push a full lock replacement when a simple repair does the job.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                As trusted mobile locksmiths providing 24/7 emergency locksmith services, we've become South Auckland's trusted locksmith service for families and business owners who want someone reliable on speed dial. If you've searched for a locksmith South Auckland after getting locked out at an odd hour, chances are our name has already come up.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in South Auckland
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  Affordable emergency locksmiths in South Auckland know that you lose track of time when waiting outdoors; hence, every locksmith service request is prioritized in South Auckland, with adherence to time limits in most circumstances. 
                </p>
                <p className="text-gray-300 leading-relaxed">
                  In the great majority of cases, time taken to complete the job may determine how quickly locksmith teams can reach customers.
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in South Auckland?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              If you find yourself locked out, with a damaged key, or need better locks for your residence or company, Lostkey is a first-class provider of expert locksmith services across South Auckland that can help. 
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
root.render(<SouthAucklandLocksmith />);
</script>

<div id="root"></div>

<?php
include 'footer.php';
?>
