<?php
/**
 * Single Post Template
 *
 * Displays individual blog posts with featured image at top
 *
 * @package imfktheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			// Display featured image if it exists
			if ( has_post_thumbnail() ) :
				?>
				<div class="post-featured-image">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
				<?php
			endif;
			?>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<span class="posted-on">
						<?php echo get_the_date(); ?>
					</span>
					<?php
					$categories = get_the_category();
					if ( ! empty( $categories ) ) :
						?>
						<span class="category-links">
							<?php
							foreach ( $categories as $category ) {
								echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
							}
							?>
						</span>
						<?php
					endif;
					?>
				</div>
			</header>

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
		// If comments are open or there is at least one comment, load the comment template
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>
</main>

<?php
get_footer();
