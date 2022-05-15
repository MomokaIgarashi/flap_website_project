<?php
/*
Template Name: NEWS一覧ページ
*/
?>
<?php get_header(); ?>

    <div class="index--news">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/NEWS.png" class="index--news--image__title" alt="">
	<p class="index--news__title">ニュース</p>
	<div class="index--news__wrapper">
		<?php
			$args = array(
				'post_type' => 'flap-news',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
		?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="index--news--article__wrapper">
			<div class="index--news--article--image__wrapper">
				<?php if ( has_post_thumbnail() ) { ?>
					<?php the_post_thumbnail('post-thumbnail', array('class' => 'index--news--photo') ); ?>
					<?php }else{ ?>
					<img class="index--news--photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/post/thumbnail-news.JPG">
					<?php }?>
			</div>
			<div class="index--news--article--text__wrapper">
				<a href="<?php echo get_permalink(); ?>">
					<div class="index--news--article--text__title">
						<?php the_title(); ?><br>
					</div>
					<div class="index--news--article--text__content">
						<?php echo wp_trim_words(get_the_content(), 60, '…もっとみる' );?><br>
					</div>
					<?php the_time('Y/m/d'); ?>
				</a>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
	<a href="<?= esc_url(home_url('/flap-news'));?>" ><p class="index--news__link">ニュース一覧はこちら</p></a>
</div>

<?php get_footer(); 
