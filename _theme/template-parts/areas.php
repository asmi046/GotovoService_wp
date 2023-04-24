<template id="geo_in_main">
        <div>
            
            <div v-if="is_empty">
                Данные скоро будут загружены
            </div>
            <div v-else>
                <h3>Выберите район</h3>
                <ul class="areas-tab__tabs d_flex f_wrap">
                    <li @click.prevent="setSelectedAo(name)" v-for="( value, name) in main_data.ao" :key="name"  class="areas-tab__item d_flex"><a :class="{active:name == selected_ao}" href="#">{{name}}</a></li>
                </ul>

                
                    <div v-for="(value, name) in main_data.ao" :key="'ao_'+name" >
                        
                        <div v-if="name == selected_ao" class="areas-districts__group">        
                            <div v-for="(value_s, name_s) in value" :key="name_s" class="districts__group">
                                <div  :data-letter="name_s" class="districts__group-item">
                                    <a v-for="(raion, index) in value_s" :key="'r_'+index" :title="raion.title" :href="raion.lnk">{{raion.raion}}</a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                

                
                <h3>Выберите станцию метро</h3>
                
                <ul class="areas-tab__tabs d_flex f_wrap">
                    <li @click.prevent="setSelectedVetka(name)" v-for="( value, name) in main_data.metro" :key="name" :data-metrostatename="name" :class="[{active:name == selected_vetka}, value.cssclass]" class="metro_line border_lg brad_12 d_flex"></li>
                </ul>

                <div v-for="(value, name) in main_data.metro" :key="'mtr_'+name" >
                        
                        <div v-if="name == selected_vetka" class="areas-districts__group">        
                            <div v-for="(value_s, name_s) in value" :key="name_s" class="districts__group">
                                <div  :data-letter="name_s" class="districts__group-item">
                                    <a v-for="(stateion, index) in value_s" :key="'r_'+index" :title="stateion.title" :href="stateion.lnk">{{stateion.stateion}}</a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
            </div>
        </div>
    </template>

<section class="areas-main m_b_40">
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