
<section class="page_head gradient pos_rel">
    <div class="_container d_flex f_col">

    <?
        $img_uirl = "";
        if (!is_category()) { 
            $img_uirl = wp_get_attachment_image_src(carbon_get_the_post_meta('page_head_img'), 'full')[0];
        } else {
            $img_uirl = wp_get_attachment_image_src(carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'page_head_img'), 'full')[0];
        }
    ?>

    <? if (!empty($img_uirl)) {?>
        <img src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('page_head_img'), 'full')[0];?>" alt="<? the_title(); ?>" class="pos_abs page_head_img">
    <?}?>
          
        <?php get_template_part('template-parts/banner-menu');?>
        <?php

            if ( function_exists( 'yoast_breadcrumb' ) ) :
                yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
            endif;

        ?>
        <h1><? (!is_category())?the_title():single_cat_title(); ?></h1>
    </div>
</section>