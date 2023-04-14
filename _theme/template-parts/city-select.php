<template id="city_select">
    
<div class="pos_rel">
    <a @click.prevent="toggleWin" href="#"  class="city_select">{{curentCity}}</a>
    <div v-show="showWin" :class="{active:showWin}" class="city_list pos_abs">
        <a @click.prevent="toggleWin" href="#">Москва</a>
    </div>
</div>       
    

  
</template>