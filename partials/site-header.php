<?php
/**
 * Site header partial.
 *
 * @package thetcube
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<header class="tcube-header" id="masthead">
	<div class="tcube-header__inner tcube-container">
		<div class="tcube-header__brand">
			<a class="tcube-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img
					class="tcube-logo"
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-the-tech-sang.png' ); ?>"
					alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
					width="200"
					height="106"
				>
			</a>
		</div>

		<nav class="tcube-nav tcube-nav--desktop" aria-label="<?php esc_attr_e( 'Primary Menu', 'thetcube' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'tcube-nav__list',
					'container'      => false,
					'fallback_cb'    => 'thetcube_primary_menu_fallback',
				)
			);
			?>
		</nav>

		<div class="tcube-header__cta">
			<a class="tcube-btn tcube-btn--gradient" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">
				<?php esc_html_e( 'Contact Us', 'thetcube' ); ?>
			</a>
		</div>

		<button
			class="tcube-menu-toggle"
			type="button"
			aria-controls="mobile-menu"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open menu', 'thetcube' ); ?>"
		>
			<span class="tcube-menu-toggle__bar" aria-hidden="true"></span>
			<span class="tcube-menu-toggle__bar" aria-hidden="true"></span>
			<span class="tcube-menu-toggle__bar" aria-hidden="true"></span>
		</button>

		<nav class="tcube-mobile-nav" aria-label="<?php esc_attr_e( 'Mobile Menu', 'thetcube' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'mobile_menu',
					'menu_id'        => 'mobile-menu',
					'menu_class'     => 'tcube-mobile-nav__list',
					'container'      => false,
					'fallback_cb'    => 'thetcube_mobile_menu_fallback',
				)
			);
			?>
		</nav>
	</div>
</header>
<div class="tcube-menu-overlay" hidden></div>
