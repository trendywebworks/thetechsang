</main>

<footer class="tcube-footer" id="colophon">
	<div class="tcube-container">
		<div class="tcube-footer__top">
			<div class="tcube-footer__brand">
				<a class="tcube-footer__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img
						class="tcube-footer__logo"
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tech-sang-footer-logo.png' ); ?>"
						alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
						width="200"
						height="95"
						loading="lazy"
					>
				</a>

				<ul class="tcube-footer__social" aria-label="<?php esc_attr_e( 'Social links', 'thetcube' ); ?>">
					<li>
						<a href="https://www.linkedin.com/company/the-tech-sang" target="_blank" rel="noopener noreferrer nofollow" aria-label="<?php esc_attr_e( 'LinkedIn', 'thetcube' ); ?>">
							<svg viewBox="0 0 448 512" aria-hidden="true" focusable="false">
								<path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
							</svg>
						</a>
					</li>					
				</ul>
			</div>

			<div class="tcube-footer__links">
				<div class="tcube-footer__column">
					<h2 class="tcube-footer__title"><?php esc_html_e( 'Company', 'thetcube' ); ?></h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'tcube-footer__list',
							'container'      => false,
							'fallback_cb'    => 'thetcube_primary_menu_fallback',
						)
					);
					?>
				</div>

				<div class="tcube-footer__column tcube-footer__column--empty" aria-hidden="true"></div>
			</div>
		</div>

		<div class="tcube-footer__bottom">
			<p>
				<?php
				printf(
					esc_html__( '© %1$s | All Rights Reserved. Tech Sang', 'thetcube' ),
					esc_html( wp_date( 'Y' ) )
				);
				?>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
