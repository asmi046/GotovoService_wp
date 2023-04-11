import CitySelect from './components/city-select.js'

const head_app = Vue.createApp({})
head_app.component('city-select', CitySelect)
head_app.mount("#head_app")


