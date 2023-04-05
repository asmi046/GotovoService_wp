<?
$v_rev = carbon_get_theme_option('video_reviews');

if ($v_rev) {
?>
<section class="main-video m_b_40">
    <div class="_container">
        <h2>Видео отзывы</h2>
        <!-- <div class="d_flex jc_sb m_b_40 f_gap_10"> -->
        <div class="swiper video_reviews_slider">
            <div class="swiper-wrapper">

            <?php
                    $v_rev = carbon_get_theme_option('video_reviews');
                    $i = 1;
					foreach ($v_rev as $wr)  {
            ?>
            
                <a data-fslightbox="video_galery" href="<?echo $wr["lnk"]?>" class="card-video swiper-slide">
                    <div class="card-video__img brad_12">
                        <img src="<?php echo wp_get_attachment_image_src($wr["img"], 'full')[0];?>" alt="">
                    </div>
                
                    <div class="card-video__play pos_abs"></div>

                    <div class="card-video__ifor-block white_color">
                        
                        <div class="card-video__text">
                            <h3 class="video__text-name m_b_22"><?echo $wr["name"]; ?></h3>

                            <p class="video__text-review"><?echo $wr["subtitle"]; ?></p>

                            <p class="video__text-applic">
                                Заявка: <span><?echo $wr["znumber"]; ?></span>
                            </p>
                        </div>
                    </div>
                        
                    </a>
            

            <? } ?>
                
            
        </div>

            <div class="nb_wrapper">
                <div class="nav_btn nav_btn_next video-revews-button-next"></div>
                <div class="nav_btn nav_btn_prev video-revews-button-prev"></div>
            </div>

            
            
        </div>
    </div>
</section>

<? } ?>