export default {
    
    template: "#city_select",

    data() {
        return {
            showWin:false,
            curentCity:"",
            deliveryStr:"",
            searchStr:"",
            filtredList:[],
        }
    },

    

    mounted: function() {
        this.filtredList = this.allCity
        
        this.curentCity = (localStorage.getItem("city") != undefined)?localStorage.getItem("city"):"Москва" 
        this.deliveryStr = (localStorage.getItem("delivery") != undefined)?localStorage.getItem("delivery"):"0-1 день в зависимости от района" 
    },

    watch: {
        searchStr(newVal) {
            this.filtredList = []
            for (let k = 0; k<this.allCity.length; k++) {
                if (this.allCity[k][0].indexOf(newVal) >= 0) 
                    this.filtredList.push(this.allCity[k]); 
            }
        }
    },
    methods:{
        toggleWin() {
            this.showWin = !this.showWin
        },
       
        selectCity(item) {
            localStorage.setItem("city", item[0])
            localStorage.setItem("delivery", item[1])
            this.curentCity = item[0]
            this.deliveryStr = item[1]
            this.cloaseWin()
        }
    }
  
}