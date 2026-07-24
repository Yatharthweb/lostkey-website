<?php
$pageTitle = "Locksmith Franklin | Trusted Local Locksmith Services | Lostkey";
$pageDescription = "Lostkey is the trusted Franklin Locksmith for residential, commercial, automotive and emergency lockouts. Covering Pukekohe, Waiuku, Bombay and more.";
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

const franklinServices = [
  {
    title: "Residential Locksmith Franklin",
    desc: "The residential locksmith team in Franklin does a lot of things. They can help you if you are locked out of your house. They can also fix broken keys. Make new keys if you lost yours. They do all of this right where you're. The team can also put in deadbolts. They can fix window locks that're hard to open. If you just moved into a new home our team can change the keys for you.",
    icon: Home
  },
  {
    title: "Commercial Locksmith Franklin",
    desc: "For Franklin businesses, our commercial locksmith team covers office lockout calls, master key systems for staff access, and broader security upgrade work for shops, warehouses, and rural business sites.",
    icon: Building
  },
  {
    title: "Automotive and Car Locksmith Franklin",
    desc: "Locked out of your car, or lost your only key? Our automotive locksmith and car locksmith teams handle car lockout calls and car key replacement service pricing in Franklin depends on your vehicle's make and key type, confirmed before we start.",
    icon: Car
  },
  {
    title: "24 Hour Locksmith Franklin",
    desc: "Lock problems don't wait for business hours. Our 24 hour locksmith service in Franklin means emergency home lockout assistance is available any time, including weekends and public holidays.",
    icon: Clock
  },
  {
    title: "Mobile Locksmith Franklin",
    desc: "As a mobile locksmith, we come to you rather than asking you to come to us, with vans stocked to handle most jobs, including garage lock repairs, in a single visit.",
    icon: MapPin
  },
  {
    title: "Lock Repair and Replacement",
    desc: "A lock that sticks usually just needs a lock repair. If it's too old or damaged, we'll recommend a lock replacement instead. This also covers sliding door lock and window lock repairs, two spots that often get missed until something actually breaks.",
    icon: Wrench
  },
  {
    title: "Rekey Locks and Key Cutting",
    desc: "Just moved into a new home in Franklin? We rekey locks so old keys stop working, without the cost of replacing the whole lock. Our vans also carry key cutting equipment, so spare or replacement keys are usually ready the same visit.",
    icon: KeyRound
  },
  {
    title: "Smart Locks and Security Upgrades",
    desc: "Want to unlock your door with a code or your phone? We install smart locks and keyless entry systems, along with digital lock setups, and can handle a full security upgrade for homes or businesses wanting stronger protection overall. If you're weighing up the best residential security system upgrade options, we can talk you through what suits your property honestly, rather than pushing the most expensive setup.",
    icon: Zap
  }
];

const workSteps = [
  {
    num: "01",
    title: "Call Us",
    desc: "Call us and tell us your suburb and what's happened."
  },
  {
    num: "02",
    title: "Confirm Nearest Locksmith",
    desc: "We confirm the nearest available locksmith, since our vans already work regularly, so your locksmith callout doesn't wait on someone driving out from the city."
  },
  {
    num: "03",
    title: "Job Done On Spot",
    desc: "The job gets done properly, with the price confirmed before we start."
  }
];

const faqs = [
  {
    q: "How quickly can a locksmith reach me in Franklin?",
    a: "Most callouts in Franklin are answered within 25 to 45 minutes, depending on your suburb and how far it sits from our nearest van."
  },
  {
    q: "Can you replace a lost car key in Franklin?",
    a: "Yes. Our automotive team can cut and program a new car key on-site for most makes and models, anywhere in the Franklin district."
  },
  {
    q: "Do you provide emergency locksmith services in Franklin?",
    a: "Yes, our locksmith team in Franklin is available 24 hours a day, including weekends and public holidays, for urgent lockouts and lock failures."
  },
  {
    q: "Should I rekey or replace my locks after moving into a new home?",
    a: "Rekeying is usually enough, and it's cheaper than a full replacement. We'd only recommend replacement if the existing lock is damaged or seriously outdated."
  }
];

const SuburbsCovered = () => {
  const regions = [
    { title: "Pukekohe & Central Franklin", suburbs: ["Pukekohe", "Patumahoe", "Paerata"] },
    { title: "Coastal & Western Franklin", suburbs: ["Waiuku", "Karaka"] },
    { title: "Southern Motorway Corridor", suburbs: ["Drury", "Ramarama", "Bombay", "Pokeno"] }
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

export default function FranklinLocksmith() {
  const HeaderComponent = window.HeaderComponent;
  const FooterComponent = window.FooterComponent;

  const [openFaq, setOpenFaq] = useState(0);

  return (
    <div className="min-h-screen bg-gray-50 font-sans text-gray-900" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <HeaderComponent currentPage="areas" />

      {/* HERO SECTION */}
      <section className="relative pt-24 pb-20 lg:pt-32 lg:pb-28 overflow-hidden bg-[#0B1F3A]">
        <div className="absolute inset-0 z-0">
          <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2000&q=80" alt="Locksmith Franklin" className="w-full h-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-b from-[#0B1F3A]/90 to-[#0B1F3A]"></div>
        </div>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
          <div className="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-6 border border-white/20">
            <span className="w-2 h-2 rounded-full bg-[#F4C430] animate-pulse"></span>
            <span className="text-white text-xs font-bold tracking-wider uppercase">Fast, Friendly Locksmith Services 24/7</span>
          </div>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
            Locksmith <span className="text-[#F4C430]">Franklin</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Locked out, lost your keys, or need a lock fixed? A locksmith Franklin locals can rely on is closer than you think. Lostkey covers the whole Franklin district, from Pukekohe out to Waiuku and every town in between. As a local, independent, reliable and trustworthy locksmith company, we treat every callout the same way, whether it's a quick fix or a full security upgrade.
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
            Franklin is spread out, and a lot of properties here sit further from town centres than in the inner city. Locksmith services for emergency lockout situations run 24 hours, so whatever time it happens, day or night, help isn't far away.
          </p>
        </div>
      </section>

      {/* WHY FRANKLIN NEEDS A LOCKSMITH */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div className="space-y-6">
              <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] leading-tight">
                Why Franklin Needs a Locksmith It Can Rely On
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Franklin covers a lot of ground, from Pukekohe's town centre to rural blocks near Bombay and Pokeno. That spread means lock problems here look a bit different to the inner city. Older homes in town can have worn deadbolt and door lock repair needs building up over years. Rural properties often have gate locks, garage lock hardware, and outbuildings that never got properly secured in the first place. Distance matters too, a locksmith based only in central Auckland means a long wait for anyone out past Pukekohe, which is exactly why we keep a team working the district itself.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Growth is another factor. There has seen a lot of new housing go in around Pukekohe and Paerata in recent years, alongside long-established rural properties further out. That mix means we see everything from brand new smart lock installs to decades-old hardware that's simply worn out. Whatever end of that spectrum your property sits at, the approach starts the same way, a proper look at what's actually there before recommending anything.
              </p>
            </div>
            <div className="relative">
              <div className="absolute inset-0 bg-[#F4C430] rounded-3xl transform translate-x-4 translate-y-4 opacity-20"></div>
              <img src="https://images.unsplash.com/photo-1558002038-1055907df827?auto=format&fit=crop&w=800&q=80" alt="Franklin Locksmith Service" className="relative rounded-3xl shadow-xl w-full object-cover h-[500px]" />
            </div>
          </div>
        </div>
      </section>

      {/* OUR LOCKSMITH FRANKLIN SERVICES */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">Our Locksmith Franklin Services</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            {franklinServices.map((service, idx) => (
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
            <h2 className="text-3xl md:text-4xl font-black text-white mb-6">Suburbs We Cover in Franklin</h2>
            <div className="w-20 h-1.5 bg-[#F4C430] mx-auto rounded-full mb-6"></div>
            <p className="text-gray-300 text-lg mb-4">
              Don't see your exact street listed? Call us anyway, we almost certainly still cover it. Wherever you're calling from in the district, we'll confirm coverage and give you a realistic time estimate before anything else.
            </p>
          </div>
          
          <SuburbsCovered />
          
          <div className="mt-12 bg-white/5 border border-white/10 rounded-2xl p-6 text-center text-sm text-gray-300 max-w-4xl mx-auto">
            <p className="mb-4">As the district's main town, Pukekohe locksmith call-outs make up a large share of our daily jobs. Our Pukekohe locksmith van covers this cluster first before heading further out.</p>
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
                Residential and Commercial Work in Franklin
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                Franklin has a different property mix to the inner city, more lifestyle blocks, larger sections, and rural addresses alongside standard town properties. The main purpose of our locksmiths team is generally to help the homeowner re-enter their property as safely as possible or to restore the security of the premises. In the case of businesses, especially those located in the town center of Pukekohe, the main point is to resolve problems fast without affecting the trading hours of the firm.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Actually, we start off by asking some straightforward questions in order to understand what is the best approach to apply. For the homeowner, it may involve regular rekeying instead of changing the lock, which allows the client to save money on essential repairs when the lock is still in proper working condition. For a business, it can involve scheduling work according to the firm’s operating hours at one specific time or establishing a master key scheme.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* HOW BOOKING WORKS */}
      <section className="py-20 bg-gray-50 border-y border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <h2 className="text-3xl md:text-4xl font-black text-[#0B1F3A] mb-6">How Booking a Locksmith In Franklin Works</h2>
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
                Why Choose Lostkey in Franklin
              </h2>
              <div className="w-20 h-1.5 bg-[#F4C430] rounded-full"></div>
              <p className="text-gray-600 leading-relaxed text-lg">
                We're one of the best-rated locksmith companies around Franklin for home security upgrades, and our locksmith team works within the area, instead of only attending to the calls from various distant towns. As a result, the wait is shorter, and the staff have a strong understanding of Franklin's combination of urban buildings and country lots. Every job comes with a workmanship guarantee, and Afterpay is available if you'd rather spread the cost of an unexpected callout.
              </p>
              <p className="text-gray-600 leading-relaxed text-lg">
                Rural properties often come with their own quirks, older barn-style doors, gate locks that haven't been serviced in years, or outbuildings that were never properly secured. Our team has worked on enough of these across Franklin to know what to look for, rather than treating every job like a standard suburban front door. If you're after a full property review rather than a single fix, we're happy to walk the section with you and point out anything worth addressing.
              </p>
            </div>
            <div className="space-y-6">
              <div className="bg-[#0B1F3A] text-white p-10 rounded-3xl shadow-xl relative overflow-hidden">
                <div className="absolute top-0 right-0 w-32 h-32 bg-[#F4C430] opacity-10 rounded-full blur-3xl transform translate-x-10 -translate-y-10"></div>
                <h2 className="text-2xl md:text-3xl font-black mb-6 flex items-center">
                  <Clock size={28} className="text-[#F4C430] mr-3" /> Response Times in Franklin
                </h2>
                <p className="text-gray-300 leading-relaxed mb-6">
                  Most calls to our locksmith Franklin team are answered within 25 to 45 minutes, a little longer than inner-city suburbs given how spread out the district is.
                </p>
                <p className="text-gray-300 leading-relaxed">
                  Pukekohe and Paerata are generally faster in terms of time taken to reach them while the rural areas like Pokeno and Ramarama take more time to arrive. We are quite well known as one of the affordable emergency locksmiths covering Franklin and we always confirm the cost of the work before doing any work.
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
            
            <h2 className="text-3xl md:text-5xl font-black mb-6 relative z-10">Need a Locksmith in Franklin?</h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto mb-10 relative z-10">
              Whatever the job, home, business, or car, our locksmith team in Franklin is ready to help. Call 0800 828 345 now.
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
    root.render(<FranklinLocksmith />);
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
