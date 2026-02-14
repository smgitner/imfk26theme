<?php
/**
 * Template Name: Street Outreach
 * Gutenberg-based template for the Street Outreach page.
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

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
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
			</div><!-- .entry-content -->

		</article>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();
