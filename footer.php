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

		<nav id="" class="footer-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer1',
					'menu_id'        => 'footer-menu',
				)
			);
			?>

			<!-- <div class="footer2-wrapper">
				<p>FLAP</p>
				<p>代表　　森　大樹</p>
				<p>TEL    080-3098-7009</p>
				<p>連絡先　yamada-tarou@gmail.com</p>
				<a>パートナー    <img src="" alt=""></a>
			</div> -->
		</nav>

		<div class="site-info">
			@2022 FLAP
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
