
<?php 
/*
Template Name: Отзыв
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/page-head');?>

<section class="all_page_content_section pad_50">
    <div class="_container">
        <div class="rev_blk shadow pad_50_40 d_flex f_col brad_12 border_lg  pos_rel swiper-slide">
            <img src="<?php echo get_template_directory_uri();?>/img/icons/rew_logo.svg" class="rew_stiker pos_abs">
            <h3><? echo carbon_get_the_post_meta( 'reviews_name' )?></h3>
            <p class="data m_t_22 dgray_color"> Отзыв от: <? the_date("d.m.Y");?></p>
            <p class="quote m_t_22">
                <? the_content(); ?>
            </p>
            
        </div>
    </div>
</section>

<?php get_template_part('template-parts/questions-in-main');?>

<?php get_footer(); ?>