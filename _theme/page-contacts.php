
<?php 
/*
Template Name: Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/page-head');?>

<section class="all_page_content_section contact_page pad_50">
    <div class="_container">
        <div class="d_flex jc_sb">
            <div class="f_1 m_r_30">
                <h2>Связаться с нами</h2> 
                <ul class="contact_page_list">
                    <li>Оставить заявку: <span><? echo carbon_get_theme_option('phone'); ?></span></li>
                    <li>Почта: <span><? echo carbon_get_theme_option('email'); ?></span></li>
                    <li>Время работы: <span><? echo carbon_get_theme_option('worck_day'); ?> <? echo carbon_get_theme_option('worck_time'); ?></span></li>
                    <li>Адрес: <span><? echo carbon_get_theme_option('adress'); ?></span></li>
                </ul>             
            </div>
            
            <div class="f_1">
                <h2>Реквизиты организации</h2> 
                
                <ul class="contact_page_list">
                    <li>Организация: <span><? echo carbon_get_theme_option('company'); ?></span></li>
                    <li>ИНН: <span><? echo carbon_get_theme_option('inn'); ?></span></li>
                    <li>ОГРН: <span><? echo carbon_get_theme_option('ogrn'); ?></span></li>
                    <li>Адрес: <span><? echo carbon_get_theme_option('adress_ur'); ?></span></li>
                </ul>  
            </div>
        </div>
    </div>
</section>

<section class="service_centers" id="service_centers">
    <div class="_container">
        <h2>Сервисные центры</h2>
        <div class="d_flex f_col m_b_40">
                <div class="selector ower_scroll d_flex">
                    <div class="side_gradient"></div>

                    <div class="swiper service_centers_slider">
                        <div class="swiper-wrapper service_centers-swiper ">
                            <?php 
                            $reviews_service_centers = carbon_get_post_meta(get_the_ID(), 'reviews_service_centers');
                            $i = 0;
                            foreach( $reviews_service_centers as $cat ){ ?>    
                                <a data-boxid="service_centers-info<?echo $i?>" data-boxgroup="service_centers-info"  class="swiper-slide gray_bg brad_12 select_btn no_sel uni_selector w_auto <? echo ($i == 0)?"active":""; ?>" href="#"><? echo $cat["adres"]; ?></a>
                            <?
                            $i++;
                        }?>

                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="sc_maps m_b_40">
    <?php 
        $reviews_service_centers = carbon_get_post_meta(get_the_ID(), 'reviews_service_centers');
        $i = 0;
        foreach( $reviews_service_centers as $cat ){ ?>    
         <div id="service_centers-info<?echo $i?>"  class="service_centers-info <? echo ($i == 0)?"active":""; ?>">
            <div class="_container">
                <h3><?php echo $cat["adres"]; ?></h3>
            </div>
            <div>
                <? echo $cat["map"];?>
            </div>
            
         </div>   

        <?
        $i++;
    }?>

</section>

<?php get_template_part('template-parts/questions-in-main');?>

<?php get_footer(); ?>