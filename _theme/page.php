
<?php 
get_header(); ?>

<?php get_template_part('template-parts/page-head');?>

<section class="all_page_content_section pad_50 text_blk">
    <div class="_container">
        <?php if( have_posts() ){
            while( have_posts() ){
                the_post();
        ?>

            <?php the_content(); ?>
		
		<?php
            }
        }
	    ?>
    </div>
</section>

<?php get_footer(); ?>