<section class="main_reviews m_b_40">
    <div class="_container">
        <h2>Отзывы</h2>
        
        <div class="swiper reviews_slider">
            <div class="swiper-wrapper">
            
            <?

                $args = [
                    'posts_per_page' => 30,
                    'meta_query' => [
                        'relation' => 'OR',
                        [
                            'key' => 'page_type',
                            'value' => 'Отзыв'
                        ],
                    ]
                ];

                $reviews = new WP_Query( $args );
            
            ?>

                <?php 
                    if( ( $reviews->have_posts() ) )
                    while ( $reviews->have_posts() ){
                        $reviews->the_post();
                        get_template_part('template-parts/reviews-card');
                        
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <div class="nb_wrapper">
                <div class="nav_btn nav_btn_next revews-button-next"></div>
                <div class="nav_btn nav_btn_prev revews-button-prev"></div>
            </div>
        </div>
        
    </div>
</section>