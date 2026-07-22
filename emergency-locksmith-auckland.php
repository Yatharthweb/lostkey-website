<?php
$pageTitle = "Emergency Locksmith Auckland | 24/7 Fast Mobile Locksmith Service";
$pageDescription = "Emergency Locksmith Auckland – 24/7 urgent lockout response in 20-30 mins. House, apartment, commercial & car lockouts, broken key removal, lock repair & rekeying.";
$currentPage = "services";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React, { useState } from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Clock, Calendar, Check, ArrowRight, AlertTriangle, Building, CreditCard,
  ShieldCheck, CheckCircle2, BadgeCheck, DollarSign, KeyRound, PenTool,
  Zap, Settings, Key, Unlock, Plus, Minus, Layers, Cpu, DoorClosed, Power, UserCheck
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const emServices = [
  {
    title: "Home Lockouts",
    desc: "Have you accidentally locked yourself outside of your house? We will unlock it for you without damaging the lock. Our vehicles have the tools needed for unlocking all types of locks.",
    icon: Home
  },
  {
    title: "Apartment & Rental Lockouts",
    desc: "Locked out of your apartment in Auckland? Apartment locks differ from standard house locks, but our specialists carry parts for every lock type.",
    icon: Building
  },
  {
    title: "Commercial & Office Lockouts",
    desc: "When employees are locked out before opening hours, company time is lost. We prioritize commercial calls and aim to arrive before business starts.",
    icon: Layers
  },
  {
    title: "Car Lockouts Assistance",
    desc: "We provide car locksmith service for cars, vans, and utes. We open vehicles without doing even slight scratches on the paint or door frame.",
    icon: Car
  },
  {
    title: "Lost or Stolen Keys",
    desc: "If you've lost or misplaced your keys, we can open your property/vehicle, replace the locks the same day, and prevent unauthorized access.",
    icon: Key
  },
  {
    title: "Broken Key Removal",
    desc: "Keys often break in older or worn locks. We extract the broken piece cleanly and cut a new replacement key for you instantly.",
    icon: Wrench
  },
  {
    title: "Emergency Lock Repairs",
    desc: "Locks can get stuck, jammed, or fail to turn. In such cases, we repair the existing mechanism instead of pushing for replacement.",
    icon: PenTool
  },
  {
    title: "Emergency Lock Replacement",
    desc: "In instances where locks are too worn or damaged after a break-in, our mobile vans carry high-quality replacement locks on-site.",
    icon: Shield
  },
  {
    title: "Lock Rekeying Services",
    desc: "Moved into a new home or experienced a burglary? Rekeying changes the inner pins so old keys stop working at a fraction of full replacement cost.",
    icon: KeyRound
  },
  {
    title: "Smart & Digital Lock Services",
    desc: "Smart locks can malfunction due to dead batteries, app errors, or blocked motors. We service almost all smart lock models sold in NZ.",
    icon: Cpu
  }
];

const whyChoosePoints = [
  { title: "Prompt Response Mobilization", desc: "Our vans are dispersed throughout Auckland rather than sitting at a central depot, allowing us to arrive in 20-30 minutes." },
  { title: "No-Damage Entry Techniques", desc: "Our priority is using professional lock picking and bypassing methods before resorting to drilling." },
  { title: "Experienced Locksmith Staff", desc: "Our team has completed over 5,000+ emergency callouts across Auckland homes, businesses, and vehicles." },
  { title: "Fully Equipped Response Vehicles", desc: "Each van carries full stock including locks, keys, and key-cutting tools to finish 95%+ of jobs in a single visit." },
  { title: "Upfront Transparent Pricing", desc: "We confirm exact pricing over the phone before starting work so there are zero surprise charges afterwards." },
  { title: "Workmanship Warranty", desc: "Every lock installed or repaired comes with our full workmanship guarantee at no extra cost to you." }
];

const workSteps = [
  { num: "01", title: "Call Our Emergency Team", desc: "Tell us your address and what happened. The call takes under 2 minutes." },
  { num: "02", title: "Immediate Dispatch", desc: "We send the closest mobile van straight to you with a guaranteed arrival time." },
  { num: "03", title: "On-Site Assessment", desc: "Our locksmith inspects the lock and confirms the exact price before starting." },
  { num: "04", title: "Access Restored", desc: "We restore access cleanly and test the lock thoroughly before leaving." }
];

const faqs = [
  {
    q: "How long do emergency locksmiths take?",
    a: "Most jobs are carried out in 20 - 40 minutes after reaching the site. Reaching the site usually takes about 20 - 40 minutes throughout Auckland."
  },
  {
    q: "What is the cost of hiring emergency locksmiths?",
    a: "The charges depend on the type of work, type of lock, and timing of service. A reasonable locksmith should tell you the price before commencing work."
  },
  {
    q: "What do the emergency locksmiths do?",
    a: "An emergency locksmith helps break open doors and car locks, repair locks, install new locks, and make new keys."
  },
  {
    q: "Is there a call-out charge?",
    a: "Not all locksmiths charge but many of them will especially for working after hours. We inform the client about call-out charges beforehand."
  },
  {
    q: "How soon can a lock be picked?",
    a: "An experienced locksmith might be able to get past a conventional pin tumbler lock in a matter of minutes. Sometimes, however, it takes longer with older locks or high-security models."
  },
  {
    q: "How much does a local locksmith cost?",
    a: "Cost varies according to the job. A straightforward lockout situation is generally less expensive than a complete lock change or rekeying operation. We provide clear pricing over the phone."
  }
];

function EmergencyLocksmithPageContent() {
  const [openFaq, setOpenFaq] = useState(-1);

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="services" />

      {/* HERO BANNER */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <a href="index.php#services" className="hover:text-[#F4C430] transition-colors">Services</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Emergency Locksmith Auckland</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <AlertTriangle size={14} className="mr-2" />
              24/7 FAST MOBILE DISPATCH (20-30 MINS)
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[60px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Emergency Locksmith Auckland – <span style={{ color: COLORS.yellow }}>24/7 Fast Mobile Service</span>
            </h1>

            <div className="pt-2">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-4 border border-white rounded-full px-2 py-2 pr-10 hover:border-[#F4C430] transition-all group bg-[#0B1F3A]/40"
              >
                <div className="w-14 h-14 rounded-full flex items-center justify-center flex-shrink-0" style={{ backgroundColor: COLORS.yellow }}>
                  <Phone size={24} style={{ color: COLORS.black, fill: COLORS.black }} />
                </div>
                <div className="flex flex-col">
                  <span className="text-[11px] uppercase tracking-wider text-gray-200 font-bold mb-0.5">Call Urgent Dispatch Now</span>
                  <span className="text-white font-black text-2xl md:text-3xl tracking-wide leading-none whitespace-nowrap">0800 828 345</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* PARTNERS LOGO SCROLLER (BELOW HERO BANNER) */}
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

      {/* INTRO SECTION */}
      <section className="py-16 bg-white">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
          <h2 className="text-3xl md:text-4xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
            Need an Emergency Locksmith in Auckland Right Now?
          </h2>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            Are you stuck outside your home at 11 pm? Does your automobile have its keys affixed in the ignition? You would require urgent assistance and not a lengthy explanation. The emergency locksmith team in Auckland has trained locksmiths who are capable of reaching you in as little time as 20 minutes, whether during the day or night. This team offers a range of services such as house lockouts, vehicle lockouts, broken keys, and damaged locks for its customers throughout the city. No matter the size of the job, it is valuable. All you need to do is call.
          </p>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            Every year, hundreds of Auckland residents get locked out of their houses. This can occur because a door may slam shut when it’s windy or the key can break during the cold. When this happens, a person does not need to listen to a long speech but would rather straight away call a locksmith near me who completes the job.
          </p>
        </div>
      </section>

      {/* 24/7 EMERGENCY SERVICES GRID */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              24/7 URGENT SOLUTIONS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              24/7 Emergency Locksmith Services Across Auckland
            </h2>
            <p className="text-gray-600 text-lg">
              We provide a find-a-24-hour-locksmith-in-Auckland service dedicated to always having someone ready to respond.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {emServices.map((service, idx) => (
              <div key={idx} className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                  <div className="w-14 h-14 rounded-2xl bg-[#0B1F3A] flex items-center justify-center mb-6 text-[#F4C430] group-hover:scale-110 transition-transform">
                    <service.icon size={26} />
                  </div>
                  <h3 className="text-2xl font-bold text-[#1F2937] mb-3 group-hover:text-[#F4C430] transition-colors">{service.title}</h3>
                  <p className="text-gray-600 leading-relaxed text-sm">{service.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* COMMON SITUATIONS & WHAT TO DO & HOW IT WORKS */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
          
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4 shadow-xl">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              TYPICAL CALLOUTS
            </span>
            <h2 className="text-3xl md:text-4xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Common Emergency Locksmith Situations We Handle
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              Most calls we get fall into a few common patterns. Keys left inside the house. Keys locked in the car with the engine still running. Keys snapped in a rushed morning. Locks that simply give up after years of use. A break-in that damaged the door frame. None of these situations are unusual, and none of them need to turn into a full day of stress.
            </p>
          </div>

          <div className="bg-amber-50 rounded-3xl p-8 md:p-10 border border-amber-200 space-y-4">
            <h3 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What to Do If You're Locked Out
            </h3>
            <p className="text-gray-700 text-base md:text-lg leading-relaxed">
              Stay calm first. Check every pocket and bag twice — keys turn up in odd places more than you'd think. Check with a neighbour or building manager for a spare. If none of that works, call an urgent locksmith and stay in a safe, well-lit spot while you wait. Don't try to force the door open yourself. Forcing a lock often makes the repair cost more, not less.
            </p>
          </div>

          <div>
            <div className="text-center max-w-3xl mx-auto mb-12">
              <h2 className="text-3xl md:text-4xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                How Our Emergency Locksmith Service Works
              </h2>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-4 gap-6">
              {workSteps.map((step, idx) => (
                <div key={idx} className="bg-gray-50 rounded-3xl p-6 border border-gray-200 flex flex-col justify-between">
                  <div>
                    <span className="text-3xl font-black text-[#F4C430] block mb-4">{step.num}</span>
                    <h3 className="text-lg font-bold text-[#1F2937] mb-2">{step.title}</h3>
                    <p className="text-gray-600 text-xs leading-relaxed">{step.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>

        </div>
      </section>

      {/* WHY CHOOSE LOSTKEY & WHO'S COMING TO YOUR DOOR */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
          
          <div>
            <div className="text-center max-w-3xl mx-auto mb-12">
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                TRUSTED & LICENSED
              </span>
              <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Why Choose Lostkey for Emergency Locksmith Services?
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              {whyChoosePoints.map((pt, idx) => (
                <div key={idx} className="bg-white p-6 rounded-3xl border border-gray-200 shadow-sm space-y-3">
                  <div className="w-10 h-10 rounded-full bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center font-bold">
                    <Check size={20} />
                  </div>
                  <h3 className="text-lg font-bold text-[#1F2937]">{pt.title}</h3>
                  <p className="text-gray-600 text-sm leading-relaxed">{pt.desc}</p>
                </div>
              ))}
            </div>
          </div>

          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4 shadow-xl">
            <div className="flex items-center space-x-3 text-[#F4C430]">
              <UserCheck size={28} />
              <h2 className="text-2xl md:text-3xl font-black" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Who's Coming to Your Door
              </h2>
            </div>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              Every locksmith on our team is background-checked before they're allowed to work a callout. This matters more for a lockout than for most trades, since we're the ones opening your door. Our locksmiths have handled emergency callouts across Auckland since 2018, and the team has completed over 5,000+ jobs to date. We carry full insurance, so if something goes wrong on the job, you're covered, not out of pocket. Every locksmith wears identification and arrives in a signwritten van, so you can check who's at your door before you open it.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div className="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-4">
              <h2 className="text-2xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Emergency Locksmith Pricing – What Can You Expect?
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Costs usually vary according to three factors — the hour of day, the lock hardware, and travel distance. Basic daytime unlocks are cheaper than late-night or holiday callouts. We look for an affordable emergency solution at all times and confirm exact pricing before commencing work.
              </p>
            </div>

            <div className="bg-white p-8 rounded-3xl border border-gray-200 shadow-sm space-y-4">
              <h2 className="text-2xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Tips to Prevent Future Lockouts
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Keep a spare key with a reliable neighbour or family member. Use Bluetooth key trackers connected to your phone. Consider installing keypad smart locks so physical keys aren't required, and service your door locks annually to prevent sudden mechanical jams.
              </p>
            </div>
          </div>

        </div>
      </section>

      {/* FREQUENTLY ASKED QUESTIONS */}
      <section className="py-20 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              FREQUENTLY ASKED QUESTIONS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Emergency Locksmith FAQs
            </h2>
          </div>

          <div className="space-y-4">
            {faqs.map((faq, idx) => {
              const isOpen = openFaq === idx;
              return (
                <div key={idx} className="bg-gray-50 rounded-2xl border border-gray-200 overflow-hidden">
                  <button 
                    onClick={() => setOpenFaq(isOpen ? -1 : idx)}
                    className="w-full text-left p-6 flex justify-between items-center font-bold text-gray-900 text-base md:text-lg"
                  >
                    <span>{faq.q}</span>
                    <span className="w-8 h-8 rounded-full bg-white flex items-center justify-center ml-4 flex-shrink-0 text-[#0B1F3A]">
                      {isOpen ? <Minus size={18} /> : <Plus size={18} />}
                    </span>
                  </button>
                  {isOpen && (
                    <div className="px-6 pb-6 text-gray-600 text-sm leading-relaxed border-t border-gray-200/60 pt-4 bg-white">
                      {faq.a}
                    </div>
                  )}
                </div>
              );
            })}
          </div>
        </div>
      </section>

      {/* CONTACT / CALLOUT SECTION (WITH SPACING & CARD) */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-10 md:p-16 text-white text-center space-y-6 shadow-2xl relative overflow-hidden border border-[#132B4F]">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-2" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              URGENT LOCKOUT DISPATCH 24/7
            </span>
            <h2 className="text-4xl md:text-6xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact Lostkey Emergency Locksmith Team in Auckland
            </h2>
            <p className="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
              If you are currently locked out, do not just sit on your doorstep waiting for someone to unlock the door for you. Call <strong className="text-[#F4C430]">0800 828 345</strong> and have someone dispatched to your location in no time.
            </p>
            <div className="pt-4">
              <a 
                href="tel:0800828345" 
                className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-xl uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
                style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
              >
                <Phone size={24} className="fill-current" />
                <span>Call Now: 0800 828 345</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="services" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<EmergencyLocksmithPageContent />);
</script>

<?php
include 'footer.php';
?>
