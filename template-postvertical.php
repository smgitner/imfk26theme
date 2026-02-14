<?php
/**
 * Template Name: Story Vertical Template
 * Template Post Type: page, post
 *
 * Displays long-form story layout with vertical featured image on right, title on left.
 *
 * @package imfktheme
 */


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
