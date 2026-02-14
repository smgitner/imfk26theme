# IMFK Theme - Complete Style Guide Documentation

A comprehensive visual reference for all typography, components, and utilities in the IMFK WordPress theme.

## 📖 Table of Contents

1. [Overview](#overview)
2. [Typography](#typography)
3. [Colors](#colors)
4. [Buttons](#buttons)
5. [Cards](#cards)
6. [Forms](#forms)
7. [Badges & Alerts](#badges--alerts)
8. [Spacing System](#spacing-system)
9. [Layout Utilities](#layout-utilities)
10. [Background Colors](#background-colors)
11. [Images](#images)
12. [Dividers](#dividers)
13. [Lists](#lists)

---

## Overview

The IMFK Theme Style Guide is a living document that showcases all available design elements, components, and utilities. It serves as:

- **A visual reference** for developers and designers
- **A testing ground** for responsive behavior
- **A documentation tool** for maintaining design consistency
- **An onboarding resource** for new team members

### Accessing the Style Guide

**URL:** `http://imfk26.local/style-guide/`

### How It Works

The style guide page uses the **Style Guide** template (`page-style-guide.php`) which displays live, interactive examples of every component from `base.css`. All examples are fully functional and demonstrate real hover states, interactions, and responsive behavior.

---

## Typography

### Headings

The IMFK theme uses a hierarchical heading system that automatically adjusts for mobile devices.

#### Heading Sizes

| Element | Desktop Size | Mobile Size | Font Weight | Use Case |
|---------|-------------|-------------|-------------|----------|
| **H1** | 48px | 32px | 800 (Extra Bold) | Page titles, hero headings |
| **H2** | 36px | 28px | 700 (Bold) | Major section titles |
| **H3** | 28px | 24px | 600 (Semibold) | Subsection titles |
| **H4** | 24px | 20px | 600 (Semibold) | Card titles, minor headings |
| **H5** | 20px | 18px | 600 (Semibold) | Small headings |
| **H6** | 18px | 16px | 600 (Semibold) | Tiny headings |

**Example Usage:**
```html
<h1>This is a Heading 1</h1>
<h2>This is a Heading 2</h2>
<h3>This is a Heading 3</h3>
```

**Key Features:**
- Font family: 'Sora' (primary)
- Line height optimized for readability (1.1 - 1.4)
- Letter spacing: -0.02em on H1 for tighter appearance
- Automatic margin-bottom spacing

---

### Body Text

Three body text sizes are available for different content hierarchies.

#### Text Sizes

| Class | Size | Line Height | Use Case |
|-------|------|-------------|----------|
| `.body-large` | 18px | 1.75 | Introductions, important paragraphs |
| Default `<p>` | 16px | 1.75 | Standard body text |
| `.body-small` | 14px | 1.6 | Captions, footnotes, meta information |

**Example Usage:**
```html
<p class="body-large">This is large body text for introductions.</p>
<p>This is default body text for regular content.</p>
<p class="body-small">This is small text for captions.</p>
```

**Key Features:**
- Font family: 'Sora'
- Font weight: 400 (Regular)
- Color: `--color-gray-700` (#374151)
- Automatic paragraph spacing

---

### Text Utilities

#### Color Utilities

Apply these classes to change text color:

```html
<!-- Standard Colors -->
<p class="text-muted">Muted gray text (#595959)</p>
<p class="text-primary">IMFK red text (#B60F1F)</p>
<p class="text-secondary">IMFK yellow text (#FFCA42)</p>

<!-- Palette Colors -->
<p class="text-blueberry">Blueberry text (#213267)</p>
<p class="text-papaya">Papaya text (#E77C52)</p>
<p class="text-pasta">Pasta text (#FFCA42)</p>
<p class="text-mint">Mint text (#87C7A5)</p>
<p class="text-tomato">Tomato text (#B60F1E)</p>
<p class="text-cotton-candy">Cotton Candy text (#76C7EE)</p>
```

#### Font Weight Utilities

```html
<p class="font-bold">Bold text (700)</p>
<p class="font-semibold">Semibold text (600)</p>
<p class="font-normal">Normal text (400)</p>
```

#### Font Style Utilities

```html
<p class="font-serif">Piazzolla serif font</p>
```

#### Alignment Utilities

```html
<p class="text-center">Centered text</p>
<p class="text-left">Left aligned text</p>
<p class="text-right">Right aligned text</p>
```

#### Text Transform

```html
<p class="text-uppercase">UPPERCASE TEXT</p>
```

---

## Colors

The IMFK theme uses a comprehensive color system organized into brand colors, palette colors, and neutral grays.

### Brand Colors

The core IMFK brand identity colors.

| Color Name | Hex Code | Variable | Usage |
|------------|----------|----------|-------|
| **Primary** | #B60F1F | `--color-primary` | Main brand red, primary buttons |
| **Primary Dark** | #8B0A16 | `--color-primary-dark` | Hover states for red elements |
| **Secondary** | #FFCA42 | `--color-secondary` | Accent yellow, secondary buttons |
| **Secondary Light** | #FFF4D9 | `--color-secondary-light` | Light backgrounds, highlights |

**When to Use:**
- Primary: Main CTAs, important links, brand elements
- Secondary: Accent elements, highlights, secondary actions

---

### Color Palette - Primary

A curated palette of food-inspired colors for variety and warmth.

| Color Name | Hex Code | Variable | Description |
|------------|----------|----------|-------------|
| **Blueberry** | #213267 | `--color-blueberry` | Deep, professional blue |
| **Papaya** | #E77C52 | `--color-papaya` | Warm, inviting orange |
| **Pasta** | #FFCA42 | `--color-pasta` | Golden yellow (same as Secondary) |
| **Mint** | #87C7A5 | `--color-mint` | Fresh, calming green |

**When to Use:**
- Section backgrounds
- Card accents
- Icon colors
- Visual variety in layouts

---

### Color Palette - Secondary

Additional accent colors for special use cases.

| Color Name | Hex Code | Variable | Description |
|------------|----------|----------|-------------|
| **Tomato** | #B60F1E | `--color-tomato` | Vibrant red (same as Primary) |
| **Cotton Candy** | #76C7EE | `--color-cotton-candy` | Soft, friendly blue |
| **Black** | #000000 | `--color-black` | Pure black |

---

### Neutral Grays

A 10-shade gray scale for text, borders, and backgrounds.

| Shade | Hex Code | Variable | Usage |
|-------|----------|----------|-------|
| **Gray 900** | #141423 | `--color-gray-900` | Darkest text, headings |
| **Gray 800** | #1a1a1a | `--color-gray-800` | Body text, dark UI elements |
| **Gray 700** | #374151 | `--color-gray-700` | Default paragraph text |
| **Gray 600** | #595959 | `--color-gray-600` | Muted text, captions |
| **Gray 500** | #6b7280 | `--color-gray-500` | Placeholder text |
| **Gray 400** | #9ca3af | `--color-gray-400` | Disabled text |
| **Gray 300** | #CCCCCC | `--color-gray-300` | Borders, dividers |
| **Gray 200** | #d1d1d1 | `--color-gray-200` | Light borders |
| **Gray 100** | #e5e7eb | `--color-gray-100` | Subtle backgrounds |
| **Gray 50** | #f3f3f3 | `--color-gray-50` | Background tint |

---

### Color Utility Classes

The style guide demonstrates these utility classes with live examples:

#### Text Colors
- `.text-blueberry` through `.text-cotton-candy`
- Shows each palette color as colored text

#### Background Colors
- `.bg-blueberry` through `.bg-cotton-candy`
- Displays as colored blocks with the class name inside
- Grid layout shows 3 columns of color blocks

**Visual Display:**
- Color swatches: 100x100px squares with rounded corners
- Each includes the color name and hex code below
- Organized in flexbox rows that wrap on mobile

---

## Buttons

Buttons are the primary call-to-action elements in the IMFK theme.

### Button Variants

Four distinct button styles for different contexts:

#### Primary Button
```html
<button class="btn btn-primary">Primary Button</button>
```
- **Color:** White text on red background (#B60F1F)
- **Hover:** Darker red (#8B0A16)
- **Use:** Main CTAs, important actions

#### Secondary Button
```html
<button class="btn btn-secondary">Secondary Button</button>
```
- **Color:** Dark text on yellow background (#FFCA42)
- **Hover:** Slightly darker yellow
- **Use:** Secondary actions, less emphasis

#### Outline Button
```html
<button class="btn btn-outline">Outline Button</button>
```
- **Color:** Red text with red border, transparent background
- **Hover:** White text on red background
- **Use:** Tertiary actions, ghost buttons

#### White Button
```html
<button class="btn btn-white">White Button</button>
```
- **Color:** Dark text on white background
- **Hover:** White text on transparent background
- **Use:** Buttons on dark backgrounds

**Style Guide Display:**
- Shows all 4 variants in a row
- Includes a dark background example showing white button usage

---

### Button Sizes

Three size options for different contexts:

```html
<button class="btn btn-primary btn-lg">Large Button</button>
<button class="btn btn-primary">Default Button</button>
<button class="btn btn-primary btn-sm">Small Button</button>
```

| Size | Padding | Font Size | Use Case |
|------|---------|-----------|----------|
| **Large** (`.btn-lg`) | 16px 32px | 18px | Hero sections, primary CTAs |
| **Default** | 12px 24px | 16px | Standard buttons |
| **Small** (`.btn-sm`) | 8px 16px | 14px | Compact spaces, inline actions |

**Style Guide Display:**
- Shows all 3 sizes aligned by their center
- Demonstrates relative sizing

---

### Full Width Button

```html
<button class="btn btn-primary btn-block">Block Button (Full Width)</button>
```

- Stretches to 100% of container width
- Changes from `inline-flex` to `flex`
- Useful in cards, forms, mobile layouts

**Style Guide Display:**
- Single full-width button showing maximum stretch

---

### Button Features

- **Border radius:** Fully rounded (`border-radius: 9999px`)
- **Transitions:** 200ms ease on all properties
- **Cursor:** Pointer on hover
- **No default border** (except outline variant)
- **Font weight:** 600 (Semibold)
- **White space:** `nowrap` prevents text wrapping

---

## Cards

Cards are containers for organizing related content.

### Card Components

Cards can include three optional sections:

#### Basic Card Structure
```html
<div class="card">
  <div class="card-header">
    <h4>Card Title</h4>
  </div>
  <div class="card-body">
    <p>Card content goes here...</p>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary btn-sm">Action</button>
  </div>
</div>
```

### Card Sections

| Section | Purpose | Styling |
|---------|---------|---------|
| `.card-header` | Title area | Border-bottom, padding-bottom |
| `.card-body` | Main content | Vertical padding |
| `.card-footer` | Actions area | Border-top, padding-top |

### Simple Card (No Divisions)
```html
<div class="card">
  <h4>Simple Card</h4>
  <p>Content without formal sections.</p>
  <button class="btn btn-outline btn-block">Learn More</button>
</div>
```

**Style Guide Display:**
- Shows 3 cards in a grid (3 columns)
- First: Basic card with header and body
- Second: Full card with header, body, and footer
- Third: Simple card without divisions
- Grid collapses to 1 column on mobile

---

### Card Features

- **Background:** White (#FFFFFF)
- **Border:** 1px solid light gray
- **Border radius:** 8px (`.radius-lg`)
- **Padding:** 24px (1.5rem)
- **Shadow:** Subtle box-shadow on hover
- **Transition:** Shadow animates on hover (200ms)

---

## Forms

Complete form system with consistent styling and states.

### Form Structure

```html
<form>
  <div class="form-group">
    <label class="form-label">Label Text</label>
    <input type="text" class="form-input" placeholder="Placeholder...">
    <span class="form-help">Helpful hint text</span>
  </div>
</form>
```

### Form Elements

#### Text Input
```html
<div class="form-group">
  <label class="form-label">Text Input</label>
  <input type="text" class="form-input" placeholder="Enter your name">
  <span class="form-help">This is helpful text</span>
</div>
```

#### Email Input
```html
<div class="form-group">
  <label class="form-label">Email Input</label>
  <input type="email" class="form-input" placeholder="you@example.com">
</div>
```

#### Select Dropdown
```html
<div class="form-group">
  <label class="form-label">Select Dropdown</label>
  <select class="form-select">
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
  </select>
</div>
```

#### Textarea
```html
<div class="form-group">
  <label class="form-label">Textarea</label>
  <textarea class="form-textarea" placeholder="Your message..."></textarea>
</div>
```

---

### Form States

#### Helper Text
```html
<span class="form-help">This is helpful text</span>
```
- Color: Gray 600 (#595959)
- Size: 14px
- Displays below input

#### Error State
```html
<input type="text" class="form-input" placeholder="Invalid input">
<span class="form-error">This field is required</span>
```
- Color: Primary red (#B60F1F)
- Size: 14px
- Indicates validation errors

**Style Guide Display:**
- Left column: Individual form elements with labels
- Right column: Complete contact form inside a card
- Shows all input types, states, and a submit button
- Both examples are interactive

---

### Form Styling

#### Labels (`.form-label`)
- Font size: 14px
- Font weight: 600 (Semibold)
- Margin bottom: 8px
- Color: Gray 800

#### Inputs (`.form-input`, `.form-textarea`, `.form-select`)
- Width: 100%
- Padding: 12px 16px
- Border: 2px solid gray 200
- Border radius: 6px
- Font size: 16px
- **Focus:** Border changes to primary red

#### Textarea Specific
- Min height: 120px
- Vertical resize only

#### Form Group (`.form-group`)
- Margin bottom: 24px (1.5rem)
- Contains label + input + help/error

---

## Badges & Alerts

Visual indicators for status, notifications, and important information.

### Badges

Small labels for tags, counts, or status indicators.

```html
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-gray">Gray</span>
<span class="badge badge-primary">NEW</span>
<span class="badge badge-secondary">Featured</span>
```

#### Badge Variants

| Variant | Background | Text Color | Use Case |
|---------|-----------|------------|----------|
| `.badge-primary` | Red (#B60F1F) | White | Important, urgent |
| `.badge-secondary` | Yellow (#FFCA42) | Dark | Featured, highlighted |
| `.badge-gray` | Gray 200 | Gray 700 | Neutral, default |

**Badge Features:**
- Padding: 4px 12px
- Font size: 12px
- Font weight: 600
- Border radius: Fully rounded
- Text transform: UPPERCASE
- Letter spacing: 0.05em

**Style Guide Display:**
- Shows 5 badge examples in a flex row
- Demonstrates different variants and use cases

---

### Alerts

Message boxes for user notifications and feedback.

```html
<div class="alert alert-success">
  <strong>Success!</strong> Your changes have been saved successfully.
</div>

<div class="alert alert-warning">
  <strong>Warning!</strong> Please review this information carefully.
</div>

<div class="alert alert-error">
  <strong>Error!</strong> Something went wrong. Please try again.
</div>

<div class="alert alert-info">
  <strong>Info:</strong> This is some helpful information for you.
</div>
```

#### Alert Types

| Type | Background | Text Color | Border | Icon/Use |
|------|-----------|------------|--------|----------|
| `.alert-success` | Light green | Dark green | Green | Confirmations, success messages |
| `.alert-warning` | Light yellow | Dark brown | Yellow | Warnings, cautions |
| `.alert-error` | Light red | Dark red | Red | Errors, failed actions |
| `.alert-info` | Light blue | Dark blue | Blue | Information, helpful tips |

**Alert Features:**
- Padding: 16px 24px
- Margin bottom: 16px
- Border radius: 6px
- Border: 1px solid (matching color)

**Style Guide Display:**
- Stacked vertically showing all 4 alert types
- Each with appropriate color and message

---

## Spacing System

A consistent spacing scale using CSS variables for margins and padding.

### Spacing Scale

| Name | Variable | Value | Pixels |
|------|----------|-------|--------|
| **xs** | `--space-xs` | 0.25rem | 4px |
| **sm** | `--space-sm` | 0.5rem | 8px |
| **md** | `--space-md` | 1rem | 16px |
| **lg** | `--space-lg` | 1.5rem | 24px |
| **xl** | `--space-xl` | 2rem | 32px |
| **2xl** | `--space-2xl` | 3rem | 48px |
| **3xl** | `--space-3xl` | 4rem | 64px |

**Style Guide Display:**
- Visual boxes showing each spacing size
- Each box has padding equal to its spacing value
- Light yellow background with dashed border
- Labeled with name and pixel value

---

### Spacing Utilities

#### Margin Utilities

```html
<!-- Top Margin -->
<div class="mt-xs">4px top margin</div>
<div class="mt-sm">8px top margin</div>
<div class="mt-md">16px top margin</div>
<div class="mt-lg">24px top margin</div>
<div class="mt-xl">32px top margin</div>
<div class="mt-2xl">48px top margin</div>

<!-- Bottom Margin -->
<div class="mb-sm">8px bottom margin</div>
<div class="mb-md">16px bottom margin</div>
<div class="mb-lg">24px bottom margin</div>
<div class="mb-xl">32px bottom margin</div>
<div class="mb-2xl">48px bottom margin</div>

<!-- Left/Right Margin -->
<div class="ml-md">16px left margin</div>
<div class="mr-md">16px right margin</div>

<!-- Zero Margin -->
<div class="m-0">No margin</div>
```

#### Padding Utilities

```html
<!-- Top Padding -->
<div class="pt-sm">8px top padding</div>
<div class="pt-md">16px top padding</div>
<div class="pt-lg">24px top padding</div>
<div class="pt-xl">32px top padding</div>

<!-- Bottom Padding -->
<div class="pb-sm">8px bottom padding</div>
<div class="pb-md">16px bottom padding</div>
<div class="pb-lg">24px bottom padding</div>
<div class="pb-xl">32px bottom padding</div>

<!-- Horizontal Padding (left + right) -->
<div class="px-sm">8px horizontal padding</div>
<div class="px-md">16px horizontal padding</div>
<div class="px-lg">24px horizontal padding</div>

<!-- Vertical Padding (top + bottom) -->
<div class="py-sm">8px vertical padding</div>
<div class="py-md">16px vertical padding</div>
<div class="py-lg">24px vertical padding</div>

<!-- Zero Padding -->
<div class="p-0">No padding</div>
```

**Style Guide Display:**
- Shows code examples: `mt-lg`, `mb-xl`, `px-md`, `py-lg`
- Live example with light yellow background showing applied spacing

---

## Layout Utilities

Utility classes for creating flexible, responsive layouts.

### Flexbox

Create flexible layouts with flexbox utilities.

```html
<div class="flex items-center justify-between gap-md">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</div>
```

#### Flexbox Classes

**Display:**
- `.flex` - Display flex
- `.flex-col` - Flex direction column
- `.flex-wrap` - Allow wrapping

**Align Items (Cross Axis):**
- `.items-center` - Align center
- `.items-start` - Align start
- `.items-end` - Align end

**Justify Content (Main Axis):**
- `.justify-center` - Justify center
- `.justify-between` - Space between
- `.justify-start` - Justify start
- `.justify-end` - Justify end

**Gap:**
- `.gap-xs` through `.gap-2xl` - Space between flex items

**Style Guide Display:**
- Shows 3 white boxes in a flex container
- Light yellow background
- Demonstrates `items-center justify-between gap-md`

---

### Grid

CSS Grid system that's responsive by default.

```html
<div class="grid grid-cols-4 gap-md">
  <div>1</div>
  <div>2</div>
  <div>3</div>
  <div>4</div>
</div>
```

#### Grid Classes

- `.grid` - Display grid
- `.grid-cols-2` - 2 columns
- `.grid-cols-3` - 3 columns
- `.grid-cols-4` - 4 columns

**Note:** All multi-column grids collapse to 1 column on mobile (< 768px)

**Style Guide Display:**
- Shows 4-column grid with numbered boxes
- Light yellow backgrounds
- Includes note about mobile collapse
- Live demonstration of grid layout

---

### Container

Centered content container with max-width.

```html
<div class="container">
  <!-- Max-width: 1200px, centered -->
</div>

<div class="container container-sm">
  <!-- Max-width: 640px -->
</div>

<div class="container container-md">
  <!-- Max-width: 768px -->
</div>

<div class="container container-lg">
  <!-- Max-width: 1024px -->
</div>
```

**Container Sizes:**
- Default: 1200px
- `.container-sm`: 640px
- `.container-md`: 768px
- `.container-lg`: 1024px

**Features:**
- Auto margins for centering
- Horizontal padding: 24px (1.5rem)
- Width: 100% until max-width

**Style Guide Display:**
- Shows explanation of container behavior
- Notes max-width and centering

---

## Background Colors

Apply background colors to any element.

### Available Background Classes

```html
<!-- Neutral -->
<div class="bg-white">White background</div>
<div class="bg-light">Light gray background (#f3f3f3)</div>

<!-- Brand -->
<div class="bg-primary">Red background (#B60F1F)</div>
<div class="bg-secondary">Yellow background (#FFCA42)</div>
<div class="bg-secondary-light">Light yellow (#FFF4D9)</div>

<!-- Palette Colors -->
<div class="bg-blueberry">Blueberry background (#213267)</div>
<div class="bg-papaya">Papaya background (#E77C52)</div>
<div class="bg-pasta">Pasta background (#FFCA42)</div>
<div class="bg-mint">Mint background (#87C7A5)</div>
<div class="bg-tomato">Tomato background (#B60F1E)</div>
<div class="bg-cotton-candy">Cotton Candy (#76C7EE)</div>
```

**Style Guide Display:**
- Grid layout showing 5 main background colors
- Each box shows the class name
- White backgrounds have a border for visibility
- Dark backgrounds use white text

---

## Images

Image styling utilities for different visual treatments.

### Image Classes

#### Default Image
```html
<img src="image.jpg" alt="Description">
```
- No special styling
- Responsive by default (max-width: 100%)
- Display: block
- Height: auto (maintains aspect ratio)

#### Rounded Image
```html
<img src="image.jpg" alt="Description" class="img-rounded">
```
- Border radius: 8px (`.radius-lg`)
- Softens corners for friendly appearance

#### Circle Image
```html
<img src="image.jpg" alt="Description" class="img-circle">
```
- Border radius: 50% (fully round)
- Best for square images (profile photos, avatars)

**Style Guide Display:**
- 3-column grid showing each image style
- Uses placeholder images from placeholder.com
- Demonstrates visual differences between treatments

---

## Dividers

Horizontal rules for separating content sections.

### Divider Types

#### Default Divider
```html
<hr>
<!-- OR -->
<div class="divider"></div>
```
- Height: 1px
- Background: Gray 200 (#d1d1d1)
- Margin: 48px 0 (top and bottom)
- No border

#### Thick Divider
```html
<div class="divider divider-thick"></div>
```
- Height: 3px
- Background: Secondary yellow (#FFCA42)
- Margin: 48px 0
- More prominent visual break

**When to Use:**
- Default: Subtle content separation
- Thick: Major section breaks, chapter divisions

**Style Guide Display:**
- Shows both divider types stacked
- Labels indicate which is which
- Live demonstration of spacing

---

## Lists

List styling for ordered, unordered, and custom lists.

### List Types

#### Unordered List
```html
<ul>
  <li>List item one</li>
  <li>List item two</li>
  <li>List item three</li>
</ul>
```
- Default bullet points
- Left padding: 24px
- Item margin bottom: 8px

#### Ordered List
```html
<ol>
  <li>First item</li>
  <li>Second item</li>
  <li>Third item</li>
</ol>
```
- Numbered automatically
- Left padding: 24px
- Item margin bottom: 8px

#### Unstyled List
```html
<ul class="list-unstyled">
  <li>No bullets</li>
  <li>No padding</li>
  <li>Clean list</li>
</ul>
```
- No bullet points or numbers
- No padding-left
- Useful for navigation menus, clean layouts

#### Inline List
```html
<ul class="list-inline">
  <li>Item 1</li>
  <li>Item 2</li>
  <li>Item 3</li>
</ul>
```
- Display: flex
- Horizontal layout
- Gap: 16px between items

**Style Guide Display:**
- 3-column grid showing all 3 list types
- Each in its own example block
- Demonstrates visual differences

---

## Display & Responsive Utilities

### Display Utilities

```html
<div class="block">Display block</div>
<div class="inline-block">Display inline-block</div>
<div class="hidden">Display none</div>
```

### Responsive Visibility

```html
<!-- Hide on mobile -->
<div class="mobile-hidden">Desktop only</div>

<!-- Hide on desktop -->
<div class="desktop-hidden">Mobile only</div>
```

**Breakpoint:** 768px

---

## Best Practices

### Using the Style Guide

1. **Reference First** - Always check the style guide before creating custom styles
2. **Test Responsively** - Resize browser to see mobile behavior
3. **Copy Class Names** - Use exact class names from examples
4. **Combine Utilities** - Build complex designs by combining utility classes
5. **Maintain Consistency** - Stick to the defined spacing, colors, and typography

### Component Combinations

The power of the IMFK design system comes from combining utilities:

```html
<!-- Hero Section Example -->
<section class="bg-blueberry py-2xl">
  <div class="container">
    <h1 class="text-white text-center mb-lg">Welcome to IMFK</h1>
    <p class="body-large text-cotton-candy text-center mb-xl">
      Building hope and changing lives
    </p>
    <div class="flex justify-center gap-md">
      <button class="btn btn-primary btn-lg">Donate Now</button>
      <button class="btn btn-white btn-lg">Learn More</button>
    </div>
  </div>
</section>

<!-- Card Grid Example -->
<section class="container py-2xl">
  <h2 class="text-center mb-xl">Our Services</h2>
  <div class="grid grid-cols-3 gap-lg">
    <div class="card">
      <h3 class="text-primary mb-md">Street Outreach</h3>
      <p class="mb-lg">Supporting our community...</p>
      <button class="btn btn-outline btn-block">Learn More</button>
    </div>
    <!-- More cards... -->
  </div>
</section>
```

---

## Accessibility Features

The IMFK style guide includes accessibility best practices:

- **Color Contrast** - All text meets WCAG AA standards
- **Focus States** - Visible focus indicators on all interactive elements
- **Form Labels** - Proper label associations for screen readers
- **Semantic HTML** - Uses appropriate HTML5 elements
- **Keyboard Navigation** - All buttons and links are keyboard accessible

---

## Browser Support

The IMFK theme supports:

- **Modern Browsers:** Chrome, Firefox, Safari, Edge (latest 2 versions)
- **Mobile:** iOS Safari, Chrome Mobile
- **CSS Features:** CSS Grid, Flexbox, CSS Variables
- **Fallbacks:** None required for supported browsers

---

## File References

### Core Files

- **Style Guide Template:** `/page-style-guide.php`
- **Base Stylesheet:** `/assets/css/base.css`
- **Theme Styles:** `/assets/css/theme.css`
- **Documentation:** `/STYLESHEET-GUIDE.md`
- **This Guide:** `/styleguide.md`

### Load Order

1. Sora font (CDN)
2. `theme.css` (header, navigation)
3. `base.css` (design system)
4. `style.css` (WordPress + overrides)

---

## Getting Help

### Resources

- **View Live:** http://imfk26.local/style-guide/
- **Base Stylesheet:** `/assets/css/base.css`
- **Setup Instructions:** `/SETUP-STYLE-GUIDE.md`
- **Quick Reference:** `/STYLESHEET-GUIDE.md`

### Common Questions

**Q: Can I add custom styles?**
A: Yes, add them to `style.css` which loads last and can override base styles.

**Q: How do I customize colors?**
A: Edit CSS variables in `:root` at the top of `base.css`.

**Q: Are the examples interactive?**
A: Yes! All buttons, forms, and links are fully functional.

**Q: Does it work on mobile?**
A: Absolutely. All components are responsive and mobile-tested.

---

## Changelog

### Version 1.0
- Initial style guide creation
- Complete typography system
- Button component system
- Card components
- Form elements
- Color palette (brand + 7 food-inspired colors)
- Spacing system with utilities
- Layout utilities (flexbox, grid)
- Responsive helpers

### Future Enhancements
- Animation utilities
- Icon system integration
- Additional card variants
- Advanced form components
- Custom button color variants
- Dark mode support

---

## Credits

**IMFK Theme**
Designed and developed for In My Father's Kitchen

**Fonts:**
- Sora - Primary font (Fontshare)
- Piazzolla - Secondary serif font (Google Fonts)

**Technologies:**
- WordPress
- CSS Variables
- Flexbox & CSS Grid
- PHP Templates

---

*Last Updated: February 2025*
