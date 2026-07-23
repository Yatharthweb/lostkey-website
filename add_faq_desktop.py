import glob

php_contact = """                  <a href="contact-us.php" className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <Phone size={16} strokeWidth={2.5} />
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">Contact Us</span>
                  </a>"""

php_faq = php_contact + """
                  <a href="faq.php" className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">FAQ</span>
                  </a>"""

html_contact = """                  <a href="contact-us.html" className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <Phone size={16} strokeWidth={2.5} />
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">Contact Us</span>
                  </a>"""

html_faq = html_contact + """
                  <a href="faq.html" className="flex items-center space-x-3 group/item hover:bg-gray-50 p-3 rounded-xl transition-colors">
                    <div className="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#F4C430] group-hover/item:text-[#1F2937] transition-colors border border-gray-100 shadow-sm text-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    </div>
                    <span className="text-[#1F2937] font-semibold text-[14px] leading-tight group-hover/item:text-[#F4C430] transition-colors">FAQ</span>
                  </a>"""

# header.php
with open('c:/xampp/htdocs/lostkey/header.php', 'r', encoding='utf-8') as f:
    content = f.read()
if php_contact in content and 'faq.php' not in content:
    content = content.replace(php_contact, php_faq)
    with open('c:/xampp/htdocs/lostkey/header.php', 'w', encoding='utf-8') as f:
        f.write(content)
    print("Updated header.php")
else:
    print("php_contact not found in header.php")

# .html files
for filepath in glob.glob('c:/xampp/htdocs/lostkey/*.html'):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    if html_contact in content and 'faq.html" className="flex items-center space-x-3 group/item' not in content:
        content = content.replace(html_contact, html_faq)
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {filepath}")
    else:
        print(f"html_contact not found in {filepath} or already updated")
