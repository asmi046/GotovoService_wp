export default {
    template: "#modal_win",

    data() {
        return {
            name:"",
            phone:"",
            showModal:false,
            showLoader:false,
            errorList:[],
        }
    },

    props: ['rout', 'redirect', 'hesh', 'title', 'subtitle'],

    methods:{
        closeWin() {
            this.showModal = false
            history.pushState('', document.title, window.location.pathname+window.location.search)
        },

        openWin() {
            if (location.hash === '#'+this.hesh) {
                this.showModal = true
            }
        },

        sendMsg() {

            this.errorList = [];this.errorList

            if (this.phone == "")
                this.errorList.push("Поле 'Телефон' не заполнено");

            if (this.errorList.length != 0 ) return

            this.showLoader = true;

            var formData = new FormData();
            formData.append('action', "newsendr");
            formData.append('nonce', allAjax.nonce);
            formData.append('name', "");
            formData.append('phone', this.phone);
            formData.append('form_name', this.title);

            axios.post(allAjax.ajaxurl, formData)
            .then((response) => {
                this.showLoader = false
                document.location.href=this.redirect
            })
            .catch( (error) => {
                this.showLoader = false
                this.errorList.push(error.response.data.message)
                console.log(error)
            });
        }
    },

    mounted() {
        console.log("111");
        window.addEventListener('hashchange', this.openWin)

        if (location.hash === '#'+this.hesh) {
            this.showModal = true
        }
    }
}
