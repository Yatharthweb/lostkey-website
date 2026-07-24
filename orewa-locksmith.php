<?php
$pageTitle = "Locksmith Orewa & Hibiscus Coast | Fast 24/7 Service | Lostkey";
$pageDescription = "Lostkey is the trusted locksmith in Orewa & Hibiscus Coast for residential, commercial, automotive and emergency lockouts. Covering Orewa, Silverdale, Whangaparaoa and more.";
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

const orewaServices = [
  {
    title: "Emergency Locksmith Orewa",
    desc: "Locked out at 2am on Hibiscus Coast Highway or stuck outside your Orewa unit on a Sunday? We're a genuine 24-hour locksmith, so a call at any hour still gets a real person and a real van heading your way.",
    icon: AlertTriangle
  },
  {
    title: "Residential Locksmith Orewa",
    desc: "House lockout, a deadbolt that's sticking, or you just want the locks changed after moving into a place near Orewa Beach, our residential locksmith work covers it all.",
    icon: Home
  },
  {
    title: "Commercial Locksmith Orewa",
    desc: "Shops and offices along Hibiscus Coast Highway rely on us for everything from a simple office lockout to a full commercial locksmith upgrade with master key systems for staff access.",
    icon: Building
  },
  {
    title: "Automotive Locksmith Orewa",
    desc: "Snapped a key in the ignition, locked your keys in the boot, or need a spare cut for an older car? Our automotive locksmith and car locksmith vans carry the gear to sort most car lockout jobs on the spot.",
    icon: Car
  },
  {
    title: "Smart Locks & Keyless Entry",
    desc: "Thinking about a digital lock for your Orewa home or office? We fit and set up smart locks properly so you're not stuck googling error codes later.",
    icon: Zap
  },
  {
    title: "Lock Rekeying",
    desc: "Move into a new place, lose a key, or just want peace of mind? We rekey locks so old keys stop working without needing a whole new lock.",
    icon: KeyRound
  },
  {
    title: "Lock Repairs & Lock Replacement",
    desc: "From a jammed sliding door lock to a garage lock that won't turn, we handle door lock repair and full lock replacement for homes and businesses across the coast.",
    icon: Wrench
  },
  {
    title: "Key Cutting & Key Duplication",
    desc: "Need spares cut, including for tricky or older locks? Our key cutting service gets it done fast, usually while you wait.",
    icon: Key
  }
];

const workSteps = [
  {
    num: "01",
    title: "Call Us",
    desc: "Tell us what's going on, whether it's a lockout, a broken key, or a job you want quoted."
  },
  {
    num: "02",
    title: "Confirm Nearest Locksmith",
    desc: "We check who's closest on the Hibiscus Coast and get them briefed on your job."
  },
  {
    num: "03",
    title: "Job Gets Done Properly",
    desc: "Not just a quick fix that fails again next week. We sort it so it actually lasts. You'll know roughly when to expect us, no vague times."
  }
];

const faqs = [
  {
    q: "Do you actually cover all of Orewa and the Hibiscus Coast or just the main town?",
    a: "We cover the whole Hibiscus Coast area, not just central Orewa. If you're unsure whether you're in range, call us and we'll tell you straight away rather than leaving you guessing."
  },
  {
    q: "How much does a locksmith in Orewa cost?",
    a: "It depends on the job; a simple lockout costs less than a full lock replacement or smart lock install. We always give you a price before starting, so there's no surprise on the invoice."
  },
  {
    q: "Can you get into a beach house or beach if I've lost the keys and I'm not the usual owner?",
    a: "Yes, but we'll need to confirm you're authorised first, usually proof of address, ID, or a call to the property owner. It's a quick step that protects you as much as it protects the property."
  },
  {
    q: "I've got an older lock on a Hibiscus Coast property that's stiff or rusted from the sea air. Can it be fixed, or does it need replacing?",
    a: "Often it can be repaired; salt air corrosion doesn't always mean the whole lock is done. We'll check it on site and tell you honestly whether a repair will hold or whether replacement is the safer call."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Orewa & Central Coast", suburbs: ["Orewa", "Silverdale", "Millwater", "Hatfields Beach"] },
    { title: "Whangaparaoa Peninsula", suburbs: ["Whangaparaoa", "Stanmore Bay", "Manly", "Gulf Harbour"] },
    { title: "Red Beach & Surrounds", suburbs: ["Red Beach", "Arkles Bay", "Army Bay", "Tindalls Beach"] }
  ];

  return (
    <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
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

export default function OrewaLocksmith() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      {typeof window !== 'undefined' && window.HeaderComponent ? <window.HeaderComponent currentPage="areas" /> : null}

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=2000&q=80" alt="Locksmith Orewa" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">Orewa & Hibiscus Coast Locksmith</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">Orewa</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Locked out in Orewa or anywhere along the Hibiscus Coast? Our locksmith team in Orewa is on the road in this area every day, and we come straight to you, whether that's your front door, your office, or your car in a supermarket car park. No towing your car somewhere, no waiting around all day for a "sometime this afternoon" window.
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
            Every job is a bit different. One call might be a homeowner locked out at midnight or a shop owner who needs new locks fitted before opening, and the one after that a set of keys snapped off in a car ignition. Whoever picks up your call knows how to sort all three.
          </p>
        </div>
      </section>

      {/* WHY OREWA NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why Orewa Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Orewa and the wider Hibiscus Coast have grown fast. New builds are going up alongside older beachside homes, and that mix means two very different kinds of lock problems. Houses that are older and close to the ocean tend to have locks corroded by the salty sea air. For this reason, some locksmith services in the coastal areas tend to offer rekeying, along with locksmith repairs, more often than in places that are far from the ocean. More modern homes in new developments have electronic locks already installed; hence, homeowners need experts on dealing with electronic locks whenever technical problems arise.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                During every summer, the holiday season surely contributes to the increase in the number of travellers, rentals, cars parked overnight, and more cases of lockouts and lost keys at the time everyone is planning to go to the beach.
              </p>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="Orewa Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH OREWA SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Services in Orewa</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-600 leading-relaxed text-lg">Whatever's going on, there's a good chance we've already fixed it for someone a street away from you.</p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {orewaServices.map((service, idx) => (
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
              We cover the entire Hibiscus Coast and surrounding areas.
            </p>
          </div>
          
          <SuburbsCovered />
          
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
                Residential and Commercial Work in Orewa
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Home jobs and business jobs get treated differently, because they need different things. Frequently the situations involving house lockouts or broken keys from the premises arise that require somebody to reach the site quickly and to have the solution provided so that the family is safe during their stay. 
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                In the case of commercial jobs pursued close to Orewa’s shops and offices, the emphasis is put on timing and access control: it is important to arrive at the site before the start of the working day in order to complete master key systems, as well as to resolve the office lockout problems without disturbing the operations of the company.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking an Orewa Locksmith Works</h2>
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
                Why Choose Lostkey in Orewa
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                We've got vans working the Hibiscus Coast regularly, so we're not sending someone across town who's never been near your street. Every job comes with a workmanship guarantee, and pricing is given upfront before any work starts – no surprise numbers when the invoice lands. If the cost is a bit much right now, Afterpay is available so you're not stuck choosing between fixing your lock and paying other bills that week.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Usually, people contact us when they are in a tough spot, for instance, being locked out of their home or losing their keys; therefore, we always try to make things easier for them. Quite often our clients tell us that our technicians provide detailed explanations of what has happened instead of just performing the task and moving on.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in Orewa
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  For the majority of jobs in and around Orewa and along the majority of Hibiscus Coast Highway, our locksmith in Orewa arrives on site in 20 to 30 minutes. 
                </p>
                <p className="text-gray-300 leading-relaxed">
                  If your location is further on the outskirts of the area, this can take as long as 40 to 45 minutes, based on how busy the roads are at the time of day. If you have any doubts about how long it will take for us to reach you, give us a call and we will gladly let you know.
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in Orewa?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              Whatever's going on, our locksmith team in Orewa is just a phone call away, day or night. Reach out for an emergency locksmith service callout, a residential locksmith service job at home, a commercial locksmith service visit for your business, or key cutting & key duplication while you wait. Call now and we'll get someone heading your way.
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
    root.render(<OrewaLocksmith />);
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
