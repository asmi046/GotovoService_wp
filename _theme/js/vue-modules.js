import CitySelect from './components/city-select.js'
import PolomkiMain from './components/polomki-main.js'

const head_app = Vue.createApp({})
head_app.component('city-select', CitySelect)
head_app.mount("#head_app")

const breakdowns_app = Vue.createApp({})
breakdowns_app.component('polomki-main', PolomkiMain)
breakdowns_app.mount("#breakdowns_app")


