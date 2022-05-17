<?php
/*
Template Name: トップページ
*/
?>
<?php
get_header();
?>

<div class="index--hero">
	<div class="video">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/jz8EgRLQ7_U?controls=0&autoplay=1&mute=1&loop=1&playlist=jz8EgRLQ7_U&showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>


<div class="index--aboutus">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-left.JPG" class="index--aboutus--image__left display-pc" alt="">
	<div class='index--aboutus--center'>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/ABOUT US.png" class="index--aboutus--image__title" alt="">
		<h1 class="index--aboutus--center__title">わたしたちの理念</h1>
		<p class="index--aboutus--center__description">
			体が不自由な方や長期入院している子どもたちは外出することもままなりません。
			そんな皆が笑顔になったり、毎日のモチベーションになれることを目指します。<br>
			<a href="" class="index--aboutus--center__link">わたしたちについて詳しくはこちら</a>
		</p>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-right.JPG" class="index--aboutus--image__right display-pc" alt="">
	<div class="index--aboutus--image--sp__wrapper">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-left.JPG" class="index--aboutus--image__left display-sp" alt="">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/about-us-right.JPG" class="index--aboutus--image__right display-sp" alt="">
	</div>
</div>

<div class="index--service">
	<div class="index--service__wrapper display-sp">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/SERVICE.png" class="index--service--image__title" alt="">
		<p class="index--service__title">サービス</p>
		<p class="index--service__description">
		映像を使ったイベントの提案と<br>
		企画を実行します。様々な病気の症状、<br>
		障がいに合わせて対応します。</p>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/service-background.JPG" class="index--service--image__main display-sp" alt="">

	<div class="index--service__wrapper display-pc">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/SERVICE.png" class="index--service--image__title" alt="">
		<p class="index--service__title">サービス</p>
		<p class="index--service__description">
		映像を使ったイベントの提案と<br>
		企画を実行します。様々な病気の症状、<br>
		障がいに合わせて対応します。</p>
	</div>
</div>

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
	<a href="<?= esc_url(home_url('/flap-news'));?>" ><p class="index--news__link">ニュース一覧はこちら</p></a>
</div>

<div class="index--video">
	<div class="index--video__wrapper display-sp">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/VIDEO.png" class="index--video--image__title" alt="">
		<p class="index--video__title">わたしたちが作る映像</p>
		<p class="index--video__description">
		施設や親御さんと話し合い子供たちの症状にあった
		イベントを開催します。主にVRやシュミレーターを使い、体感の高い映像や中継を楽しむことが出来ます。
		お子様が「こんなことをやってみたい」
		と言っていましたら、お気軽にご相談下さい。<br>
		</p>
	</div>

	<div class="index--video--post__wrapper">
		<?php
			$args = array(
				'post_type' => 'flap-video',
				'posts_per_page' => 2
			);
			$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
		?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="index--video--article__wrapper">
				<?php the_content( $more_link_text, $stripteaser ); ?>
			</div>
		<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>

		<a href="<?= esc_url(home_url('/flap-video'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/video-button.png" class="index--video--image__button display-sp" alt="">
		</a>
	</div>

	<div class="index--video__wrapper display-pc">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/VIDEO.png" class="index--video--image__title" alt="">
		<p class="index--video__title">わたしたちが作る映像</p>
		<p class="index--video__description">
		施設や親御さんと話し合い子供たちの症状にあった
		イベントを開催します。主にVRやシュミレーターを使い、体感の高い映像や中継を楽しむことが出来ます。
		お子様が「こんなことをやってみたい」
		と言っていましたら、お気軽にご相談下さい。<br>
		</p>
		<a href="<?= esc_url(home_url('/flap-video'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/video-button.png" class="index--video--image__button display-pc" alt="">
		</a>
	</div>
</div>

<div class="contact-menu">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/contact-title.png" class="index--contact--image__title display-pc" alt="">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/contact-title-sp.png" class="index--contact--image__title display-sp" alt="">
	<div class="contact-menu--index__wrapper">
		<a href="<?= esc_url(home_url('/contact'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/contact-button.png" class="contact-menu__button" alt="">
		</a>
		<p class="contact-menu__address">問い合わせ先  mori@flap.tokyo</p>
	</div>
</div>

<?php
get_footer();
