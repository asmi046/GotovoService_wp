<?php
$comp_masters = carbon_get_theme_option('comp_masters');
$bit_masters = carbon_get_theme_option('bit_masters');
if ($comp_masters) {
?>
<section class="master-main">
    <div class="_container">
        <h2>Наши мастера</h2>
            <div class="d_flex f_col m_b_40">
                <div class="m_b_22">
                    <div class="master_type_chenge d_flex">
                            <a data-boxid="master-info1" data-boxgroup="master-info" class="uni_selector white_bg  brad_12 select_btn active" href="#">Ремонт компьютерной техники</a>
                            <?if ($bit_masters) {?>
                                <a data-boxid="master-info2" data-boxgroup="master-info" class="uni_selector white_bg  brad_12 select_btn" href="#">Ремонт компьютерной техники</a>
                            <?}?>
                    </div>
                </div>
            </div>
            
            <div id="master-info1" class="swiper master-info master-info1 d_flex m_b_40 active">
                <div class="swiper-wrapper">
                    <?php
                        $i = 1;
                        foreach ($comp_masters as $itm)  {
                    ?>

                        <div class="master-card swiper-slide">
                            <div class="mt_wraper">
                                <p class="master-done m_b_10 blue_color"><span class="master-count"><?echo $itm["rem_count"]?></span> ремонтов</p>
                                <div class="master-text brad_12 gradient">
                                    <p class="master-name"><?echo $itm["name"]?></p>
                                    <p class="master-role"><?echo $itm["dolgnost"]?></p>
                                </div>
                            </div>
                            

                            <div class="master-photo">
                                <img src="<?php echo wp_get_attachment_image_src($itm["img"], 'full')[0];?>" alt="">
                            </div>
                        </div>

                    <?
                        }
                    ?>
                
                </div>

                <div class="nb_wrapper">
                    <div class="nav_btn nav_btn_next masters1-button-next"></div>
                    <div class="nav_btn nav_btn_prev masters1-button-prev"></div>
                </div>
            </div>

            
            <div id="master-info2" class="swiper master-info master-info2 d_flex m_b_40 ">
                <div class="swiper-wrapper">
                    <?php
                        $i = 1;
                        foreach ($bit_masters as $itm)  {
                    ?>

                        <div class="master-card swiper-slide">
                            <div class="mt_wraper">
                                <p class="master-done m_b_22 blue_color"><span class="master-count"><?echo $itm["rem_count"]?></span> ремонтов</p>
                                <div class="master-text brad_12 gradient">
                                    <p class="master-name"><?echo $itm["name"]?></p>
                                    <p class="master-role"><?echo $itm["dolgnost"]?></p>
                                </div>
                            </div>
                            

                            <div class="master-photo">
                                <img src="<?php echo wp_get_attachment_image_src($itm["img"], 'full')[0];?>" alt="">
                            </div>
                        </div>

                    <?
                        }
                    ?>
                
                </div>

                <div class="nb_wrapper">
                    <div class="nav_btn nav_btn_next masters2-button-next"></div>
                    <div class="nav_btn nav_btn_prev masters2-button-prev"></div>
                </div>
            </div>
    </div>
</section>

<?}?>