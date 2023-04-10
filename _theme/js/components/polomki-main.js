export default {
    
    template: "#main_breakdowns",

    data() {
        return {
            selectedBlk: "Ремонт компьютеров"
        }
    },

    methods: {
        showBox(boxname) {
            this.selectedBlk = boxname;
        }
    },


}