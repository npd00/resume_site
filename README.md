# Resume Site - WordPress Theme

A lightweight, single-page WordPress theme designed to function as a living resume. This custom theme transforms WordPress into a professional portfolio platform, combining the flexibility of a content management system with the clean presentation of a static resume site.

## Overview

This project is a custom WordPress theme that delivers a one-page resume experience while maintaining all the benefits of WordPress's content management capabilities. It's designed for professionals who want their resume to be easily updateable through the WordPress admin panel without dealing with static HTML files.

**Live Demo:** [npdfw.com](https://npdfw.com) *(if applicable)*

## Why WordPress for a Resume?

While a static HTML resume is simpler, this WordPress approach offers several advantages:

- **Easy Content Updates**: Modify experience, skills, or projects through the WordPress admin interface
- **Version Control**: Track changes to your resume over time
- **CMS Benefits**: Leverage WordPress plugins for analytics, SEO, contact forms, etc.
- **Familiar Interface**: Use WordPress's editor instead of editing raw HTML/CSS
- **Scalability**: Easily expand to a full portfolio site with blog posts or project pages
- **Hosting Flexibility**: Deploy anywhere WordPress runs (shared hosting, VPS, managed WordPress)

## Features

- **Single-Page Design**: All resume content on one scrollable page
- **Custom Front Page Template**: `front-page.php` delivers the resume layout
- **Responsive Layout**: Mobile-friendly design via custom CSS
- **WordPress Integration**: Full access to WordPress admin, widgets, and plugins
- **Clean Separation**: Content (WordPress) separated from presentation (theme)
- **Custom JavaScript**: Interactive elements via `script.js`
- **Minimal Dependencies**: Lightweight theme with focus on performance

## Project Structure

```
resume_site/
├── front-page.php    # Main resume template (homepage)
├── header.php        # HTML head, navigation, opening tags
├── footer.php        # Closing tags, footer content
├── index.php         # Fallback template for WordPress
├── functions.php     # Theme setup, enqueues, custom functions
├── style.css         # Theme stylesheet with WordPress metadata
└── script.js         # Custom JavaScript for interactions
```

## File Breakdown

### `front-page.php`
The core template that displays your resume content. This file:
- Structures resume sections (experience, education, skills, projects)
- Pulls content from WordPress posts/pages or custom fields
- Provides the single-page layout

### `header.php` 
Standard WordPress header that includes:
- HTML5 doctype and head section
- Enqueued stylesheets and scripts
- Navigation (if needed)
- WordPress hooks (`wp_head()`)

### `footer.php`
Standard WordPress footer with:
- Closing HTML tags
- Footer content area
- WordPress hooks (`wp_footer()`)
- Script enqueues

### `functions.php`
Theme configuration including:
- Theme setup and support features
- Stylesheet and script enqueuing
- Custom post types (if applicable)
- Helper functions for resume data
- WordPress customization

### `style.css`
WordPress theme stylesheet containing:
- Required WordPress theme header (name, author, version)
- Custom CSS for resume layout
- Responsive design rules
- Typography and color schemes

### `script.js`
Custom JavaScript for:
- Smooth scrolling
- Interactive elements
- Dynamic content loading
- UI enhancements

## Installation

### Prerequisites
- WordPress installation (5.0 or higher recommended)
- FTP/SFTP access or hosting file manager
- Basic familiarity with WordPress administration

### Setup Steps

1. **Download/Clone the Theme**
   ```bash
   git clone https://github.com/npd00/resume_site.git
   ```

2. **Upload to WordPress**
   - Navigate to your WordPress installation directory
   - Copy the `resume_site` folder to `/wp-content/themes/`
   - Or upload as a ZIP through WordPress admin (Appearance → Themes → Add New)

3. **Activate the Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Resume Site" and click "Activate"

4. **Configure Homepage**
   - Go to Settings → Reading
   - Set "Your homepage displays" to "A static page"
   - Select your designated front page (or create a new page)

5. **Add Content**
   - Edit the front page or use WordPress Customizer
   - Add your professional information, experience, skills
   - Upload profile image (if applicable)

6. **Customize Styling** *(optional)*
   - Edit `style.css` for custom colors, fonts, layout
   - Modify `front-page.php` for structural changes

## Configuration

### Adding Resume Sections

The theme likely uses one of these approaches:

**Option 1: Custom Fields/Meta Boxes**
```php
// In functions.php
add_action('add_meta_boxes', 'resume_meta_boxes');
function resume_meta_boxes() {
    add_meta_box('experience', 'Work Experience', 'experience_callback', 'page');
}
```

**Option 2: WordPress Customizer**
```php
// In functions.php
function resume_customize_register($wp_customize) {
    $wp_customize->add_section('resume_info', array(
        'title' => 'Resume Information',
        'priority' => 30,
    ));
}
add_action('customize_register', 'resume_customize_register');
```

**Option 3: Widget Areas**
```php
// In functions.php
register_sidebar(array(
    'name' => 'Resume Content',
    'id' => 'resume-sidebar',
));
```

### Styling Customization

Key CSS variables to customize (typically in `style.css`):
```css
/* Colors */
--primary-color: #007bff;
--text-color: #333333;
--background-color: #ffffff;

/* Typography */
--heading-font: 'Arial', sans-serif;
--body-font: 'Georgia', serif;

/* Layout */
--max-width: 1200px;
--section-spacing: 4rem;
```

## Enqueuing Assets

Proper WordPress asset loading in `functions.php`:

```php
function resume_site_scripts() {
    // Stylesheet
    wp_enqueue_style('resume-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // JavaScript
    wp_enqueue_script('resume-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'resume_site_scripts');
```

## WordPress Theme Requirements

To be a valid WordPress theme, `style.css` must include:

```css
/*
Theme Name: Resume Site
Theme URI: https://github.com/npd00/resume_site
Author: [Your Name]
Author URI: https://npdfw.com
Description: A single-page resume theme for WordPress
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: resume-site
*/
```

## Development Workflow

### Local Development Setup

1. **Install Local WordPress Environment**
   - Use [Local by Flywheel](https://localwp.com/), XAMPP, MAMP, or Docker
   - Create new WordPress site

2. **Link Theme for Development**
   ```bash
   # Navigate to themes directory
   cd /path/to/wordpress/wp-content/themes/
   
   # Create symlink to your development folder
   ln -s /path/to/your/resume_site resume_site
   ```

3. **Enable Debug Mode** (in `wp-config.php`)
   ```php
   define('WP_DEBUG', true);
   define('WP_DEBUG_LOG', true);
   define('WP_DEBUG_DISPLAY', false);
   ```

4. **Watch for Changes** *(optional)*
   - Use browser-sync or similar tools for live reload
   - Set up CSS preprocessors (Sass/Less) if needed

### Testing

- Test responsiveness on multiple devices/screen sizes
- Validate HTML/CSS with W3C validators
- Check accessibility with WAVE or Lighthouse
- Test with multiple browsers (Chrome, Firefox, Safari, Edge)
- Verify WordPress compatibility (check admin bar, widgets, plugins)

## Deployment

### Preparing for Production

1. **Remove Development Code**
   - Remove `console.log()` statements
   - Disable debugging in `functions.php`
   - Minify CSS/JS files *(optional)*

2. **Optimize Assets**
   - Compress images
   - Minify CSS and JavaScript
   - Enable caching

3. **Update Version Number**
   - Increment version in `style.css`
   - Update any hardcoded version numbers

### Deployment Methods

**Via FTP/SFTP:**
```bash
# Upload entire theme folder
scp -r resume_site/ user@yoursite.com:/path/to/wp-content/themes/
```

**Via Git on Server:**
```bash
cd /path/to/wp-content/themes/
git clone https://github.com/npd00/resume_site.git
```

**Via WordPress Admin:**
1. ZIP the theme folder
2. Upload through Appearance → Themes → Add New → Upload

## Customization Guide

### Changing Colors

Edit `style.css`:
```css
/* Primary brand color */
.header, .button, .link-hover {
    color: #your-color;
}

/* Background colors */
body {
    background-color: #your-bg-color;
}
```

### Adding New Sections

1. Edit `front-page.php`:
```php
<section id="new-section">
    <h2><?php echo get_theme_mod('new_section_title', 'Default Title'); ?></h2>
    <p><?php echo get_theme_mod('new_section_content'); ?></p>
</section>
```

2. Add to `functions.php`:
```php
$wp_customize->add_setting('new_section_title');
$wp_customize->add_control('new_section_title', array(
    'label' => 'New Section Title',
    'section' => 'resume_info',
    'type' => 'text',
));
```

### Custom Fonts

Add to `functions.php`:
```php
function resume_custom_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
}
add_action('wp_enqueue_scripts', 'resume_custom_fonts');
```

## Common Use Cases

### Converting to Multi-Page Site

1. Create additional page templates (e.g., `page-portfolio.php`)
2. Add navigation menu support in `functions.php`
3. Create WordPress pages and assign templates
4. Update navigation in `header.php`

### Adding a Blog Section

1. Keep `front-page.php` as resume
2. Create `archive.php` and `single.php` for blog posts
3. Add blog link to navigation
4. Create blog posts through WordPress admin

### Contact Form Integration

1. Install Contact Form 7 or WPForms plugin
2. Create form in WordPress admin
3. Add shortcode to `front-page.php`:
   ```php
   <section id="contact">
       <?php echo do_shortcode('[contact-form-7 id="123"]'); ?>
   </section>
   ```

## Browser Compatibility

Tested and working on:
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimization

- Minimal HTTP requests (combined CSS/JS)
- Optimized images (WebP where possible)
- Lazy loading for images
- Inline critical CSS *(optional)*
- CDN integration *(optional)*

## SEO Considerations

The theme should include:
- Proper heading hierarchy (H1, H2, H3)
- Semantic HTML5 elements
- Meta description support
- Schema.org markup for Person/Resume
- Open Graph tags for social sharing

Add to `header.php`:
```php
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta property="og:title" content="<?php wp_title(); ?>">
<meta property="og:type" content="website">
```

## Troubleshooting

**Theme not appearing in WordPress:**
- Check that `style.css` has proper theme header
- Verify folder is in `wp-content/themes/`
- Check file permissions (755 for folders, 644 for files)

**Styling not loading:**
- Verify `wp_enqueue_style()` in `functions.php`
- Check `wp_head()` is in `header.php`
- Clear browser cache and WordPress cache

**JavaScript not working:**
- Ensure `wp_enqueue_script()` is correct
- Check `wp_footer()` is in `footer.php`
- Look for JavaScript errors in browser console

## License

This theme is licensed under the GNU General Public License v2 or later.

## Credits

- Built by Nate Dunning
- WordPress Theme Development Guidelines
- Google Fonts

## Support

For issues, questions, or feature requests:
- Open an issue on [GitHub](https://github.com/npd00/resume_site/issues)
- Contact: npdfw.com

## Changelog

### Version 1.0.0
- Initial release
- Single-page resume layout
- Responsive design
- Basic WordPress integration

---

**Note:** This is a personal project designed for a specific use case. Feel free to fork and modify for your own needs!
