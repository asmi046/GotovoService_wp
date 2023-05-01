
<template id="modal_win">
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup_c">
            <div @click.prevent="closeWin()" class="popup__close" aria-label="Закрыть модальное окно"></div>
            <h2 class="modal_h2">{{title}}</h2>
            <p class="sub_h">{{subtitle}}</p>
            <form class="sending_form" action="/send_consult" method="POST">
    
                <input class="border_bl_full"  type="text" name="tel" v-phone v-model="phone" placeholder="Телефон*">
                <div class="error_list_wrap">
                    <div v-for="(item, index) in errorList" :key="index" class="error">{{item}}</div>
                </div>
                <p class="policy_descr">Заполняя данную форму и отправляя заявку вы соглашаетесь с <a href="/privacy-policy">политикой конфиденциальности</a></p>
                <div class="control_wrap">
                    <button class="btn" @click.prevent="sendMsg()">Отправить</button> <div v-show="showLoader" class="loader"></div>
                </div>

            </form>
        </div>
    </div>
</template>

<div id="win_app">
    <modal-win rout="/send_consult" redirect="/thencs" hesh="recollMsg" title="Заказать обратный звонок" subtitle="Наши специалисты свяжутся с Вами в течении 15 минут" ></modal-win>
    <modal-win rout="/send_consult" redirect="/thencs" hesh="masterMsg" title="Вызов мастера на дом" subtitle="Наши специалисты свяжутся с Вами в течении 15 минут" ></modal-win>

</div>