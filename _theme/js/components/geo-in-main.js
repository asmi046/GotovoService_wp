

export default {
    
    template: "#geo_in_main",

    props: {
        catid: String
    },

    setup(props) {

        const ao = [
            "ЮАО",
            "ВАО",
            "ЮЗАО",
            "СВАО",
            "Московская область",
            "ЮВАО",
            "ЗАО",
            "САО",
            "ЦАО",
            "НАО",
            "ЗЕЛАО",
            "ТАО",
            "СЗАО",
        ]

        let selected_ao = Vue.ref("ЮАО")

        function setSelectedAo(value){
            selected_ao.value = value
        }

        const vetki = [
            {name: "Арбатско-Покровская линия", class: "arbatsko-pokrovskaya" },
            {name: "Большая кольцевая линия", class: "bolshaya-koltsevaya" },
            {name: "Бутовская линия", class: "butovskaya" },
            {name: "Калининско-Солнцевская линия", class: "kalininsko-sontsevskaya" },
            {name: "Замоскворецкая линия", class: "zamoskvorec" },
            {name: "Калужско-Рижская линия", class: "kaluzhsko-rizhskaya" },
            {name: "Каховская линия", class: "kahovskaya" },
            {name: "Кольцевая линия", class: "koltsevaya" },
            {name: "Люблинско-Дмитровская линия", class: "lublinsko-dmitrovskaya" },
            {name: "Московская монорельсовая транспортная система", class: "monorels" },
            {name: "Московское центральное кольцо", class: "mtsk" },
            {name: "МЦД-1 Лобня — Одинцово", class: "d_1" },
            {name: "МЦД-2 Нахабино — Подольск", class: "d_2" },
            {name: "Некрасовская линия", class: "nekrasovskaya" },
            {name: "Серпуховско-Тимирязевская линия", class: "serpuho-timiryazevskaya" },
            {name: "Сокольническая линия", class: "sokolnicheskaya" },
            {name: "Таганско-Краснопресненская линия", class: "tagansko-krasnopresnenskaya" },
            {name: "Филёвская линия", class: "filevskaya" }
        ]

        let selected_vetka = Vue.ref("Арбатско-Покровская линия")
        
        function setSelectedVetka(value){
            selected_vetka.value = value
        }

        const catid = props.catid

        var main_data = Vue.ref([])

        

        // Vue.onMounted(() => {
            var formData = new FormData();
            formData.append('action', "get_cat_geo");
            formData.append('nonce', allAjax.nonce);
            formData.append('catid', catid);


            axios.post(allAjax.ajaxurl, formData)
                .then(function (response) {
                    main_data.value = response.data
                    console.log(response.data)
                })
                .catch(function (error) {
                    console.log(error);
                })
        // })
        
        return {ao, vetki, selected_vetka, selected_ao, main_data, setSelectedAo, setSelectedVetka}
    },

    

}