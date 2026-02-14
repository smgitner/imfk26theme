<?php
/**
 * Theme footer template.
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</div><!-- #page-content -->

<style>
  .footer-link {
    font-family: 'Sora', sans-serif !important;
    font-size: 20px !important;
    font-weight: 400 !important;
  }
  .footer-link:hover { color: #FFCA42 !important; }
  .footer-heading {
    display: block;
    font-family: 'Sora', sans-serif !important;
    font-size: 20px !important;
    font-weight: 600 !important;
    color: #fff !important;
    cursor: pointer;
    transition: color 0.2s;
    margin: 0 0 12px 0 !important;
  }
  .footer-heading:hover { color: #FFCA42 !important; }
  .footer-subscribe:hover { background-color: #fff; }
  .social-icon:hover { transform: scale(1.1); opacity: 0.8; }
</style>

<!-- Footer -->
<footer style="width: 100%; max-width: 1220px; position: relative; height: 434px; margin: 0 auto;">

  <!-- Newsletter Bar -->
  <div style="background-color: #666; height: 107px; display: flex; align-items: center; padding-left: 26px; padding-right: 26px; gap: 10px;">
    <div style="flex-shrink: 0; padding: 10px;">
      <p style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.25rem; color: #fff; line-height: normal;">
        Join our<br />newsletter
      </p>
    </div>

    <!-- Constant Contact Signup Form -->
    <div style="display: flex; align-items: center; gap: 15px; flex: 1;">
      <p style="color: white; font-size: 14px; padding: 10px;">Newsletter signup form - please complete Constant Contact setup in WordPress admin.</p>
      <?php
      // Uncomment this line after setting up Constant Contact:
      // echo do_shortcode( '[ctct form="2960" show_title="false"]' );
      ?>
    </div>
  </div>

  <!-- Main Footer -->
  <div style="background-color: #223267; height: 327px; position: relative;">

    <!-- Footer Logo: flame + In My + Father's + Kitchen -->
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/footer-logo.svg' ); ?>" alt="" style="position: absolute; left: 61px; top: 122px; width: 60px; height: 57px;" />
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-in-my.svg' ); ?>" alt="" style="position: absolute; left: 61px; top: 185px; width: 80px; height: 31px;" />
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-fathers-new.svg' ); ?>" alt="" style="position: absolute; left: 61px; top: 216px; width: 116px; height: 25px;" />
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-kitchen.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="position: absolute; left: 61px; top: 247px; width: 119px; height: 25px;" />

    <!-- Footer Link Columns -->
    <div style="position: absolute; left: 520px; top: 30px; font-family: 'Sora', sans-serif; font-size: 1.25rem; color: #fff;">
      <p class="footer-heading">support us</p>
      <a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">donate</a>
      <a href="<?php echo esc_url( home_url( '/store/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">shop</a>
      <a href="<?php echo esc_url( home_url( '/events/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">events</a>
    </div>

    <div style="position: absolute; left: 742px; top: 30px; font-family: 'Sora', sans-serif; font-size: 1.25rem; color: #fff;">
      <p class="footer-heading">know us</p>
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">our mission</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">services</a>
      <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">news &amp; events</a>
    </div>

    <div style="position: absolute; left: 963px; top: 30px; font-family: 'Sora', sans-serif; font-size: 1.25rem; color: #fff;">
      <p class="footer-heading">connect with us</p>
      <a href="<?php echo esc_url( home_url( '/connect-with-us/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">contact</a>
      <a href="<?php echo esc_url( home_url( '/connect-with-us/partnerships/' ) ); ?>" class="footer-link" style="display: block; margin-top: 12px; color: #fff; text-decoration: none; transition: color 0.2s;">collaborate</a>
    </div>

    <!-- Social Media Icons -->
    <div style="position: absolute; bottom: 50px; right: 40px;">
      <img
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/social-media.svg' ); ?>"
        alt="Facebook, Instagram, X, YouTube"
        style="height: 38px; width: auto;"
      />
    </div>

  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
