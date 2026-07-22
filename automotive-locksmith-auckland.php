<?php
$pageTitle = "Automotive Locksmith Auckland | Mobile Car Key Replacement 24/7";
$pageDescription = "Automotive Locksmith Auckland – 24/7 emergency car key replacement, transponder programming, car lockout assistance, and ignition repair across Auckland. Fast 20-40 min mobile response.";
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
  Zap, Settings, Key, Unlock, Plus, Minus, Layers, Cpu, Award
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const carBrands = [
  "Toyota", "Ford", "Holden", "Mazda", "Nissan", "Honda", "Hyundai", "Kia", 
  "Mitsubishi", "Subaru", "Suzuki", "Volkswagen", "Audi", "BMW", "Mercedes-Benz", 
  "Mercedes-AMG", "Mini", "Lexus", "Volvo", "Jaguar", "Land Rover", "Jeep", 
  "Dodge", "Chrysler", "Renault", "Peugeot", "Citroen", "Fiat", "Alfa Romeo", 
  "Skoda", "Porsche", "Daihatsu", "Isuzu", "MG", "SsangYong", "Chevrolet", 
  "Opel", "SEAT", "HSV"
];

const vanBrands = [
  "Toyota Hiace", "Ford Transit", "Mercedes Sprinter", "Volkswagen Crafter", 
  "Renault Master", "LDV Deliver 9", "Iveco Daily", "Hyundai Mighty", 
  "Kia K-Series", "Nissan Atlas", "Mazda Titan", "Mitsubishi Canter"
];

const truckBrands = [
  "Isuzu", "Hino", "Fuso", "UD Trucks", "Volvo", "Scania", "MAN", "DAF", "Mack", "Kenworth"
];

const autoServices = [
  {
    title: "Car Lockout Assistance",
    desc: "Locked your keys inside? Our emergency car lockout service options Auckland-wide, get you back in your car without any damage to the door or window.",
    icon: Unlock
  },
  {
    title: "Lost Car Key Replacement",
    desc: "No spare key? We can still cut and program a new one for most cars, using your vehicle's details rather than the old key. This is a full car key replacement done on-site.",
    icon: Key
  },
  {
    title: "Spare Car Keys",
    desc: "Getting a spare cut before you lose your only key saves time and money later. We can make one while we're already at your address for another job.",
    icon: KeyRound
  },
  {
    title: "Broken Key Extraction",
    desc: "A key can snap off in the door or ignition. We remove the broken piece first, then handle the car key repair or cut a fresh key if needed.",
    icon: Wrench
  },
  {
    title: "Ignition Repair and Replacement",
    desc: "A worn ignition can stop turning or accepting the key at all. We repair what we can and replace the ignition barrel when it's beyond fixing.",
    icon: Settings
  },
  {
    title: "Car Lock Rekeying",
    desc: "Bought a used car? Rekeying changes the lock pins so old keys from a previous owner stop working, without swapping the whole lock.",
    icon: Lock
  },
  {
    title: "Emergency Boot Opening",
    desc: "Keys locked inside the boot, or a boot that won't open at all? We get it open without damaging the paint or the latch.",
    icon: ShieldCheck
  },
  {
    title: "Remote Key Repair",
    desc: "A remote that's stopped locking or unlocking your car usually needs a battery change or a small internal repair. We check both on-site.",
    icon: Zap
  },
  {
    title: "Key Fob Replacement",
    desc: "For an electronic auto key replacement, we cut a new fob and pair it to your car's system, all in one visit.",
    icon: Cpu
  }
];

const workSteps = [
  {
    num: "01",
    title: "Call Us",
    desc: "Tell us your location, your car's make and model, and what's happened. This takes about two minutes."
  },
  {
    num: "02",
    title: "Mobile Dispatch",
    desc: "We send the nearest available locksmith to you. You'll get an estimated arrival time on the call."
  },
  {
    num: "03",
    title: "Vehicle Assessment",
    desc: "Our locksmith checks your car's key system before starting, so the right tools and parts are used."
  },
  {
    num: "04",
    title: "Key Cutting and Programming",
    desc: "We cut the key and program it to your car, including any transponder chip or immobiliser matching needed."
  },
  {
    num: "05",
    title: "Testing and Handover",
    desc: "We test the key to your car before handing it over, so you know it works before we leave."
  }
];

const faqs = [
  {
    q: "What should I do if I misplaced my car key and do not have a spare?",
    a: "Contact a mobile locksmith and have your vehicle's registration number and VIN number ready. Usually, the locksmith can cut and program a replacement key without using the original key."
  },
  {
    q: "How can I save money with a lost car key?",
    a: "Typically, the cost of hiring a mobile locksmith is much lower than taking your vehicle to a dealership because you will not incur towing charges and have to wait for days to receive your new key."
  },
  {
    q: "Is it possible to make a car key if the original key is not present?",
    a: "Yes, you simply need to provide to the locksmith your VIN and registration number, and he will create a new key based on them. Most car manufacturers allow this process."
  },
  {
    q: "Is programming a transponder key necessary?",
    a: "It is necessary because it has a chip that must be programmed into the vehicle immobiliser system through OBDII."
  },
  {
    q: "Is it possible for a locksmith to program a key fob in the absence of the original?",
    a: "Generally, the answer is affirmative as long as the locksmith can access the vehicle's onboard system and possesses the right tools for programming based on the specific vehicle."
  },
  {
    q: "How much will it cost to obtain a new car key fob?",
    a: "The cost will depend on the type of fob and if chip programming is necessary. A common fob costs less than a smart fob or a proximity key fob."
  },
  {
    q: "Is it cheaper to reprogram a key than to replace it?",
    a: "Reprogramming an old key with the possibility is usually less expensive than having it cut and programmed from scratch."
  },
  {
    q: "Will my car insurance pay for my lost key?",
    a: "There are certain policies that cover lost or stolen keys, but this depends on the type of policy you have. You can check this information in your insurance papers or call the company concerned."
  }
];

function AutomotiveLocksmithPageContent() {
  const [openFaq, setOpenFaq] = useState(-1);

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="services" />

      {/* PAGE HERO */}
      <section className="relative bg-[#0B1F3A] text-white py-20 lg:py-28 overflow-hidden">
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <a href="index.php#services" className="hover:text-[#F4C430] transition-colors">Services</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Automotive Locksmith Auckland</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Car size={14} className="mr-2" />
              24/7 MOBILE AUTOMOTIVE LOCKSMITH
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl lg:text-[60px] font-black leading-[1.1] tracking-tight mb-6" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Automotive Locksmith Auckland – <span style={{ color: COLORS.yellow }}>Mobile Car Locksmith Services 24/7</span>
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
                  <span className="text-[11px] uppercase tracking-wider text-gray-200 font-bold mb-0.5">Call Now 24/7 Dispatch</span>
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
            Need an automotive locksmith in Auckland?
          </h2>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            If you find yourself outside your own house at around 11 p.m., then you may have accidentally left your car keys inside the ignition. When you’re faced with such a situation, you need someone to assist you without wasting time on explaining your problem. The automotive locksmiths available in Auckland are trained to reach you in at least 20 minutes irrespective of the time of the day or night. They provide a large number of services, including unlocking houses and vehicles, fixing broken keys, and repairing defective locks. It doesn’t matter what type of job it is; just give them a call, and they will help you.
          </p>
          <p className="text-gray-700 text-base md:text-lg leading-relaxed">
            According to the statistics, every year, thousands of people get locked out of their homes. Even though they try to be very careful, this can happen as a result of a hurry for work or unexpectedly breaking a key. In such cases, a person doesn’t need to hear long explanations; they would rather turn to a locksmith immediately.
          </p>
        </div>
      </section>

      {/* SERVICES WE PROVIDE */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              FULL AUTO KEY & LOCK SOLUTIONS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Automotive Locksmith Services We Provide
            </h2>
            <p className="text-gray-600 text-lg">
              We specialise in cutting & programming automotive keys for almost every vehicle on New Zealand roads. Here's what we cover.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {autoServices.map((service, idx) => (
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

      {/* TRANSPONDER KEY PROGRAMMING */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-14 text-white shadow-2xl space-y-8">
            <div>
              <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
                CHIP & ECU PROGRAMMING
              </span>
              <h2 className="text-3xl md:text-5xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Transponder Key Programming
              </h2>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-[#132B4F] pt-8">
              <div className="space-y-3">
                <div className="flex items-center space-x-3 text-[#F4C430]">
                  <Cpu size={24} />
                  <h3 className="text-xl font-bold text-white">What Is a Transponder Key?</h3>
                </div>
                <p className="text-gray-300 text-sm leading-relaxed">
                  A transponder key has a small chip inside it. The chip sends a signal to your car's computer. If the signal doesn't match, the car won't start, even with the correct-looking key.
                </p>
              </div>

              <div className="space-y-3">
                <div className="flex items-center space-x-3 text-[#F4C430]">
                  <Key size={24} />
                  <h3 className="text-xl font-bold text-white">Transponder Key Replacement</h3>
                </div>
                <p className="text-gray-300 text-sm leading-relaxed">
                  The cost to replace a transponder key in Auckland depends on your car's make and how the chip is programmed. We carry chip-cutting and programming gear in our vans, so most cars are sorted the same day.
                </p>
              </div>

              <div className="space-y-3">
                <div className="flex items-center space-x-3 text-[#F4C430]">
                  <Layers size={24} />
                  <h3 className="text-xl font-bold text-white">Immobiliser Programming</h3>
                </div>
                <p className="text-gray-300 text-sm leading-relaxed">
                  An immobiliser is the part of your car that blocks the engine from starting without the right key signal. Every transponder chip talks to the immobiliser system through your car's ECU. We handle ECU programming for automotive keys, matching new chips to your car's existing immobiliser.
                </p>
              </div>
            </div>

            <div className="bg-[#132B4F] p-6 rounded-2xl border border-white/10 text-sm text-gray-300 leading-relaxed">
              <strong className="text-[#F4C430] font-bold">VW MQB & Mercedes FBS Systems:</strong> Volkswagen cars use a system called MQB. It works the same way as a standard immobiliser but is specific to VW's newer models. Mercedes-Benz uses its own systems too, called FBS3 and FBS4. These are Mercedes' fourth-generation immobiliser setups requiring specialized programming tools. Our team carries the right equipment for both.
            </div>
          </div>
        </div>
      </section>

      {/* SMART KEYS AND PROXIMITY KEYS */}
      <section className="py-20 bg-gray-50 border-t border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              PUSH-TO-START & KEYLESS ENTRY
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Smart Keys and Proximity Keys
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Zap size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">The Push Button Start System</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                With vehicles that have a push-button start, there is no requirement to use physical keys. A chip inside either the key or the fob sends signals to the vehicle once you are near enough to it.
              </p>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Unlock size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">Keyless Entry Systems</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                With a keyless entry system you can open your car without having to push any buttons at all, provided, of course, that the key is physically near. However, if the battery inside the fob dies, then this will not work.
              </p>
            </div>

            <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
              <div className="w-12 h-12 rounded-2xl bg-[#0B1F3A] text-[#F4C430] flex items-center justify-center"><Settings size={24} /></div>
              <h3 className="text-xl font-bold text-[#1F2937]">Smart Key Programming</h3>
              <p className="text-gray-600 text-sm leading-relaxed">
                We provide smart key and fob programming for almost any make of car, ensuring that the new key is perfectly synced with your system.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* NO ORIGINAL KEY & LOCKSMITH VS DEALERSHIP */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div className="bg-amber-50 rounded-3xl p-8 md:p-10 border border-amber-200 space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Can we create a car key when there is no original?
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                In most cases, yes. With your car's registration and VIN, we find out what type of key you need and then proceed to cut and code one. However, for some older and rare cars, additional steps may be required, and in such a case it is advisable to call us in advance with the registration number.
              </p>
            </div>

            <div className="bg-blue-50 rounded-3xl p-8 md:p-10 border border-blue-200 space-y-4">
              <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Locksmith vs Dealership – Which Is Faster and More Affordable?
              </h2>
              <p className="text-gray-700 text-base leading-relaxed">
                Because dealerships often require your vehicle to be towed, they can charge more and take longer to provide a vehicle key replacement. A mobile locksmith is usually more affordable and can often complete the job on the same day.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* BRANDS WE SERVICE */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
          <div className="text-center max-w-3xl mx-auto">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              WIDE VEHICLE COVERAGE
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Car, Van & Truck Brands We Service
            </h2>
            <p className="text-gray-600 text-base md:text-lg">
              We cut and program keys for almost every make on New Zealand roads, from everyday cars to commercial vans and heavy trucks. Click a logo or brand below to go straight to that brand's key replacement page.
            </p>
          </div>

          <div className="space-y-10">
            <div>
              <h3 className="text-xl font-bold text-[#1F2937] mb-4 flex items-center"><Car size={20} className="mr-2 text-[#F4C430]" /> Car Brands</h3>
              <div className="flex flex-wrap gap-2.5">
                {carBrands.map((brand, idx) => (
                  <a key={idx} href="tel:0800828345" className="bg-white hover:bg-[#F4C430] hover:text-[#0B1F3A] border border-gray-200 px-4 py-2 rounded-xl text-xs md:text-sm font-bold text-gray-800 transition-all shadow-sm">
                    {brand} Key Replacement Auckland
                  </a>
                ))}
              </div>
            </div>

            <div>
              <h3 className="text-xl font-bold text-[#1F2937] mb-4 flex items-center"><Building size={20} className="mr-2 text-[#F4C430]" /> Vans & Commercial Vehicles</h3>
              <div className="flex flex-wrap gap-2.5">
                {vanBrands.map((brand, idx) => (
                  <a key={idx} href="tel:0800828345" className="bg-white hover:bg-[#F4C430] hover:text-[#0B1F3A] border border-gray-200 px-4 py-2 rounded-xl text-xs md:text-sm font-bold text-gray-800 transition-all shadow-sm">
                    {brand} Key Replacement Auckland
                  </a>
                ))}
              </div>
            </div>

            <div>
              <h3 className="text-xl font-bold text-[#1F2937] mb-4 flex items-center"><Wrench size={20} className="mr-2 text-[#F4C430]" /> Trucks</h3>
              <div className="flex flex-wrap gap-2.5">
                {truckBrands.map((brand, idx) => (
                  <a key={idx} href="tel:0800828345" className="bg-white hover:bg-[#F4C430] hover:text-[#0B1F3A] border border-gray-200 px-4 py-2 rounded-xl text-xs md:text-sm font-bold text-gray-800 transition-all shadow-sm">
                    {brand} Truck Key Replacement Auckland
                  </a>
                ))}
              </div>
            </div>

            <p className="text-center text-sm font-semibold text-gray-500 pt-4">
              Can't see your vehicle listed? Call us anyway — we work on far more makes and models than we can fit on one page.
            </p>
          </div>
        </div>
      </section>

      {/* HOW OUR SERVICE WORKS */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto mb-16">
            <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-4" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
              SIMPLE 5-STEP PROCESS
            </span>
            <h2 className="text-4xl md:text-5xl font-black text-[#1F2937] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How Our Automotive Locksmith Service Works
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-5 gap-6">
            {workSteps.map((step, idx) => (
              <div key={idx} className="bg-gray-50 rounded-3xl p-6 border border-gray-200 flex flex-col justify-between relative">
                <div>
                  <span className="text-3xl font-black text-[#F4C430] block mb-4">{step.num}</span>
                  <h3 className="text-lg font-bold text-[#1F2937] mb-2">{step.title}</h3>
                  <p className="text-gray-600 text-xs leading-relaxed">{step.desc}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* WHY CHOOSE & RESPONSE TIMES & AREAS */}
      <section className="py-20 bg-gray-50 border-y border-gray-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
          
          <div className="bg-[#0B1F3A] rounded-3xl p-8 md:p-12 text-white space-y-4">
            <h2 className="text-3xl md:text-4xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Why Choose Lostkey Automotive Locksmiths?
            </h2>
            <p className="text-gray-300 text-base md:text-lg leading-relaxed">
              Lostkey provides fast professional automotive locksmith services across Auckland. Our vans carry key-cutting machines and programming tools, so most jobs finish in one visit, not two. We offer Afterpay on all pages, including automotive callouts, so an unexpected key replacement doesn't have to be paid in full upfront. Every locksmith on the team is trained specifically on automotive systems, not just household locks.
            </p>
          </div>

          <div className="space-y-6">
            <div className="max-w-3xl">
              <h2 className="text-3xl md:text-4xl font-black text-[#1F2937] mb-3" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
                Automotive Locksmith Response Times Across Auckland
              </h2>
              <p className="text-gray-600 text-base leading-relaxed">
                The arrival of our mobile automotive locksmiths in Auckland is prompt, mostly within a time span of 20 to 40 minutes. Travellers in the central suburbs will probably see the arrival on the lower end of that timeline, while those in the outskirts will take longer to receive help, particularly during rush hours.
              </p>
            </div>

            <div>
              <h3 className="text-xl font-bold text-[#1F2937] mb-2">Areas We Cover</h3>
              <p className="text-gray-500 text-sm mb-6">'Locksmith for a car near me' searches are answered across the whole region, not just central Auckland.</p>
              
              <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                {[
                  { region: "Auckland Central", desc: "CBD, Ponsonby, Parnell, and nearby suburbs." },
                  { region: "North Shore", desc: "Takapuna, Albany, Devonport, and surrounding areas." },
                  { region: "West Auckland", desc: "Henderson, New Lynn, Te Atatū, and nearby suburbs." },
                  { region: "South Auckland", desc: "Manukau, Papatoetoe, Ōtāhuhu, and surrounding areas." },
                  { region: "East Auckland", desc: "Howick, Pakuranga, Botany, and nearby suburbs." }
                ].map((item, idx) => (
                  <div key={idx} className="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                    <h4 className="font-bold text-[#0B1F3A] text-base flex items-center"><MapPin size={16} className="mr-1 text-[#F4C430]" /> {item.region}</h4>
                    <p className="text-xs text-gray-500">{item.desc}</p>
                  </div>
                ))}
              </div>
            </div>
          </div>

          <div className="bg-white rounded-3xl p-8 border border-gray-200 shadow-sm space-y-4">
            <h2 className="text-2xl md:text-3xl font-black text-[#1F2937]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Automotive Locksmith Pricing Guide
            </h2>
            <p className="text-gray-700 text-base leading-relaxed">
              Pricing for automotive car key replacement depends on your car's make, the type of key (standard, transponder, or smart key), and whether programming is needed. A basic key cutting job costs less than a full transponder or smart key replacement, since chip programming takes extra time and equipment. We confirm the price with you before starting, based on your car's details. Afterpay is available if you'd rather split the cost over a few payments.
            </p>
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
              Automotive Locksmith FAQs
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

      {/* CONTACT / CALLOUT SECTION */}
      <section className="py-20 bg-[#0B1F3A] text-white text-center">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
          <span className="inline-block text-xs font-bold uppercase tracking-widest px-5 py-2 rounded-full mb-2" style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}>
            24/7 EMERGENCY AUTO LOCKSMITH
          </span>
          <h2 className="text-4xl md:text-6xl font-black tracking-tight" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
            Contact Lostkey Automotive Locksmith Auckland
          </h2>
          <p className="text-xl md:text-2xl text-gray-300 max-w-2xl mx-auto leading-relaxed">
            Locked out or lost your car key? A mobile automotive locksmith can be with you in minutes – no towing and no dealership wait. Call us now on <strong className="text-[#F4C430]">0800 828 345</strong> with your location and vehicle details, and we'll send a locksmith for you. We're on call 24/7 across all of Auckland.
          </p>
          <div className="pt-4">
            <a 
              href="tel:0800828345" 
              className="inline-flex items-center space-x-3 px-10 py-5 rounded-full font-black text-xl uppercase tracking-wider shadow-2xl transition-all hover:scale-105"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Phone size={24} className="fill-current" />
              <span>Call 0800 828 345 Now</span>
            </a>
          </div>
        </div>
      </section>

      <window.FooterComponent currentPage="services" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
root.render(<AutomotiveLocksmithPageContent />);
</script>

<?php
include 'footer.php';
?>
