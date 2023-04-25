
<?php 
/*
Template Name: Обучение мастеров
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/page-head');?>

<section class="all_page_content_section pad_50">
    <div class="_container">
        <?php get_template_part('template-parts/education-in-main');?>

        <?php get_template_part('template-parts/questions-in-main');?>
    </div>
</section>

<?php get_footer(); ?>