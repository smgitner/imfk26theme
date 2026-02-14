<?php
/**
 * Template Name: Blog
 * Blog listing template with loop.
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Display breadcrumbs
	imfktheme_breadcrumbs();
	?>

	<header class="page-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header>

	<?php
	// Query for blog posts
	$blog_query = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => 10,
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	if ( $blog_query->have_posts() ) :
		?>
		<div class="blog-list">
			<?php
			while ( $blog_query->have_posts() ) :
				$blog_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item' ); ?>>
					
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="blog-item__thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'large' ); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="blog-item__content">
						<h2 class="blog-item__title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="blog-item__meta">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
								<?php echo esc_html( get_the_date() ); ?>
							</time>
							<?php
							$categories = get_the_category();
							if ( ! empty( $categories ) ) :
								?>
								<span class="blog-item__separator">•</span>
								<span class="blog-item__category">
									<?php echo esc_html( $categories[0]->name ); ?>
								</span>
								<?php
							endif;
							?>
						</div>

						<div class="blog-item__excerpt">
							<?php the_excerpt(); ?>
						</div>

						<a href="<?php the_permalink(); ?>" class="blog-item__link">
							<?php esc_html_e( 'Read More', 'imfktheme' ); ?> &rarr;
						</a>
					</div>

				</article>
				<?php
			endwhile;
			?>
		</div>

		<?php
		// Pagination
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => __( '&larr; Previous', 'imfktheme' ),
			'next_text' => __( 'Next &rarr;', 'imfktheme' ),
		) );

		wp_reset_postdata();
		?>

	<?php else : ?>
		<p><?php esc_html_e( 'No blog posts found.', 'imfktheme' ); ?></p>
	<?php endif; ?>

</main>

<?php
get_footer();
