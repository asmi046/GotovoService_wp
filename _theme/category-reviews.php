
<?php get_header(); ?>

<?php get_template_part('template-parts/page-head');?>

<section class="all_page_content_section pad_50 text_blk">
    <div class="_container">
        <div class="reviews_in_page d_flex f_wrap">

            <?php 
                    if( (have_posts() ) )
                    while (have_posts() ){
                        the_post();
                        get_template_part('template-parts/reviews-card');
                        wp_reset_postdata();
                    }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>