<?php
/*
Template Name: VIDEO一覧ページ
*/
?>
<?php get_header(); ?>

    <div class="flap-video">
        <div class="flap-video--wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/VIDEO.png" class="index--video--image__title" alt="">
            <p class="index--video__title flap--video--title">わたしたちが作る映像</p>

            <div class="flap-video--post__wrapper">
                <?php
                    $args = array(
                        'post_type' => 'flap-video',
                        'posts_per_page' => 5
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
            </div>
        </div>
        <a href="<?= esc_url(home_url('/'));?>" class="flap-video--back">トップページに戻る</a>
    </div>
<?php get_footer(); 
