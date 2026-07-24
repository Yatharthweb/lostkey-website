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
  Clock, Calendar, Check, ArrowRight, AlertTriangle, Building, CreditCard,
  ShieldCheck, CheckCircle2, BadgeCheck, DollarSign, KeyRound, PenTool
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
    title: "Emergency lockouts",
    subtitle: "Homes, apartments, offices, and vehicles",
    icon: AlertTriangle,
    desc: "Fast emergency lockout response anytime, day or night across Auckland. We gain entry quickly using non-destructive methods wherever possible."
  },
  {
    title: "Lock repairs and replacements",
    subtitle: "For front doors, back doors, deadbolts, and windows",
    icon: PenTool,
    desc: "Expert repairs and precision replacements for all types of door and window locks, deadbolts, and high-security lock mechanisms."
  },
  {
    title: "Rekeying",
    subtitle: "For new homeowners or tenants or after a lost key",
    icon: KeyRound,
    desc: "Change lock tumblers so old keys no longer work. An affordable way to restore peace of mind when moving into a new property or after losing keys."
  },
  {
    title: "Car key and transponder replacement",
    subtitle: "Cut and programmed on-site",
    icon: Car,
    desc: "Full automotive locksmith service. Mobile cutting and programming for spare or lost car keys, transponders, and keyless entry remotes."
  },
  {
    title: "Commercial locksmith work",
    subtitle: "Including master key systems and access control",
    icon: Building,
    desc: "Comprehensive business security including master keying, restricted key systems, digital access control, and commercial door hardware."
  },
  {
    title: "Residential Locksmith",
    subtitle: "For houses, home owners who give their homes for rent",
    icon: Home,
    desc: "Complete locksmith solutions for homeowners, landlords, and property managers across Auckland."
  }
];

const whyChooseList = [
  {
    title: "We're there when you need us.",
    icon: Clock,
    desc: "Our locksmith team is on call 24 hours a day, every day of the year, including public holidays.",
    tag: "24/7 365 Days"
  },
  {
    title: "We come to you.",
    icon: MapPin,
    desc: "As a mobile locksmith service, our vans are spread across Auckland, so most callouts are answered within 20 to 40 minutes.",
    tag: "20-40 Min Response"
  },
  {
    title: "We stand by our work.",
    icon: BadgeCheck,
    desc: "Every job comes with a workmanship guarantee. If something we've fitted isn't right, we come back and fix it at no extra cost.",
    tag: "Guaranteed"
  },
  {
    title: "We're upfront about pricing.",
    icon: DollarSign,
    desc: "You'll know the cost before we start the job, not after.",
    tag: "Zero Surprises"
  },
  {
    title: "We make it easier to pay.",
    icon: CreditCard,
    desc: "Afterpay is available on our services, so an unexpected callout doesn't have to be paid in full upfront.",
    tag: "Afterpay Available"
  }
];

function AboutUsPageContent() {
  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="about" />

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/key-locksmith.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">About Us</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Shield size={14} className="mr-2 fill-current" />
              NEW ZEALAND OWNED LOCKSMITH
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
                <span className="text-3xl md:text-4xl font-black" style={{ color: COLORS.yellow }}>20-40min</span>
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

      {/* PARTNERS LOGO SCROLLER (DIRECTLY BELOW HERO BANNER & ABOVE OUR STORY) */}
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
                  Lostkey started with a simple idea: locksmith call-outs shouldn't mean waiting around all day or getting hit with a surprise bill. We've spent 5+ years building a team that turns up fast, explains what's wrong, and fixes it properly the first time. Every van on the road carries the tools and stock to finish most jobs in a single visit, rather than sending someone away to "come back with parts".
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
              OUR SERVICES
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What We Do
            </h2>
            <p className="text-gray-500 text-lg">
              We carry the equipment, stock, and diagnostic tools to handle virtually any lock or key issue on the spot.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {whatWeDoList.map((item, idx) => (
              <div 
                key={idx} 
                className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group"
              >
                <div>
                  <div 
                    className="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"
                    style={{ backgroundColor: COLORS.black, color: COLORS.yellow }}
                  >
                    <item.icon size={28} />
                  </div>
                  <h3 className="text-2xl font-bold text-[#1F2937] mb-1 group-hover:text-[#F4C430] transition-colors">
                    {item.title}
                  </h3>
                  <span className="inline-block text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">
                    — {item.subtitle}
                  </span>
                  <p className="text-gray-600 leading-relaxed text-sm">
                    {item.desc}
                  </p>
                </div>
              </div>
            ))}
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
              THE LOSTKEY DIFFERENCE
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Choose Lostkey
            </h2>
            <p className="text-gray-500 text-lg">
              Here is why homeowners, vehicle owners, and business managers across Auckland rely on our mobile locksmith team.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {whyChooseList.map((item, idx) => (
              <div 
                key={idx} 
                className="bg-[#0B1F3A] text-white rounded-3xl p-8 shadow-xl relative overflow-hidden flex flex-col justify-between group"
              >
                <div className="relative z-10">
                  <div className="flex justify-between items-start mb-6">
                    <div 
                      className="w-14 h-14 rounded-2xl flex items-center justify-center text-[#0B1F3A] group-hover:scale-110 transition-transform"
                      style={{ backgroundColor: COLORS.yellow }}
                    >
                      <item.icon size={26} />
                    </div>
                    <span className="text-[11px] font-black uppercase tracking-wider px-3 py-1 bg-white/10 rounded-full text-[#F4C430]">
                      {item.tag}
                    </span>
                  </div>
                  <h3 className="text-2xl font-bold mb-3 text-white">
                    {item.title}
                  </h3>
                  <p className="text-gray-300 leading-relaxed text-sm">
                    {item.desc}
                  </p>
                </div>
                <div className="absolute -bottom-10 -right-10 w-32 h-32 bg-[#F4C430]/10 rounded-full blur-2xl group-hover:bg-[#F4C430]/20 transition-all"></div>
              </div>
            ))}

            <div className="bg-[#F4C430] text-[#0B1F3A] rounded-3xl p-8 shadow-xl flex flex-col justify-between">
              <div>
                <span className="text-xs font-black uppercase tracking-widest px-3 py-1 bg-[#0B1F3A] text-white rounded-full inline-block mb-6">
                  NEED A LOCKSMITH NOW?
                </span>
                <h3 className="text-3xl font-black mb-4 leading-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                  Auckland-Wide Emergency Dispatch
                </h3>
                <p className="text-[#0B1F3A]/80 font-medium text-base mb-8 leading-relaxed">
                  Call our 24/7 dispatch line right now for immediate mobile locksmith assistance anywhere in Auckland.
                </p>
              </div>
              <a 
                href="tel:0800828345" 
                className="bg-[#0B1F3A] text-white hover:bg-black transition-colors py-4 px-6 rounded-full font-bold text-center text-sm uppercase tracking-wider shadow-lg flex items-center justify-center space-x-2"
              >
                <Phone size={18} />
                <span>Call Now: 0800 828 345</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* WHERE WE WORK SECTION */}
      <section id="areas-we-cover" className="py-20 lg:py-28 bg-gray-50 border-t border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div className="lg:col-span-5 space-y-6">
              <span 
                className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                FULL AUCKLAND COVERAGE
              </span>
              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Where We Work
              </h2>
              <p className="text-gray-600 text-lg leading-relaxed font-normal">
                We cover the full Auckland region, including:
              </p>
              <ul className="space-y-2 text-gray-700 font-semibold">
                {serviceAreas.map((area, idx) => (
                  <li key={idx} className="flex items-center space-x-2">
                    <MapPin size={16} className="text-[#F4C430]" />
                    <span>{area}</span>
                  </li>
                ))}
              </ul>
              <div className="pt-4 border-t border-gray-200">
                <a 
                  href="areas-we-cover.html" 
                  className="inline-flex items-center text-sm font-bold uppercase tracking-wider text-[#0B1F3A] hover:text-[#F4C430] transition-colors"
                >
                  See the full list of suburbs we service on our Areas We Cover page →
                </a>
              </div>
            </div>

            <div className="lg:col-span-7">
              <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                {serviceAreas.map((area, idx) => (
                  <a 
                    key={idx}
                    href="areas-we-cover.html"
                    className="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm flex items-center space-x-4 hover:border-[#F4C430] hover:shadow-md transition-all group"
                  >
                    <div className="w-10 h-10 rounded-xl bg-gray-50 border border-gray-100 flex items-center justify-center text-gray-500 group-hover:bg-[#F4C430] group-hover:text-[#1F2937] transition-colors flex-shrink-0">
                      <MapPin size={18} strokeWidth={2.5} />
                    </div>
                    <div>
                      <h4 className="font-bold text-gray-900 text-base group-hover:text-[#F4C430] transition-colors">{area}</h4>
                      <p className="text-xs text-gray-400">24/7 Mobile Locksmith Dispatch</p>
                    </div>
                  </a>
                ))}
              </div>
            </div>

          </div>
        </div>
      </section>

      {/* GET IN TOUCH SECTION */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-10 md:p-16 text-white text-center space-y-6 shadow-2xl relative overflow-hidden border border-[#132B4F]">
            <span 
              className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-2"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              CONTACT OUR TEAM
            </span>
            <h2 className="text-4xl md:text-6xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Get in Touch
            </h2>
            <p className="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
              Whether it's a home, a car, or a business, our team is ready to help. Call <strong className="text-[#F4C430]">0800 828 345</strong> to talk to a member of our team now, or get in touch online, and we'll be back to you shortly.
            </p>
            <div className="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-xl uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                <Phone size={24} className="fill-current" />
                <span>Call Now: 0800 828 345</span>
              </a>
              <a 
                href="contact-us.html" 
                className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-xl uppercase tracking-wider border-2 border-white hover:border-[#F4C430] hover:text-[#F4C430] transition-all"
              >
                <Mail size={24} />
                <span>Contact Us</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="about" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<AboutUsPageContent />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<?php
include 'footer.php';
?>
