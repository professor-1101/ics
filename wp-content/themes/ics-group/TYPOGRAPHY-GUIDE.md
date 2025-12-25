# Typography Guide - ICS Group Theme

Complete guide for all typography elements and notice blocks available in the theme.

## 📋 Table of Contents

1. [Headings](#headings)
2. [Paragraphs & Text Formatting](#paragraphs--text-formatting)
3. [Lists](#lists)
4. [Blockquotes](#blockquotes)
5. [Code Blocks](#code-blocks)
6. [Notice Blocks](#notice-blocks)
7. [Tables](#tables)
8. [Links](#links)

---

## Headings

### HTML Usage

```html
<h1>Heading Level 1</h1>
<h2>Heading Level 2</h2>
<h3>Heading Level 3</h3>
<h4>Heading Level 4</h4>
<h5>Heading Level 5</h5>
<h6>Heading Level 6</h6>
```

### WordPress Gutenberg

Use the "Heading" block and select the desired level (H1-H6).

### Sizes

- **H1**: 3.75rem (60px) - Page titles
- **H2**: 3rem (48px) - Main sections
- **H3**: 2.25rem (36px) - Subsections
- **H4**: 1.875rem (30px) - Sub-subsections
- **H5**: 1.5rem (24px) - Minor headings
- **H6**: 1.25rem (20px) - Smallest headings

---

## Paragraphs & Text Formatting

### Regular Paragraph

```html
<p>This is a regular paragraph with normal text.</p>
```

### Bold Text

```html
<strong>This text is bold</strong>
<p>This paragraph has <strong>bold text</strong> in it.</p>
```

### Italic Text

```html
<em>This text is italic</em>
<p>This paragraph has <em>italic text</em> in it.</p>
```

### Inline Links

```html
<a href="#" class="inline-link">This is an inline link</a>
```

**Styling**: Purple color (#6b21a8), underlined, hover effect

---

## Lists

### Unordered List (Bullets)

```html
<ul>
  <li>First item</li>
  <li>Second item</li>
  <li>Third item with <strong>bold text</strong></li>
  <li>Fourth item</li>
</ul>
```

**Features**: Purple disc markers, 1.8 line-height

### Ordered List (Numbers)

```html
<ol>
  <li>First step</li>
  <li>Second step</li>
  <li>Third step</li>
  <li>Fourth step</li>
</ol>
```

**Features**: Purple numbers, 1.8 line-height

---

## Blockquotes

### Standard Quote

```html
<blockquote class="article-quote">
  <p>"Security is not a product, but a process that requires constant vigilance."</p>
  <cite>— Bruce Schneier</cite>
</blockquote>
```

**Features**:
- Light purple gradient background
- Purple left border (4px)
- Decorative quote mark (")
- Italic text
- Author citation in purple

### Highlighted Quote (Dark)

```html
<blockquote class="article-quote highlight">
  <p>"The only truly secure system is one that is powered off, cast in a block of concrete."</p>
  <cite>— Gene Spafford</cite>
</blockquote>
```

**Features**:
- Purple gradient background (#6b21a8 to #581c87)
- White text
- Perfect for standout quotes

---

## Code Blocks

### Inline Code

```html
<p>Use the <code>console.log()</code> function to debug your code.</p>
```

**Styling**: Light purple background, dark purple text

### Code Block

```html
<pre><code>function calculateRisk(vulnerability, impact) {
  return vulnerability * impact;
}

// Example usage
const risk = calculateRisk(0.7, 0.9);
console.log(`Risk Level: ${risk}`);</code></pre>
```

**Features**:
- Dark gray background (#111827)
- Light gray text
- Monospace font (Monaco, Courier New)
- Horizontal scrolling for long lines
- Rounded corners

---

## Notice Blocks

All notice blocks support:
- Icon (emoji) display
- Optional heading (h4)
- Multiple paragraphs
- Lists inside
- Links

### Info Block (Blue) ℹ️

**Use for**: General information, tips, helpful notes

```html
<div class="info-box has-icon">
  <h4>Information</h4>
  <p>This is important information that users should know.</p>
</div>
```

**Shortcode** (if using shortcode plugin):
```
[info]
**Information**
This is important information that users should know.
[/info]
```

**Colors**: Blue (#3b82f6), Light blue background

---

### Notice Block (Gray) 📋

**Use for**: General notices, announcements, standard messages

```html
<div class="notice-box has-icon">
  <h4>Notice</h4>
  <p>Please note that this feature requires WordPress 6.0 or higher.</p>
</div>
```

**Shortcode**:
```
[notice]
**Notice**
Please note that this feature requires WordPress 6.0 or higher.
[/notice]
```

**Colors**: Gray (#6b7280), Light gray background

---

### Warning Block (Orange) ⚠️

**Use for**: Warnings, cautions, important notices

```html
<div class="warning-box has-icon">
  <h4>Warning</h4>
  <p>Backup your database before proceeding with this operation.</p>
</div>
```

**Shortcode**:
```
[warning]
**Warning**
Backup your database before proceeding with this operation.
[/warning]
```

**Colors**: Orange (#f59e0b), Light orange background

---

### Danger Block (Red) 🚨

**Use for**: Critical warnings, errors, security alerts

```html
<div class="danger-box has-icon">
  <h4>Danger!</h4>
  <p>This action cannot be undone. All data will be permanently deleted.</p>
</div>
```

**Shortcode**:
```
[danger]
**Danger!**
This action cannot be undone. All data will be permanently deleted.
[/danger]
```

**Colors**: Red (#ef4444), Light red background

---

### Success Block (Green) ✅

**Use for**: Success messages, completion notices, positive feedback

```html
<div class="success-box has-icon">
  <h4>Success!</h4>
  <p>Your security audit has been completed successfully.</p>
</div>
```

**Shortcode**:
```
[success]
**Success!**
Your security audit has been completed successfully.
[/success]
```

**Colors**: Green (#22c55e), Light green background

---

### Notice Blocks - Advanced Usage

#### Without Icon

Remove the `has-icon` class to hide the emoji:

```html
<div class="info-box">
  <h4>Information</h4>
  <p>This info block has no icon.</p>
</div>
```

#### With Lists

```html
<div class="warning-box has-icon">
  <h4>Important Requirements</h4>
  <ul>
    <li>WordPress 6.0 or higher</li>
    <li>PHP 7.4 or higher</li>
    <li>MySQL 5.7 or higher</li>
  </ul>
</div>
```

#### With Multiple Paragraphs

```html
<div class="danger-box has-icon">
  <h4>Security Alert</h4>
  <p>A critical vulnerability has been detected in your system.</p>
  <p>Please update immediately to avoid potential security breaches.</p>
  <p><a href="#" class="inline-link">Learn more about this vulnerability</a></p>
</div>
```

---

## Tables

### Comparison Table

```html
<table class="comparison-table">
  <thead>
    <tr>
      <th>Feature</th>
      <th>Basic</th>
      <th>Professional</th>
      <th>Enterprise</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Security Audit</td>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
    </tr>
    <tr>
      <td>24/7 Support</td>
      <td>-</td>
      <td>✓</td>
      <td>✓</td>
    </tr>
    <tr>
      <td>Custom Integration</td>
      <td>-</td>
      <td>-</td>
      <td>✓</td>
    </tr>
  </tbody>
</table>
```

**Features**:
- Purple gradient header
- White text in header
- Hover effect on rows
- Box shadow
- Responsive (scrolls horizontally on mobile)

---

## Links

### Regular Link (Inline)

```html
<a href="#" class="inline-link">Click here to learn more</a>
```

**Features**: Purple color, underlined, hover effect

### Button Link (Primary)

```html
<a href="#" class="btn btn-primary">Get Started</a>
```

**Features**: Purple background, white text, hover lift effect

### Button Link (Secondary)

```html
<a href="#" class="btn btn-secondary">Learn More</a>
```

**Features**: White background, purple text, box shadow

---

## WordPress Gutenberg Blocks

### How to Use in WordPress Editor

1. **Add a Custom HTML Block**
2. **Paste the HTML code** from examples above
3. **Preview** to see the styling
4. **Publish** your post

### Recommended Gutenberg Blocks

- **Heading**: For H1-H6
- **Paragraph**: For regular text
- **List**: For ul/ol lists
- **Quote**: For blockquotes (use Custom HTML for styled quotes)
- **Code**: For inline code
- **Preformatted**: For code blocks
- **Custom HTML**: For notice blocks, tables, advanced formatting

---

## Complete Example

Here's a complete example using multiple typography elements:

```html
<h2>Network Segmentation Best Practices</h2>

<p>Network segmentation is a critical security control for <strong>OT/ICS environments</strong>. This guide covers essential practices for implementing effective segmentation.</p>

<div class="info-box has-icon">
  <h4>Prerequisites</h4>
  <p>Before implementing network segmentation, ensure you have:</p>
  <ul>
    <li>Complete network topology documentation</li>
    <li>Asset inventory with criticality ratings</li>
    <li>Security requirements for each zone</li>
  </ul>
</div>

<h3>Key Principles</h3>

<ol>
  <li><strong>Least Privilege</strong>: Grant minimum necessary access</li>
  <li><strong>Defense in Depth</strong>: Multiple security layers</li>
  <li><strong>Zero Trust</strong>: Verify all connections</li>
</ol>

<blockquote class="article-quote">
  <p>"Proper network segmentation can reduce the attack surface by up to 80%."</p>
  <cite>— NIST SP 800-82</cite>
</blockquote>

<div class="warning-box has-icon">
  <h4>Important Consideration</h4>
  <p>Implementing segmentation in operational environments requires careful planning to avoid disrupting critical processes.</p>
</div>

<h3>Example Firewall Rule</h3>

<pre><code>allow tcp from HMI_Zone to PLC_Zone port 502
deny ip from any to PLC_Zone
log all denied</code></pre>

<div class="success-box has-icon">
  <h4>Implementation Complete</h4>
  <p>Your network segmentation has been successfully configured.</p>
</div>
```

---

## CSS Classes Reference

### Typography Classes

- `.font-heading` - Use Zen Dots heading font
- `.text-center` - Center align text
- `.text-white` - White text color
- `.inline-link` - Styled inline link

### Notice Block Classes

- `.info-box` - Blue info block
- `.notice-box` - Gray notice block
- `.warning-box` - Orange warning block
- `.danger-box` - Red danger block
- `.success-box` - Green success block
- `.has-icon` - Show emoji icon (add to any notice block)

### Button Classes

- `.btn` - Base button styling
- `.btn-primary` - Purple primary button
- `.btn-secondary` - White secondary button
- `.btn-lg` - Large button size

### Table Classes

- `.comparison-table` - Styled comparison table

### Quote Classes

- `.article-quote` - Standard quote styling
- `.article-quote.highlight` - Dark highlighted quote

---

## Color Palette

### Notice Blocks

| Type | Border Color | Background | Text Color |
|------|-------------|------------|------------|
| Info | #3b82f6 (Blue) | rgba(59, 130, 246, 0.1) | #1e40af |
| Notice | #6b7280 (Gray) | rgba(107, 114, 128, 0.1) | #374151 |
| Warning | #f59e0b (Orange) | rgba(245, 158, 11, 0.1) | #b45309 |
| Danger | #ef4444 (Red) | rgba(239, 68, 68, 0.1) | #b91c1c |
| Success | #22c55e (Green) | rgba(34, 197, 94, 0.1) | #15803d |

### Theme Colors

- **Primary Purple**: #6b21a8
- **Dark Purple**: #581c87
- **Light Purple**: #7c3aed
- **Purple Tint**: #f3e8ff

---

## Tips for Content Creators

1. **Use Headings Hierarchically**: H2 → H3 → H4 (don't skip levels)
2. **Break Up Long Text**: Use notice blocks to highlight important info
3. **Choose the Right Notice Type**:
   - Info for helpful tips
   - Notice for general announcements
   - Warning for cautions
   - Danger for critical alerts
   - Success for positive outcomes
4. **Use Code Blocks for Technical Content**: Makes code more readable
5. **Add Icons to Notice Blocks**: Use `has-icon` class for better visual hierarchy
6. **Keep Paragraphs Short**: 3-4 sentences maximum for better readability
7. **Use Lists for Multiple Points**: Easier to scan than paragraphs
8. **Quote Important Statements**: Makes them stand out

---

## Accessibility

All typography elements follow accessibility best practices:

- ✅ **Sufficient color contrast** (WCAG AA compliant)
- ✅ **Semantic HTML** (proper heading hierarchy)
- ✅ **Readable font sizes** (minimum 16px)
- ✅ **Clear link indicators** (underlines + color)
- ✅ **Icon alternatives** (emoji with fallback)

---

## Need Help?

For more information, see:
- Theme README: `/wp-content/themes/ics-group/README.md`
- WordPress Conversion Plan: `/WORDPRESS-CONVERSION-PLAN.md`

**Version**: 1.0.0
**Last Updated**: 2025-01-XX
