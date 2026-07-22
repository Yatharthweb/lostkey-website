<?php
// footer.php - Reusable Footer Component
?>
<script type="text/babel" data-type="module">
import React, { useState, useEffect } from 'react';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Wrench, Shield, Mail, 
  Facebook, Twitter, Youtube, Zap, KeyRound, Calendar, ArrowUp, ArrowRight
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

window.FooterComponent = function FooterComponent({ currentPage }) {
  const [showScrollTop, setShowScrollTop] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setShowScrollTop(window.scrollY > 400);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <>
      {/* PARTNERS LOGO SCROLLER */}
      <section className="bg-white py-10 border-b border-gray-100 overflow-hidden relative z-10">
        <div className="relative w-full overflow-hidden flex items-center">
          <div className="absolute inset-y-0 left-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
          <div className="absolute inset-y-0 right-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>
          
          <div className="flex animate-marquee whitespace-nowrap items-center">
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain transition-all duration-300" />
            </div>
            <div className="flex flex-shrink-0 items-center space-x-12 md:space-x-24 px-6 md:px-12">
              <img src="partners/site-wise.jpeg" alt="SiteWise Green" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-locksmiths.jpeg" alt="Master Locksmiths" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/site-safe.jpeg" alt="Site Safe" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/auckland-business.jpeg" alt="Auckland Business Chamber" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/Abus.jpeg" alt="Abus" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/kaba.jpeg" alt="Kaba" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/lockwood.jpeg" alt="Lockwood" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/master-lock.jpeg" alt="Master Lock" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/silca.jpeg" alt="Silca" className="h-14 md:h-16 object-contain transition-all duration-300" />
              <img src="partners/yale.jpeg" alt="Yale" className="h-14 md:h-16 object-contain transition-all duration-300" />
            </div>
          </div>
        </div>
      </section>

      {/* FOOTER */}
      <footer style={{ backgroundColor: COLORS.black }}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
              <a href="index.php" className="flex items-center space-x-1 cursor-pointer mb-6">
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
                <li>
                  <a href="index.php" className="hover:text-white transition-colors inline-flex items-center">
                    <ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />
                    Home
                  </a>
                </li>
                <li>
                  <a href="about-us.php" className="hover:text-white transition-colors inline-flex items-center">
                    <ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />
                    About Us
                  </a>
                </li>
                <li>
                  <a href="index.php#reviews" className="hover:text-white transition-colors inline-flex items-center">
                    <ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />
                    Reviews
                  </a>
                </li>
                <li>
                  <a href="contact-us.php" className="hover:text-white transition-colors inline-flex items-center">
                    <ChevronRight size={14} className="mr-1" style={{ color: COLORS.yellow }} />
                    Contact
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h4 className="text-white font-bold text-lg mb-6">Our Services</h4>
              <ul className="space-y-3 text-gray-400">
                {[
                  { name: 'Emergency Locksmith Auckland', icon: Zap },
                  { name: '24-Hour Locksmith Auckland', icon: Clock },
                  { name: 'Residential Locksmith Auckland', icon: Home },
                  { name: 'Automotive Locksmith Auckland', icon: Car },
                  { name: 'Car Key Replacement Auckland', icon: KeyRound },
                  { name: 'Lock Rekeying Auckland', icon: Lock }
                ].map((service, idx) => (
                  <li key={idx}>
                    <a 
                      href="index.php#contact"
                      className="hover:text-[#F4C430] transition-colors flex items-start space-x-2 group"
                    >
                      <service.icon size={16} className="text-[#F4C430] flex-shrink-0 mt-0.5" />
                      <span className="text-sm leading-snug">{service.name}</span>
                    </a>
                  </li>
                ))}
                <li className="pt-2">
                  <a 
                    href="index.php#services"
                    className="inline-flex items-center text-sm font-bold transition-colors group hover:opacity-80"
                    style={{ color: COLORS.yellow }}
                  >
                    View All Services
                    <ArrowRight size={16} className="ml-2 group-hover:translate-x-1 transition-transform" />
                  </a>
                </li>
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

        <div className="border-t border-[#132B4F]">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <p className="text-gray-500 text-sm">Professional security solutions you can trust</p>
            <div className="flex items-center space-x-3">
              {[
                { icon: Facebook, label: 'Facebook' },
                { icon: Twitter, label: 'Twitter' },
                { icon: Youtube, label: 'YouTube' },
              ].map((social) => (
                <a 
                  key={social.label}
                  href="#" 
                  className="w-10 h-10 flex items-center justify-center bg-white text-[#1F2937] hover:opacity-80 transition-opacity"
                  aria-label={social.label}
                >
                  <social.icon size={16} />
                </a>
              ))}
            </div>
          </div>
        </div>

        <div className="border-t border-[#132B4F]">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500 gap-4 text-center md:text-left">
            <p>© 2026 LostKey. All Rights Reserved.</p>
            <p>
              Designed and Developed By <a href="https://atrangihome.com/" target="_blank" rel="noopener noreferrer" className="text-white hover:text-[#F4C430] transition-colors font-bold">Atrangi Home</a>
            </p>
            <div className="flex space-x-6">
              <a href="#" className="hover:text-white transition-colors">Terms & Conditions</a>
              <a href="#" className="hover:text-white transition-colors">Privacy Policy</a>
            </div>
          </div>
        </div>
      </footer>

      {/* MOBILE STICKY CTA */}
      <div 
        className="md:hidden fixed bottom-0 left-0 w-full p-4 z-50 shadow-[0_-10px_30px_rgba(0,0,0,0.3)] flex justify-between items-center"
        style={{ backgroundColor: COLORS.black, borderTop: `2px solid ${COLORS.yellow}` }}
      >
        <div className="flex flex-col text-white px-2">
          <span className="text-[10px] font-black uppercase tracking-widest mb-0.5" style={{ color: COLORS.yellow }}>Locked Out?</span>
          <span className="font-bold text-sm">24/7 Emergency Service</span>
        </div>
        <a 
          href="tel:0800828345" 
          className="flex items-center justify-center px-6 py-3.5 font-bold active:scale-95 transition-transform rounded-full"
          style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
        >
          <Phone size={18} className="mr-2" />
          Call Now
        </a>
      </div>

      {/* DESKTOP FLOATING BUTTONS */}
      <div className="hidden md:flex fixed top-1/2 right-0 -translate-y-1/2 flex-col z-50 rounded-l-lg overflow-hidden shadow-[0_0_20px_rgba(0,0,0,0.2)]">
        <a 
          href="tel:0800828345" 
          className="bg-[#0B1F3A] text-white hover:text-[#1F2937] hover:bg-white transition-colors py-6 px-2 flex flex-col items-center space-y-3 cursor-pointer group"
        >
          <Phone size={20} className="group-hover:scale-110 transition-transform" />
          <span className="font-bold text-[13px] tracking-widest uppercase" style={{ writingMode: 'vertical-rl', transform: 'rotate(180deg)' }}>Call Now</span>
        </a>
        <a 
          href="#contact" 
          className="bg-[#F4C430] text-[#0B1F3A] hover:bg-white transition-colors py-6 px-2 flex flex-col items-center space-y-3 cursor-pointer border-t border-[#132B4F] group"
        >
          <Calendar size={20} className="group-hover:scale-110 transition-transform" />
          <span className="font-bold text-[13px] tracking-widest uppercase" style={{ writingMode: 'vertical-rl', transform: 'rotate(180deg)' }}>Book Appointment</span>
        </a>
      </div>

      {/* SCROLL TO TOP BUTTON */}
      <button
        onClick={scrollToTop}
        className={`fixed bottom-24 md:bottom-8 right-6 md:right-8 z-50 p-4 rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.2)] transition-all duration-300 hover:scale-110 hover:-translate-y-1 ${showScrollTop ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10 pointer-events-none'}`}
        style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
        aria-label="Scroll to top"
      >
        <ArrowUp size={24} strokeWidth={2.5} />
      </button>
    </>
  );
};
</script>
</body>
</html>
