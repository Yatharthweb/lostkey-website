import React, { useState, useEffect } from 'react';

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

const MAIN_SERVICES = [
  { name: 'Emergency Locksmith Auckland', url: 'emergency-locksmith-auckland.html' },
  { name: '24 Hour Locksmith Auckland', url: '24-hour-locksmith-auckland.html' },
  { name: 'Residential Locksmith Auckland', url: 'residential-locksmith-auckland.html' },
  { name: 'Commercial Locksmith Auckland', url: 'index.html#contact' },
  { name: 'Automotive Locksmith Auckland', url: 'automotive-locksmith-auckland.html' },
  { name: 'Car Key Replacement Auckland', url: 'index.html#contact' },
  { name: 'Lock Rekeying Auckland', url: 'index.html#contact' },
  { name: 'Lock Repair Auckland', url: 'index.html#contact' },
  { name: 'Lock Replacement Auckland', url: 'index.html#contact' },
  { name: 'House Lockout Locksmith Auckland', url: 'index.html#contact' },
  { name: 'Car Lockout Locksmith Auckland', url: 'index.html#contact' },
  { name: 'Ignition Repair Auckland', url: 'index.html#contact' },
  { name: 'Ignition Replacement Auckland', url: 'index.html#contact' },
  { name: 'Master Key Systems Auckland', url: 'index.html#contact' },
  { name: 'Restricted Key Systems Auckland', url: 'index.html#contact' },
];

export function Header({ currentPage, Lucide }) {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false);
  const [mobileAreasOpen, setMobileAreasOpen] = useState(false);
  const [mobileCompanyOpen, setMobileCompanyOpen] = useState(false);
  const [mobileMoreOpen, setMobileMoreOpen] = useState(false);

  const {
    Phone, Lock, Home, Car, ChevronRight, ChevronDown, Key, Clock, MapPin, Wrench,
    Shield, Mail, Facebook, Twitter, Youtube, Users, AlertTriangle, Building, PenTool,
    DoorClosed, Unlock, Power, Layers, Menu, X
  } = Lucide;

  const getServiceIcon = (name) => {
    switch (name) {
      case 'Emergency Locksmith Auckland': return AlertTriangle;
      case '24 Hour Locksmith Auckland': return Clock;
      case 'Residential Locksmith Auckland': return Home;
      case 'Commercial Locksmith Auckland': return Building;
      case 'Automotive Locksmith Auckland': return Car;
      case 'Car Key Replacement Auckland': return Key;
      case 'Lock Rekeying Auckland': return Wrench;
      case 'Lock Repair Auckland': return PenTool;
      case 'Lock Replacement Auckland': return Shield;
      case 'House Lockout Locksmith Auckland': return DoorClosed;
      case 'Car Lockout Locksmith Auckland': return Unlock;
      case 'Ignition Repair Auckland': return Settings || Wrench;
      case 'Ignition Replacement Auckland': return Power;
      case 'Master Key Systems Auckland': return Layers;
      case 'Restricted Key Systems Auckland': return Lock;
      default: return Wrench;
    }
  };

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const isPhp = window.location.pathname.endsWith('.php');
  const getUrl = (htmlUrl) => {
    if (isPhp) {
      if (htmlUrl.endsWith('.html')) return htmlUrl.replace('.html', '.php');
    }
    return htmlUrl;
  };

  return (
    <header className={`sticky top-0 z-50 w-full transition-all duration-300 ${isScrolled ? 'shadow-2xl' : ''}`} style={{ backgroundColor: COLORS.black }}>
      {/* TOP INFO BAR */}
      <div className="text-sm py-2.5" style={{ backgroundColor: COLORS.black, borderBottom: '1px solid #222' }}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
          <div className="md:hidden flex flex-col w-full gap-y-2.5 px-1">
            <div className="flex justify-between items-center w-full">
              <span className="flex items-center text-gray-300 text-[11px]">
                <MapPin size={12} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                12 Queen St, Auckland 1010
              </span>
              <span className="flex items-center text-gray-300 text-[11px] font-bold">
                <Phone size={12} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                0800 828 345
              </span>
            </div>
            <div className="flex justify-between items-center w-full">
              <span className="flex items-center text-gray-300 text-[11px]">
                <Mail size={12} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                hello@lostkey.co.nz
              </span>
              <div className="flex items-center space-x-2">
                <a href="#" className="w-6 h-6 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="Facebook">
                  <Facebook size={10} className="text-gray-300" />
                </a>
                <a href="#" className="w-6 h-6 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="Twitter">
                  <Twitter size={10} className="text-gray-300" />
                </a>
                <a href="#" className="w-6 h-6 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="YouTube">
                  <Youtube size={10} className="text-gray-300" />
                </a>
              </div>
            </div>
          </div>

          <div className="hidden md:flex justify-between items-center w-full">
            <div className="flex items-center gap-x-5">
              <span className="flex items-center text-gray-300 text-sm">
                <MapPin size={13} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                12 Queen St, Auckland 1010
              </span>
              <span className="flex items-center text-gray-300 text-sm">
                <Mail size={13} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                hello@lostkey.co.nz
              </span>
              <span className="flex items-center text-gray-300 text-sm font-bold">
                <Phone size={13} className="mr-1.5 flex-shrink-0" style={{ color: COLORS.yellow }} />
                0800 828 345
              </span>
            </div>
            <div className="flex items-center space-x-2">
              <a href="#" className="w-7 h-7 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="Facebook">
                <Facebook size={12} className="text-gray-300" />
              </a>
              <a href="#" className="w-7 h-7 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="Twitter">
                <Twitter size={12} className="text-gray-300" />
              </a>
              <a href="#" className="w-7 h-7 flex items-center justify-center border border-gray-600 hover:border-white hover:bg-white/10 transition-colors rounded-sm" aria-label="YouTube">
                <Youtube size={12} className="text-gray-300" />
              </a>
            </div>
          </div>
        </div>
      </div>

      {/* MAIN NAVIGATION */}
      <nav className="w-full" style={{ backgroundColor: COLORS.black }}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-20">
          
          <a href={getUrl('index.html')} className="flex items-center space-x-1 cursor-pointer group">
            <span className="text-4xl md:text-[42px] font-black tracking-tighter flex items-center" style={{ color: COLORS.yellow, fontFamily: "'Inter Tight', sans-serif" }}>
              L
              <span className="relative flex items-center justify-center mx-[1px]">
                O
                <Lock size={15} fill={COLORS.black} className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" style={{ color: COLORS.black }} />
              </span>
              ST
              <span className="text-white ml-2">KEY</span>
            </span>
          </a>

          <div className="hidden lg:flex items-center space-x-12">
            <div className="flex space-x-8 text-[15px] font-bold tracking-wide h-full items-center">
              <a 
                href={getUrl('index.html')} 
                className={currentPage === 'home' ? 'text-[#F4C430] font-extrabold border-b-2 border-[#F4C430] py-6' : 'text-white hover:opacity-80 transition py-6'}
              >
                Home
              </a>
              
              {/* Company Dropdown */}
              <div className="relative group h-full flex items-center">
                <button className={`flex items-center hover:opacity-80 transition py-6 font-bold tracking-wide text-[15px] bg-transparent border-none cursor-pointer ${currentPage === 'company' || currentPage === 'about' || currentPage === 'contact' ? 'text-[#F4C430] font-extrabold' : 'text-white'}`}>
                  Company <ChevronDown size={14} className="ml-1" style={{ color: COLORS.yellow }} />
                </button>
                <div className="absolute top-[80px] left-1/2 -translate-x-1/2 w-[240px] bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-[0_30px_60px_rgba(0,0,0,0.15)] rounded-2xl p-4 border-t-[4px] border-[#F4C430] cursor-default z-50">
                  <a href={getUrl('about-us.html')} className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <Users size={16} strokeWidth={2.5} />
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">About Us</span>
                  </a>
                  <a href={getUrl('contact-us.html')} className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <Phone size={16} strokeWidth={2.5} />
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">Contact Us</span>
                  </a>
                </div>
              </div>
              
              {/* Services Mega Menu */}
              <div className="relative group h-full flex items-center">
                <a href={getUrl('index.html#services')} className={`flex items-center hover:opacity-80 transition py-6 ${currentPage === 'services' ? 'text-[#F4C430] font-extrabold' : 'text-white'}`}>
                  Services <ChevronDown size={14} className="ml-1" style={{ color: COLORS.yellow }} />
                </a>
                <div className="absolute top-[80px] left-1/2 -translate-x-1/2 w-[850px] bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-[0_30px_60px_rgba(0,0,0,0.15)] rounded-2xl p-8 border-t-[4px] border-[#F4C430] cursor-default z-50">
                  <div className="grid grid-cols-3 gap-x-8 gap-y-6">
                    {MAIN_SERVICES.map((service, idx) => {
                      const IconComp = getServiceIcon(service.name);
                      return (
                        <a 
                          key={idx} 
                          href={getUrl(service.url)} 
                          className="flex items-center space-x-3 group/item hover:bg-gray-50 p-2 -m-2 rounded-xl transition-colors"
                        >
                          <div className="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                            <IconComp size={18} strokeWidth={2.5} />
                          </div>
                          <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors line-clamp-2">
                            {service.name}
                          </span>
                        </a>
                      );
                    })}
                  </div>
                </div>
              </div>

              {/* Areas We Cover Dropdown */}
              <div className="relative group h-full flex items-center">
                <a 
                  href={getUrl('areas-we-cover.html')} 
                  className={currentPage === 'areas' ? 'flex items-center text-[#F4C430] font-extrabold border-b-2 border-[#F4C430] py-6' : 'flex items-center text-white hover:opacity-80 transition py-6'}
                >
                  Areas We Cover <ChevronDown size={14} className="ml-1" style={{ color: COLORS.yellow }} />
                </a>
                <div className="absolute top-[80px] left-1/2 -translate-x-1/2 w-[500px] bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-[0_30px_60px_rgba(0,0,0,0.15)] rounded-2xl p-6 border-t-[4px] border-[#F4C430] cursor-default z-50">
                  <div className="grid grid-cols-2 gap-x-6 gap-y-4">
                    {serviceAreas.map((area, idx) => (
                      <a 
                        key={idx} 
                        href={getUrl('areas-we-cover.html')} 
                        className="flex items-center space-x-3 group/item hover:bg-gray-50 p-2 -m-2 rounded-xl transition-colors"
                      >
                        <div className="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                          <MapPin size={14} strokeWidth={2.5} />
                        </div>
                        <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors line-clamp-1">
                          {area}
                        </span>
                      </a>
                    ))}
                  </div>
                </div>
              </div>

              {/* More Dropdown */}
              <div className="relative group h-full flex items-center">
                <button className={`flex items-center hover:opacity-80 transition py-6 font-bold tracking-wide text-[15px] bg-transparent border-none cursor-pointer ${currentPage === 'property-managers' ? 'text-[#F4C430] font-extrabold border-b-2 border-[#F4C430]' : 'text-white'}`}>
                  More <ChevronDown size={14} className="ml-1" style={{ color: COLORS.yellow }} />
                </button>
                <div className="absolute top-[80px] left-1/2 -translate-x-1/2 w-[280px] bg-white opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-[0_30px_60px_rgba(0,0,0,0.15)] rounded-2xl p-4 border-t-[4px] border-[#F4C430] cursor-default z-50">
                  <a href={getUrl('property-managers-landlords.html')} className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <Building size={16} strokeWidth={2.5} />
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">Property Managers & Landlords</span>
                  </a>
                </div>
              </div>

            </div>
            
            <a 
              href="tel:0800828345" 
              className="hover-ring flex items-center px-6 py-3 font-bold text-[13px] uppercase tracking-wider transition-all hover:brightness-110 hover:-translate-y-0.5 rounded-full shadow-[0_0_15px_rgba(220,38,38,0.6)] animate-[pulse_2s_cubic-bezier(0.4,0,0.6,1)_infinite]"
              style={{ backgroundColor: '#DC2626', color: COLORS.white }}
            >
              <Phone size={16} className="mr-2 phone-icon" strokeWidth={2.5} />
              Emergency
            </a>
          </div>

          <button 
            className="lg:hidden p-2 text-white focus:outline-none"
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          >
            {mobileMenuOpen ? <X size={28} /> : <Menu size={28} />}
          </button>
        </div>

        {/* MOBILE NAVIGATION */}
        {mobileMenuOpen && (
          <div className="lg:hidden absolute top-full left-0 w-full shadow-2xl bg-white border-t border-gray-100">
            <div className="flex flex-col px-4 py-6 space-y-1">
              <a href={getUrl('index.html')} className={`flex justify-between items-center py-4 font-bold text-lg border-b border-gray-100 ${currentPage === 'home' ? 'text-[#F4C430]' : 'text-gray-900'}`}>
                Home <ChevronRight size={18} className={currentPage === 'home' ? 'text-[#F4C430]' : 'text-gray-400'} />
              </a>

              {/* Company mobile dropdown */}
              <div className="flex flex-col border-b border-gray-100">
                <div className="flex justify-between items-center py-4 text-gray-900 font-bold text-lg cursor-pointer" onClick={() => setMobileCompanyOpen(!mobileCompanyOpen)}>
                  Company <ChevronDown size={18} className={`text-gray-400 transition-transform duration-300 ${mobileCompanyOpen ? 'rotate-180' : ''}`} />
                </div>
                <div className={`flex flex-col gap-y-2 transition-all duration-300 ${mobileCompanyOpen ? 'max-h-40 pt-2 pb-4 opacity-100' : 'max-h-0 opacity-0 overflow-hidden'}`}>
                  <a href={getUrl('about-us.html')} className="flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-colors" onClick={() => setMobileMenuOpen(false)}>
                    <div className="w-8 h-8 rounded-full bg-gray-50 border border-gray-100 shadow-sm flex items-center justify-center text-gray-500"><Users size={15} strokeWidth={2.5} /></div>
                    <span className="text-[14px] font-bold text-gray-800">About Us</span>
                  </a>
                  <a href={getUrl('contact-us.html')} className="flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-colors" onClick={() => setMobileMenuOpen(false)}>
                    <div className="w-8 h-8 rounded-full bg-gray-50 border border-gray-100 shadow-sm flex items-center justify-center text-gray-500"><Phone size={15} strokeWidth={2.5} /></div>
                    <span className="text-[14px] font-bold text-gray-800">Contact Us</span>
                  </a>
                </div>
              </div>
              
              {/* Areas We Cover Mobile Dropdown Accordion */}
              <div className="flex flex-col border-b border-gray-100">
                <div className="flex justify-between items-center py-4 text-gray-900 font-bold text-lg">
                  <a 
                    href={getUrl('areas-we-cover.html')} 
                    onClick={() => setMobileMenuOpen(false)}
                    className={`hover:text-[#F4C430] transition-colors flex-1 ${currentPage === 'areas' ? 'text-[#F4C430]' : 'text-gray-900'}`}
                  >
                    Areas We Cover
                  </a>
                  <button 
                    onClick={(e) => { e.stopPropagation(); setMobileAreasOpen(!mobileAreasOpen); }}
                    className="p-2 text-gray-400 hover:text-[#F4C430] focus:outline-none"
                    aria-label="Toggle Areas We Cover menu"
                  >
                    <ChevronDown 
                      size={20} 
                      className={`transition-transform duration-300 ${mobileAreasOpen ? 'rotate-180 text-[#F4C430]' : ''}`} 
                    />
                  </button>
                </div>
                <div className={`grid grid-cols-2 gap-x-2 gap-y-4 transition-all duration-300 ${mobileAreasOpen ? 'max-h-[60vh] pt-2 pb-6 opacity-100 overflow-y-auto' : 'max-h-0 opacity-0 overflow-hidden'}`}>
                  {serviceAreas.map((area, idx) => (
                    <a 
                      key={idx} 
                      href={getUrl('areas-we-cover.html')} 
                      className="flex items-center space-x-2 group p-2 rounded-xl hover:bg-gray-50 transition-colors" 
                      onClick={() => { setMobileMenuOpen(false); setMobileAreasOpen(false); }}
                    >
                      <div className="w-7 h-7 rounded-full bg-gray-50 border border-gray-100 shadow-sm flex items-center justify-center text-gray-500 group-hover:bg-[#F4C430] group-hover:text-[#1F2937] transition-colors flex-shrink-0">
                        <MapPin size={13} strokeWidth={2.5} />
                      </div>
                      <span className="text-[12px] font-bold text-gray-800 leading-tight group-hover:text-[#F4C430] transition-colors line-clamp-1">{area}</span>
                    </a>
                  ))}
                </div>
              </div>
              <div className="flex flex-col border-b border-gray-100">
                <div 
                  className="flex justify-between items-center py-4 text-gray-900 font-bold text-lg cursor-pointer"
                  onClick={() => setMobileServicesOpen(!mobileServicesOpen)}
                >
                  Services 
                  <ChevronDown 
                    size={18} 
                    className={`text-gray-400 transition-transform duration-300 ${mobileServicesOpen ? 'rotate-180' : ''}`} 
                  />
                </div>
                <div className={`grid grid-cols-2 gap-x-2 gap-y-6 transition-all duration-300 ${mobileServicesOpen ? 'max-h-[60vh] pt-4 pb-6 opacity-100 overflow-y-auto' : 'max-h-0 opacity-0 overflow-hidden'}`}>
                  {MAIN_SERVICES.map((service, idx) => {
                    const IconComp = getServiceIcon(service.name);
                    return (
                      <a 
                        key={idx} 
                        href={getUrl(service.url)} 
                        className="flex flex-col items-center text-center group px-1" 
                        onClick={() => { setMobileMenuOpen(false); setMobileServicesOpen(false); }}
                      >
                        <div className="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-[#F4C430] border border-gray-100 shadow-sm transition-colors flex items-center justify-center mb-3">
                          <IconComp size={22} className="text-gray-500 group-hover:text-[#1F2937] transition-colors" />
                        </div>
                        <span className="text-[12px] md:text-[13px] font-bold text-gray-800 leading-tight group-hover:text-[#F4C430] transition-colors">{service.name}</span>
                      </a>
                    );
                  })}
                </div>
              </div>

              {/* More mobile dropdown */}
              <div className="flex flex-col border-b border-gray-100">
                <div className="flex justify-between items-center py-4 text-gray-900 font-bold text-lg cursor-pointer" onClick={() => setMobileMoreOpen(!mobileMoreOpen)}>
                  More <ChevronDown size={18} className={`text-gray-400 transition-transform duration-300 ${mobileMoreOpen ? 'rotate-180' : ''}`} />
                </div>
                <div className={`flex flex-col gap-y-2 transition-all duration-300 ${mobileMoreOpen ? 'max-h-40 pt-2 pb-4 opacity-100' : 'max-h-0 opacity-0 overflow-hidden'}`}>
                  <a href={getUrl('property-managers-landlords.html')} className="flex items-center space-x-3 p-3 rounded-xl hover:bg-gray-50 transition-colors" onClick={() => setMobileMenuOpen(false)}>
                    <div className="w-8 h-8 rounded-full bg-gray-50 border border-gray-100 shadow-sm flex items-center justify-center text-gray-500"><Building size={15} strokeWidth={2.5} /></div>
                    <span className="text-[14px] font-bold text-gray-800">Property Managers & Landlords</span>
                  </a>
                </div>
              </div>

              <div className="pt-6 pb-2">
                <a 
                  href="tel:0800828345" 
                  className="flex items-center justify-center w-full py-4 font-bold uppercase tracking-wide text-base rounded-full shadow-lg"
                  style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
                >
                  <Phone size={18} className="mr-2" />
                  0800 828 345
                </a>
              </div>
            </div>
          </div>
        )}
      </nav>
    </header>
  );
}
