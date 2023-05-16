<section class="brands">
    <div class="_container m_b_40">
        <h2 class="m_t_0">Популярные бренды</h2>

        <div class="d_flex f_wrap jc_sb">
                <?php
                $c_post = new WP_Query( ['cat' => get_cat_ID( single_cat_title('', 0) ),  
                    'meta_query' => [
                        'relation' => 'OR',
                        [
                            'key' => 'page_type',
                            'value' => 'Бренды'
                        ],
                ]
                ]); 

                while( $c_post->have_posts() ){
                    $c_post->the_post();
                ?>
                    <a href="" class="brand_element brad_12">
                        <img src="<?php echo wp_get_attachment_image_src(carbon_get_the_post_meta('page_head_img'), 'full')[0];?>" alt="<? the_title(); ?>">        
                    </a>
                <?}
                    
                    wp_reset_postdata();
                ?>
        
            <? for ($i = 0; $i < 30; $i++) {?>

            <?}?>
        </div>
    </div>
</section>
