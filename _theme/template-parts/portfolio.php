<section class="main__portfolio">
    <div class="_container brad_12 m_b_40 pad_50_40">
        <h2 class="m_t_0">Портфолио</h2>
            <div class="selector  d_flex m_b_40">
                    <div class="side_gradient_gray"></div>

                    <div class="swiper portfolio_slider">
                        <div class="swiper-wrapper breakdowns-swiper">
                            <?php 
                            global $all_categories;
                            $i = 0;
                            foreach( $all_categories as $cat ){ ?>    
                                <a data-boxid="portfolio-info<?echo $cat->term_id?>" data-boxgroup="portfolio-info"  class="swiper-slide white_bg brad_12 select_btn no_sel uni_selector <? echo ($i == 0)?"active":""; ?>" href="#"><? echo $cat->name; ?></a>
                            <?
                            $i++;
                        }?>

                        </div>
                    </div>
                </div>

                <?
                    $i = 0;
                    foreach( $all_categories as $cat ) { 
                        $c_post = new WP_Query( ['cat' => $cat->term_id, 'posts_per_page' => 3, 
                        'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => 'page_type',
                                'value' => 'Портфолио'
                            ],
                        ]
                    ]); 
                ?>  
            

                <div id="portfolio-info<?echo $cat->term_id?>" class="portfolio-info portfolio-application d_flex jc_sb f_gap_20 <? echo ($i == 0)?"active":""; ?>">
                    <? 
                        while( $c_post->have_posts() ){
                            $c_post->the_post();
                    ?>

                        <div   class=" application d_flex f_col f_1">
                            <div class="img_wrapper">
                                <img src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('portfolio_img'), 'large')[0];?>" alt="Заявка1">
                            </div>

                            <div class="application-info">
                                <p class="application-identifier">Заявка <? echo carbon_get_the_post_meta('portfolio_znumber')?></p>
                                <p class="application-cause">Причина: <? echo carbon_get_the_post_meta('portfolio_pr')?></p>
                                <p class="application-made">Что было сделано: <? echo carbon_get_the_post_meta('portfolio_work')?></p>
                                <p class="application-time pos_rel">Время: <? echo carbon_get_the_post_meta('portfolio_time')?></p>
                                <p class="application-price pos_rel">Цена: <span><? echo carbon_get_the_post_meta('portfolio_price')?> Р</span></p>
                            </div>
                        </div>
                    
                    <?}
                            
                            wp_reset_postdata();
                    ?>
                   
                </div>

            <?
                    $i++;
                }
            ?>   
    </div>
</section>