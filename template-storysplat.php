<?php
/**
 * Template Name: Storysplat
 * Template Post Type: page, post
 *
 * Displays long-form story layout with vertical featured image on right, title on left.
 *
 * @package imfktheme
 */

// Force StorySplat viewer scripts to load on this template
add_filter( 'storysplat_should_enqueue', '__return_true' );

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Display breadcrumbs
	imfktheme_breadcrumbs();

	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-vertical-layout' ); ?>>

			<div class="post-vertical-header">
				<div class="post-vertical-header__content">
					<header class="entry-header">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) :
							?>
							<div class="entry-category">
								<?php
								foreach ( $categories as $category ) {
									echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
								}
								?>
							</div>
							<?php
						endif;
						?>

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="entry-meta">
							<span class="posted-on">
								<?php echo get_the_date(); ?>
							</span>
						</div>
					</header>
				</div>

				<?php
				// Display featured image if it exists
				if ( has_post_thumbnail() ) :
					?>
					<div class="post-vertical-header__image">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
					<?php
				endif;
				?>
			</div>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'imfktheme' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

			<?php
			// Check if StorySplat plugin is active
			if ( ! class_exists( 'StorySplat_Viewer' ) ) :
				?>
				<div class="storysplat-embed" style="padding: 20px; background: #f8d7da; border: 2px solid #f5c6cb; margin: 2rem 0; color: #721c24;">
					<p><strong>StorySplat Plugin Not Active</strong></p>
					<p>The StorySplat Viewer plugin needs to be activated:</p>
					<ol>
						<li>Go to WordPress Admin → Plugins</li>
						<li>Find "StorySplat Viewer" in the list</li>
						<li>Click "Activate"</li>
						<li>Refresh this page</li>
					</ol>
				</div>
				<?php
			else :
				// Storysplat Scene Embed
				$scene_id = get_field( 'storysplat_scene_id' );

				if ( $scene_id ) :
					// Build shortcode with all ACF field values
					$height   = get_field( 'storysplat_height' ) ?: '600px';
					$autoplay = get_field( 'storysplat_autoplay' ) ? 'true' : 'false';
					$showui   = get_field( 'storysplat_showui' ) ? 'true' : 'false';
					$lazyload = get_field( 'storysplat_lazyload' ) ? 'true' : 'false';
					$class    = get_field( 'storysplat_class' );

					// Build the shortcode string
					$shortcode = '[storysplat scene="' . esc_attr( $scene_id ) . '"';
					$shortcode .= ' height="' . esc_attr( $height ) . '"';
					$shortcode .= ' autoplay="' . $autoplay . '"';
					$shortcode .= ' showui="' . $showui . '"';
					$shortcode .= ' lazyload="' . $lazyload . '"';
					if ( $class ) {
						$shortcode .= ' class="' . esc_attr( $class ) . '"';
					}
					$shortcode .= ']';
					?>
					<div class="storysplat-embed">
						<?php
						// Debug: Show the shortcode being generated
						echo '<!-- Storysplat Shortcode: ' . esc_html( $shortcode ) . ' -->';
						echo do_shortcode( $shortcode );
						?>
					</div>
					<?php
				else :
					// Debug: Show why Storysplat isn't appearing
					?>
					<div class="storysplat-embed" style="padding: 20px; background: #f0f0f0; border: 2px dashed #ccc; margin: 2rem 0;">
						<p><strong>Storysplat Scene Not Configured</strong></p>
						<p>To display a Storysplat 3D scene:</p>
						<ol>
							<li>Edit this page in WordPress admin</li>
							<li>Scroll down to find "Storysplat Settings" section</li>
							<li>Enter your Scene ID (required)</li>
							<li>Configure optional settings (height, autoplay, etc.)</li>
							<li>Update the page</li>
						</ol>
						<p><em>Debug: ACF Field 'storysplat_scene_id' = <?php echo var_export( $scene_id, true ); ?></em></p>
					</div>
					<?php
				endif;
			endif;
			?>

			<footer class="entry-footer">
				<?php
				$tags = get_the_tags();
				if ( $tags ) :
					?>
					<div class="tags-links">
						<span class="tags-label"><?php esc_html_e( 'Tags:', 'imfktheme' ); ?></span>
						<?php
						foreach ( $tags as $tag ) {
							echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a> ';
						}
						?>
					</div>
					<?php
				endif;
				?>
			</footer>

		</article>

		<?php
		// Post navigation (Previous/Next)
		$prev_post = get_previous_post();
		$next_post = get_next_post();

		if ( $prev_post || $next_post ) :
			?>
			<nav class="post-navigation" aria-label="Post navigation">
				<div class="post-navigation__links">
					<?php if ( $prev_post ) : ?>
						<div class="post-navigation__prev">
							<a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" rel="prev">
								<span class="post-navigation__label">← Previous</span>
								<span class="post-navigation__title"><?php echo esc_html( get_the_title( $prev_post ) ); ?></span>
							</a>
						</div>
					<?php endif; ?>

					<?php if ( $next_post ) : ?>
						<div class="post-navigation__next">
							<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" rel="next">
								<span class="post-navigation__label">Next →</span>
								<span class="post-navigation__title"><?php echo esc_html( get_the_title( $next_post ) ); ?></span>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</nav>
			<?php
		endif;

		// If comments are open or there is at least one comment, load the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>
</main>

<?php
get_footer();
