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