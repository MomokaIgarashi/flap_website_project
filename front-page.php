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
	<div>
		<?php
			$args = array(
				'post_type' => 'flap-news',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
		?>
		<div>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="index--news--article__wrapper">
				<div class="index--news--article--image__wrapper">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'index--news--photo') ); ?>
						<?php }else{ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/post/thumbnail-news.JPG">
						<?php }?>
					<?php endwhile; ?>
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
		</div>
		<?php endif; wp_reset_postdata(); ?>
	</div>
	<a href="" ><p class="index--news__link">ニュース一覧はこちら</p></a>
</div>

<div class="index--video">
	<div class="index--video--post__wrapper">
		<div class="index--video--post__main"></div>
		<div class="index--video--post--sub__wrapper">

		<?php
			$args = array(
				'post_type' => 'flap-video',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
		?>
		<h2>コラム一覧</h2>
		<ul>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
		<?php endif; wp_reset_postdata(); ?>
		
			<div class="index--video--post__sub"></div>
			<div class="index--video--post__sub"></div>
		</div>
	</div>

	<div class="index--video__wrapper">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/VIDEO.png" class="index--video--image__title" alt="">
		<p class="index--video__title">わたしたちが作る映像</p>
		<p class="index--video__description">
		施設や親御さんと話し合い子供たちの症状にあった
		イベントを開催します。主にVRやシュミレーターを使い、体感の高い映像や中継を楽しむことが出来ます。
		お子様が「こんなことをやってみたい」
		と言っていましたら、お気軽にご相談下さい。<br>
		</p>
		<a href="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/video-button.png" class="index--video--image__button" alt="">
		</a>
	</div>
</div>

<div class="contact-menu">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/contact-title.png" class="index--contact--image__title" alt="">
</div>

<?php
get_footer();
