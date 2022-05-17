<?php
/*
Template Name: About US
*/
?>
<?php get_header(); ?>

<div class="aboutus-page">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/ABOUT US.png" class="index--aboutus--image__title" alt="">

    <div class="aboutus-page__section">
        <h2 class="aboutus--page--text__title">わたしたちの理念</h2>
        <p class="aboutus--page--text__description">
            体が不自由な方や長期入院している子どもたちは外出することもままなりません。
            そんな皆が笑顔になったり、毎日のモチベーションになれることを目指します。<br>
        </p>
    </div>

    <div class="aboutus-page__section">
        <h2 class="aboutus--page--text__title">代表の声：  森   大樹</h2>
        <p class="aboutus--page--text__description">
            4歳の娘が手に怪我をして、付き添いで一週間の短期入院を経験しました。院内にある玩具やiPadで遊びながら3日が過ぎた頃、
            娘は朝から退屈そうな表情を浮かべていました。ベッドの上と病棟内の空間だけでは退屈だったんだと思います。<br>
            <br>
            でもこの日の夜は、病院でクリスマスコンサートがありました。娘はイベントという非日常の空間に目をキラキラさせ、皆さんと一緒に楽しむことが出来ました。娘の笑顔を見て、私も笑顔で
            残りの入院生活を送る事が出来、とてもありがたいイベントでした。
        </p>
    </div>

    <a href="<?= esc_url(home_url('/'));?>" ><p class="index--news__link">トップページへ戻る</p></a>
</div>
<?php get_footer(); 