<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FLAP
 */

get_header();
?>

<div class="post--wrapper">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/NEWS.png" class="post--image__title" alt="">
	<?php if ( has_post_thumbnail() ) { ?>
		<?php the_post_thumbnail('post-thumbnail', array('class' => 'post--photo') ); ?>
		<?php }else{ ?>
		<img class="post--photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/post/thumbnail-news.JPG">
	<?php }?>
	<div class="post--article__title">
		<?php the_title(); ?>
	</div>
	<div class="post--article__date">
		<?php the_time('Y/m/d'); ?>
	</div>
	<div class="post--article__content">
		<?php the_content( $more_link_text, $stripteaser ); ?>
	</div>
	<a href="<?= esc_url(home_url('/flap-news'));?>" ><p class="index--news__link">ニュース一覧に戻る</p></a>
</div>

<?php
get_footer();
