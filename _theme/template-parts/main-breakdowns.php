<section class="breakdowns" id="breakdowns_app">
    <div class="_container">
        <h2>Частые поломки</h2>
        
        <div class="d_flex f_col m_b_40">
                <div class="selector ower_scroll d_flex m_b_40">
                    <div class="side_gradient"></div>

                    <div class="swiper breakdowns_slider">
                        <div class="swiper-wrapper breakdowns-swiper">
                            <?php 
                            global $all_categories;
                            $i = 0;
                            foreach( $all_categories as $cat ){ ?>    
                                <a data-boxid="breakdowns-info<?echo $cat->term_id?>" data-boxgroup="breakdowns-info"  class="swiper-slide gray_bg brad_12 select_btn no_sel uni_selector <? echo ($i == 0)?"active":""; ?>" href="#"><? echo $cat->name; ?></a>
                            <?
                            $i++;
                        }?>

                        </div>
                    </div>
                </div>

                <?
                $i = 0;
                    foreach( $all_categories as $cat ) { 
                        $c_post = new WP_Query( ['cat' => $cat->term_id, 'posts_per_page' => 4, 
                        'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => 'page_type',
                                'value' => 'Поломки'
                            ],
                        ]
                    ]); 
                    ?>    
                    <div id="breakdowns-info<?echo $cat->term_id?>" class="breakdowns-info services d_flex m_b_40 <? echo ($i == 0)?"active":""; ?>">
                        <? 
                            while( $c_post->have_posts() ){
                                $c_post->the_post();
                                
                                get_template_part("template-parts/polomka-card", null, [
                                    'title' => get_the_title(),
                                    'priznak' => carbon_get_the_post_meta('polomka_priznak'),
                                    'prihina' => carbon_get_the_post_meta('polomka_pr'),
                                    'price' => carbon_get_the_post_meta('polomka_price'),
                                    'lnk' => get_the_permalink()
                                ]);
                        }
                            
                            wp_reset_postdata();
                        ?>

                    </div>
                <?
                     $i++;
                    }
                ?>      
                

                <!-- <div class="swiper-wrapper swiper-footer m_b_40">   
                    <a class="swiper-slide gray_bg brad_12 select_btn active" href="#"><span>Смотреть все поломки</span></a>
                </div> -->

        </div>

    </div>
</section>