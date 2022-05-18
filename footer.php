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
					<p class="footer2-text--sub">代表　　森　大樹</p>
					<p class="footer2-text--sub">TEL    080-3098-7009</p>
					<p class="footer2-text--sub">連絡先 mori@flap.tokyo</p>
					<p class="footer2-text--partner">パートナー</p>
					<a href="https://www.aims-jp.net" target="_blank"><p class="footer2-partner">エイムス株式会社</p></a>
					<a href="https://www.agreenheart.jp/" target="_blank"><p class="footer2-partner">株式会社アグリーンハート</p></a>
					<a href="https://www.studio-net.co.jp/lab/" target="_blank"><p class="footer2-partner">株式会社スタジオエル</p></a>
					<a href="https://flaptokyo.buyshop.jp/" target="_blank"><p class="footer2-partner">生粋の麦人</p></a>
					<!-- <p><?= get_theme_mod('footer_setting'); ?></p> -->
				</div>
			</nav>
			<div class="footer3-wrapper">
				<nav class="footer-language">JAPANESE | ENGLISH</nav>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav/flap-logo.png" class="footer--nav__image" alt="">
			</div>
		</div>

		<div class="site-info">
			©️ 2022 FLAP
		</div>
	</footer>
</div>

<?php wp_footer(); ?>


</body>
</html>
