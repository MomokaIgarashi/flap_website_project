<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FLAP
 */

?>

	<!-- <section class="section-contact-footer-wrapper">
		<p>CONTACT US</p>
		<p>お問い合わせはこちらへ</p>
	</section> -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__wrapper">
			<nav id="" class="footer-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer1',
						'menu_id'        => 'footer-menu',
					)
				);
				?>

				<div class="footer2-wrapper">
					<p class="footer2-text">FLAP</p>
					<p class="footer2-text">代表　　森　大樹</p>
					<p class="footer2-text">TEL    080-3098-7009</p>
					<p class="footer2-text">連絡先 mori@flap.tokyo</p>
					<p class="footer2-text">パートナー</p>
					<p><?= get_theme_mod('footer_setting'); ?></p>
				</div>
			</nav>
			<div>
				<nav>JAPANESE | ENGLISH</nav>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/flap-logo.png" class="footer--nav__image" alt="">
			</div>
		</div>

		<div class="site-info">
			@2022 FLAP
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
