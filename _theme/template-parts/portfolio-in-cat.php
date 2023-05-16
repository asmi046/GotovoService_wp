<section class="main__portfolio">
    <div class="_container brad_12 m_b_40 pad_50_40">
        <h2 class="m_t_0">Портфолио</h2>
    
                <?
                        $c_post = new WP_Query( ['cat' => get_cat_ID( single_cat_title('', 0) ), 'posts_per_page' => 9, 
                        'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => 'page_type',
                                'value' => 'Портфолио'
                            ],
                        ]
                    ]); 
                ?>  
            

                <div class="f_wrap d_flex jc_sb f_gap_20 ">
                    <? 
                        while( $c_post->have_posts() ){
                            $c_post->the_post();
                    ?>

                        <div   class=" application d_flex f_col">
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

    </div>
</section>