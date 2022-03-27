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
	<?php if ( has_post_thumbnail() ) { ?>
		<?php the_post_thumbnail('post-thumbnail', array('class' => 'post--photo') ); ?>
		<?php }else{ ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/thumbnail-news.JPG">
	<?php }?>
	<div class="index--news--article--text__title">
		<?php the_title(); ?><?php the_time('Y/m/d'); ?>
	</div>
	<div class="index--news--article--text__content">
		<?php the_content( $more_link_text, $stripteaser ); ?>
	</div>

	<button>トップページに戻る</button>
</div>

<?php
get_footer();
