<?php
$pageTitle = "Areas We Cover | Locksmith Services Across Greater Auckland | Lostkey";
$pageDescription = "Lostkey provides mobile locksmith services across all of Greater Auckland. From Auckland City CBD to North Shore, West, East, South Auckland, Rodney, Franklin, and Hibiscus Coast.";
$currentPage = "areas";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Clock, Check, ArrowRight, AlertTriangle, Building, ShieldCheck, CheckCircle2,
  Navigation
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const regionCards = [
  {
    badge: "MOST POPULAR",
    title: "Auckland City Locksmith",
    image: "https://images.unsplash.com/photo-1507699622108-4be3abd695ad?auto=format&fit=crop&w=600&q=80",
    desc: "Fast call-outs across the CBD, apartments, and inner-city suburbs, with parking and access challenges factored into every job.",
    pills: ["CBD Access", "Apartment Lockouts", "Commercial Callouts"],
    cta: "View Auckland City locksmith services →",
    link: "contact-us.php"
  },
  {
    badge: "COASTAL SUBURBS",
    title: "North Shore Locksmith",
    image: "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80",
    desc: "Covering Takapuna, Albany, Devonport, and everywhere between, with a focus on both home lockouts and coastal properties prone to lock corrosion.",
    pills: ["Takapuna", "Albany", "Devonport"],
    cta: "View North Shore locksmith services →",
    link: "north-shore-locksmith.php"
  },
  {
    badge: "FAST RESPONSE",
    title: "West Auckland Locksmith",
    image: "https://images.unsplash.com/photo-1449824913935-59a10b8d2000?auto=format&fit=crop&w=600&q=80",
    desc: "Servicing Henderson, New Lynn, Te Atatū, and surrounding suburbs, with vans based locally to keep response times short across the west.",
    pills: ["Henderson", "New Lynn", "Te Atatū"],
    cta: "View West Auckland locksmith services →",
    link: "west-auckland-locksmith.php"
  },
  {
    badge: "FAMILY SUBURBS",
    title: "East Auckland Locksmith",
    image: "https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=600&q=80",
    desc: "Covering Howick, Pakuranga, Botany, and nearby suburbs, handling everything from family home lockouts to local business security upgrades.",
    pills: ["Howick", "Pakuranga", "Botany"],
    cta: "View East Auckland locksmith services →",
    link: "contact-us.php"
  },
  {
    badge: "WIDE COVERAGE",
    title: "South Auckland Locksmith",
    image: "https://images.unsplash.com/photo-1570129477492-45c003edd2be?auto=format&fit=crop&w=600&q=80",
    desc: "Servicing Manukau, Papatoetoe, Ōtāhuhu, and the wider south, with a team large enough to cover this spread-out region without long waits.",
    pills: ["Manukau", "Papatoetoe", "Ōtāhuhu"],
    cta: "View South Auckland locksmith services →",
    link: "south-auckland-locksmith.php"
  },
  {
    badge: "RURAL & COASTAL",
    title: "Rodney Locksmith",
    image: "https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=600&q=80",
    desc: "Covering Warkworth, Helensville, Wellsford, and the wider Rodney district, including rural properties and lifestyle blocks outside the main city grid.",
    pills: ["Warkworth", "Helensville", "Wellsford"],
    cta: "View Rodney locksmith services →",
    link: "rodney-locksmith.php"
  },
  {
    badge: "SOUTHERN REACH",
    title: "Franklin Locksmith",
    image: "https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=600&q=80",
    desc: "Servicing Pukekohe, Waiuku, Tuakau, and the surrounding Franklin district, covering both town centres and outlying rural addresses.",
    pills: ["Pukekohe", "Waiuku", "Tuakau"],
    cta: "View Franklin locksmith services →",
    link: "contact-us.php"
  },
  {
    badge: "BEACHSIDE",
    title: "Orewa & Hibiscus Coast Locksmith",
    image: "https://images.unsplash.com/photo-1473116763249-2faaef81ccda?auto=format&fit=crop&w=600&q=80",
    desc: "Covering Orewa, Silverdale, Whangaparāoa, and the wider Hibiscus Coast, an area that's grown fast and needs a locksmith who knows it well.",
    pills: ["Orewa", "Silverdale", "Whangaparāoa"],
    cta: "View Orewa & Hibiscus Coast locksmith services →",
    link: "contact-us.php"
  }
];

function AreasWeCoverPageContent() {
  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="areas" />

      {/* HERO SECTION */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-20 lg:pt-12 lg:pb-28 overflow-hidden">
        <div className="absolute inset-0 opacity-10 bg-[radial-gradient(#F4C430_1px,transparent_1px)] [background-size:24px_24px]"></div>
        <div className="absolute -top-24 -right-24 w-96 h-96 bg-[#F4C430]/15 rounded-full blur-3xl"></div>
        <div className="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/car-lockout.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Areas We Cover</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Navigation size={14} className="mr-2 fill-current" />
              RAPID 20-40 MINUTE MOBILE CALLOUTS
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[64px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Areas <span style={{ color: COLORS.yellow }}>We Cover</span>
            </h1>

            <h2 className="text-2xl sm:text-3xl font-bold text-gray-200 mb-6 tracking-tight">
              Locksmith Services Across Greater Auckland
            </h2>

            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl font-medium">
              Wherever you are in Auckland, a Lostkey locksmith isn't far away. Our mobile vans are spread across the region, from the CBD to the Hibiscus Coast, so call-outs get answered fast, not just in central suburbs. Whether you need a locksmith near me for a home lockout, a car key replacement, or a commercial job, our teams cover every corner of the region below.
            </p>
          </div>
        </div>
      </section>

      {/* 8 REGION CARDS GRID */}
      <section className="py-20 lg:py-28 bg-gray-50 border-b border-gray-100">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {regionCards.map((card, idx) => (
              <div 
                key={idx}
                className="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col group h-full"
              >
                <div className="flex flex-col h-full">
                  {/* Card Image & Badge */}
                  <div className="relative h-56 overflow-hidden">
                    <img 
                      src={card.image} 
                      alt={card.title} 
                      className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    />
                    <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <span 
                      className="absolute top-4 right-4 px-3 py-1 rounded-full text-[11px] font-black uppercase tracking-wider shadow-md"
                      style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                    >
                      {card.badge}
                    </span>
                  </div>

                  {/* Card Content */}
                  <div className="p-7 flex flex-col flex-grow">
                    <h3 className="text-2xl font-bold text-[#1F2937] mb-3 leading-tight group-hover:text-[#F4C430] transition-colors">
                      {card.title}
                    </h3>
                    
                    <p className="text-gray-600 text-sm leading-relaxed mb-6 font-normal">
                      {card.desc}
                    </p>

                    {/* Pills */}
                    <div className="flex flex-wrap gap-2 mb-6 mt-auto">
                      {card.pills.map((pill, pIdx) => (
                        <span 
                          key={pIdx}
                          className="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-lg flex items-center"
                        >
                          <MapPin size={12} className="mr-1 text-[#F4C430]" />
                          {pill}
                        </span>
                      ))}
                    </div>

                    {/* Card CTA Footer */}
                    <div className="mt-6">
                      <a 
                    href={card.link}
                    className="inline-flex items-center text-xs font-bold uppercase tracking-wider text-[#0B1F3A] group-hover:text-[#F4C430] transition-colors"
                  >
                    {card.cta}
                  </a>
                    </div>
                  </div>
                </div>
              </div>
            ))}
          </div>

        </div>
      </section>

      {/* CAN'T SEE YOUR SUBURB LISTED SECTION */}
      <section className="py-20 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-14 text-white text-center space-y-6 shadow-2xl relative overflow-hidden">
            <div className="w-16 h-16 rounded-full bg-[#F4C430] text-[#0B1F3A] flex items-center justify-center mx-auto mb-2">
              <MapPin size={32} />
            </div>

            <h2 className="text-3xl md:text-5xl font-black" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Can't See Your Suburb Listed?
            </h2>

            <p className="text-gray-300 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto font-medium">
              These eight regions cover the whole of greater Auckland, right up to Rodney and the Hibiscus Coast. If you're unsure which area your suburb falls under, just call us on <strong className="text-[#F4C430]">0800 828 345</strong> and we'll confirm coverage and connect you with the nearest available emergency locksmith Auckland team.
            </p>

            <div className="pt-4">
              <a 
                href="tel:0800828345"
                className="inline-flex items-center space-x-3 px-8 py-4 rounded-full font-black text-lg uppercase tracking-wider hover:brightness-110 shadow-xl transition-all"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                <Phone size={22} className="fill-current" />
                <span>Call Now: 0800 828 345</span>
              </a>
            </div>

            <div className="absolute bottom-0 right-0 w-40 h-28 opacity-30" style={{ backgroundImage: `radial-gradient(${COLORS.yellow} 3px, transparent 3px)`, backgroundSize: '16px 16px' }}></div>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="areas" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<AreasWeCoverPageContent />);
</script>

<?php
include 'footer.php';
?>
