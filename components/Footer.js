import React from 'react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

const MAIN_SERVICES = [
  { name: 'Emergency Locksmith Auckland', url: 'emergency-locksmith-auckland.html' },
  { name: '24 Hour Locksmith Auckland', url: '24-hour-locksmith-auckland.html' },
  { name: 'Residential Locksmith Auckland', url: 'residential-locksmith-auckland.html' },
  { name: 'Commercial Locksmith Auckland', url: 'index.html#contact' },
  { name: 'Automotive Locksmith Auckland', url: 'automotive-locksmith-auckland.html' },
  { name: 'Car Key Replacement Auckland', url: 'index.html#contact' },
];

export function Footer({ currentPage, Lucide }) {
  const {
    ChevronRight, MapPin, Mail, Phone, AlertTriangle, Clock, Home, Building, Car, Key, Wrench, Shield, PenTool, DoorClosed, Unlock, Settings, Power, Layers
  } = Lucide;

  const getServiceIcon = (name) => {
    switch (name) {
      case 'Emergency Locksmith Auckland': return AlertTriangle;
      case '24 Hour Locksmith Auckland': return Clock;
      case 'Residential Locksmith Auckland': return Home;
      case 'Commercial Locksmith Auckland': return Building;
      case 'Automotive Locksmith Auckland': return Car;
      case 'Car Key Replacement Auckland': return Key;
      default: return Wrench;
    }
  };

  const isPhp = window.location.pathname.endsWith('.php');
  const getUrl = (htmlUrl) => {
    if (isPhp && htmlUrl.endsWith('.html')) return htmlUrl.replace('.html', '.php');
    return htmlUrl;
  };

  return (
    <footer style={{ backgroundColor: COLORS.black }}>
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-12">
          <div>
            <a href={getUrl('index.html')} className="flex items-center space-x-1 cursor-pointer mb-6">
              <span className="text-3xl font-black tracking-tight">
                <span style={{ color: COLORS.yellow }}>LOST</span>
                <span className="text-white ml-1.5">KEY</span>
              </span>
            </a>
            <p className="text-gray-400 text-sm leading-relaxed mb-8">
              LostKey is Auckland's trusted locksmith, delivering prompt, reliable, and high-quality access solutions for homes and businesses across New Zealand for over 8 years.
            </p>
            
            <h4 className="text-white font-bold text-lg mb-4">Quick Links</h4>
            <ul className="space-y-3 text-gray-400">
              <li><a href={getUrl('index.html')} className="hover:text-white transition-colors inline-flex items-center"><ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />Home</a></li>
              <li><a href={getUrl('about-us.html')} className="hover:text-white transition-colors inline-flex items-center"><ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />About Us</a></li>
              <li><a href={getUrl('areas-we-cover.html')} className="hover:text-white transition-colors inline-flex items-center"><ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />Areas We Cover</a></li>
              <li><a href={getUrl('property-managers-landlords.html')} className="hover:text-white transition-colors inline-flex items-center"><ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />Property Managers & Landlords</a></li>
              <li><a href={getUrl('contact-us.html')} className="hover:text-white transition-colors inline-flex items-center"><ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />Contact</a></li>
            </ul>
          </div>

          <div>
            <h4 className="text-white font-bold text-lg mb-6">Our Services</h4>
            <ul className="space-y-3 text-gray-400">
              {MAIN_SERVICES.slice(0, 6).map((service, idx) => {
                const IconComp = getServiceIcon(service.name);
                return (
                  <li key={idx}>
                    <a href={getUrl(service.url)} className="hover:text-[#F4C430] transition-colors flex items-start space-x-2 group">
                      <IconComp size={16} className="text-[#F4C430] flex-shrink-0 mt-0.5" />
                      <span className="text-sm leading-snug">{service.name}</span>
                    </a>
                  </li>
                );
              })}
            </ul>
          </div>

          <div>
            <h4 className="text-white font-bold text-lg mb-6">Get in Touch</h4>
            <ul className="space-y-4 text-gray-400">
              <li className="flex items-start space-x-3">
                <MapPin size={18} className="flex-shrink-0 mt-0.5" style={{ color: COLORS.yellow }} />
                <div>
                  <span className="text-xs font-bold uppercase tracking-wider text-gray-500">Visit Us</span>
                  <p className="text-sm mt-0.5">12 Queen Street, Auckland 1010</p>
                </div>
              </li>
              <li className="flex items-start space-x-3">
                <Mail size={18} className="flex-shrink-0 mt-0.5" style={{ color: COLORS.yellow }} />
                <div>
                  <span className="text-xs font-bold uppercase tracking-wider text-gray-500">Mail Us</span>
                  <p className="text-sm mt-0.5">hello@lostkey.co.nz</p>
                </div>
              </li>
              <li className="flex items-start space-x-3">
                <Phone size={18} className="flex-shrink-0 mt-0.5" style={{ color: COLORS.yellow }} />
                <div>
                  <span className="text-xs font-bold uppercase tracking-wider text-gray-500">Contact Us</span>
                  <p>0800 828 345</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  );
}
