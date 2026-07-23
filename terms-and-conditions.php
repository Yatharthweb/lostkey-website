<?php
$pageTitle = "Terms & Conditions of Trade | LostKey Locksmith Auckland";
$pageDescription = "Terms & Conditions of Trade for Lostkey Locksmith Auckland. Details on services, pricing, acceptance, warranties, lockout protocols, and liability.";
$currentPage = "terms";
include 'header.php';
?>

<script type="text/babel" data-type="module">
import React from 'react';
import { createRoot } from 'react-dom/client';
import { 
  Phone, Lock, Home, Car, ChevronRight, MapPin, Mail, 
  ShieldCheck, FileText, CheckCircle2, AlertTriangle, Building, HelpCircle
} from 'lucide-react';

const COLORS = {
  yellow: '#F4C430',
  black: '#0B1F3A',
  white: '#FFFFFF',
};

function TermsPageContent() {
  return (
    <div className="min-h-screen bg-white font-sans text-gray-900 relative pb-16 md:pb-0" style={{ fontFamily: "'Inter Tight', 'Inter', sans-serif" }}>
      <window.HeaderComponent currentPage="terms" />

      {/* HERO BANNER */}
      <section className="relative bg-[#0B1F3A] text-white pt-8 pb-16 lg:pt-12 lg:pb-24 overflow-hidden">
        <div className="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat opacity-[0.1]" style={{ backgroundImage: "url('images/key-locksmith.jpeg')" }}></div>
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
          <div className="flex items-center space-x-2 text-sm text-gray-400 mb-6 font-medium">
            <a href="index.php" className="hover:text-[#F4C430] transition-colors">Home</a>
            <ChevronRight size={14} className="text-gray-500" />
            <span className="text-[#F4C430] font-bold">Terms & Conditions of Trade</span>
          </div>

          <div className="max-w-4xl">
            <span 
              className="inline-flex items-center text-xs md:text-sm font-black uppercase tracking-widest px-5 py-2 rounded-full mb-6"
              style={{ backgroundColor: COLORS.yellow, color: COLORS.black }}
            >
              <FileText size={14} className="mr-2" />
              LEGAL & SERVICE AGREEMENT
            </span>

            <h1 className="text-4xl sm:text-5xl md:text-6xl font-black leading-[1.1] tracking-tight mb-4" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Terms & Conditions of Trade
            </h1>
            <p className="text-gray-300 text-lg md:text-xl leading-relaxed">
              These Terms & Conditions of Trade ("Contract") apply to all services offered by Lostkey, a locksmith company in Auckland, to any customer requesting our services. By requesting a quote, booking a callout, or accepting delivery of services, the customer is taken to have accepted these terms in full.
            </p>
          </div>
        </div>
      </section>

      {/* MAIN TERMS CONTENT */}
      <section className="py-16 bg-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 text-gray-800 leading-relaxed">

          {/* 1. DEFINITIONS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              1. Definitions
            </h2>
            <div className="space-y-3 text-base text-gray-700">
              <p><strong>"Contract"</strong> means these terms and conditions, together with any quotation, order, invoice, or other document expressed to be supplemental to this Contract.</p>
              <p><strong>"Supplier"</strong> means Lostkey, its successors and assigns.</p>
              <p><strong>"Customer"</strong> means the person, entity, or any person acting with the authority of the customer requesting the supplier to provide services. Where there is more than one Customer, this reference applies to each Customer jointly and severally.</p>
              <p>The terms <strong>"goods"</strong> and <strong>"services"</strong> refer to all the items or assistance provided by the seller to the client, which include lockout emergency services, repairing of locks, changing locks, rekeying of locks, making of keys and locksmithing for cars.</p>
              <p><strong>"Price"</strong> is the sum due (plus GST if applicable) with reference to the goods or services, as decided between the Seller and Client.</p>
              <p><strong>"Cookies"</strong> are files kept on a user's device in the course of browsing our website, designed to help run the site and learn about how it is used.</p>
            </div>
          </div>

          {/* 2. ACCEPTANCE */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              2. Acceptance
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>2.1</strong> The customer is taken to have accepted these terms and conditions once they place an order, book a callout, or accept delivery of goods or services.</li>
              <li><strong>2.2</strong> These terms prevail over any inconsistent term in a prior document, unless agreed otherwise in writing.</li>
              <li><strong>2.3</strong> It is required that any amendments to this Contract be accepted in writing by both parties involved.</li>
              <li><strong>2.4</strong> It is the right of the Supplier to charge a call-out fee in a situation where a cancellation takes place after a locksmith has been sent over.</li>
              <li><strong>2.5</strong> If services are required urgently outside of normal working hours, the Supplier is allowed to charge additional rates for after-hours service.</li>
              <li><strong>2.6</strong> In a case where goods or services pertain to an insurance claim made by the customer, payment by the customer must be received by the due date no matter what happens with the claim.</li>
            </ul>
          </div>

          {/* 3. ERRORS AND OMISSIONS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              3. Errors and Omissions
            </h2>
            <p className="text-base text-gray-700">
              The Supplier accepts no liability for genuine errors or omissions made in good faith in the formation of this Contract or in any material provided about our Services, provided such errors are not the result of negligence or wilful misconduct.
            </p>
          </div>

          {/* 4. PRICE AND PAYMENT */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              4. Price and Payment
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>4.1</strong> Price is as stated on the Supplier's invoice, quotation (valid for 30 days unless stated otherwise), or current price list at the time of the job.</li>
              <li><strong>4.2</strong> The Supplier may adjust the Price where the job scope changes, hidden issues are discovered once work begins, required parts are unavailable, or costs of labour or materials increase beyond the Supplier's control. Any variation will be communicated to the customer before being charged where reasonably possible.</li>
              <li><strong>4.3</strong> Payment is due on completion of the job, unless a different payment arrangement (including Afterpay, invoicing for approved accounts, or a payment schedule) has been agreed in advance.</li>
              <li><strong>4.4</strong> Payment may be made by cash, card, electronic banking, or Afterpay. A surcharge may apply to certain payment methods.</li>
              <li><strong>4.5</strong> GST is payable in addition to the price unless the price is stated as GST-inclusive.</li>
            </ul>
          </div>

          {/* 5. DELIVERY AND ATTENDANCE */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              5. Delivery and Attendance
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>5.1</strong> Any time given for attendance or completion of a job is an estimate only. The Supplier is not liable for delays caused by traffic, weather, or matters outside its reasonable control, though we aim to keep the Customer informed of any changes to arrival times.</li>
              <li><strong>5.2</strong> The Customer must provide the Supplier with clear and safe access to the property or vehicle to allow the work to be carried out.</li>
            </ul>
          </div>

          {/* 6. LOCKOUT SERVICES */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              6. Lockout Services
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li>
                <strong>6.1</strong> If the Customer asks the Supplier to help them get into a property or vehicle that they are locked out of, they agree to the following:
                <p className="mt-1 pl-4"> (a) they have the right to enter the given property or vehicle, and <br/>(b) the Supplier being asked by the Customer is not violating any laws when providing entry.</p>
              </li>
              <li><strong>6.2</strong> The Supplier will use only non-damaging methods for entry wherever reasonably possible and will inform the Customer of the usage of different methods that can possibly damage the property.</li>
            </ul>
          </div>

          {/* 7. LIABILITY AND WARRANTY */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              7. Liability and Warranty
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>7.1</strong> The Supplier guarantees its work for a period of 12 months. Whenever a genuine defect in the work appears and is reported to the Supplier in this period, the issue will be fixed for free.</li>
              <li>
                <strong>7.2</strong> The warranty does not cover the following:
                <p className="mt-1 pl-4">(a) Damage due to normal use and wear, accidental damage, or misuse; <br/>(b) Damage to goods due to lack of upkeep based on the manufacturer's instructions; <br/>(c) Damage to parts or work carried out by others after the job has been completed.</p>
              </li>
              <li><strong>7.3</strong> If the products are not produced by the supplier's own staff (for example, outside locks, cylinders, or automotive components), then the warranty will be that offered by the original producer.</li>
              <li><strong>7.4</strong> The company does not guarantee that the locks, gadgets, or mechanical systems supplied will provide total protection against illegal entry. They can minimise the chance of the issue occurring but cannot guarantee complete safety.</li>
              <li><strong>7.5</strong> Unless otherwise provided by the provisions of the Consumer Guarantees Act 1993 (which will apply as long as the Client is not acquiring Services in connection with a trade or business), the responsibility of the Provider for any breach of this Contract shall not exceed the amount paid for the corresponding Goods or Services, with the exception of cases where exclusion or limitation of liability is prohibited.</li>
            </ul>
          </div>

          {/* 8. DEFECTS AND COMPLAINTS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              8. Defects and Complaints
            </h2>
            <p className="text-base text-gray-700">
              If the customer believes there is a defect in workmanship or goods supplied, they should notify the supplier as soon as reasonably possible so the issue can be assessed and, where appropriate, remedied under clause 7.
            </p>
          </div>

          {/* 9. COMPLIANCE WITH LAWS */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              9. Compliance with Laws
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>9.1</strong> The Supplier must adhere to all New Zealand statutes and regulations governing the Services, which include responsibilities under the Health and Safety at Work Act 2015.</li>
              <li><strong>9.2</strong> In situations where products and services are connected to compliance issues (such as fire exit provisions and accessibility standards), the company is responsible for verifying whether the requested products will function properly for the intended regulatory purpose.</li>
            </ul>
          </div>

          {/* 10. CANCELLATION */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              10. Cancellation
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>10.1</strong> With adequate notice, the Customer can cancel a non-urgent job. However, if a locksmith has been dispatched or is already on their way to the site, a cancellation fee may be incurred.</li>
              <li><strong>10.2</strong> The Supplier will refuse or cancel any job where the site cannot be reasonably accessed. The supplier will also cancel a job if the customer does not show they have legal right to the property or vehicle under clause 6.1 or if payment terms have not been satisfied.</li>
            </ul>
          </div>

          {/* 11. PRIVACY */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              11. Privacy
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>11.1</strong> The Provider is responsible for the management of all customer information under the Privacy Act of 2020. The complete information about the data that we collect and how it is utilized can be found in the Privacy Policy.</li>
              <li><strong>11.2</strong> The purchaser gives consent to the provider to share relevant information with the customer’s insurance company in case of settling the claim (for instance, in case of stolen car keys). The client may ask the provider to correct or provide his information.</li>
            </ul>
          </div>

          {/* 12. INTELLECTUAL PROPERTY */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              12. Intellectual Property
            </h2>
            <p className="text-base text-gray-700">
              Any designs, drawings, or written material created by the Supplier as part of a job (such as a custom master key system layout) remain the property of the Supplier unless otherwise agreed in writing.
            </p>
          </div>

          {/* 13. DEFAULT */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              13. Default
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>13.1</strong> Interest may accrue on significantly overdue invoices at a reasonable commercial rate, calculated from the due date until payment is received.</li>
              <li><strong>13.2</strong> Where debt recovery becomes necessary, the Customer may be liable for reasonable costs incurred by the Supplier in recovering the amount owed.</li>
            </ul>
          </div>

          {/* 14. GENERAL */}
          <div className="space-y-4 border-b border-gray-100 pb-8">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              14. General
            </h2>
            <ul className="space-y-3 text-base text-gray-700 list-disc pl-5">
              <li><strong>14.1</strong> Disagreements concerning these terms must be resolved first by direct communications between the two parties and, if necessary, mediation before legal action is taken by either one of the parties.</li>
              <li><strong>14.2</strong> These terms are governed by New Zealand law and fall under its courts’ jurisdiction.</li>
              <li><strong>14.3</strong> If any part of these provisions is considered illegal or unenforceable, the remaining provisions will remain in full force and effect.</li>
              <li><strong>14.4</strong> The Supplier may update these Terms & Conditions of Trade from time to time. Updates will be posted on this page, with changes applying to jobs booked after the update date.</li>
              <li><strong>14.5</strong> Neither party is liable for delays or failures caused by events outside their reasonable control, including natural disasters, government restrictions, or other circumstances commonly understood as force majeure. This does not excuse the customer from an existing obligation to make payment for services already completed.</li>
            </ul>
          </div>

          {/* CONTACT US */}
          <div className="bg-amber-50 rounded-3xl p-8 border border-amber-200 space-y-4">
            <h2 className="text-2xl md:text-3xl font-black text-[#0B1F3A]" style={{ fontFamily: "'Inter Tight', sans-serif" }}>
              Contact Us
            </h2>
            <p className="text-gray-700 text-base">
              If you have any questions about these Terms & Conditions of Trade, please contact us:
            </p>
            <div className="space-y-2 text-base text-gray-800 font-medium">
              <p className="flex items-center"><Phone size={18} className="mr-2 text-[#F4C430]" /> Phone: <a href="tel:0800828345" className="ml-2 font-bold underline">0800 828 345</a></p>
              <p className="flex items-center"><Mail size={18} className="mr-2 text-[#F4C430]" /> Email: <a href="mailto:hello@lostkey.co.nz" className="ml-2 font-bold underline">hello@lostkey.co.nz</a></p>
              <p className="flex items-center"><MapPin size={18} className="mr-2 text-[#F4C430]" /> Address: <span className="ml-2">12 Queen Street, Auckland 1010</span></p>
            </div>
          </div>

        </div>
      </section>

      <window.FooterComponent currentPage="terms" />
    </div>
  );
}

const root = createRoot(document.getElementById('root'));
const renderApp = () => {
  if (window.HeaderComponent && window.FooterComponent) {
    root.render(<TermsPageContent />);
  } else {
    setTimeout(renderApp, 50);
  }
};
renderApp();
</script>

<?php
include 'footer.php';
?>
