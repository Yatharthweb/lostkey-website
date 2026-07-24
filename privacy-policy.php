<?php
$pageTitle = "Privacy Policy | LostKey Locksmith Auckland";
$pageDescription = "Privacy Policy for Lostkey Locksmith Auckland. Learn how we collect, protect, and manage your personal details, payment info, cookies, and privacy rights.";
$currentPage = "privacy";
include 'includes/header.php';
?>

<script type="text/babel" data-type="module">
import { createRoot } from 'react-dom/client';
import React from 'react';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Mail, 
  ShieldCheck, FileText, CheckCircle2, AlertTriangle, Building, Shield
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

function PrivacyPolicyPageContent() {
  const HeaderComponent = window.HeaderComponent;
  const FooterComponent = window.FooterComponent;

  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}><HeaderComponent currentPage="privacy" />{/* HERO BANNER */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/key-locksmith.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.html" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Privacy Policy</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <Shield size={14} className="mr-2" />
              DATA PROTECTION & PRIVACY ACT 2020
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl font-black leading-[1.1] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Privacy Policy
            </h1>
            <p className="text-gray-300 text-lg md:text-xl leading-relaxed">
              Lostkey owns and manages the website. Lostkey is a locksmith company that provides residential, commercial and automotive locksmith services in Auckland. When using this website or contacting Lostkey for any requests, inquiries or quotes, you agree to abide by this privacy policy. We may update this Privacy Policy from time to time.
            </p>
          </div>
        </div>
      </section>

      {/* MAIN CONTENT */}
      <section className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 text-gray-800 leading-relaxed">

          {/* WHAT PERSONAL INFORMATION WE COLLECT */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              What Personal Information We Collect
            </h2>
            <p className="text-base text-gray-700">
              We only collect personal information that is knowingly and voluntarily provided to us, whether through this website, over the phone, by email, or in person during a callout. This may include:
            </p>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>Your name, phone number, and email address</li>
              <li>Your home, business, or vehicle location, where relevant to a job</li>
              <li>Vehicle details (registration, make, model) for car key replacement or automotive callouts</li>
              <li>Payment details, including card information or Afterpay account details, where needed to process payment</li>
              <li>Insurance claim details, where you've asked us to coordinate a car key insurance claim on your behalf</li>
              <li>Any additional details you choose to share with us through our contact forms or enquiries</li>
            </ul>
            <p className="text-base text-gray-700 pt-2">
              We do not collect sensitive personal information beyond what's reasonably needed to provide a locksmith service, arrange a callout, or process payment.
            </p>
          </div>

          {/* HOW WE USE YOUR INFORMATION */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              How We Use Your Information
            </h2>
            <p className="text-base text-gray-700">
              Personal information you provide is used only for the purpose you provided it for, or for closely related purposes, such as:
            </p>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>Responding to your enquiry or booking request</li>
              <li>Dispatching a locksmith to your location for an emergency locksmith Auckland callout or scheduled job</li>
              <li>Processing payment for services, including Afterpay instalments</li>
              <li>Coordinating with your insurance provider, where you've asked us to handle a claim</li>
              <li>Keeping basic records of past jobs, for warranty and workmanship guarantee purposes</li>
              <li>Contacting you about a job in progress, a quote, or a follow-up query</li>
            </ul>
            <p className="text-base text-gray-700 pt-2">
              We do not use your personal information for unrelated marketing purposes without your consent.
            </p>
          </div>

          {/* CREDIT CARD AND PAYMENT DETAILS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Credit Card and Payment Details
            </h2>
            <p className="text-base text-gray-700">
              Card details provided for payment, including Afterpay-linked payments, are only used to process the transaction for the service provided. We do not store full card details on our own systems beyond what's required to complete payment, and any stored records are handled through secure, PCI-compliant payment processors.
            </p>
          </div>

          {/* DISCLOSURE OF INFORMATION */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Disclosure of Information
            </h2>
            <p className="text-base text-gray-700">
              We do not sell or trade your personal information. We may disclose personal information in the following circumstances:
            </p>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>Where you've given consent, such as authorising us to liaise with your insurance provider</li>
              <li>Where disclosure is necessary to complete the service you've requested, such as passing vehicle details to a parts supplier</li>
              <li>Where we're required to do so by law, such as in response to a court order or a lawful request from police</li>
              <li>Where we believe in good faith it's necessary to protect our rights, property, or the safety of our staff or customers</li>
            </ul>
            <p className="text-base text-gray-700 pt-2">
              Where we engage third parties, such as payment processors, insurance companies, or parts suppliers, to help deliver a service you've requested, we only share the information necessary for that purpose.
            </p>
          </div>

          {/* SECURITY OF YOUR INFORMATION */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Security of Your Information
            </h2>
            <p className="text-base text-gray-700">
              We take reasonable steps to protect the personal information we hold, including:
            </p>
            <ul className="space-y-2 text-base text-gray-700 list-disc pl-5">
              <li>Limiting access to personal information to staff who need it to do their job</li>
              <li>Using secure, encrypted payment processing for card and Afterpay transactions</li>
              <li>Reviewing our security practices periodically as technology and risks change</li>
            </ul>
            <p className="text-base text-gray-700 pt-2">
              There are no absolute methods for data transmission or storage. Although we adopt all the necessary measures to ensure security, we cannot ensure complete security by any means.
            </p>
          </div>

          {/* COOKIES AND WEBSITE DATA */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Cookies and Website Data
            </h2>
            <p className="text-base text-gray-700">
              Cookies may be used on our site's web page for various beneficial reasons, such as to analyse our website's services, which include locksmith services in Auckland and our automotive and residential services. Cookies will only be used to collect non-identifiable data such as details about the web browser, location of the surfer, and accessed web pages. Although all the data is collected, it does not make it identifiable to a certain individual.
            </p>
            <p className="text-base text-gray-700">
              You can adjust your browser settings to limit or disable cookies, though this may affect how some parts of the website function.
            </p>
          </div>

          {/* IP ADDRESSES AND ANALYTICS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              IP Addresses and Analytics
            </h2>
            <p className="text-base text-gray-700">
              Our web servers may keep records of IP addresses and other technical data in order to assist with troubleshooting, ensure site security and gain insight into patterns of usage. The data is collected in aggregate form, and it is not used to identify any individual user.
            </p>
          </div>

          {/* ACCESS TO AND CORRECTION OF YOUR INFORMATION */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Access to and Correction of Your Information
            </h2>
            <p className="text-base text-gray-700">
              Should you believe that any personal data we possess about you is false or outdated, you can reach out to us to get it rectified. You can also request that we remove or deactivate any information regarding you from our databases. However, certain parts may be retained in accordance with our record-keeping processes (such as work guarantees and work-done history).
            </p>
          </div>

          {/* LINKS TO OTHER WEBSITES */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Links to Other Websites
            </h2>
            <p className="text-base text-gray-700">
              Our website has links to websites owned by other companies, such as insurance companies, financial companies like Afterpay, and sites owned by suppliers. We are not accountable for any of the content published on or privacy measures taken by these other sites. We recommend that you review the privacy policies of any and all websites owned by others before providing any of your personal information to them.
            </p>
          </div>

          {/* CHILDREN'S PRIVACY & CHANGES TO THIS POLICY */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Children's Privacy & Policy Updates
            </h2>
            <p className="text-base text-gray-700">
              The services we provide are made for adults who seek locksmith services for themselves or their properties. We do not intentionally collect any personal information from minors. We may update this Privacy Policy over time. If there are any changes to this policy, they will be noted on this page.
            </p>
          </div>

          {/* CONTACT US */}
          <div className="bg-amber-50 rounded-3xl p-8 border border-amber-200 space-y-4">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact Us
            </h2>
            <p className="text-gray-700 text-base">
              If you have any queries, doubts, or grievances related to this Privacy Policy or the manner in which your personal data has been processed, do not hesitate to get in touch with us:
            </p>
            <div className="space-y-2 text-base text-gray-800 font-medium">
              <p className="flex items-center"><Phone size={18} className="mr-2 text-[#F4C430]" /> Phone: <a href="tel:0800828345" className="ml-2 font-bold underline">0800 828 345</a></p>
              <p className="flex items-center"><Mail size={18} className="mr-2 text-[#F4C430]" /> Email: <a href="mailto:hello@lostkey.co.nz" className="ml-2 font-bold underline">hello@lostkey.co.nz</a></p>
              <p className="flex items-center"><MapPin size={18} className="mr-2 text-[#F4C430]" /> Address: <span className="ml-2">12 Queen Street, Auckland 1010</span></p>
            </div>
            <p className="text-xs text-gray-500 pt-2 border-t border-amber-200/60">
              In case you are still not happy with our reply, you can always reach out to the Office of the Privacy Commissioner for further assistance.
            </p>
          </div>

        </div>
      </section><FooterComponent currentPage="privacy" /></div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<PrivacyPolicyPageContent />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<?php
include 'includes/footer.php';
?>
