<?php
/**
 * Theme setup and asset loading.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'thetcube_setup' ) ) {
	/**
	 * Configure theme supports and menus.
	 */
	function thetcube_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

			register_nav_menus(
				array(
					'primary'     => __( 'Primary Menu', 'thetcube' ),
					'mobile_menu' => __( 'Mobile Menu', 'thetcube' ),
					'footer_menu' => __( 'Footer Menu', 'thetcube' ),
				)
			);
		}
}
add_action( 'after_setup_theme', 'thetcube_setup' );

if ( ! function_exists( 'thetcube_enqueue_assets' ) ) {
	/**
	 * Enqueue common and page-level styles/scripts.
	 */
	function thetcube_enqueue_assets() {
		$theme_dir = get_template_directory();
		$theme_uri = get_template_directory_uri();

		wp_enqueue_style(
			'thetcube-google-fonts',
			'https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'thetcube-style',
			get_stylesheet_uri(),
			array( 'thetcube-google-fonts' ),
			filemtime( $theme_dir . '/style.css' )
		);

		wp_enqueue_script(
			'thetcube-theme',
			$theme_uri . '/assets/js/theme.js',
			array(),
			filemtime( $theme_dir . '/assets/js/theme.js' ),
			true
		);

		if ( is_front_page() || is_home() || is_page_template( 'home.php' ) ) {
			wp_enqueue_style(
				'thetcube-home',
				$theme_uri . '/assets/css/home.css',
				array( 'thetcube-style' ),
				filemtime( $theme_dir . '/assets/css/home.css' )
			);
		}

		if ( is_page() ) {
			$page_id          = get_queried_object_id();
			$page_slug        = get_post_field( 'post_name', $page_id );
			$loaded_css_files = array();

			if ( ! empty( $page_slug ) ) {
				$css_file = '/assets/css/page-' . $page_slug . '.css';

				if ( file_exists( $theme_dir . $css_file ) ) {
					wp_enqueue_style(
						'thetcube-page-' . $page_slug,
						$theme_uri . $css_file,
						array( 'thetcube-style' ),
						filemtime( $theme_dir . $css_file )
					);

					$loaded_css_files[] = $css_file;
				}
			}

			$template_slug = get_page_template_slug( $page_id );
			$template_css  = array(
				'page-for-organizations.php' => '/assets/css/page-for-organizations.css',
				'page-for-working-professionals.php' => '/assets/css/page-for-working-professionals.css',
			);

			if ( ! empty( $template_slug ) && isset( $template_css[ $template_slug ] ) ) {
				$template_css_file = $template_css[ $template_slug ];

				if ( ! in_array( $template_css_file, $loaded_css_files, true ) && file_exists( $theme_dir . $template_css_file ) ) {
					wp_enqueue_style(
						'thetcube-template-' . sanitize_key( str_replace( '.php', '', $template_slug ) ),
						$theme_uri . $template_css_file,
						array( 'thetcube-style' ),
						filemtime( $theme_dir . $template_css_file )
					);
				}
			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'thetcube_enqueue_assets' );

if ( ! function_exists( 'thetcube_primary_menu_fallback' ) ) {
	/**
	 * Fallback menu when no primary menu is assigned.
	 */
	function thetcube_primary_menu_fallback( $args = array() ) {
		$fallback_items = array(
			array(
				'label' => __( 'Home', 'thetcube' ),
				'url'   => home_url( '/' ),
			),
			array(
				'label' => __( 'About Us', 'thetcube' ),
				'url'   => home_url( '/about-us/' ),
			),
			array(
				'label' => __( 'Services', 'thetcube' ),
				'url'   => home_url( '/services/' ),
			),
			array(
				'label' => __( 'For Organizations', 'thetcube' ),
				'url'   => home_url( '/for-organizations/' ),
			),
			array(
				'label' => __( 'For Working Professionals', 'thetcube' ),
				'url'   => home_url( '/for-working-professionals/' ),
			),
			array(
				'label' => __( 'Contact Us', 'thetcube' ),
				'url'   => home_url( '/contact-us/' ),
			),
		);

		$menu_id    = 'primary-menu';
		$menu_class = 'tcube-nav__list';

		if ( is_object( $args ) ) {
			if ( ! empty( $args->menu_id ) ) {
				$menu_id = $args->menu_id;
			}

			if ( ! empty( $args->menu_class ) ) {
				$menu_class = $args->menu_class;
			}
		}

		printf(
			'<ul id="%1$s" class="%2$s">',
			esc_attr( $menu_id ),
			esc_attr( $menu_class )
		);

		foreach ( $fallback_items as $item ) {
			printf(
				'<li class="menu-item"><a class="tcube-nav__link" href="%1$s">%2$s</a></li>',
				esc_url( $item['url'] ),
				esc_html( $item['label'] )
			);
		}

		echo '</ul>';
	}
}

if ( ! function_exists( 'thetcube_footer_menu_fallback' ) ) {
	/**
	 * Fallback menu when no footer menu is assigned.
	 */
	function thetcube_footer_menu_fallback() {
		$fallback_items = array(
			array(
				'label' => __( 'Home', 'thetcube' ),
				'url'   => home_url( '/' ),
			),
			array(
				'label' => __( 'About Us', 'thetcube' ),
				'url'   => home_url( '/about-us/' ),
			),
			array(
				'label' => __( 'Why Tech Sang?', 'thetcube' ),
				'url'   => home_url( '/why-tech-sang/' ),
			),
			array(
				'label' => __( 'Contact', 'thetcube' ),
				'url'   => home_url( '/contact-us/' ),
			),
		);

		echo '<ul id="footer-menu" class="tcube-footer__list">';

		foreach ( $fallback_items as $item ) {
			printf(
				'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
				esc_url( $item['url'] ),
				esc_html( $item['label'] )
			);
		}

		echo '</ul>';
		}
	}

if ( ! function_exists( 'thetcube_mobile_menu_fallback' ) ) {
	/**
	 * Fallback menu when no mobile menu is assigned.
	 */
	function thetcube_mobile_menu_fallback() {
		$fallback_items = array(
			array(
				'label' => __( 'Home', 'thetcube' ),
				'url'   => home_url( '/' ),
			),
			array(
				'label' => __( 'About Us', 'thetcube' ),
				'url'   => home_url( '/about-us/' ),
			),
			array(
				'label' => __( 'For Organizations', 'thetcube' ),
				'url'   => home_url( '/for-organizations/' ),
			),
			array(
				'label' => __( 'For Working Professionals', 'thetcube' ),
				'url'   => home_url( '/for-working-professionals/' ),
			),
			array(
				'label' => __( 'Contact Us', 'thetcube' ),
				'url'   => home_url( '/contact-us/' ),
			),
		);

		echo '<ul id="mobile-menu" class="tcube-mobile-nav__list">';

		foreach ( $fallback_items as $item ) {
			printf(
				'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
				esc_url( $item['url'] ),
				esc_html( $item['label'] )
			);
		}

		echo '</ul>';
	}
}
