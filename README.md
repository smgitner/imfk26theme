# IMFK WordPress Theme

A custom WordPress theme for **In My Father's Kitchen** - a nonprofit organization dedicated to serving the community.

## Features

### Design & Typography
- **Sora font** throughout for clean, modern typography
- **750px content width** for optimal reading experience
- Responsive design with mobile-first approach
- Semantic CSS (no Tailwind dependencies in production)

### Content Templates
- **Posts**: Vertical and horizontal layout options with featured images
- **Pages**: 16+ custom page templates including:
  - About (with ACF fields for Mission/Values/History)
  - Store
  - Blog
  - Events
  - Donate
  - Connect With Us
  - Service pages (Street Outreach, Women's Outreach, Hire Ground, etc.)
- **Search Results**: Custom styled search results page
- **Storysplat Integration**: 3D scene viewer with configurable ACF fields

### Navigation
- Responsive header with mobile hamburger menu
- Breadcrumb navigation (via IMFK Breadcrumbs plugin)
- Previous/Next post navigation
- Footer with 3 link columns and social media icons

### Advanced Features
- **ACF Integration**: Custom field groups for About and Storysplat pages
- **Storysplat 3D Viewer**: Embed interactive 3D scenes with configurable options
- **Constant Contact Ready**: Newsletter signup form integration in footer
- **Custom Search**: Styled search results with thumbnails and excerpts

## Installation

1. Download or clone this repository
2. Upload to `/wp-content/themes/imfktheme/`
3. Activate the theme in WordPress Admin → Appearance → Themes
4. Install required plugins:
   - Advanced Custom Fields (ACF) Pro
   - IMFK Breadcrumbs (included in plugins folder)
   - StorySplat Viewer (if using 3D scenes)

## File Structure

```
imfktheme/
├── assets/
│   ├── css/
│   │   ├── base.css          # Design system & content styles
│   │   └── theme.css         # Component & layout styles
│   ├── images/               # Theme images & SVG icons
│   └── js/
│       ├── navigation.js     # Mobile menu functionality
│       └── storysplat-constrain.js  # 3D viewer constraints
├── inc/
│   ├── acf-fields.php        # ACF field group definitions
│   └── setup-pages.php       # Initial page setup
├── page-*.php                # Custom page templates
├── single.php                # Default blog post template
├── template-*.php            # Post templates (vertical/horizontal/storysplat)
├── search.php                # Search results template
├── page.php                  # Default page template
├── header.php                # Site header
├── footer.php                # Site footer
├── functions.php             # Theme setup & configuration
└── style.css                 # Theme stylesheet (required)
```

## ACF Field Groups

### About Page
- **Our Mission** (WYSIWYG)
- **Our Values** (WYSIWYG)
- **Our History** (WYSIWYG)

### Storysplat Template
- **Scene ID** (Text, required)
- **Viewer Height** (Text, default: 600px)
- **Auto-play Tour** (True/False)
- **Show Navigation Controls** (True/False)
- **Lazy Load** (True/False)
- **Custom CSS Class** (Text)

## Page Templates

### Content Pages
- `page.php` - Default page template
- `page-about.php` - About page with ACF sections
- `page-blog.php` - Blog listing page
- `page-events.php` - Events page
- `page-donate.php` - Donation page
- `page-store.php` - Store/products page

### Service Pages
- `page-street-outreach.php`
- `page-womens-outreach.php`
- `page-hire-ground.php`
- `page-public-speaking.php`
- `page-library.php`
- `page-partnerships.php`
- `page-connect-with-us.php`

### Post Templates
- `single.php` - Default post (vertical layout)
- `template-postvertical.php` - Vertical featured image layout
- `template-posthorizontal.php` - Horizontal featured image layout
- `template-storysplat.php` - 3D scene viewer with post content

## Customization

### Colors
The theme uses CSS custom properties defined in `assets/css/base.css`:

- `--color-primary`: #B60F1F (IMFK Red)
- `--color-secondary`: #FFCA42 (IMFK Yellow)
- Various gray shades for text and backgrounds

### Typography
- **Headings**: Sora, 600-700 weight
- **Body Text**: System font stack with Sora
- **Base Size**: 16px
- **Line Height**: 1.75 for body text

### Content Width
- **Main Content**: 750px max-width
- **Wide Layouts**: 1200px max-width (search results, grids)

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive (breakpoint: 769px)
- Progressive enhancement approach

## Development

### CSS Architecture
- `base.css` - Design tokens, typography, content styles
- `theme.css` - Components, layouts, page-specific styles
- `editor-style.css` - WYSIWYG editor styles (matches frontend)

### JavaScript
- Vanilla JavaScript (no jQuery dependencies except WP core)
- ES6+ syntax
- Mobile navigation toggle
- Storysplat viewer constraints

## Plugin Dependencies

### Required
- **Advanced Custom Fields Pro** - For custom field groups

### Recommended
- **IMFK Breadcrumbs** - Breadcrumb navigation (included)
- **StorySplat Viewer** - 3D scene embedding
- **Constant Contact** - Newsletter signup forms

## Credits

**Theme Development**: In My Father's Kitchen
**Typography**: Sora by Google Fonts
**3D Viewer**: StorySplat

---

🤖 Built with assistance from [Claude Code](https://claude.com/claude-code)

## License

GPL v2 or later

## Support

For issues or questions, contact In My Father's Kitchen.

## Changelog

### 1.0.0
- Initial release
- Custom page templates for all major pages
- ACF integration for About and Storysplat pages
- Responsive navigation system
- Post layout options (vertical/horizontal)
- Search results page
- Breadcrumb navigation
- Footer with newsletter signup
