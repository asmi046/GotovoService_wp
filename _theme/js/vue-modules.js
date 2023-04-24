import CitySelect from './components/city-select.js'
import GeoInMain from './components/geo-in-main.js'
import ModalWin from './components/modal-win.js'

const pd = {
    mounted(el)  {  
        el.oninput = function(e) {
          if (!e.isTrusted) {
            return
          }
    
        const x = this.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/)
        x[1] = '+7' 

        this.value = !x[3] ? x[1] + ' (' + x[2] : x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '')

        }
      },
}

const head_app = Vue.createApp({})
head_app.component('city-select', CitySelect)
head_app.mount("#head_app")

const geo_app = Vue.createApp({})
geo_app.component('geo-in-main', GeoInMain)
geo_app.mount("#geo_app")


const win_app = Vue.createApp({})
win_app.directive('phone', pd)
win_app.component('modal-win', ModalWin)
win_app.mount("#win_app")


