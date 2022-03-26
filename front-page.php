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

		<a href="">
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
		<a href="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/video-button.png" class="index--video--image__button display-pc" alt="">
		</a>
	</div>
</div>

<div class="contact-menu">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/contact-title.png" class="index--contact--image__title" alt="">
	<div class="contact-menu--index__wrapper">
		<a href="">
			<button class="contact-menu__button">
					<svg class="contact-menu__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M448 64H64C28.65 64 0 92.65 0 128v256c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V128C512 92.65 483.3 64 448 64zM64 112h384c8.822 0 16 7.178 16 16v22.16l-166.8 138.1c-23.19 19.28-59.34 19.27-82.47 .0156L48 150.2V128C48 119.2 55.18 112 64 112zM448 400H64c-8.822 0-16-7.178-16-16V212.7l136.1 113.4C204.3 342.8 229.8 352 256 352s51.75-9.188 71.97-25.98L464 212.7V384C464 392.8 456.8 400 448 400z"/></svg>
					<p class="contact-menu__button__text">お問い合わせフォーム</p>
			</button>
		</a>
		<p class="contact-menu__address">問い合わせ先  mori@flap.tokyo</p>
	</div>
</div>

<?php
get_footer();
