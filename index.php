<?php
/**
 * Main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package imfktheme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	else :
		?>
		<p><?php esc_html_e( 'No content found.', 'imfktheme' ); ?></p>
		<?php
	endif;
	?>
</main>

<?php
get_footer();
