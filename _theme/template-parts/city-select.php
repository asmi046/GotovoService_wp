<template id="city_select">
    
    <!-- <a v-if="pageMode == 'head'" @click.prevent="openWin" href="#" class="location-block__link location-block__map_pin icon icon-ec_icon_map_pin_c">{{curentCity}}</a> -->
    <a v-if="pageMode == 'head'" @click.prevent="openWin" href="#" class="city_select">{{curentCity}}</a>
    <div v-else>
        <div  class="select-prod-info__delivery-item">
            <p class="select-prod-info__delivery-item-text location-block__map_pin icon icon-ec_icon_map_pin_c">{{curentCity}}</p>
            <a @click.prevent="openWin" href="#" class="select-prod-info__delivery-item-text-link">Изменить</a>
        </div>

        <div class="select-prod-info__delivery-item">
            <p class="select-prod-info__delivery-item-text location-block__box icon-ec_icon_box ">Доставка</p>
            <p class="select-prod-info__delivery-item-text">{{deliveryStr}}</p>
            <a href="/dostavka" class="select-prod-info__delivery-item-text-link">Подробнее о доставке</a>
        </div>
    </div>

    <div  @click.self="cloaseWin()" class="popup popup_city" :class="[showWin ? 'active' : '']">
        <div class="popup__content">
            <div  class="popup__body" id="city_select">
                <div @click.prevent="cloaseWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>
                <h2>Выберите свой город</h2>
                
                <div class="cityselectWrapper">
                    <input  v-model="searchStr" type="text" placeholder="Введите название города для поиска">
                    
                    <div class="all_city_list_wrapper">
                        <ul class="all_city_list">
                            <li v-for ="(item) in filtredList" :key="item[0]">
                                <a href="#" @click.prevent="selectCity(item)">{{item[0]}}</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

  
</template>