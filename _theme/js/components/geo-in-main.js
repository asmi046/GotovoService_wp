

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

        const catid = props.catid
        
        return {ao, vetki, catid}
    },

}