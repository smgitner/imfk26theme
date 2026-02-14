<?php
/**
 * Template Name: Style Guide
 *
 * Displays all typography, components, and utilities from base.css
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<style>
	.style-guide {
		max-width: 1200px;
		margin: 0 auto;
		padding: 3rem 1.5rem;
	}
	.style-guide-section {
		margin-bottom: 4rem;
		padding-bottom: 3rem;
		border-bottom: 2px solid var(--color-gray-200);
	}
	.style-guide-section:last-child {
		border-bottom: none;
	}
	.style-guide-section > h2 {
		font-size: 32px;
		font-weight: 700;
		color: var(--color-primary);
		margin-bottom: 2rem;
		padding-bottom: 1rem;
		border-bottom: 3px solid var(--color-secondary);
	}
	.example-block {
		background: var(--color-gray-50);
		border: 1px solid var(--color-gray-200);
		border-radius: 8px;
		padding: 2rem;
		margin-bottom: 2rem;
	}
	.example-label {
		font-family: 'Monaco', 'Courier New', monospace;
		font-size: 12px;
		color: var(--color-gray-600);
		margin-bottom: 0.5rem;
		text-transform: uppercase;
		letter-spacing: 0.05em;
	}
	.color-swatch {
		display: inline-block;
		width: 100px;
		height: 100px;
		border-radius: 8px;
		border: 2px solid var(--color-gray-300);
		margin-right: 1rem;
		margin-bottom: 1rem;
	}
	.spacing-box {
		background: var(--color-secondary-light);
		border: 2px dashed var(--color-secondary);
		display: inline-block;
		margin-right: 1rem;
		margin-bottom: 1rem;
	}
</style>

<div class="style-guide">

	<!-- Page Header -->
	<header class="text-center mb-2xl">
		<h1 class="mb-md">IMFK Theme Style Guide</h1>
		<p class="body-large text-muted">Complete reference for all typography, components, and utilities</p>
	</header>

	<!-- ==================== TYPOGRAPHY ==================== -->
	<section class="style-guide-section">
		<h2>Typography</h2>

		<!-- Headings -->
		<div class="example-block">
			<h3 class="mb-lg">Headings</h3>
			<div class="mb-md">
				<p class="example-label">H1 - 48px (32px mobile)</p>
				<h1>This is a Heading 1</h1>
			</div>
			<div class="mb-md">
				<p class="example-label">H2 - 36px (28px mobile)</p>
				<h2>This is a Heading 2</h2>
			</div>
			<div class="mb-md">
				<p class="example-label">H3 - 28px (24px mobile)</p>
				<h3>This is a Heading 3</h3>
			</div>
			<div class="mb-md">
				<p class="example-label">H4 - 24px (20px mobile)</p>
				<h4>This is a Heading 4</h4>
			</div>
			<div class="mb-md">
				<p class="example-label">H5 - 20px (18px mobile)</p>
				<h5>This is a Heading 5</h5>
			</div>
			<div class="mb-md">
				<p class="example-label">H6 - 18px (16px mobile)</p>
				<h6>This is a Heading 6</h6>
			</div>
		</div>

		<!-- Body Text -->
		<div class="example-block">
			<h3 class="mb-lg">Body Text</h3>
			<div class="mb-md">
				<p class="example-label">.body-large - 18px</p>
				<p class="body-large">This is large body text. Perfect for introductions and important content that needs emphasis.</p>
			</div>
			<div class="mb-md">
				<p class="example-label">Default (p) - 16px</p>
				<p>This is default body text. The standard paragraph text used throughout the site for readable content.</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.body-small - 14px</p>
				<p class="body-small">This is small body text. Used for captions, footnotes, and secondary information.</p>
			</div>
		</div>

		<!-- Text Utilities -->
		<div class="example-block">
			<h3 class="mb-lg">Text Utilities</h3>
			<div class="mb-md">
				<p class="example-label">.text-muted</p>
				<p class="text-muted">This text is muted gray</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.text-primary</p>
				<p class="text-primary">This text is IMFK red</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.text-secondary</p>
				<p class="text-secondary">This text is IMFK yellow</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.font-bold</p>
				<p class="font-bold">This text is bold (700)</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.font-semibold</p>
				<p class="font-semibold">This text is semibold (600)</p>
			</div>
			<div class="mb-md">
				<p class="example-label">.font-serif</p>
				<p class="font-serif">This text uses the Piazzolla serif font</p>
			</div>
		</div>
	</section>

	<!-- ==================== COLORS ==================== -->
	<section class="style-guide-section">
		<h2>Colors</h2>

		<div class="example-block">
			<h3 class="mb-lg">Brand Colors</h3>
			<div class="flex flex-wrap gap-md">
				<div>
					<div class="color-swatch" style="background: #B60F1F;"></div>
					<p class="body-small"><strong>Primary</strong><br>#B60F1F</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #8B0A16;"></div>
					<p class="body-small"><strong>Primary Dark</strong><br>#8B0A16</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #FFCA42;"></div>
					<p class="body-small"><strong>Secondary</strong><br>#FFCA42</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #FFF4D9;"></div>
					<p class="body-small"><strong>Secondary Light</strong><br>#FFF4D9</p>
				</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Color Palette - Primary</h3>
			<div class="flex flex-wrap gap-md">
				<div>
					<div class="color-swatch" style="background: #213267;"></div>
					<p class="body-small"><strong>Blueberry</strong><br>#213267</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #E77C52;"></div>
					<p class="body-small"><strong>Papaya</strong><br>#E77C52</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #FFCA42;"></div>
					<p class="body-small"><strong>Pasta</strong><br>#FFCA42</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #87C7A5;"></div>
					<p class="body-small"><strong>Mint</strong><br>#87C7A5</p>
				</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Color Palette - Secondary</h3>
			<div class="flex flex-wrap gap-md">
				<div>
					<div class="color-swatch" style="background: #B60F1E;"></div>
					<p class="body-small"><strong>Tomato</strong><br>#B60F1E</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #76C7EE;"></div>
					<p class="body-small"><strong>Cotton Candy</strong><br>#76C7EE</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #000000; border-color: #CCCCCC;"></div>
					<p class="body-small"><strong>Black</strong><br>#000000</p>
				</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Neutral Grays</h3>
			<div class="flex flex-wrap gap-md">
				<div>
					<div class="color-swatch" style="background: #141423;"></div>
					<p class="body-small"><strong>Gray 900</strong><br>#141423</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #595959;"></div>
					<p class="body-small"><strong>Gray 600</strong><br>#595959</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #CCCCCC;"></div>
					<p class="body-small"><strong>Gray 300</strong><br>#CCCCCC</p>
				</div>
				<div>
					<div class="color-swatch" style="background: #f3f3f3;"></div>
					<p class="body-small"><strong>Gray 50</strong><br>#F3F3F3</p>
				</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Color Utility Classes</h3>
			<p class="body-small mb-md">Use these classes for text colors and backgrounds:</p>

			<h4 class="mb-md">Text Colors</h4>
			<div class="mb-lg">
				<p class="text-blueberry">.text-blueberry - Blueberry text</p>
				<p class="text-papaya">.text-papaya - Papaya text</p>
				<p class="text-pasta">.text-pasta - Pasta text</p>
				<p class="text-mint">.text-mint - Mint text</p>
				<p class="text-tomato">.text-tomato - Tomato text</p>
				<p class="text-cotton-candy">.text-cotton-candy - Cotton Candy text</p>
			</div>

			<h4 class="mb-md">Background Colors</h4>
			<div class="grid grid-cols-3 gap-md">
				<div class="bg-blueberry px-lg py-md">
					<p class="m-0" style="color: white;"><code>.bg-blueberry</code></p>
				</div>
				<div class="bg-papaya px-lg py-md">
					<p class="m-0" style="color: white;"><code>.bg-papaya</code></p>
				</div>
				<div class="bg-pasta px-lg py-md">
					<p class="m-0"><code>.bg-pasta</code></p>
				</div>
				<div class="bg-mint px-lg py-md">
					<p class="m-0"><code>.bg-mint</code></p>
				</div>
				<div class="bg-tomato px-lg py-md">
					<p class="m-0" style="color: white;"><code>.bg-tomato</code></p>
				</div>
				<div class="bg-cotton-candy px-lg py-md">
					<p class="m-0"><code>.bg-cotton-candy</code></p>
				</div>
			</div>
		</div>
	</section>

	<!-- ==================== BUTTONS ==================== -->
	<section class="style-guide-section">
		<h2>Buttons</h2>

		<div class="example-block">
			<h3 class="mb-lg">Button Variants</h3>
			<div class="flex flex-wrap gap-md mb-lg">
				<button class="btn btn-primary">Primary Button</button>
				<button class="btn btn-secondary">Secondary Button</button>
				<button class="btn btn-outline">Outline Button</button>
				<button class="btn btn-white">White Button</button>
			</div>
			<div class="bg-primary px-lg py-lg" style="display: inline-block;">
				<button class="btn btn-white">White on Dark</button>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Button Sizes</h3>
			<div class="flex flex-wrap items-center gap-md">
				<button class="btn btn-primary btn-lg">Large Button</button>
				<button class="btn btn-primary">Default Button</button>
				<button class="btn btn-primary btn-sm">Small Button</button>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Full Width Button</h3>
			<button class="btn btn-primary btn-block">Block Button (Full Width)</button>
		</div>
	</section>

	<!-- ==================== CARDS ==================== -->
	<section class="style-guide-section">
		<h2>Cards</h2>

		<div class="grid grid-cols-3 gap-lg">
			<div class="card">
				<div class="card-header">
					<h4 class="m-0">Basic Card</h4>
				</div>
				<div class="card-body">
					<p>This is a basic card with a header and body. Cards are perfect for organizing content.</p>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h4 class="m-0">Card with Footer</h4>
				</div>
				<div class="card-body">
					<p>Cards can include headers, bodies, and footers for structured content.</p>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary btn-sm">Action</button>
				</div>
			</div>

			<div class="card">
				<h4 class="mb-md">Simple Card</h4>
				<p class="mb-lg">A simple card without header/footer divisions.</p>
				<button class="btn btn-outline btn-block">Learn More</button>
			</div>
		</div>
	</section>

	<!-- ==================== FORMS ==================== -->
	<section class="style-guide-section">
		<h2>Forms</h2>

		<div class="example-block">
			<div class="grid grid-cols-2 gap-lg">
				<div>
					<h3 class="mb-lg">Form Elements</h3>
					<form>
						<div class="form-group">
							<label class="form-label">Text Input</label>
							<input type="text" class="form-input" placeholder="Enter your name">
							<span class="form-help">This is helpful text</span>
						</div>

						<div class="form-group">
							<label class="form-label">Email Input</label>
							<input type="email" class="form-input" placeholder="you@example.com">
						</div>

						<div class="form-group">
							<label class="form-label">Select Dropdown</label>
							<select class="form-select">
								<option>Option 1</option>
								<option>Option 2</option>
								<option>Option 3</option>
							</select>
						</div>

						<div class="form-group">
							<label class="form-label">Textarea</label>
							<textarea class="form-textarea" placeholder="Your message..."></textarea>
						</div>

						<div class="form-group">
							<label class="form-label">Input with Error</label>
							<input type="text" class="form-input" placeholder="Invalid input">
							<span class="form-error">This field is required</span>
						</div>

						<button type="submit" class="btn btn-primary">Submit Form</button>
					</form>
				</div>

				<div>
					<h3 class="mb-lg">Complete Form Example</h3>
					<div class="card">
						<form>
							<div class="form-group">
								<label class="form-label">Full Name</label>
								<input type="text" class="form-input" placeholder="John Doe">
							</div>

							<div class="form-group">
								<label class="form-label">Email Address</label>
								<input type="email" class="form-input" placeholder="john@example.com">
							</div>

							<div class="form-group">
								<label class="form-label">Message</label>
								<textarea class="form-textarea" placeholder="Tell us about yourself..."></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-block">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==================== BADGES & ALERTS ==================== -->
	<section class="style-guide-section">
		<h2>Badges & Alerts</h2>

		<div class="example-block">
			<h3 class="mb-lg">Badges</h3>
			<div class="flex flex-wrap gap-md">
				<span class="badge badge-primary">Primary</span>
				<span class="badge badge-secondary">Secondary</span>
				<span class="badge badge-gray">Gray</span>
				<span class="badge badge-primary">NEW</span>
				<span class="badge badge-secondary">Featured</span>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Alerts</h3>
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
		</div>
	</section>

	<!-- ==================== SPACING ==================== -->
	<section class="style-guide-section">
		<h2>Spacing System</h2>

		<div class="example-block">
			<h3 class="mb-lg">Spacing Scale</h3>
			<div class="mb-lg">
				<p class="example-label">xs - 4px</p>
				<div class="spacing-box" style="padding: var(--space-xs);">xs</div>
			</div>
			<div class="mb-lg">
				<p class="example-label">sm - 8px</p>
				<div class="spacing-box" style="padding: var(--space-sm);">sm</div>
			</div>
			<div class="mb-lg">
				<p class="example-label">md - 16px</p>
				<div class="spacing-box" style="padding: var(--space-md);">md</div>
			</div>
			<div class="mb-lg">
				<p class="example-label">lg - 24px</p>
				<div class="spacing-box" style="padding: var(--space-lg);">lg</div>
			</div>
			<div class="mb-lg">
				<p class="example-label">xl - 32px</p>
				<div class="spacing-box" style="padding: var(--space-xl);">xl</div>
			</div>
			<div class="mb-lg">
				<p class="example-label">2xl - 48px</p>
				<div class="spacing-box" style="padding: var(--space-2xl);">2xl</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Spacing Utilities</h3>
			<p class="body-small mb-md">Margin: <code>mt-lg</code>, <code>mb-xl</code>, <code>ml-md</code>, <code>mr-sm</code></p>
			<p class="body-small mb-md">Padding: <code>pt-lg</code>, <code>pb-xl</code>, <code>px-md</code>, <code>py-lg</code></p>
			<div class="bg-secondary-light px-lg py-md">
				<p class="m-0">This div has <code>px-lg</code> and <code>py-md</code></p>
			</div>
		</div>
	</section>

	<!-- ==================== LAYOUT UTILITIES ==================== -->
	<section class="style-guide-section">
		<h2>Layout Utilities</h2>

		<div class="example-block">
			<h3 class="mb-lg">Flexbox</h3>
			<p class="body-small mb-md">Example: <code>flex items-center justify-between gap-md</code></p>
			<div class="flex items-center justify-between gap-md bg-secondary-light px-lg py-md">
				<div class="bg-white px-md py-sm">Item 1</div>
				<div class="bg-white px-md py-sm">Item 2</div>
				<div class="bg-white px-md py-sm">Item 3</div>
			</div>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Grid</h3>
			<p class="body-small mb-md">Example: <code>grid grid-cols-4 gap-md</code></p>
			<div class="grid grid-cols-4 gap-md">
				<div class="bg-secondary-light px-md py-lg text-center">1</div>
				<div class="bg-secondary-light px-md py-lg text-center">2</div>
				<div class="bg-secondary-light px-md py-lg text-center">3</div>
				<div class="bg-secondary-light px-md py-lg text-center">4</div>
			</div>
			<p class="body-small mt-md text-muted">Note: Grid collapses to single column on mobile</p>
		</div>

		<div class="example-block">
			<h3 class="mb-lg">Container</h3>
			<div class="bg-secondary-light px-md py-md">
				<code>.container</code> - Max-width: 1200px, centered with auto margins
			</div>
		</div>
	</section>

	<!-- ==================== BACKGROUND COLORS ==================== -->
	<section class="style-guide-section">
		<h2>Background Colors</h2>

		<div class="grid grid-cols-3 gap-md">
			<div class="bg-white px-lg py-lg" style="border: 1px solid var(--color-gray-200);">
				<p class="m-0"><code>.bg-white</code></p>
			</div>
			<div class="bg-light px-lg py-lg">
				<p class="m-0"><code>.bg-light</code></p>
			</div>
			<div class="bg-primary px-lg py-lg">
				<p class="m-0 text-white"><code>.bg-primary</code></p>
			</div>
			<div class="bg-secondary px-lg py-lg">
				<p class="m-0"><code>.bg-secondary</code></p>
			</div>
			<div class="bg-secondary-light px-lg py-lg">
				<p class="m-0"><code>.bg-secondary-light</code></p>
			</div>
		</div>
	</section>

	<!-- ==================== IMAGES ==================== -->
	<section class="style-guide-section">
		<h2>Images</h2>

		<div class="example-block">
			<div class="grid grid-cols-3 gap-lg">
				<div>
					<p class="example-label mb-md">Default Image</p>
					<img src="https://via.placeholder.com/300x200/FFCA42/000000?text=Default" alt="Default">
				</div>
				<div>
					<p class="example-label mb-md">.img-rounded</p>
					<img src="https://via.placeholder.com/300x200/B60F1F/FFFFFF?text=Rounded" alt="Rounded" class="img-rounded">
				</div>
				<div>
					<p class="example-label mb-md">.img-circle</p>
					<img src="https://via.placeholder.com/300x300/FFF4D9/000000?text=Circle" alt="Circle" class="img-circle">
				</div>
			</div>
		</div>
	</section>

	<!-- ==================== DIVIDERS ==================== -->
	<section class="style-guide-section">
		<h2>Dividers</h2>

		<div class="example-block">
			<p class="example-label">Default Divider (hr or .divider)</p>
			<hr>
			<p class="example-label mt-lg">.divider-thick</p>
			<div class="divider divider-thick"></div>
		</div>
	</section>

	<!-- ==================== LISTS ==================== -->
	<section class="style-guide-section">
		<h2>Lists</h2>

		<div class="grid grid-cols-3 gap-lg">
			<div class="example-block">
				<h4 class="mb-md">Unordered List</h4>
				<ul>
					<li>List item one</li>
					<li>List item two</li>
					<li>List item three</li>
				</ul>
			</div>

			<div class="example-block">
				<h4 class="mb-md">Ordered List</h4>
				<ol>
					<li>First item</li>
					<li>Second item</li>
					<li>Third item</li>
				</ol>
			</div>

			<div class="example-block">
				<h4 class="mb-md">.list-unstyled</h4>
				<ul class="list-unstyled">
					<li>No bullets</li>
					<li>No padding</li>
					<li>Clean list</li>
				</ul>
			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>
