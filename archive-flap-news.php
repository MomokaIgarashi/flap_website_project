<?php
/*
Template Name: NEWS一覧ページ
*/
?>
<?php get_header(); ?>
    <div class="index--news flap-news--wrapper">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/NEWS.png" class="flap-news--image__title" alt="">
	<p class="index--news__title flap-news--title">ニュースやお知らせはこちら</p>
		<div class="flap-news--inner">
			<?php
				$args = array(
					'post_type' => 'flap-news',
					'posts_per_page' => 18
				);
				$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
			?>
			<div class="flap-article--wrapper">
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
							<p class="index--news--article--text__title">
								<?php the_title(); ?><br>
							</p>
							<p class="index--news--article--text__content">
								<?php echo wp_trim_words(get_the_content(), 60, '…もっとみる' );?><br>
							</p>
							<?php the_time('Y/m/d'); ?>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="pagenation-wrapper">

		</div>
	<a href="<?= esc_url(home_url('/'));?>" ><p class="index--news__link">トップページへ戻る</p></a>
</div>

<?php get_footer(); 
