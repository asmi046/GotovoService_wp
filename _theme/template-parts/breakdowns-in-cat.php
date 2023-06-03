<section class="breakdowns-in-cat">
    <div class="_container">
        <h2>Частые поломки</h2>

        <div class=" d_flex m_b_40 f_wrap jc_sb services">
            <?php
                if (is_category())
                    $true_cat_id = get_cat_ID( single_cat_title('', 0) );
                else     
                    $true_cat_id = get_the_category( $post->ID )[0]->term_id;
            
                $c_post = new WP_Query( ['cat' =>  $true_cat_id,  
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
    </div>
</section>