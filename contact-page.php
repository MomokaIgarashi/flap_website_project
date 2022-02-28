<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<div class="contact-form-wrapper">
	<div class="contact-form__inner">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/contact-title-text.png" class="contact--title__image" alt="">
		<h1 class="contact__main-title">ご相談・お問い合わせ</h1>
		<h3>イベントや映像などについて、何でもお気軽にご相談ください。</h3>
		<p>*入力必須項目</p>

		<?php echo do_shortcode('[mwform_formkey key="58"]'); ?>
    </div>
</div>

<?php get_footer(); 
