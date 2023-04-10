
<?php 
    $tttt = "Ремонт ноутбуков";
?>
<template id="main_breakdowns">
        
            <div class="d_flex f_col m_b_40">
                <div class="selector d_flex ower_scroll m_b_40">
                    <div class="swiper price_slider">
                        <div class="swiper-wrapper breakdowns-swiper">
                            
                            <a @click.prevent = "showBox('Ремонт ноутбуков')" class="swiper-slide gray_bg brad_12 select_btn" href="#"><span>Ремонт ноутбуков</span></a>
                            <a @click.prevent = "showBox('Ремонт компьютеров')" class="swiper-slide gray_bg brad_12 select_btn active" href="#">Ремонт компьютеров</a>
                            <a class="swiper-slide gray_bg brad_12 select_btn" href="#">Ремонт телефонов</a>
                            <a class="swiper-slide gray_bg brad_12 select_btn" href="#">Ремонт холодильников</a>
                            <a class="swiper-slide gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
                            <a class="swiper-slide gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
                            <a class="swiper-slide gray_bg brad_12 select_btn" href="#">Ремонт электроплит</a>
                        </div>
                    </div>
                </div>

                <div v-show="selectedBlk =='<?echo $tttt?>'" class="services d_flex m_b_40">
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title white_color">Не включается компьютер</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                    <div class="breakdowns-card brad_1 2">
                        <p class="breakdowns-title white_color">Не включается компьютер</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title  white_color">Не включается компьютер</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>

                    </div>
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title white_color">Не включается компьютер</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                </div>
                
                <div v-show="selectedBlk =='Ремонт компьютеров'" class="services d_flex m_b_40">
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title white_color">Не включается компьютер 1</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                    <div class="breakdowns-card brad_1 2">
                        <p class="breakdowns-title white_color">Не включается компьютер 1</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title  white_color">Не включается компьютер 1</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>

                    </div>
                    <div class="breakdowns-card brad_12">
                        <p class="breakdowns-title white_color">Не включается компьютер 1</p>
                        <div class="breakdowns-text white_bg">
                        <p class="breakdowns-sign">Признак: Не запускаются вентиляторы и не загораются индикаторные светодиоды на корпусе</p>
                        <p class="breakdowns-cause">Причина: Выход из строя блока питания</p>
                        <p class="breakdowns-price">Цена: от 2800 Р</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-wrapper swiper-footer m_b_40">   
                    <a class="swiper-slide gray_bg brad_12 select_btn active" href="#"><span>Смотреть все поломки</span></a>
                </div>

            </div>
</template>

<section class="breakdowns" id="breakdowns_app">
    <div class="_container">
        <h2>Частые поломки</h2>
        
        <polomki-main></polomki-main>
    </div>
</section>