import glob
import re

def fix_cards(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # We want to find the Pills block and the CTA footer block and move the CTA footer right after Pills.
    # Current structure:
    #                     {/* Pills */}
    #                     <div className="flex flex-wrap gap-2 mb-6">
    #                       ...
    #                     </div>
    #                   </div>
    #                 </div>
    # 
    #                 {/* Card CTA Footer */}
    #                 <div className="px-7 pb-7">
    #                   <a 
    #                     href="contact-us.php" (or .html depending on file)
    #                     className="inline-flex items-center text-xs font-bold uppercase tracking-wider text-[#0B1F3A] group-hover:text-[#F4C430] transition-colors"
    #                   >
    #                     {card.cta}
    #                   </a>
    #                 </div>
    
    # We will just replace it entirely using regex.
    pattern = re.compile(
        r'(\{\/\* Pills \*\/\}.*?</div>)\s*</div>\s*</div>\s*\{\/\* Card CTA Footer \*\/\}\s*<div className="px-7 pb-7">\s*(<a.*?</a>)\s*</div>',
        re.DOTALL
    )
    
    def repl(m):
        pills_content = m.group(1)
        cta_link = m.group(2)
        # We put the cta_link inside the p-7 div, changing mb-6 on pills maybe?
        # Actually, if we just place it after the pills div:
        return f"{pills_content}\n\n                    {{/* Card CTA Footer */}}\n                    <div className=\"mt-6\">\n                      {cta_link}\n                    </div>\n                  </div>\n                </div>"

    new_content, count = pattern.subn(repl, content)
    
    # Also remove `justify-between` from the card class so the extra space is just empty padding at the bottom.
    # Wait, `justify-between` is on the main card div:
    # className="bg-white rounded-3xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group"
    new_content = new_content.replace('transition-all duration-300 flex flex-col justify-between group', 'transition-all duration-300 flex flex-col group h-full pb-7')
    
    if count > 0:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {filepath}")
    else:
        print(f"No match found in {filepath}")

for file in ['areas-we-cover.php', 'areas-we-cover.html']:
    fix_cards(file)
