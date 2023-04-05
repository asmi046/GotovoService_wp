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
                    <div class="d_flex">
                            <a class="white_bg  brad_12 select_btn active" href="#">Ремонт компьютерной техники</a>
                            <?if ($bit_masters) {?>
                                <a class="white_bg  brad_12 select_btn" href="#">Ремонт компьютерной техники</a>
                            <?}?>
                    </div>
                </div>
            </div>
            
            <div class="master-info d_flex m_b_40 active">
                <?php
                        $i = 1;
                        foreach ($comp_masters as $itm)  {
                ?>

                <div class="master-card ">
                    <p class="master-done m_b_22 blue_color"><span class="master-count"><?echo $itm["rem_count"]?></span> ремонтов</p>
                    <div class="master-text brad_12 gradient">
                        <p class="master-name"><?echo $itm["name"]?></p>
                        <p class="master-role"><?echo $itm["dolgnost"]?></p>
                    </div>
                    <div class="master-photo">
                        <img src="<?php echo wp_get_attachment_image_src($itm["img"], 'full')[0];?>" alt="">
                    </div>
                </div>

                <?
                    }
                ?>
            
            </div>
            
            <div class="master-info d_flex m_b_40">
                <div class="master-card">
                    <p class="master-done m_b_22 blue_color"><span class="master-count">2625</span> ремонтов</p>
                    <div class="master-text brad_12">
                        <p class="master-name">Алексей<br>Михайлов</p>
                        <p class="master-role">Мастер по ремонту<br>гаджетов</p>
                    </div>
                    <div class="master-photo"><img src="<?php echo get_template_directory_uri();?>/img/picture/manone.webp" alt=""></div>
                </div>

                <div class="master-card">
                    <p class="master-done m_b_22 blue_color"><span class="master-count">1857</span> ремонтов</p>
                    <div class="master-text brad_12">
                        <p class="master-name">Юрий<br>Петров</p>
                        <p class="master-role">Мастер по ремонту<br>гаджетов</p>
                    </div>
                    <div class="master-photo"><img src="<?php echo get_template_directory_uri();?>/img/picture/mantwo.webp" alt=""></div>
                </div>

                <div class="master-card">
                    <p class="master-done m_b_22 blue_color"><span class="master-count">3241</span> ремонтов</p>
                    <div class="master-text brad_12">
                        <p class="master-name">Сергей<br>Грибакин</p>
                        <p class="master-role">Мастер по ремонту<br>гаджетов</p>
                    </div>
                    <div class="master-photo"><img src="<?php echo get_template_directory_uri();?>/img/picture/manthree.webp" alt=""></div>
                </div>
            </div>
    </div>
</section>

<?}?>