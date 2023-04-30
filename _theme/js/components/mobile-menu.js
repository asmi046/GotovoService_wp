export default {
    
    template: "#mobile_menu_component",

    setup() {
        const services_show = Vue.ref(false);
        const menu_show = Vue.ref(false);
        let puncts = Vue.ref([])
        let puncts_main = Vue.ref([])

        var formData = new FormData();
        formData.append('action', "get_services_menu");
        formData.append('nonce', allAjax.nonce);

        axios.post(allAjax.ajaxurl, formData)
            .then(function (response) {                
                
                puncts.value = response.data.services_menu
                puncts_main.value = response.data.main_menu
                console.log(puncts_main.value)
            })
            .catch(function (error) {
                console.log(error);
            })


        Vue.watch(services_show, (newValue) => {
             if(newValue) menu_show.value = false 
        })

        Vue.watch(menu_show, (newValue) => {
             if(newValue) services_show.value = false 
        })

        return {
            services_show, menu_show, puncts, puncts_main
        }
    }
}