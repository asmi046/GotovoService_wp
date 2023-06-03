
<?
        $img_uirl = "";
        if (!is_category()) { 
            $img_uirl = wp_get_attachment_image_src(carbon_get_the_post_meta('page_head_img'), 'full')[0];
        } else {
            $img_uirl = wp_get_attachment_image_src(carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'page_head_img'), 'full')[0];
        }
?>

<section class="page_head page_head_big_geo  pos_rel">
    <div class="map_gradient"></div>
    <div class="map_img">
                <? if (!empty($img_uirl)) {?>
                    <img src="<?php echo $img_uirl;?>" alt="<? the_title(); ?>">
                <?}?>
    </div>

    <div class="_container d_flex f_col">



    <?php 
        $price_ot = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'bnr_price_ot');
        $price_ot = empty($price_ot)?500:$price_ot;
        
        
        $cat_btn_lnk = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'bnr_btn_lnk');
        $cat_btn_lnk = empty($cat_btn_lnk)?"#recollMsg":$cat_btn_lnk;
        
    ?>
    
          
        <?php get_template_part('template-parts/banner-menu');?>
        <?php

            if ( function_exists( 'yoast_breadcrumb' ) ) :
                yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
            endif;

        ?>
        
        <div class="banner_content d_flex">
            <div class="left d_flex f_col f_1">
                <h1>
                    <? (!is_category())?the_title():single_cat_title(); ?>
                    <span class="red_color">от <? echo $price_ot; ?> <span class="rub">₽</span> </span>
                </h1>        

                <div class="time m_b_22">Прием заявок <strong>24 часа</strong></div>
                <div>
                    <a href="<? echo $cat_btn_lnk; ?>" class="btn">Вызвать мастера</a>
                </div>
            </div>

            <div class="right f_1"></div>
            
        </div>

        

    </div>
</section>