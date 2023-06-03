
<?php 
/*
Template Name: Район города (шаблон)
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/banner-geo');?>

<?php get_template_part('template-parts/to-home');?>
<?php get_template_part('template-parts/price-in-cat');?>


<?php get_template_part('template-parts/text-blk', null, [
    "text" => apply_filters( 'the_content', $post->post_content )
]); ?>

<?php get_template_part('template-parts/breakdowns-in-cat');?>
<?php get_template_part('template-parts/masters-in-main');?>
<?php get_template_part('template-parts/reviews-in-main');?>
<?php get_template_part('template-parts/video-review-in-main');?>
<?php get_template_part('template-parts/why-are');?>
<?php get_template_part('template-parts/portfolio-in-cat');?>
<?php get_template_part('template-parts/cooperation-in-main');?>
<?php get_template_part('template-parts/brand-in-cat');?>
<?php get_template_part('template-parts/questions-in-main');?>

<?php get_template_part('template-parts/map-in-main');?>
<?php get_template_part('template-parts/areas-one');?>


<?php get_footer(); ?>