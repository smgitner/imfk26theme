# How to Set Up the Style Guide Page

The style guide page template has been created at:
`page-style-guide.php`

## Option 1: Automatic Creation (Recommended)

Simply switch to a different theme and then back to IMFK Theme in WordPress admin:

1. Go to **Appearance** → **Themes**
2. Activate any other theme (like Twenty Twenty-Five)
3. Activate the **IMFK Theme** again
4. The Style Guide page will be automatically created at: `http://imfk26.local/style-guide/`

## Option 2: Manual Creation

1. Go to **Pages** → **Add New** in WordPress admin
2. Set the **Title** to: `Style Guide`
3. Leave the content area empty
4. In the **Page Attributes** box on the right, select **Template: Style Guide**
5. Click **Publish**
6. Visit: `http://imfk26.local/style-guide/`

## What's Included

The style guide page displays examples of:

- **Typography** - All heading sizes (H1-H6), body text variations
- **Colors** - Brand colors and neutral gray palette
- **Buttons** - All button variants and sizes
- **Cards** - Card component examples
- **Forms** - Complete form elements and states
- **Badges & Alerts** - Badge tags and alert messages
- **Spacing** - The spacing scale system
- **Layout Utilities** - Flexbox and grid examples
- **Background Colors** - All background color classes
- **Images** - Image styling variations
- **Dividers** - Horizontal rule styles
- **Lists** - Ordered, unordered, and unstyled lists

## Next Steps

Once the page is created, you can:

1. **View the live examples** at `http://imfk26.local/style-guide/`
2. **Use as a reference** when building pages
3. **Share with team members** to maintain design consistency
4. **Test responsive design** by resizing your browser

## Files Created

- `/page-style-guide.php` - The template file
- `/assets/css/base.css` - The base stylesheet with all components
- `/STYLESHEET-GUIDE.md` - Complete documentation
- `/inc/setup-pages.php` - Updated to auto-create the page
