<section class="price_in_cat">
    <div class="_container">
        <h2>Цены</h2>

        <?php
            if (is_category()) {
                $prices_category = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'prices_category');
                $prices_polom = carbon_get_term_meta( get_cat_ID( single_cat_title('', 0) ), 'prices_polom');
            } else {
                $prices_category = carbon_get_post_meta( $post->ID, 'prices_category_in_page');
                $prices_polom = carbon_get_post_meta( $post->ID, 'prices_polom_in_page');
            }

            $all_price_table = $wpdb->get_results("SELECT * FROM `all_prices` WHERE `category` = '". $prices_category ."'  AND `polomka` = '". $prices_polom ."'");
        ?>

        <div id="price-info-<?echo $key?>" class="price-info services d_flex f_wrap jc_sb <? echo ($i == 0)?"active":""; ?>">
            <? foreach ($all_price_table as $item) {?>
                <div class="service_elem gray_bg brad_12 pad_20_35 m_b_22">
                    <h3 class="m_t_0"><? echo $item->name?></h3>
                    <span class="price">от <? echo $item->price?> Р</span>
                </div>
            <? } ?>
                    
        </div>
    </div>
</section>