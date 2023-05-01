
<template id="mobile_menu_component">
    <div class="mm_cmp_wrapper">
        
        <div v-show="services_show" class="dd_blk_wrap">
            <div class="dd_blk d_flex f_col">
                <div class="d_flex jc_sb  dd_head">
                            <h2>Услсги</h2>
                            <span @click.prevent="services_show = false" class="bb_close"></span>
                </div>

                <div class="dd_bod m_t_22 d_flex f_wrap js_sb">
                    <div @click=" value.show_sub = !value.show_sub" v-for="(value, index) in puncts" :key="index" class="w_full">
                            <span :class="{h_sub:(value.subpuncts.length > 0), active:value.show_sub}" class="mm_menu_punct">{{value.title}}</span>
                            
                            <div   v-show="value.show_sub && value.subpuncts.length > 0" class="mm_sub_menu d_flex f_col">
                                    
                                <a v-for="(subvalue, index) in value.subpuncts" :key="index" :href="subvalue.url"><span>{{subvalue.title}}</span></a>
                                
                            </div>
                            
                    </div> 
                    
                </div>
            </div>
        </div>
        
        <div v-show="menu_show" class="dd_blk_wrap">
            <div class="dd_blk d_flex f_col">
                <div class="d_flex jc_sb dd_head">
                            <h2>Меню</h2>
                            <span @click.prevent="menu_show = false" class="bb_close"></span>
                </div>

                
                    <div class="dd_bod m_t_22 d_flex f_wrap js_sb">
                        <div @click=" value.show_sub = !value.show_sub" v-for="(value, index) in puncts_main" :key="index" class="w_full">
                                <a v-if="value.subpuncts.length <= 0" :href="value.lnk" :class="{h_sub:(value.subpuncts.length > 0), active:value.show_sub}" class="mm_menu_punct">{{value.title}}</a>
                                <span v-else  :class="{h_sub:(value.subpuncts.length > 0), active:value.show_sub}" class="mm_menu_punct">{{value.title}}</span>
                                
                                <div   v-show="value.show_sub && value.subpuncts.length > 0" class="mm_sub_menu d_flex f_col">
                                        
                                    <a v-for="(subvalue, index) in value.subpuncts" :key="index" :href="subvalue.url"><span>{{subvalue.title}}</span></a>
                                    
                                </div>
                                
                        </div> 
                        
                    </div>
                
            </div>
        </div>

        <div class="mob_wraper">
            <div @click.prevent="services_show = !services_show" :class="{active:services_show}" class="f_1 d_flex mob_top_punkts m_services">
                <span>Услуги</span>
            </div>
            
            <a href="#masterMsg" class="f_1 d_flex mob_top_punkts m_zayavka">
                <span>Заявка</span>
            </a>
            
            <div @click.prevent="menu_show = !menu_show"  :class="{active:menu_show}" class="f_1 d_flex mob_top_punkts m_menu">
                <span>Меню</span>
            </div>
        </div>
    </div>
</template>

<div id="mm_app">
    <mobile-menu></mobile-menu>
</div>

