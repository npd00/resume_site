# Cyberpunk Resume Site - WordPress Theme

A cyberpunk-themed, single-page WordPress resume site featuring neon aesthetics, animated elements, and a futuristic design. Built as a custom WordPress theme to showcase professional experience in a visually striking format.

**Live Demo:** [npdfw.com](https://npdfw.com)

## Overview

This is a fully custom WordPress theme designed to function as a living resume with a cyberpunk aesthetic. The theme features:

- **Cyberpunk Design System**: Neon colors (cyan, pink, purple, green), glitch effects, CRT scanlines, and grid backgrounds
- **Single-Page Layout**: Smooth scrolling navigation between resume sections
- **Animated Elements**: Rotating cyber circles, intersection observer animations, mobile menu transitions
- **Responsive Design**: Mobile-first approach with hamburger menu and optimized layouts
- **SEO Optimized**: Proper meta tags, semantic HTML5, and Open Graph integration

## Theme Features

### Visual Design
- **Color Scheme**: Dark background (#050510) with neon accents (cyan, pink, purple, green)
- **Typography**: Orbitron (headings) and Rajdhani (body) from Google Fonts
- **Effects**:
  - CRT scanline overlay for authentic retro-tech feel
  - Grid background pattern (40px × 40px)
  - Neon glow effects on interactive elements
  - Smooth hover transitions with cubic-bezier easing
  - Blinking cursor animation on logo

### Sections
1. **Hero** - Name, title, bio with animated cyber circle visual
2. **About** - Professional summary and personal interests
3. **Experience** - Timeline-based work history with detailed achievements
4. **Skills** - Grid layout categorized by technology area
5. **Projects** - Portfolio cards with GitHub links
6. **Education** - Academic credentials
7. **Leadership** - Board positions and organizational roles
8. **Systems** - Personal infrastructure and hobbies
9. **Contact** - Email, LinkedIn, phone with call-to-action buttons

### Technical Implementation
- **WordPress Integration**: Proper theme structure with `wp_head()`, `wp_footer()`, `wp_enqueue_scripts()`
- **Responsive Navigation**: Mobile hamburger menu with smooth animations
- **Smooth Scrolling**: JavaScript-powered anchor link navigation
- **Intersection Observer**: Fade-in animations as sections enter viewport
- **Performance**: Minimal dependencies, optimized CSS, version-controlled asset caching

## Project Structure

```
resume_site/
├── front-page.php    # Main resume content (all sections)
├── header.php        # HTML head, meta tags, navigation
├── footer.php        # Footer with status indicator
├── index.php         # WordPress fallback template
├── functions.php     # Theme setup and asset enqueuing
├── style.css         # All styling (600+ lines of custom CSS)
└── script.js         # Mobile menu, smooth scroll, animations
```

## File Documentation

### `functions.php`
Handles WordPress theme registration and asset loading:

```php
function cyberpunk_scripts() {
    // Google Fonts (Orbitron + Rajdhani)
    wp_enqueue_style('cyberpunk-fonts', '...');
    
    // Main stylesheet with version 1.0.1
    wp_enqueue_style('cyberpunk-style', get_stylesheet_uri(), array('cyberpunk-fonts'), '1.0.1');
    
    // JavaScript file
    wp_enqueue_script('cyberpunk-script', get_template_directory_uri() . '/script.js', array(), '1.0.1', true);
}

function cyberpunk_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
```

### `style.css`
Custom properties defining the cyberpunk aesthetic:

```css
:root {
    --bg-color: #050510;              /* Deep dark blue background */
    --bg-secondary: #0a0a1f;          /* Slightly lighter cards */
    --text-primary: #e0faff;          /* Off-white text */
    --text-secondary: #8892b0;        /* Muted gray */
    
    --neon-cyan: #00f3ff;             /* Primary accent */
    --neon-pink: #ff0055;             /* Secondary accent */
    --neon-purple: #bd00ff;           /* Tertiary accent */
    --neon-green: #0aff0a;            /* Success/highlight */
    
    --font-heading: 'Orbitron', sans-serif;
    --font-body: 'Rajdhani', sans-serif;
    
    --glow-strong: 0 0 10px rgba(0, 243, 255, 0.7), 0 0 20px rgba(0, 243, 255, 0.5);
    --glow-soft: 0 0 5px rgba(0, 243, 255, 0.3);
}
```

**Key CSS Features:**
- **Scanline Effect**: Fixed overlay with gradient for CRT monitor simulation
- **Grid Background**: Repeating linear gradients on body element
- **Timeline Cards**: Experience items with hover effects and glowing corners
- **Cyber Circles**: Rotating SVG elements using CSS animations
- **Responsive Breakpoints**: Mobile menu transforms at 768px
- **Custom Buttons**: Clip-path polygons for futuristic button shapes

### `header.php`
WordPress header with SEO meta tags:

```html
<meta name="description" content="Data Engineer specializing in Azure Data Factory, Apache Spark, and enterprise-scale data pipelines.">
<meta name="keywords" content="Data Engineer, Azure, Spark, Databricks, Python, SQL, Lakehouse Architecture, Fort Worth">
<meta property="og:title" content="Nathanael Dunning | Data Engineer">
<meta property="og:type" content="website">
```

Navigation structure:
- Fixed header with backdrop blur
- Logo with blinking cursor animation
- Desktop: Horizontal navigation with hover effects
- Mobile: Full-screen overlay menu with hamburger icon

### `script.js`
Three main JavaScript features:

1. **Mobile Menu Toggle**
```javascript
const mobileToggle = document.querySelector('.mobile-menu-toggle');
const navList = document.querySelector('.nav-list');

mobileToggle.addEventListener('click', () => {
    navList.classList.toggle('active');
    mobileToggle.classList.toggle('active');
});
```

2. **Smooth Scrolling**
```javascript
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
```

3. **Intersection Observer Animations**
```javascript
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.25 });

document.querySelectorAll('.section').forEach(section => {
    observer.observe(section);
});
```

### `front-page.php`
Contains all resume content in semantic HTML5 sections. Content is hardcoded rather than using WordPress custom fields, making it a static resume that's easy to update by editing the template file directly.

## Installation

### Prerequisites
- WordPress 5.0 or higher
- PHP 7.4 or higher
- FTP/SFTP access or WordPress file manager

### Setup Steps

1. **Download the Theme**
   ```bash
   git clone https://github.com/npd00/resume_site.git
   ```

2. **Upload to WordPress**
   - Navigate to `/wp-content/themes/` on your server
   - Upload the `resume_site` folder
   - Or zip the folder and upload via WordPress Admin → Appearance → Themes → Add New

3. **Activate the Theme**
   - WordPress Admin → Appearance → Themes
   - Find "Resume Site" and click "Activate"

4. **Configure Homepage**
   - Settings → Reading
   - Set "Your homepage displays" to "A static page"
   - Create a new page (can be blank) and set as Front page
   - The `front-page.php` template will automatically be used

5. **Update Content**
   - Edit `front-page.php` directly to update your resume content
   - Modify sections, add/remove experiences, update contact information
   - Upload to server and refresh

## Customization Guide

### Changing Colors

Edit the CSS custom properties in `style.css`:

```css
:root {
    --neon-cyan: #00f3ff;      /* Change primary neon color */
    --neon-pink: #ff0055;      /* Change secondary accent */
    --bg-color: #050510;       /* Change background */
    --text-primary: #e0faff;   /* Change text color */
}
```

### Updating Resume Content

All content is in `front-page.php`. Key sections to update:

**Hero Section (Lines 4-32):**
```php
<h1>Your Name</h1>
<h2 class="subtitle">Your Title</h2>
<p class="bio">Your bio text...</p>
```

**Experience (Lines 57-149):**
```php
<div class="timeline-item">
    <div class="timeline-card">
        <div class="timeline-header">
            <h3 class="role">Job Title</h3>
            <span class="company">Company Name</span>
            <span class="location">Location</span>
            <span class="date">Date Range</span>
        </div>
        <div class="timeline-body">
            <ul>
                <li>Achievement bullet point</li>
            </ul>
        </div>
    </div>
</div>
```

**Skills (Lines 151-218):**
Add new skill categories or items within existing categories

**Projects (Lines 220-268):**
```php
<article class="project-card">
    <div class="project-content">
        <h3>Project Name</h3>
        <p class="project-date">Technologies Used</p>
        <p class="project-desc">Brief description</p>
        <a href="github-url" class="btn btn-outline btn-sm">View Code</a>
    </div>
</article>
```

**Contact (Lines 364-377):**
```php
<a href="mailto:your@email.com" class="btn btn-primary big-btn">your@email.com</a>
<span class="phone-number">Your Phone</span>
```

### Adding New Sections

1. Add navigation link in `header.php`:
```php
<li><a href="#new-section" data-text="New">New</a></li>
```

2. Add section in `front-page.php`:
```php
<section id="new-section" class="section">
    <div class="container">
        <h2 class="section-title"><span class="hash">09.</span> New Section</h2>
        <!-- Your content here -->
    </div>
</section>
```

### Changing Fonts

Edit the Google Fonts URL in `functions.php`:

```php
wp_enqueue_style('cyberpunk-fonts', 
    'https://fonts.googleapis.com/css2?family=YourFont:wght@400;700&display=swap'
);
```

Update CSS variables in `style.css`:
```css
--font-heading: 'YourFont', sans-serif;
--font-body: 'YourFont', sans-serif;
```

## Design Philosophy

### Cyberpunk Aesthetic
The theme embraces cyberpunk design principles:
- **High Contrast**: Dark backgrounds with neon accents
- **Typography**: Geometric, futuristic fonts (Orbitron, Rajdhani)
- **Visual Effects**: Scanlines, glows, grid patterns
- **Color Theory**: Complementary neons (cyan/pink, purple/green)
- **Motion**: Subtle animations that enhance without distracting

### Component Styling

**Buttons (`.btn`):**
- Clipped polygon shapes for futuristic look
- Glow effects on hover
- Uppercase text with letter-spacing
- Two variants: primary (filled) and outline

**Cards (`.timeline-card`, `.project-card`):**
- Semi-transparent backgrounds with backdrop-blur
- Thin neon borders that intensify on hover
- Glowing corner accent (via CSS pseudo-element)
- Transform animations for depth

**Typography:**
- Headings use Orbitron (geometric, tech-focused)
- Body uses Rajdhani (clean, readable)
- Section titles include numbered hash prefixes
- Gradient underlines for visual hierarchy

## Performance Optimizations

- **Minimal HTTP Requests**: Combined CSS, single JS file
- **Font Loading**: Google Fonts with `display=swap`
- **Version Control**: Cache-busting via version numbers (`?ver=1.0.1`)
- **Efficient Animations**: CSS transforms (GPU-accelerated)
- **Deferred JavaScript**: Scripts loaded in footer
- **Intersection Observer**: Animations trigger only when visible

## Browser Compatibility

Tested and working on:
- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers (iOS Safari, Chrome Mobile, Samsung Internet)

**CSS Features Used:**
- CSS Grid (all sections)
- CSS Custom Properties (color system)
- Flexbox (navigation, cards)
- backdrop-filter (header blur) - Note: Limited Safari support
- clip-path (button shapes)

## SEO Considerations

The theme includes:
- Semantic HTML5 elements (`<header>`, `<main>`, `<section>`, `<article>`)
- Proper heading hierarchy (single H1, logical H2/H3 structure)
- Meta descriptions and keywords
- Open Graph tags for social sharing
- Accessible color contrast (WCAG AA compliant)
- Descriptive alt attributes (where applicable)

## Accessibility Notes

While the cyberpunk aesthetic prioritizes visual impact, consider:
- Color contrast meets WCAG AA for most text
- Focus states visible on interactive elements
- Semantic HTML for screen readers
- Keyboard navigation supported (tab through links)
- Smooth scrolling can be disabled in browser settings

For production use with accessibility requirements, consider:
- Adding skip-to-content link
- ARIA labels on navigation
- Reduced motion media queries
- High contrast mode support

## Development Workflow

### Local Development

1. Set up local WordPress (Local by Flywheel, XAMPP, MAMP)
2. Clone theme to `wp-content/themes/`
3. Activate theme in WordPress admin
4. Edit files and refresh browser to see changes

### Testing Changes

```bash
# Watch for CSS changes (if using preprocessor)
# This theme uses vanilla CSS, no build process needed

# For JavaScript debugging
console.log("Resume website loaded"); # Already included in script.js
```

### Version Control Workflow

```bash
# Make changes to theme files
git add .
git commit -m "Update: Added new project to portfolio"
git push origin main

# On server
cd /path/to/wp-content/themes/resume_site
git pull origin main
```

### Deployment

**Via FTP:**
1. Upload changed files to `/wp-content/themes/resume_site/`
2. Clear browser cache
3. Clear WordPress cache (if using caching plugin)

**Via Git on Server:**
```bash
cd /var/www/html/wp-content/themes/resume_site
git pull origin main
```

**Version Bumping:**
When making significant changes, update version in:
- `style.css` (Theme Version header)
- `functions.php` (Enqueue version numbers)

## Troubleshooting

**Theme not appearing:**
- Verify folder is named `resume_site` (not `resume_site-main`)
- Check `style.css` has proper WordPress theme header
- Ensure files have correct permissions (755 folders, 644 files)

**Styling not loading:**
- Clear browser cache (Ctrl+Shift+R / Cmd+Shift+R)
- Check browser console for 404 errors
- Verify `wp_head()` is in `header.php` and `wp_footer()` in `footer.php`
- Confirm stylesheet enqueued in `functions.php`

**Mobile menu not working:**
- Check JavaScript console for errors
- Verify `script.js` is loading (Network tab in DevTools)
- Ensure jQuery is not conflicting (theme uses vanilla JS)

**Animations not triggering:**
- Check Intersection Observer support (IE11 requires polyfill)
- Verify `.section` class is on all section elements
- Console log in observer callback to debug

**Google Fonts not loading:**
- Check network connectivity
- Verify Google Fonts URL is correct
- Consider self-hosting fonts for performance

## Future Enhancements

Potential additions for v2.0:
- [ ] WordPress Customizer integration for color schemes
- [ ] Custom post types for projects/experiences
- [ ] Dark/light mode toggle
- [ ] Print stylesheet for PDF export
- [ ] More animation variety (particle effects, matrix rain)
- [ ] Contact form integration (Contact Form 7)
- [ ] Multi-language support (WPML/Polylang)
- [ ] Portfolio filtering by technology
- [ ] Skills proficiency levels with progress bars
- [ ] Blog section using WordPress posts
- [ ] Dynamic content from WordPress custom fields

## Known Limitations

- Content is hardcoded in `front-page.php` (not editable via WordPress admin)
- Single layout option (no alternative designs)
- Limited accessibility features (prioritizes aesthetics)
- No IE11 support (uses modern CSS/JS features)
- Backdrop-filter may not work in older Safari versions

## License

GNU General Public License v2 or later

Free to use, modify, and distribute. Attribution appreciated but not required.

## Credits

**Design & Development:** Nathanael Dunning  
**Typography:** Google Fonts (Orbitron, Rajdhani)  
**Inspiration:** Cyberpunk 2077, Blade Runner aesthetics, synthwave culture  
**Built for:** Personal portfolio and resume showcase

## Support

For questions or issues:
- Open an issue on [GitHub](https://github.com/npd00/resume_site/issues)
- Email: nate@dunning.me
- LinkedIn: [linkedin.com/in/npdunning](https://linkedin.com/in/npdunning)

## Changelog

### Version 1.0.1
- Fixed mobile menu z-index issues
- Improved responsive layout for tablets
- Updated skill categories
- Added Systems section

### Version 1.0.0
- Initial release
- Single-page cyberpunk resume theme
- Responsive design with mobile menu
- Animated elements and smooth scrolling
- SEO optimized with meta tags
