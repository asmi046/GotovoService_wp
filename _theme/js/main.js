document.addEventListener("DOMContentLoaded", () => { 
    const masters_selector = document.querySelectorAll(".masters_selector")



    for (let i = 0; i < masters_selector.length; i++) { 
        masters_selector[i].addEventListener("click", function (e) {

            e.preventDefault()
            let box_id = masters_selector[i].dataset.masterbox

            for (let i = 0; i < masters_selector.length; i++)
                masters_selector[i].classList.remove("active")

            masters_selector[i].classList.toggle("active")

            const master_info = document.querySelectorAll(".master-info")
            for (let i = 0; i < master_info.length; i++)
                master_info[i].classList.remove("active")

            document.getElementById(box_id).classList.toggle("active")
        })
    }
})