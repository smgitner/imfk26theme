<?php
/**
 * Search Results Template
 *
 * Displays search results in a clean list format.
 *
 * @package imfktheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Display breadcrumbs
	imfktheme_breadcrumbs();
	?>

	<div class="search-results">
		<header class="search-header">
			<h1 class="search-title">
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search Results for: %s', 'imfktheme' ),
					'<span class="search-query">' . get_search_query() . '</span>'
				);
				?>
			</h1>
			<?php
			global $wp_query;
			if ( $wp_query->found_posts ) :
				?>
				<p class="search-results-count">
					<?php
					printf(
						/* translators: %s: number of results */
						esc_html( _n( '%s result found', '%s results found', $wp_query->found_posts, 'imfktheme' ) ),
						'<strong>' . number_format_i18n( $wp_query->found_posts ) . '</strong>'
					);
					?>
				</p>
				<?php
			endif;
			?>
		</header>

		<?php if ( have_posts() ) : ?>

			<div class="search-results-list">
				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'search-result-item' ); ?>>

						<?php if ( has_post_thumbnail() ) : ?>
							<div class="search-result-thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium' ); ?>
								</a>
							</div>
						<?php endif; ?>

						<div class="search-result-content">
							<header class="search-result-header">
								<?php
								// Show post type
								$post_type = get_post_type();
								$post_type_obj = get_post_type_object( $post_type );
								if ( $post_type_obj ) :
									?>
									<span class="search-result-type"><?php echo esc_html( $post_type_obj->labels->singular_name ); ?></span>
									<?php
								endif;

								// Show categories for posts
								if ( 'post' === $post_type ) :
									$categories = get_the_category();
									if ( ! empty( $categories ) ) :
										?>
										<span class="search-result-categories">
											<?php
											foreach ( $categories as $category ) {
												echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
											}
											?>
										</span>
										<?php
									endif;
								endif;
								?>

								<?php the_title( '<h2 class="search-result-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

								<div class="search-result-meta">
									<span class="posted-on">
										<?php echo get_the_date(); ?>
									</span>
								</div>
							</header>

							<div class="search-result-excerpt">
								<?php the_excerpt(); ?>
							</div>

							<a href="<?php the_permalink(); ?>" class="search-result-link">
								<?php esc_html_e( 'Read more', 'imfktheme' ); ?> →
							</a>
						</div>

					</article>

					<?php
				endwhile;
				?>
			</div>

			<?php
			// Pagination
			the_posts_pagination(
				array(
					'mid_size'  => 2,
					'prev_text' => __( '← Previous', 'imfktheme' ),
					'next_text' => __( 'Next →', 'imfktheme' ),
				)
			);
			?>

		<?php else : ?>

			<div class="no-results">
				<h2><?php esc_html_e( 'Nothing Found', 'imfktheme' ); ?></h2>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'imfktheme' ); ?></p>

				<div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
			</div>

		<?php endif; ?>

	</div>

</main>

<?php
get_footer();
