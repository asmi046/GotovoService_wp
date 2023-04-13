import CitySelect from './components/city-select.js'
import GeoInMain from './components/geo-in-main.js'

const head_app = Vue.createApp({})
head_app.component('city-select', CitySelect)
head_app.mount("#head_app")

const geo_app = Vue.createApp({})
geo_app.component('geo-in-main', GeoInMain)
geo_app.mount("#geo_app")


