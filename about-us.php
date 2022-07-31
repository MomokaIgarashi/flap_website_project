<?php
/*
Template Name: About US
*/
?>
<?php get_header(); ?>

<div class="aboutus-page">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/ABOUT US.png" class="aboutus-page--image__title" alt="">

    <div class="aboutus-page__section">
        <div class="aboutus--page--text__wrapper">
            <h2 class="aboutus--page--text__title">わたしたちの理念</h2>
            <p class="aboutus--page--text__description">
                体が不自由な方や長期入院している子どもたちは外出することもままなりません。
                そんな皆が笑顔になったり、毎日のモチベーションになれることを目指します。<br>
            </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/first.png" class="aboutus-page--image__first" alt="">
    </div>

    <div class="aboutus-page__section">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/second.png" class="aboutus-page--image__second display-pc" alt="">
        <div class="aboutus--page--text__wrapper">
            <h2 class="aboutus--page--text__title">代表の声：  森   大樹</h2>
            <p class="aboutus--page--text__description">
            入院中の子供たちは遊びや外出に制限があります。<br>
            そんな子供たちを対象に、施設や病院内でやれるシミュレーションやVR、
            プロジェクターを使っ亜そびを定期的に届けることが目的です。
            子供たちが笑顔になって、家族もリラックスして入院生活が送れるようになって欲しい。
            笑顔いっぱいのイベントを届けます。
            </p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/second.png" class="aboutus-page--image__second display-sp" alt="">
    </div>

    <a href="<?= esc_url(home_url('/'));?>" ><p class="aboutus--page__link">トップページへ戻る</p></a>
</div>
<?php get_footer(); 