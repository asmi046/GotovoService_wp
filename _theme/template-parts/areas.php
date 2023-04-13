<template id="geo_in_main">
        <div>
            <h3>Выберите район</h3>
            <ul class="areas-tab__tabs d_flex f_wrap">
                <li v-for="(item, index) in ao" :key="index" class="areas-tab__item d_flex"><a href="#">{{item}} {{catid}}</a></li>
            </ul>

            <div class="areas-districts__group">
                
                <div class="districts__group">
                    <div data-letter="А" class="districts__group-item">
                        <a href="#">Академический</a>
                    </div>
                </div>

            </div>

            <h3>Выберите станцию метро</h3>
            <ul class="areas-tab__tabs d_flex f_wrap">
                <li v-for="(item, index) in vetki" :key="index" :class="[item.class]" class="metro_line border_lg brad_12 d_flex"></li>
            </ul>

            <div class="areas-districts__group">
                
                <div class="districts__group">
                    <div data-letter="А" class="districts__group-item">
                        <a href="#">Академический</a>
                    </div>
                </div>

            </div>
        </div>
    </template>

<section class="areas-main">
    <div class="_container" >
        <h2>Районы обслуживания</h2>

        <div class="selector  d_flex m_b_40">
            <div class="side_gradient"></div>

            <div class="swiper raion_slider">
                <div class="swiper-wrapper breakdowns-swiper">
                    <?php 
                    global $all_categories;
                    $i = 0;
                    foreach( $all_categories as $cat ){ ?>    
                        <a data-boxid="raion-info<?echo $cat->term_id?>" data-boxgroup="raion-info"  class="swiper-slide gray_bg brad_12 select_btn no_sel uni_selector <? echo ($i == 0)?"active":""; ?>" href="#"><? echo $cat->name; ?></a>
                    <?
                    $i++;
                }?>

                </div>
            </div>
        </div>

        <div id="geo_app">
            <?
                $i = 0;
                foreach( $all_categories as $cat ) {  
            ?>
                <div id="raion-info<?echo $cat->term_id?>" class="raion-info <? echo ($i == 0)?"active":""; ?>">
                    <geo-in-main catid="<?echo $cat->term_id?>"></geo-in-main>
                </div>
           <? 
            $i++; 
            } 
          ?>
        </div>


    </div>
</section>