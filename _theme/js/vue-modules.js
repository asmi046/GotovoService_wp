import CitySelect from './components/city-select.js'

const global_app = Vue.createApp({})

global_app.component('city-select', CitySelect)

global_app.mount("#vue_app")
