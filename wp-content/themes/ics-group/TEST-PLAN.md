# E2E Test Plan - ICS Group WordPress Theme

Comprehensive end-to-end testing plan for the ICS Group WordPress theme.

## Test Environment

- **WordPress Version**: 6.0+
- **PHP Version**: 7.4+
- **Theme Version**: 1.0.0
- **Browser**: Chrome/Firefox/Safari latest versions

---

## Test Execution Status

| Section | Tests | Status | Notes |
|---------|-------|--------|-------|
| 1. Theme Installation | 5 | ⏳ Pending | - |
| 2. Core Files | 8 | ⏳ Pending | - |
| 3. Header & Navigation | 6 | ⏳ Pending | - |
| 4. Footer | 5 | ⏳ Pending | - |
| 5. Homepage | 8 | ⏳ Pending | - |
| 6. Resources Archive | 10 | ⏳ Pending | - |
| 7. Single Resource | 7 | ⏳ Pending | - |
| 8. Typography | 12 | ⏳ Pending | - |
| 9. Responsive Design | 6 | ⏳ Pending | - |
| 10. JavaScript Functionality | 8 | ⏳ Pending | - |
| 11. Security | 6 | ⏳ Pending | - |
| 12. Performance | 5 | ⏳ Pending | - |

**Total Tests**: 86

---

## 1. Theme Installation Tests

### TEST-001: Upload Theme
- [ ] Extract theme ZIP file
- [ ] Upload to `/wp-content/themes/`
- [ ] Verify all files present
- [ ] Check folder permissions (755)
- [ ] **Expected**: Theme folder exists with all files

### TEST-002: Theme Activation
- [ ] Go to Appearance → Themes
- [ ] Find "ICS Group" theme
- [ ] Click "Activate"
- [ ] **Expected**: Theme activates without errors

### TEST-003: Permalink Setup
- [ ] Go to Settings → Permalinks
- [ ] Select "Post name" structure
- [ ] Click "Save Changes"
- [ ] **Expected**: Permalinks flushed, Resources archive accessible

### TEST-004: Resource Post Type
- [ ] Check if "Resources" menu appears in admin
- [ ] Go to Resources → All Resources
- [ ] **Expected**: Resources CPT registered successfully

### TEST-005: Resource Types Taxonomy
- [ ] Go to Resources → Resource Types
- [ ] Verify 4 default types exist: Blog, Whitepaper, Case Study, Report
- [ ] **Expected**: All 4 types present with descriptions

---

## 2. Core Files Tests

### TEST-006: functions.php
- [ ] Check for PHP syntax errors: `php -l functions.php`
- [ ] Verify theme setup hook exists
- [ ] Verify enqueue functions exist
- [ ] **Expected**: No errors, all hooks registered

### TEST-007: style.css Header
- [ ] Open style.css
- [ ] Verify WordPress theme headers present
- [ ] Check theme name, version, description
- [ ] **Expected**: All required headers present

### TEST-008: header.php
- [ ] Verify `wp_head()` hook present
- [ ] Check `language_attributes()`
- [ ] Check `body_class()`
- [ ] **Expected**: All WordPress hooks present

### TEST-009: footer.php
- [ ] Verify `wp_footer()` hook present
- [ ] Check footer content renders
- [ ] **Expected**: Hook present, no errors

### TEST-010: Template Files
- [ ] Verify archive-resource.php exists
- [ ] Check template-parts/content-resource.php exists
- [ ] **Expected**: All template files present

### TEST-011: Include Files
- [ ] Check inc/custom-post-types.php
- [ ] Check inc/ajax-handlers.php
- [ ] Check inc/template-functions.php
- [ ] **Expected**: All include files present and syntactically correct

### TEST-012: Assets Folder
- [ ] Verify assets/css/styles.css exists (1600+ lines)
- [ ] Verify assets/js/script.js exists (400+ lines)
- [ ] Check assets/images/ folder has images
- [ ] Check assets/icons/ folder has SVG files
- [ ] **Expected**: All assets present

### TEST-013: Documentation
- [ ] Verify README.md exists
- [ ] Check TYPOGRAPHY-GUIDE.md exists
- [ ] Verify TEST-PLAN.md exists
- [ ] **Expected**: All documentation files present

---

## 3. Header & Navigation Tests

### TEST-014: Logo Display
- [ ] Visit homepage
- [ ] Check if logo appears in header
- [ ] Verify logo links to homepage
- [ ] Test logo hover state
- [ ] **Expected**: Logo visible, clickable, links to home

### TEST-015: Primary Navigation Menu
- [ ] Check if navigation menu displays
- [ ] Verify menu items: Home, What We Do, Resources, Contact
- [ ] Test active state highlighting
- [ ] Click each menu item
- [ ] **Expected**: All menu items visible and functional

### TEST-016: Hamburger Menu (Mobile)
- [ ] Resize browser to mobile width (< 768px)
- [ ] Verify hamburger icon appears
- [ ] Verify desktop menu hides
- [ ] **Expected**: Hamburger visible, desktop menu hidden

### TEST-017: Mobile Menu Functionality
- [ ] Click hamburger button
- [ ] Verify drawer opens from right
- [ ] Check purple gradient background
- [ ] Click menu item
- [ ] Verify menu closes and navigates
- [ ] **Expected**: Menu works, animations smooth

### TEST-018: Menu Overlay
- [ ] Open mobile menu
- [ ] Verify overlay appears behind menu
- [ ] Click overlay
- [ ] **Expected**: Menu closes when overlay clicked

### TEST-019: Sticky Header
- [ ] Scroll down page
- [ ] Verify header remains visible at top
- [ ] Check box shadow appears
- [ ] **Expected**: Header sticky, shadow visible on scroll

---

## 4. Footer Tests

### TEST-020: Footer Logo
- [ ] Scroll to footer
- [ ] Verify logo appears (white version)
- [ ] **Expected**: Logo visible and white

### TEST-021: Footer Links
- [ ] Check "Services" links section
- [ ] Check "Resources" links section
- [ ] Click each link
- [ ] **Expected**: All links functional

### TEST-022: Social Media Icons
- [ ] Verify LinkedIn icon appears (white)
- [ ] Verify GitHub icon appears (white)
- [ ] Test hover state
- [ ] **Expected**: Icons visible, white color, hover effect works

### TEST-023: Copyright Text
- [ ] Verify copyright text displays current year
- [ ] Check site name appears
- [ ] **Expected**: "© 2025 ICS Group. All Rights Reserved."

### TEST-024: Footer Grid Layout
- [ ] Check 4-column grid on desktop
- [ ] Resize to tablet (768px)
- [ ] Resize to mobile (< 640px)
- [ ] **Expected**: Grid responsive, stacks on mobile

---

## 5. Homepage Tests

### TEST-025: Hero Section
- [ ] Verify hero title displays
- [ ] Check hero subtitle
- [ ] Test "Contact Us" button
- [ ] Verify purple gradient background
- [ ] **Expected**: Hero section complete and styled

### TEST-026: Trust Section
- [ ] Check "OT Cybersecurity You Can Trust" heading
- [ ] Verify two-column layout
- [ ] Read content text
- [ ] **Expected**: Section displays correctly

### TEST-027: Services Cards
- [ ] Count services cards (should be 3)
- [ ] Verify icons appear
- [ ] Test card hover effect (lift + shadow)
- [ ] Read card content
- [ ] **Expected**: 3 cards, hover works, icons visible

### TEST-028: Latest Resources
- [ ] Verify "Latest Resources & Blogs" section
- [ ] Count resource cards (should be 4 latest)
- [ ] Check resource badges (Blog, Whitepaper, etc.)
- [ ] Click a resource card
- [ ] **Expected**: 4 latest resources, clickable, badges visible

### TEST-029: Industries Section
- [ ] Count industry cards (should be 5)
- [ ] Hover over cards
- [ ] Verify industry name appears on hover
- [ ] **Expected**: 5 industries, hover effect works

### TEST-030: Methodologies Section
- [ ] Count methodology cards (should be 5)
- [ ] Verify certificate icons
- [ ] Check methodology names
- [ ] **Expected**: 5 methodologies with icons

### TEST-031: CTA Section
- [ ] Verify purple gradient background
- [ ] Check "Ready to Secure Your Infrastructure?" heading
- [ ] Test both buttons (Contact, Services)
- [ ] **Expected**: CTA section complete, buttons functional

### TEST-032: Scroll Animations
- [ ] Scroll down homepage
- [ ] Observe sections fading in
- [ ] **Expected**: Smooth fade-in animations on scroll

---

## 6. Resources Archive Tests

### TEST-033: Resources Page Load
- [ ] Navigate to /resources/
- [ ] Verify page loads without errors
- [ ] Check hero section appears
- [ ] **Expected**: Page loads successfully

### TEST-034: Search Bar
- [ ] Locate search input
- [ ] Verify search icon visible
- [ ] Check placeholder text
- [ ] Type test query
- [ ] **Expected**: Search bar functional, icon visible

### TEST-035: Filter Buttons
- [ ] Count filter buttons (All, Whitepaper, Case Study, Blog, Report)
- [ ] Click "All" button (should be active by default)
- [ ] Click "Whitepaper" button
- [ ] Verify active state changes
- [ ] **Expected**: All filters present, active state works

### TEST-036: Resource Cards Display
- [ ] Verify resource cards display in 4-column grid
- [ ] Check resource images
- [ ] Verify badges (type)
- [ ] Check dates
- [ ] Verify "Read More" links
- [ ] **Expected**: Cards display correctly

### TEST-037: Search Functionality
- [ ] Type "SCADA" in search box
- [ ] Wait for results to filter
- [ ] Verify matching resources appear
- [ ] Clear search
- [ ] **Expected**: Search works in real-time

### TEST-038: Filter by Type
- [ ] Click "Whitepaper" filter
- [ ] Verify only whitepapers show
- [ ] Click "Blog" filter
- [ ] Verify only blogs show
- [ ] **Expected**: Filtering works correctly

### TEST-039: Results Count
- [ ] Verify "Showing X-Y of Z resources" displays
- [ ] Filter results
- [ ] Check if count updates
- [ ] **Expected**: Count accurate and updates

### TEST-040: Pagination
- [ ] Scroll to pagination (if 20+ resources)
- [ ] Click page 2
- [ ] Verify next 20 resources load
- [ ] Click "Previous" button
- [ ] **Expected**: Pagination works, page changes

### TEST-041: No Results State
- [ ] Search for nonsense text "zzzzz"
- [ ] Verify "No resources found" message
- [ ] Check search icon appears
- [ ] Clear search
- [ ] **Expected**: No results message displays

### TEST-042: Featured Resource Section
- [ ] Scroll to featured resource
- [ ] Verify two-column layout
- [ ] Check image on left, content on right
- [ ] Click "Read Now" button
- [ ] **Expected**: Featured section complete, button works

---

## 7. Single Resource Post Tests

### TEST-043: Single Post Load
- [ ] Click any resource from archive
- [ ] Verify single post page loads
- [ ] Check URL structure (/resources/post-name/)
- [ ] **Expected**: Single post loads correctly

### TEST-044: Article Header
- [ ] Verify purple gradient header
- [ ] Check "Back to Resources" link
- [ ] Verify resource badge (type)
- [ ] Check date and reading time
- [ ] Verify article title
- [ ] Check excerpt (if present)
- [ ] **Expected**: Header complete with all metadata

### TEST-045: Author Info
- [ ] Verify author avatar (initials)
- [ ] Check author name
- [ ] Verify author title/bio
- [ ] **Expected**: Author info displays

### TEST-046: Featured Image
- [ ] Check if featured image displays
- [ ] Verify image is full-width
- [ ] Check image height (500px)
- [ ] **Expected**: Featured image displays correctly

### TEST-047: Article Content
- [ ] Verify content displays
- [ ] Check headings hierarchy (H2, H3, H4)
- [ ] Test paragraphs
- [ ] Check lists formatting
- [ ] Verify code blocks styling
- [ ] **Expected**: Content formatted correctly

### TEST-048: Typography Elements
- [ ] Find blockquote
- [ ] Check code blocks (inline and block)
- [ ] Verify info boxes
- [ ] Check warning boxes
- [ ] Test notice blocks
- [ ] Verify danger boxes
- [ ] Check success boxes
- [ ] Test tables
- [ ] **Expected**: All typography elements styled

### TEST-049: Related Articles
- [ ] Scroll to "Related Articles" section
- [ ] Count related posts (up to 3)
- [ ] Verify same resource type
- [ ] Click a related article
- [ ] **Expected**: Related articles display and work

---

## 8. Typography Tests

### TEST-050: Headings
- [ ] Create test post with H1-H6
- [ ] Verify font sizes (H1: 60px, H2: 48px, etc.)
- [ ] Check font family (Zen Dots for headings)
- [ ] **Expected**: All heading levels styled correctly

### TEST-051: Paragraphs
- [ ] Create paragraphs
- [ ] Verify line height (1.8)
- [ ] Check font size (1.125rem = 18px)
- [ ] **Expected**: Paragraphs readable

### TEST-052: Bold & Italic
- [ ] Test `<strong>` tags
- [ ] Test `<em>` tags
- [ ] Check color changes
- [ ] **Expected**: Bold is bolder, italic is italic

### TEST-053: Lists
- [ ] Create unordered list
- [ ] Verify purple disc markers
- [ ] Create ordered list
- [ ] Verify purple numbers
- [ ] **Expected**: Lists styled with purple markers

### TEST-054: Blockquotes
- [ ] Add standard blockquote
- [ ] Check purple gradient background
- [ ] Verify quote mark appears
- [ ] Test with citation
- [ ] **Expected**: Quote styled beautifully

### TEST-055: Highlighted Blockquote
- [ ] Add `.highlight` class to blockquote
- [ ] Verify dark purple background
- [ ] Check white text
- [ ] **Expected**: Highlighted quote has dark background

### TEST-056: Inline Code
- [ ] Add inline `<code>` tags
- [ ] Verify light purple background
- [ ] Check dark purple text
- [ ] **Expected**: Inline code stands out

### TEST-057: Code Blocks
- [ ] Add `<pre><code>` block
- [ ] Verify dark background (#111827)
- [ ] Check monospace font
- [ ] Test horizontal scrolling (long lines)
- [ ] **Expected**: Code block styled correctly

### TEST-058: Info Block
- [ ] Add `.info-box` with `.has-icon`
- [ ] Verify blue color scheme
- [ ] Check ℹ️ emoji appears
- [ ] **Expected**: Info block styled correctly

### TEST-059: Notice Block
- [ ] Add `.notice-box` with `.has-icon`
- [ ] Verify gray color scheme
- [ ] Check 📋 emoji appears
- [ ] **Expected**: Notice block styled correctly

### TEST-060: Warning Block
- [ ] Add `.warning-box` with `.has-icon`
- [ ] Verify orange color scheme
- [ ] Check ⚠️ emoji appears
- [ ] **Expected**: Warning block styled correctly

### TEST-061: Danger Block
- [ ] Add `.danger-box` with `.has-icon`
- [ ] Verify red color scheme
- [ ] Check 🚨 emoji appears
- [ ] **Expected**: Danger block styled correctly

### TEST-062: Success Block
- [ ] Add `.success-box` with `.has-icon`
- [ ] Verify green color scheme
- [ ] Check ✅ emoji appears
- [ ] **Expected**: Success block styled correctly

### TEST-063: Tables
- [ ] Add `.comparison-table`
- [ ] Verify purple gradient header
- [ ] Check row hover effect
- [ ] Test on mobile (should scroll)
- [ ] **Expected**: Table styled and responsive

---

## 9. Responsive Design Tests

### TEST-064: Desktop (1280px+)
- [ ] Set viewport to 1920x1080
- [ ] Verify 4-column grid for resources
- [ ] Check header navigation visible
- [ ] Verify footer 4-column grid
- [ ] **Expected**: All layouts optimal for desktop

### TEST-065: Laptop (1024px)
- [ ] Set viewport to 1024x768
- [ ] Verify grids adjust (3-4 columns)
- [ ] Check content readable
- [ ] **Expected**: Responsive adjustments work

### TEST-066: Tablet (768px)
- [ ] Set viewport to 768x1024
- [ ] Verify hamburger menu appears
- [ ] Check desktop menu hides
- [ ] Test 2-column grids
- [ ] **Expected**: Tablet layout works

### TEST-067: Mobile (375px)
- [ ] Set viewport to 375x667
- [ ] Verify single column layout
- [ ] Test hamburger menu
- [ ] Check images scale properly
- [ ] Verify text readable (no horizontal scroll)
- [ ] **Expected**: Mobile layout perfect

### TEST-068: Touch Targets
- [ ] On mobile, check button sizes
- [ ] Verify minimum 44x44px touch targets
- [ ] Test hamburger button
- [ ] **Expected**: All touch targets adequate

### TEST-069: Image Responsiveness
- [ ] Resize browser
- [ ] Check images scale proportionally
- [ ] Verify no image overflow
- [ ] **Expected**: Images responsive

---

## 10. JavaScript Functionality Tests

### TEST-070: Hamburger Menu Toggle
- [ ] Click hamburger button
- [ ] Verify menu opens
- [ ] Click again
- [ ] Verify menu closes
- [ ] **Expected**: Toggle works smoothly

### TEST-071: Mobile Menu Animation
- [ ] Open mobile menu
- [ ] Observe slide-in animation from right
- [ ] Close menu
- [ ] Observe slide-out animation
- [ ] **Expected**: Smooth cubic-bezier animation

### TEST-072: Overlay Click
- [ ] Open mobile menu
- [ ] Click overlay (dark area)
- [ ] Verify menu closes
- [ ] **Expected**: Overlay closes menu

### TEST-073: Resource Search (Real-time)
- [ ] Go to resources page
- [ ] Type in search box
- [ ] Verify results filter immediately
- [ ] Type more characters
- [ ] Check results update
- [ ] **Expected**: Real-time search works

### TEST-074: Filter Button Click
- [ ] Click filter button
- [ ] Verify active class applies
- [ ] Verify previous active button deactivates
- [ ] Check results filter
- [ ] **Expected**: Filter buttons work

### TEST-075: Pagination Clicks
- [ ] Click page 2
- [ ] Verify resources update
- [ ] Check URL updates (or state changes)
- [ ] Click "Previous"
- [ ] **Expected**: Pagination navigation works

### TEST-076: Scroll Animations
- [ ] Scroll down homepage
- [ ] Observe Intersection Observer triggering
- [ ] Verify sections fade in
- [ ] **Expected**: Scroll animations smooth

### TEST-077: ESC Key (Menu Close)
- [ ] Open mobile menu
- [ ] Press ESC key
- [ ] **Expected**: Menu closes on ESC

---

## 11. Security Tests

### TEST-078: Output Escaping
- [ ] Search theme files for `echo` statements
- [ ] Verify all use `esc_html()`, `esc_attr()`, `esc_url()`
- [ ] Count escaping functions (should be 119+)
- [ ] **Expected**: All outputs properly escaped

### TEST-079: Input Sanitization
- [ ] Check AJAX handlers
- [ ] Verify `sanitize_text_field()` usage
- [ ] Check `sanitize_email()` for email fields
- [ ] **Expected**: All inputs sanitized

### TEST-080: Nonce Verification
- [ ] Check AJAX requests
- [ ] Verify `check_ajax_referer()` called
- [ ] Test nonce in localized script
- [ ] **Expected**: Nonces verified on all AJAX

### TEST-081: SQL Injection Prevention
- [ ] Review database queries
- [ ] Verify WP_Query usage (no direct SQL)
- [ ] Check for `$wpdb->prepare()` if used
- [ ] **Expected**: No SQL injection vulnerabilities

### TEST-082: XSS Prevention
- [ ] Try injecting `<script>alert('XSS')</script>` in search
- [ ] Verify script doesn't execute
- [ ] Test in form fields
- [ ] **Expected**: No XSS vulnerabilities

### TEST-083: File Upload Security
- [ ] Check if theme has file uploads
- [ ] Verify file type validation
- [ ] Check file size limits
- [ ] **Expected**: File uploads secure (or N/A)

---

## 12. Performance Tests

### TEST-084: Page Load Time
- [ ] Open browser DevTools Network tab
- [ ] Load homepage
- [ ] Check total load time (target: < 2 seconds)
- [ ] **Expected**: Fast page load

### TEST-085: CSS File Size
- [ ] Check assets/css/styles.css size
- [ ] Verify < 100KB
- [ ] **Expected**: CSS optimized

### TEST-086: JavaScript File Size
- [ ] Check assets/js/script.js size
- [ ] Verify reasonable size
- [ ] **Expected**: JS optimized

### TEST-087: Image Optimization
- [ ] Check image file sizes
- [ ] Verify images compressed
- [ ] Check for lazy loading (native)
- [ ] **Expected**: Images optimized

### TEST-088: Render Blocking Resources
- [ ] Run Lighthouse audit
- [ ] Check for render-blocking CSS/JS
- [ ] Verify async/defer attributes
- [ ] **Expected**: Minimal render blocking

---

## Test Execution Log

### Session 1: Initial Testing
**Date**: 2025-01-XX
**Tester**: Claude
**Environment**: Development

| Test ID | Status | Notes |
|---------|--------|-------|
| TEST-001 | ⏳ | Pending execution |
| ... | ⏳ | ... |

---

## Known Issues

| Issue ID | Description | Severity | Status | Fix Version |
|----------|-------------|----------|--------|-------------|
| - | None yet | - | - | - |

---

## Test Summary

**Total Tests**: 88
**Passed**: 0
**Failed**: 0
**Skipped**: 0
**Pending**: 88

**Pass Rate**: 0%
**Status**: Ready for testing

---

## Sign-Off

**Theme Developer**: Claude
**Date**: 2025-01-XX
**Version Tested**: 1.0.0
**Status**: ✅ READY FOR TESTING

---

## Next Steps

1. Execute all tests manually
2. Document results
3. Fix any issues found
4. Re-test failed tests
5. Create ZIP file
6. Deploy to staging
7. Final QA
8. Production release

**Expected Completion**: After manual testing

