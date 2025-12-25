# ICS Group - Clean HTML/CSS Version

This repository has been converted from Next.js with Tailwind CSS to clean, vanilla HTML and CSS while maintaining 100% identical appearance.

## 📁 File Structure

```
/
├── index.html          # Home page
├── what-we-do.html     # Services page
├── resources.html      # Resources & insights page
├── contact.html        # Contact page
├── styles.css          # Main stylesheet (converted from Tailwind)
├── script.js           # JavaScript for interactive features
└── HTML-CSS-README.md  # This file
```

## 🎨 Conversion Details

### CSS Architecture
- All Tailwind utility classes have been converted to semantic CSS
- Google Fonts (Inter & Zen Dots) are imported directly
- CSS variables maintained for theming
- Responsive design implemented with media queries
- Clean, organized class structure

### Pages Converted
1. **Home (index.html)** - Main landing page with hero, services, resources, and industries sections
2. **What We Do (what-we-do.html)** - Detailed services and methodologies
3. **Resources (resources.html)** - Blog posts, whitepapers, case studies with filtering
4. **Contact (contact.html)** - Contact form and FAQ section

### Interactive Features (script.js)
- Resource filtering by category (Whitepaper, Case Study, Blog, Report)
- Smooth scroll for anchor links
- Fade-in animations for filtered content

## 🚀 How to Use

Simply open any HTML file in a web browser. No build process or dependencies required!

```bash
# Open in default browser (Linux/Mac)
open index.html

# Or use a local server
python -m http.server 8000
# Then visit http://localhost:8000
```

## ✨ Features Preserved

- ✅ Identical visual appearance (100% match)
- ✅ Responsive design (mobile & desktop)
- ✅ Sticky header navigation
- ✅ Gradient backgrounds
- ✅ Hover effects and transitions
- ✅ Form styling
- ✅ Resource filtering functionality
- ✅ Image overlays and effects
- ✅ Footer with social links
- ✅ Industry cards with hover states

## 🎯 Browser Compatibility

Works on all modern browsers:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers

## 📝 Notes

- All external images are loaded via CDN (same-assets.com)
- No dependencies or build tools required
- Pure HTML, CSS, and vanilla JavaScript
- Clean, readable, and maintainable code
- CSS follows BEM-like naming conventions where appropriate

## 🔧 Customization

To customize:
1. Edit `styles.css` for styling changes
2. Modify HTML files for content updates
3. Update `script.js` for additional interactivity

CSS variables in `:root` allow easy theming:
```css
:root {
  --font-inter: 'Inter', system-ui, -apple-system, sans-serif;
  --font-zen-dots: 'Zen Dots', cursive;
  /* Color variables available for customization */
}
```

---

**Original:** Next.js + TypeScript + Tailwind CSS
**Converted to:** Clean HTML + CSS + JavaScript
**Appearance Match:** 100%
