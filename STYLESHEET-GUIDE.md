# IMFK Theme - Base Stylesheet Guide

A comprehensive base stylesheet for the IMFK WordPress theme with CSS variables, typography system, components, and utility classes.

## 📁 File Location
`/assets/css/base.css`

## 🎨 Design Tokens (CSS Variables)

### Colors
```css
/* Brand Colors */
--color-primary: #B60F1F;          /* IMFK Red */
--color-primary-dark: #8B0A16;     /* Darker red for hover */
--color-secondary: #FFCA42;        /* IMFK Yellow */
--color-secondary-light: #FFF4D9;  /* Light yellow background */

/* Color Palette - Primary */
--color-blueberry: #213267;        /* Deep blue */
--color-papaya: #E77C52;           /* Warm orange */
--color-pasta: #FFCA42;            /* Golden yellow */
--color-mint: #87C7A5;             /* Soft green */

/* Color Palette - Secondary */
--color-tomato: #B60F1E;           /* Red */
--color-cotton-candy: #76C7EE;     /* Light blue */

/* Neutral Colors */
--color-gray-900 through --color-gray-50
--color-black: #000000
--color-white: #FFFFFF
```

### Typography
```css
--font-primary: 'Sora', sans-serif;
--font-secondary: 'Piazzolla', serif;
```

### Spacing Scale
```css
--space-xs: 4px
--space-sm: 8px
--space-md: 16px
--space-lg: 24px
--space-xl: 32px
--space-2xl: 48px
--space-3xl: 64px
```

## 📝 Typography

### Headings
```html
<h1>48px heading</h1>              <!-- 32px on mobile -->
<h2>36px heading</h2>              <!-- 28px on mobile -->
<h3>28px heading</h3>              <!-- 24px on mobile -->
<h4>24px heading</h4>              <!-- 20px on mobile -->
<h5>20px heading</h5>              <!-- 18px on mobile -->
<h6>18px heading</h6>              <!-- 16px on mobile -->
```

### Body Text
```html
<p class="body-large">18px text</p>
<p>16px default text</p>
<p class="body-small">14px text</p>
```

### Text Utilities
```html
<p class="text-muted">Muted gray text</p>
<p class="text-primary">IMFK red text</p>
<p class="text-secondary">IMFK yellow text</p>

<!-- Palette Colors -->
<p class="text-blueberry">Blueberry text</p>
<p class="text-papaya">Papaya text</p>
<p class="text-pasta">Pasta text</p>
<p class="text-mint">Mint text</p>
<p class="text-tomato">Tomato text</p>
<p class="text-cotton-candy">Cotton Candy text</p>

<!-- Text Alignment -->
<p class="text-center">Centered text</p>
<p class="text-left">Left aligned</p>
<p class="text-right">Right aligned</p>

<!-- Font Weight & Style -->
<p class="font-bold">Bold text</p>
<p class="font-semibold">Semibold text</p>
<p class="font-serif">Serif font (Piazzolla)</p>
```

## 🔘 Buttons

### Button Variants
```html
<!-- Primary Button (Red) -->
<button class="btn btn-primary">Donate Now</button>

<!-- Secondary Button (Yellow) -->
<button class="btn btn-secondary">Learn More</button>

<!-- Outline Button -->
<button class="btn btn-outline">Get Involved</button>

<!-- White Button (for dark backgrounds) -->
<button class="btn btn-white">Shop Now</button>
```

### Button Sizes
```html
<button class="btn btn-primary btn-lg">Large Button</button>
<button class="btn btn-primary">Default Button</button>
<button class="btn btn-primary btn-sm">Small Button</button>
<button class="btn btn-primary btn-block">Full Width Button</button>
```

## 📦 Cards & Containers

### Card Component
```html
<div class="card">
  <div class="card-header">
    <h3>Card Title</h3>
  </div>
  <div class="card-body">
    <p>Card content goes here...</p>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary">Action</button>
  </div>
</div>
```

### Container
```html
<div class="container">
  <!-- Max-width: 1200px -->
</div>

<div class="container container-md">
  <!-- Max-width: 768px -->
</div>
```

## 📋 Forms

### Form Example
```html
<form>
  <div class="form-group">
    <label class="form-label">Email Address</label>
    <input type="email" class="form-input" placeholder="you@example.com">
    <span class="form-help">We'll never share your email.</span>
  </div>

  <div class="form-group">
    <label class="form-label">Message</label>
    <textarea class="form-textarea" placeholder="Your message..."></textarea>
  </div>

  <div class="form-group">
    <label class="form-label">Select Option</label>
    <select class="form-select">
      <option>Option 1</option>
      <option>Option 2</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

### Form States
```html
<span class="form-help">Helpful text</span>
<span class="form-error">Error message</span>
```

## 🎯 Layout Utilities

### Flexbox
```html
<div class="flex items-center justify-between gap-md">
  <div>Item 1</div>
  <div>Item 2</div>
</div>
```

Available classes:
- `flex`, `flex-col`, `flex-wrap`
- `items-center`, `items-start`, `items-end`
- `justify-center`, `justify-between`, `justify-start`, `justify-end`
- `gap-xs`, `gap-sm`, `gap-md`, `gap-lg`, `gap-xl`, `gap-2xl`

### Grid
```html
<div class="grid grid-cols-3 gap-lg">
  <div>Column 1</div>
  <div>Column 2</div>
  <div>Column 3</div>
</div>
```
*Note: Grid collapses to single column on mobile*

### Spacing
```html
<!-- Margin -->
<div class="mt-lg mb-xl">Content</div>
<div class="ml-md mr-md">Content</div>

<!-- Padding -->
<div class="pt-lg pb-lg">Content</div>
<div class="px-md py-lg">Content</div>
```

Available spacing: `xs`, `sm`, `md`, `lg`, `xl`, `2xl`

## 🎨 Background Colors
```html
<!-- Neutral Backgrounds -->
<div class="bg-white">White background</div>
<div class="bg-light">Light gray background</div>

<!-- Brand Backgrounds -->
<div class="bg-primary">Red background</div>
<div class="bg-secondary">Yellow background</div>
<div class="bg-secondary-light">Light yellow background</div>

<!-- Palette Backgrounds -->
<div class="bg-blueberry">Blueberry background</div>
<div class="bg-papaya">Papaya background</div>
<div class="bg-pasta">Pasta background</div>
<div class="bg-mint">Mint background</div>
<div class="bg-tomato">Tomato background</div>
<div class="bg-cotton-candy">Cotton Candy background</div>
```

## 🏷️ Badges & Tags
```html
<span class="badge badge-primary">NEW</span>
<span class="badge badge-secondary">Featured</span>
<span class="badge badge-gray">Draft</span>
```

## 🚨 Alerts
```html
<div class="alert alert-success">Success message!</div>
<div class="alert alert-warning">Warning message!</div>
<div class="alert alert-error">Error message!</div>
<div class="alert alert-info">Info message!</div>
```

## 📱 Responsive Utilities
```html
<!-- Hide on mobile -->
<div class="mobile-hidden">Desktop only</div>

<!-- Hide on desktop -->
<div class="desktop-hidden">Mobile only</div>
```

## 🖼️ Images
```html
<img src="image.jpg" alt="Description">
<img src="image.jpg" alt="Description" class="img-rounded">
<img src="image.jpg" alt="Description" class="img-circle">
```

## 📏 Dividers
```html
<hr>
<div class="divider"></div>
<div class="divider divider-thick"></div>
```

## 💡 Usage Examples

### Hero Section
```html
<section class="bg-secondary-light py-xl">
  <div class="container">
    <h1 class="text-center mb-lg">Welcome to IMFK</h1>
    <p class="body-large text-center mb-xl">
      Building hope and changing lives in our community
    </p>
    <div class="flex justify-center gap-md">
      <button class="btn btn-primary btn-lg">Donate Now</button>
      <button class="btn btn-outline btn-lg">Learn More</button>
    </div>
  </div>
</section>
```

### Card Grid
```html
<section class="container py-2xl">
  <h2 class="text-center mb-xl">Our Services</h2>
  <div class="grid grid-cols-3 gap-lg">
    <div class="card">
      <h3 class="mb-md">Street Outreach</h3>
      <p>Supporting our homeless friends...</p>
      <a href="#" class="btn btn-primary btn-block mt-lg">Learn More</a>
    </div>
    <!-- More cards... -->
  </div>
</section>
```

### Contact Form
```html
<div class="container container-md py-2xl">
  <h2 class="text-center mb-xl">Get in Touch</h2>
  <form class="card">
    <div class="form-group">
      <label class="form-label">Name</label>
      <input type="text" class="form-input" placeholder="Your name">
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="email" class="form-input" placeholder="your@email.com">
    </div>
    <div class="form-group">
      <label class="form-label">Message</label>
      <textarea class="form-textarea"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
  </form>
</div>
```

## 🔧 Customization

All design tokens are defined as CSS variables in `:root`, making it easy to customize:

```css
/* In your custom CSS file */
:root {
  --color-primary: #YOUR_COLOR;
  --font-primary: 'YourFont', sans-serif;
  --space-lg: 2rem; /* Change spacing */
}
```

## 📂 Load Order

The stylesheets load in this order:
1. **Sora font** (from Fontshare CDN)
2. **theme.css** (header, navigation, mobile menu)
3. **base.css** (this file - variables, typography, components)
4. **style.css** (WordPress header + custom overrides)

Any custom styles should go in `style.css` to override base styles.

## 🎯 Best Practices

1. **Use utility classes** for spacing and layout instead of writing custom CSS
2. **Combine classes** to build components: `btn btn-primary btn-lg`
3. **Use CSS variables** for consistent colors and spacing
4. **Mobile-first** approach - styles are mobile-responsive by default
5. **Semantic HTML** - use proper heading hierarchy and form elements

## 🆘 Support

For questions or issues with the stylesheet, contact the development team or refer to the theme documentation.
