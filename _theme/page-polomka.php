
<?php 
/*
Template Name: Поломки (шаблон)
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/banner-polomka');?>

<?php get_template_part('template-parts/to-home');?>
<?php get_template_part('template-parts/price-in-cat');?>


<?php get_template_part('template-parts/text-blk', null, [
    "text" => apply_filters( 'the_content', $post->post_content )
]); ?>


<?php get_footer(); ?>