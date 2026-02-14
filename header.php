<?php
/**
 * Theme header template.
 *
 * @package imfktheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,opsz,wght@0,9..18,400;1,9..18,400&family=Sora:wght@400;600;700&display=swap" rel="stylesheet" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="site-header">
	<!-- Banner Bar -->
	<div class="banner-bar">
		<img 
			src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/banner-bg.jpg' ); ?>" 
			alt="" 
			class="banner-bar__bg"
		/>
		<div class="banner-bar__overlay"></div>
		<div class="banner-bar__content">
			<div class="banner-bar__inner">
				<span class="banner-bar__text">Taste what supports our mission</span>
				<div class="banner-bar__divider"></div>
				<a href="<?php echo esc_url( home_url( '/store/' ) ); ?>" class="banner-bar__button">Shop Now</a>
			</div>
		</div>
	</div>

	<!-- Navigation Bar -->
	<div class="site-header__inner">
		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo">
			<img 
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/imfk-logo.svg' ); ?>" 
				alt="<?php bloginfo( 'name' ); ?>" 
				class="site-header__logo-img"
			/>
		</a>

		<!-- ===================== DESKTOP NAV ===================== -->
		<nav id="primary-navigation" class="primary-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'imfktheme' ); ?>">
			<ul class="primary-nav__list">
				<!-- About -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="primary-nav__link primary-nav__link--has-children">About</a>
					<ul class="primary-nav__dropdown">
						<li><a href="<?php echo esc_url( home_url( '/about/our-team/' ) ); ?>" class="primary-nav__dropdown-link">Our Team</a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/public-speaking/' ) ); ?>" class="primary-nav__dropdown-link">Public Speaking</a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/partnerships/' ) ); ?>" class="primary-nav__dropdown-link">Partnerships</a></li>
					</ul>
				</li>
				<li class="primary-nav__divider"></li>
				
				<!-- Services -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="primary-nav__link primary-nav__link--has-children">Services</a>
					<ul class="primary-nav__dropdown">
						<li><a href="<?php echo esc_url( home_url( '/services/hire-ground/' ) ); ?>" class="primary-nav__dropdown-link">Hire Ground</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/womens-outreach/' ) ); ?>" class="primary-nav__dropdown-link">Women's Outreach</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/street-outreach/' ) ); ?>" class="primary-nav__dropdown-link">Street Outreach</a></li>
					</ul>
				</li>
				<li class="primary-nav__divider"></li>
				
				<!-- What's Cooking (Blog) -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="primary-nav__link">What's Cooking</a>
				</li>
				<li class="primary-nav__divider"></li>
				
				<!-- Market (Store) -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/store/' ) ); ?>" class="primary-nav__link">Market</a>
				</li>
				<li class="primary-nav__divider"></li>
				
				<!-- Donate -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="primary-nav__link">Donate</a>
				</li>
				<li class="primary-nav__divider"></li>
				
				<!-- Connect -->
				<li class="primary-nav__item">
					<a href="<?php echo esc_url( home_url( '/connect-with-us/' ) ); ?>" class="primary-nav__link primary-nav__link--has-children">Connect</a>
					<ul class="primary-nav__dropdown">
						<li><a href="<?php echo esc_url( home_url( '/connect-with-us/tiktok/' ) ); ?>" class="primary-nav__dropdown-link">TikTok</a></li>
						<li><a href="<?php echo esc_url( home_url( '/connect-with-us/partnerships/' ) ); ?>" class="primary-nav__dropdown-link">Partnerships</a></li>
					</ul>
				</li>

				<!-- Search Icon -->
				<li class="primary-nav__search">
					<button id="search-toggle" class="primary-nav__search-link" type="button" aria-label="<?php esc_attr_e( 'Toggle search', 'imfktheme' ); ?>" aria-expanded="false">
						<img 
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/search-icon.png' ); ?>" 
							alt="<?php esc_attr_e( 'Search', 'imfktheme' ); ?>" 
							class="primary-nav__search-icon"
						/>
					</button>
				</li>
			</ul>
		</nav>

		<!-- ===================== HAMBURGER BUTTON ===================== -->
		<button
			id="mobile-menu-toggle"
			class="hamburger"
			type="button"
			aria-controls="mobile-menu"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open menu', 'imfktheme' ); ?>"
		>
			<span class="hamburger__lines">
				<span class="hamburger__line"></span>
				<span class="hamburger__line"></span>
				<span class="hamburger__line"></span>
			</span>
		</button>
	</div>
</header>

<!-- ===================== SEARCH FIELD ===================== -->
<div id="search-field" class="search-field">
	<div class="search-field__inner">
		<form role="search" method="get" class="search-field__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input
				type="search"
				class="search-field__input"
				placeholder="<?php esc_attr_e( 'Search...', 'imfktheme' ); ?>"
				value="<?php echo get_search_query(); ?>"
				name="s"
				aria-label="<?php esc_attr_e( 'Search', 'imfktheme' ); ?>"
			/>
			<button type="submit" class="search-field__submit">
				<?php esc_html_e( 'Search', 'imfktheme' ); ?>
			</button>
			<button id="search-close" type="button" class="search-field__close" aria-label="<?php esc_attr_e( 'Close search', 'imfktheme' ); ?>">
				<span class="search-field__close-icon">&times;</span>
			</button>
		</form>
	</div>
</div>

<!-- ===================== MOBILE MENU OVERLAY ===================== -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>

<!-- ===================== MOBILE MENU PANEL ===================== -->
<div id="mobile-menu" class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'imfktheme' ); ?>">
	<div class="mobile-menu__inner">
		<ul class="mobile-nav">

			<!-- About -->
			<li class="mobile-nav__item">
				<div class="mobile-nav__parent">
					<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-nav__link">About</a>
					<button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Expand About submenu', 'imfktheme' ); ?>">
						<span class="mobile-nav__toggle-icon"></span>
					</button>
				</div>
				<ul class="mobile-nav__submenu">
					<li><a href="<?php echo esc_url( home_url( '/about/our-team/' ) ); ?>" class="mobile-nav__submenu-link">Our Team</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/public-speaking/' ) ); ?>" class="mobile-nav__submenu-link">Public Speaking</a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/partnerships/' ) ); ?>" class="mobile-nav__submenu-link">Partnerships</a></li>
				</ul>
			</li>

			<!-- Services -->
			<li class="mobile-nav__item">
				<div class="mobile-nav__parent">
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="mobile-nav__link">Services</a>
					<button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Expand Services submenu', 'imfktheme' ); ?>">
						<span class="mobile-nav__toggle-icon"></span>
					</button>
				</div>
				<ul class="mobile-nav__submenu">
					<li><a href="<?php echo esc_url( home_url( '/services/hire-ground/' ) ); ?>" class="mobile-nav__submenu-link">Hire Ground</a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/womens-outreach/' ) ); ?>" class="mobile-nav__submenu-link">Women's Outreach</a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/street-outreach/' ) ); ?>" class="mobile-nav__submenu-link">Street Outreach</a></li>
				</ul>
			</li>

			<!-- Blog -->
			<li class="mobile-nav__item">
				<div class="mobile-nav__parent">
					<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="mobile-nav__link">Blog</a>
					<button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Expand Blog submenu', 'imfktheme' ); ?>">
						<span class="mobile-nav__toggle-icon"></span>
					</button>
				</div>
				<ul class="mobile-nav__submenu">
					<li><a href="<?php echo esc_url( home_url( '/blog/current-events/' ) ); ?>" class="mobile-nav__submenu-link">Current Events</a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/library/' ) ); ?>" class="mobile-nav__submenu-link">Library</a></li>
				</ul>
			</li>

			<!-- Store -->
			<li class="mobile-nav__item">
				<a href="<?php echo esc_url( home_url( '/store/' ) ); ?>" class="mobile-nav__link">Store</a>
			</li>

			<!-- Donate -->
			<li class="mobile-nav__item">
				<div class="mobile-nav__parent">
					<a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="mobile-nav__link">Donate</a>
					<button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Expand Donate submenu', 'imfktheme' ); ?>">
						<span class="mobile-nav__toggle-icon"></span>
					</button>
				</div>
				<ul class="mobile-nav__submenu">
					<li><a href="<?php echo esc_url( home_url( '/donate/money/' ) ); ?>" class="mobile-nav__submenu-link">Money</a></li>
					<li><a href="<?php echo esc_url( home_url( '/donate/clothing/' ) ); ?>" class="mobile-nav__submenu-link">Clothing</a></li>
					<li><a href="<?php echo esc_url( home_url( '/donate/time/' ) ); ?>" class="mobile-nav__submenu-link">Time</a></li>
				</ul>
			</li>

			<!-- Connect With Us -->
			<li class="mobile-nav__item">
				<div class="mobile-nav__parent">
					<a href="<?php echo esc_url( home_url( '/connect-with-us/' ) ); ?>" class="mobile-nav__link">Connect With Us</a>
					<button class="mobile-nav__toggle" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Expand Connect With Us submenu', 'imfktheme' ); ?>">
						<span class="mobile-nav__toggle-icon"></span>
					</button>
				</div>
				<ul class="mobile-nav__submenu">
					<li><a href="<?php echo esc_url( home_url( '/connect-with-us/tiktok/' ) ); ?>" class="mobile-nav__submenu-link">TikTok</a></li>
					<li><a href="<?php echo esc_url( home_url( '/connect-with-us/partnerships/' ) ); ?>" class="mobile-nav__submenu-link">Partnerships</a></li>
				</ul>
			</li>

			<!-- Search -->
			<li class="mobile-nav__item">
				<button id="mobile-search-toggle" class="mobile-nav__link mobile-nav__link--search" type="button">Search</button>
			</li>

		</ul>
	</div>
</div>

<div id="page-content">
