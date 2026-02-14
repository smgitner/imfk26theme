<?php
/**
 * Template Name: Donate
 * Basic PHP loop template for donation options/campaigns.
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
		<?php
		// Optional intro text from page content
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				if ( get_the_content() ) :
					?>
					<div class="page-intro">
						<?php the_content(); ?>
					</div>
					<?php
				endif;
			endwhile;
		endif;
		?>
	</header>

	<?php
	// Query for donation campaigns (adjust post type and args as needed)
	$donations_query = new WP_Query( array(
		'post_type'      => 'post', // Change to 'donation' or 'campaign' if you have a custom post type
		'posts_per_page' => 9,
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	if ( $donations_query->have_posts() ) :
		?>
		<div class="donations-grid">
			<?php
			while ( $donations_query->have_posts() ) :
				$donations_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'donation-card' ); ?>>
					
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="donation-card__image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium' ); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="donation-card__content">
						<h2 class="donation-card__title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="donation-card__excerpt">
							<?php the_excerpt(); ?>
						</div>

						<a href="<?php the_permalink(); ?>" class="donation-card__button">
							<?php esc_html_e( 'Donate Now', 'imfktheme' ); ?>
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
		<p><?php esc_html_e( 'No donation campaigns found.', 'imfktheme' ); ?></p>
	<?php endif; ?>

</main>

<?php
get_footer();
