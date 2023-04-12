

<section class="prices">
    <div class="_container">
        <h2>Цены на услуги</h2>
        <div class="d_flex f_col">
            <div class="selector ower_scroll d_flex m_b_40">
                <div class="side_gradient"></div>

                <div class="swiper price_slider">
                    <div class="swiper-wrapper breakdowns-swiper">
                            <?php 
                                global $wpdb;
                                
                                $all_price_table = $wpdb->get_results("SELECT * FROM `all_prices`");
                                $rez_price = [];

                                foreach( $all_price_table as $cat ) {
                                    $rez_price[$cat->category][] = $cat; 
                                }

                                $i = 0;
                                foreach( $rez_price as $key => $value ){ ?>    
                                    <a data-boxid="price-info-<?echo $key?>" data-boxgroup="price-info"  class="swiper-slide gray_bg brad_12 select_btn no_sel uni_selector <? echo ($i == 0)?"active":""; ?>" href="#"><? echo $key; ?></a>
                                <?
                                $i++;
                        }?>

                    </div>
                </div>
            </div>

            <? 
                $i = 0; 
                foreach( $rez_price as $key => $value ) { ?>
                    <div id="price-info-<?echo $key?>" class="price-info services d_flex f_wrap jc_sb <? echo ($i == 0)?"active":""; ?>">
                        <? foreach ($value as $item) {?>
                            <div class="service_elem gray_bg brad_12 pad_20_35 m_b_22">
                                <h3 class="m_t_0"><? echo $item->name?></h3>
                                <span class="price">от <? echo $item->price?> Р</span>
                            </div>
                        <? } ?>
                    
                    </div>
            
            <? 
                    $i++;
                } 
            ?>

        </div>
    </div>
</section>

<script>



</script>