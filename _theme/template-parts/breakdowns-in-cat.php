<section class="breakdowns-in-cat">
    <div class="_container">
        <h2>Частые поломки</h2>

        <div class=" d_flex m_b_40 f_wrap jc_sb services">
            <?php
                $c_post = new WP_Query( ['cat' => get_cat_ID( single_cat_title('', 0) ),  
                    'meta_query' => [
                        'relation' => 'OR',
                        [
                            'key' => 'page_type',
                            'value' => 'Поломки'
                        ],
                ]
                ]); 

                while( $c_post->have_posts() ){
                    $c_post->the_post();
                ?>
                            <div class="breakdowns-card brad_12 ">
                                <p class="breakdowns-title white_color gradient"><? the_title(); ?></p>
                                <div class="breakdowns-text white_bg">
                                <p class="breakdowns-sign">Признак: <? echo carbon_get_the_post_meta('polomka_priznak')?></p>
                                <p class="breakdowns-cause">Причина: <?echo carbon_get_the_post_meta('polomka_pr')?></p>
                                <p class="breakdowns-price">Цена: от <?echo carbon_get_the_post_meta('polomka_price')?> Р</p>
                                </div>
                            </div>
                <?}
                    
                    wp_reset_postdata();
                ?>
        </div>
    </div>
</section>