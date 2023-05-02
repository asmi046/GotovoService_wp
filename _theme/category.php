<?php get_header(); ?>

<?php get_template_part('template-parts/page-head-big-cat');?>
<?php get_template_part('template-parts/to-home');?>
<?php get_template_part('template-parts/price-in-cat');?>
<?php get_template_part('template-parts/breakdowns-in-cat');?>
<?php get_template_part('template-parts/masters-in-main');?>
<?php get_template_part('template-parts/reviews-in-main');?>
<?php get_template_part('template-parts/video-review-in-main');?>
<?php get_template_part('template-parts/why-are');?>
<?php
// Портфолио
?>
<?php get_template_part('template-parts/cooperation-in-main');?>
<?php
// Бренды
?>

<?php get_template_part('template-parts/questions-in-main');?>

<section class="category_info_section all_page_content_section pad_50 text_blk pos_rel">
    <div class="pl_bl pl_bl_1"></div>
    <div class="pl_bl pl_bl_2"></div>
    <div class="pl_bl pl_bl_3"></div>

    <div class="_container">
        <?php echo category_description( get_cat_ID( single_cat_title('', 0) ) ); ?>
    </div>
</section>

<?php get_template_part('template-parts/map-in-main');?>
<?php get_template_part('template-parts/areas');?>


<?php get_footer(); ?>