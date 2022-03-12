<?php
/*
Template Name: トップページ
*/
?>
<?php
get_header();
?>

<div class="index--hero" style="font-size:2rem; padding:3% 0;">
	Coming Soon <br>
	Video現在、準備中です。<br>
</div>

<div class="index--aboutus">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-left.JPG" class="index--aboutus--image__left" alt="">
	<div class='index--aboutus--center'>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/ABOUT US.png" class="index--aboutus--image__title" alt="">
		<h1 class="index--aboutus--center__title">わたしたちの理念</h1>
		<p class="index--aboutus--center__description">
			体が不自由な方や長期入院している子どもたちは外出することもままなりません。
			そんな皆が笑顔になったり、毎日のモチベーションになれることを目指します。<br>
			<a href="" class="index--aboutus--center__link">わたしたちについて詳しくはこちら</a>
		</p>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-right.JPG" class="index--aboutus--image__right" alt="">
</div>

<div class="index--service">
	<div class="index--service__wrapper">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/SERVICE.png" class="index--aboutus--image__title" alt="">
		<p>サービス</p>
		<p>
		映像を使ったイベントの提案と<br>
		企画を実行します。様々な病気の症状、<br>
		障がいに合わせて対応します。</p>
	</div>
</div>

<div class="index--news"></div>

<div class="index--video"></div>

<div class="contact-menu"></div>

<?php
get_footer();
