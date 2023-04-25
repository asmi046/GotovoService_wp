<section class="main_banner pos_rel">
        <?php get_template_part('template-parts/banner-menu');?>

        <div class="swiper main_slider">
                <div class="swiper-wrapper">
                        <?
                                $main_slider = carbon_get_theme_option('main_slider');
                        ?>
                

                   <?php
                        $i = 1;
                        foreach ($main_slider as $item)  {
                    ?>
                                <div class="swiper-slide main_slide">
                                        <img src="<?php echo wp_get_attachment_image_src($item["img"], 'full')[0];?>" alt="<? echo $item["title"]; ?>">
                                        <div class="muar"></div>
                                        <div class="bnr_info">
                                                <h1><? echo $item["title"]; ?></h1>
                                                <? echo apply_filters('the_content', $item["subtext"]); ?>
                                                <a href="<? echo $item["link"]; ?>" class="btn">Вызвать мастера</a>
                                        </div>    
                                
                                </div>
                        <?
                        }
                        ?>
                </div>  
                <div class="navi_btn">
                        <div class="nav_btn nav_btn_next main_swiper-button-next"></div>
                        <div class="nav_btn nav_btn_prev main_swiper-button-prev"></div>
                </div>
        </div>    
</section>