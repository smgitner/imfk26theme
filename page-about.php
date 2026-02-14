<?php
/**
 * Template Name: About Page
 * Template for the About page with Mission, Values, and History sections.
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

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content">

			<?php
			// Our Mission
			$mission = get_field( 'our_mission' );
			if ( $mission ) :
				?>
				<section class="about-section about-section--mission">
					<h2>Our Mission</h2>
					<div class="about-section__content">
						<?php echo wp_kses_post( $mission ); ?>
					</div>
				</section>
				<?php
			endif;

			// Our Values
			$values = get_field( 'our_values' );
			if ( $values ) :
				?>
				<section class="about-section about-section--values">
					<h2>Our Values</h2>
					<div class="about-section__content">
						<?php echo wp_kses_post( $values ); ?>
					</div>
				</section>
				<?php
			endif;

			// Our History
			$history = get_field( 'our_history' );
			if ( $history ) :
				?>
				<section class="about-section about-section--history">
					<h2>Our History</h2>
					<div class="about-section__content">
						<?php echo wp_kses_post( $history ); ?>
					</div>
				</section>
				<?php
			endif;
			?>

		</div><!-- .entry-content -->

	</article>
</main>

<?php
get_footer();
