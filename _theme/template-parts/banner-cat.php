
<section class="page_head page_head_big_cat pos_rel">
    <div class="_container d_flex f_col">

    <?
        $img_uirl = "";
        if (!is_category()) { 
            $img_uirl = wp_get_attachment_image_src(carbon_get_the_post_meta('page_head_img'), 'full')[0];
        } else {
            $img_uirl = wp_get_attachment_image_src(carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'page_head_img'), 'full')[0];
        }
    ?>

    <?php 
        $price_ot = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'cat_price_ot');
        $price_ot = empty($price_ot)?500:$price_ot;
        
        $subtitle = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'cat_subtitle');
        $subtitle = empty($subtitle)?"Срочный выезд на дом":$subtitle;
        
        $cat_btn_lnk = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'cat_btn_lnk');
        $cat_btn_lnk = empty($cat_btn_lnk)?"#recollMsg":$cat_btn_lnk;
        
        $cat_list = apply_filters('the_content', carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'cat_list'));


        // $prices = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'cat_prices');
        // $prices = empty($cat_prices)?500:$prices;
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
                <strong class="bb_subtitle"><? echo $subtitle; ?></strong>
                <? if (empty($cat_list)) { ?>
                <ul>
                    <li>Мастер будет у вас в течение часа!</li>
                    <li>Диагностика неисправности 20 минут!</li>
                    <li>Гарантия до 1 года!</li>
                </ul>
                <? } else {
                    echo $cat_list;   
                }?>

                <div class="time m_b_22">Прием заявок <strong>24 часа</strong></div>
                <div>
                    <a href="<? echo $cat_btn_lnk; ?>" class="btn">Вызвать мастера</a>
                </div>
            </div>
            
            <div class="right f_1">
                <? if (!empty($img_uirl)) {?>
                    <img src="<?php echo $img_uirl;?>" alt="<? the_title(); ?>">
                <?}?>
            </div>
            
        </div>

        

    </div>
</section>