

export default {
    
    template: "#geo_in_main",

    props: {
        catid: String
    },

    setup(props) {

        let selected_ao = Vue.ref("ЮАО")

        function setSelectedAo(value){ 
            console.log(value)
            selected_ao.value = value }

        let selected_vetka = Vue.ref("Арбатско-Покровская линия")
        
        function setSelectedVetka(value){ selected_vetka.value = value }

        const catid = props.catid

        var main_data = Vue.ref([])
        var is_empty = Vue.ref(false)

        

        var formData = new FormData();
        formData.append('action', "get_cat_geo");
        formData.append('nonce', allAjax.nonce);
        formData.append('catid', catid);


        axios.post(allAjax.ajaxurl, formData)
            .then(function (response) {
                main_data.value = response.data
                selected_ao.value = (Object.keys(main_data.value.ao).length != 0)?Object.keys(main_data.value.ao)[0]:"" 
                selected_vetka.value = (Object.keys(main_data.value.metro).length != 0)?Object.keys(main_data.value.metro)[0]:"" 
                
                is_empty.value = ((selected_ao.value == "") && (selected_vetka.value == ""))

            })
            .catch(function (error) {
                console.log(error);
            })
        
        
        return {selected_vetka, is_empty, selected_ao, main_data, setSelectedAo, setSelectedVetka}
    },

    

}