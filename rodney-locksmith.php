<?php
$pageTitle = "Locksmith Rodney | Trusted Local Locksmith Services | Lostkey";
$pageDescription = "Lostkey is the trusted Rodney Locksmith for residential, commercial, automotive and emergency lockouts. Covering Orewa, Warkworth, Silverdale and more.";
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

const rodneyServices = [
  {
    title: "Residential Locksmith Rodney",
    desc: "New home, holiday house, or just want stronger locks before summer? Our residential locksmith service in Rodney covers deadbolts, sliding door locks, window locks, garage locks, and mailbox locks, so the whole property is covered, not just the front door.",
    icon: Home
  },
  {
    title: "Commercial Locksmith Rodney",
    desc: "Shops, cafes, and offices across Rodney need locks that hold up to daily use and long weekends of extra foot traffic. Our commercial locksmith team sets up master key systems so owners can access every door while staff only get what they need, plus quick call-outs for an office lockout during trading hours.",
    icon: Building
  },
  {
    title: "Automotive and Car Locksmith Rodney",
    desc: "Locked out of the car at the beach, or need a spare key cut before a road trip? Our automotive and car locksmith service handles broken keys, car lockout jobs, and key cutting on the spot, saving you a drive back into the city for a dealership appointment.",
    icon: Car
  },
  {
    title: "24 Hour Locksmith Rodney",
    desc: "Getting locked out doesn't wait for a convenient time. Our 24 hour locksmith team in Rodney is on call for house lockout, office lockout, and car lockout situations any time, including weekends and public holidays.",
    icon: Clock
  },
  {
    title: "Mobile Locksmith Rodney",
    desc: "Our mobile locksmith vans are stocked to fix, rekey, or fit a lock wherever you are, from an apartment in Silverdale to a farmhouse out past Dairy Flat, with no need to remove the lock and take it anywhere.",
    icon: MapPin
  },
  {
    title: "Lock Repair and Replacement",
    desc: "A sticking deadbolt, a broken lock, or a door that won't lock at all — we handle lock repair and lock replacement for front doors, garages, and gates, and we'll always say plainly which one your lock actually needs.",
    icon: Wrench
  },
  {
    title: "Rekey Locks and Key Cutting",
    desc: "Bought a holiday home, taken over a rental, or just misplaced a set of keys? We rekey locks so the old keys stop working, without the cost of swapping the whole unit, and we offer key cutting for spares while we're already there.",
    icon: KeyRound
  },
  {
    title: "Smart Locks and Security Upgrades",
    desc: "Want to leave the keys behind altogether? We fit smart locks, keyless entry, and digital lock options for homes and businesses after a straightforward security upgrade, without a full renovation.",
    icon: Zap
  }
];

const workSteps = [
  {
    num: "01",
    title: "Tell Us the Problem",
    desc: "Booking a locksmith in Rodney with Lostkey takes a few simple steps. First, call or message us and tell us what's happened — a lockout, lost keys, or a lock you'd like upgraded."
  },
  {
    num: "02",
    title: "Get a Time & Price",
    desc: "Second, we give you a time window and a clear price before we drive out, which can matter more here given the distances between towns."
  },
  {
    num: "03",
    title: "Job Sorted on the Spot",
    desc: "Third, our mobile locksmith arrives, finishes the job, and checks it works before leaving. No guessing on price, no follow-up visit needed."
  }
];

const faqs = [
  {
    q: "What's the difference between rekeying and replacing?",
    a: "Rekeying modifies the existing lock in such a manner that old keys can no longer function, while you do not have to spend any money on new locks. Replacing a lock refers to fitting the entire lock, and this procedure is necessary only when the lock is damaged, too old or being switched to a high-tech lock."
  },
  {
    q: "What information should you provide when calling a locksmith?",
    a: "Knowing the location, the lock type, and also the lockout's nature will be of great significance in assigning a proper response. This will help you get an accurate estimate and make use of the right vehicle immediately."
  },
  {
    q: "How to choose a reliable locksmith in Rodney for commercial properties?",
    a: "Find a certified company that has genuine reviews, affordable prices and expert skills in master key systems and access control rather than mere knowledge of home lockouts. This is the same standard by which we measure our performance while handling every commercial locksmith job in Rodney."
  },
  {
    q: "How much does it cost to rekey house locks in the Rodney area?",
    a: "Cost depends on the number of locks that must be rekeyed and whether it is a usual call-out or after-hours job. Rekeying is nearly always more affordable than a full lock replacement, and we make sure to tell you the price upfront before any work is done."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Hibiscus Coast", suburbs: ["Orewa", "Silverdale", "Millwater", "Red Beach"] },
    { title: "Whangaparaoa Peninsula", suburbs: ["Whangaparaoa", "Stanmore Bay", "Arkles Bay", "Manly"] },
    { title: "Peninsula Tip & Bays", suburbs: ["Army Bay", "Gulf Harbour", "Hatfields Beach", "Wainui"] },
    { title: "Rural South Rodney", suburbs: ["Dairy Flat", "Kumeu", "Huapai", "Riverhead"] },
    { title: "North Rodney", suburbs: ["Helensville", "Warkworth", "Wellsford"] }
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

export default function RodneyLocksmith() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="areas" /> : null}

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=2000&q=80" alt="Locksmith Rodney" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">Local, Independent, Reliable Locksmith</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">Rodney</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Locked out of your beach house at Orewa? Lost your keys somewhere between the farm gate and the front door? Need your locks sorted before holidaymakers arrive next weekend? Lostkey is the locksmith in Rodney whom the locals and holiday home owners call when a lock isn't working the way it should. From the coastal roads of Whangaparaoa to the lifestyle blocks on the outskirts of Warkworth, we know our area and we show up when we say we will.
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
            Regardless of whether you need to unlock your house, lost your keys, or have a complete security upgrade before getting summer visitors, we are always available and just a phone call away at any time.
          </p>
        </div>
      </section>

      {/* WHY RODNEY NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why Rodney Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Rodney comprises several coastal communities and urban areas, and each of these places exerts a different kind of demand on a lock. Beaches along Orewa and Red Beaches may have beach houses which are not occupied for many weeks and, in this situation, an old deadbolt or a ruined lock may remain unnoticed until someone utilizes it.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Add in the usual stuff — kids losing keys, a sliding door lock jamming at the worst time, or someone getting stuck outside their own office in Warkworth after hours — and it's easy to see why locals keep a locksmith's number close by. That's exactly where Lostkey steps in.
              </p>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="Rodney Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH RODNEY SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Locksmith Rodney Services</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {rodneyServices.map((service, idx) => (
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
              Locksmith services are available in Rodney for emergency lockout situations right across the district.
            </p>
            <p className="text-gray-300 text-sm italic">
              Every suburb below has its own local page with call-out times and pricing specific to that area.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-4"><span className="text-[#F4C430] font-bold">Note:</span> We offer emergency home lockout assistance in Rodney right along the Whangaparaoa stretch, since so many properties here are holiday homes that sit empty between visits.</p>
            <p className="mb-4">Out on the lifestyle blocks around Dairy Flat and Riverhead, garage locks and long driveway gates make up a good share of our repair calls.</p>
            <p>Further north, we also run a car key replacement service Wellsford pricing residents can book in ahead of time, so a lost car key doesn't mean an unplanned trip back into Auckland.</p>
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
                Residential and Commercial Work in Rodney
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Homes and businesses need different things from a locksmith, so we treat them differently. On the home side, that's house lockouts, broken keys, deadbolt repairs, and rekeying between tenants or holiday guests. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                On the business side, it's office lockouts, master key systems, and security upgrades for premises that stay shut overnight or over long weekends. Either way, our local locksmith Rodney team turns up with the right gear the first time.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking a Locksmith in Rodney Works</h2>
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
                Why Choose Lostkey in Rodney
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                We're a local, independent, reliable and trustworthy locksmith company that's spent years working right across the district, from Orewa to Helensville. People call us back because we quote honestly and don't push a full lock replacement when a repair does the job just as well.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                We're among the best-rated locksmith companies near Rodney for home security upgrades, and we offer some of the best residential security system upgrade options Rodney properties can get without a full renovation. If you've searched for a locksmith Rodney after getting locked out somewhere between towns, there's a good chance our name has already come up.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in Rodney
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  Rodney covers a lot of ground, so response times vary a bit more here than in the city, but every locksmith call-out is still treated as urgent. 
                </p>
                <p className="text-gray-300 leading-relaxed">
                  Most jobs are reached within the hour depending on your suburb and the roads that day. We aim to keep pricing fair for every call-out, without skipping the final check on the lock before we leave.
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in Rodney?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              If you’re faced with a lockout as well as a malfunctioning lock or want to upgrade the security of your residence or commercial property, you might rely on Lostkey for trusted locksmith services starting from Orewa all the way to Wellsford.
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
root.render(<RodneyLocksmith />);
</script>

<div id="root"></div>

<?php
include 'footer.php';
?>
