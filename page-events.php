<?php
/**
 * Template Name: Events
 * Basic PHP loop template for events listing.
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
	// Query for events (adjust post type and args as needed)
	$events_query = new WP_Query( array(
		'post_type'      => 'post', // Change to 'event' if you have a custom post type
		'posts_per_page' => 10,
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	if ( $events_query->have_posts() ) :
		?>
		<div class="events-list">
			<?php
			while ( $events_query->have_posts() ) :
				$events_query->the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'event-item' ); ?>>
					
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="event-item__thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'medium' ); ?>
							</a>
						</div>
					<?php endif; ?>

					<div class="event-item__content">
						<h2 class="event-item__title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="event-item__meta">
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
								<?php echo esc_html( get_the_date() ); ?>
							</time>
						</div>

						<div class="event-item__excerpt">
							<?php the_excerpt(); ?>
						</div>

						<a href="<?php the_permalink(); ?>" class="event-item__link">
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
		<p><?php esc_html_e( 'No events found.', 'imfktheme' ); ?></p>
	<?php endif; ?>

</main>

<?php
get_footer();
