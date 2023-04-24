function messageSendet() {
    messageModalWin.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", () => { 

    let allPhoneInput = document.querySelectorAll("input[type=tel]");
    
    console.log(allPhoneInput)

    for (let i =0; i<allPhoneInput.length; i++)
        IMask(allPhoneInput[i], {mask: '+0 (000) 000-00-00'});

    let allPageForm = document.querySelectorAll("form");

    for (let i =0; i<allPageForm.length; i++)
        allPageForm[i].addEventListener("submit", e => {
            e.preventDefault();
            
            var formData = new FormData(allPageForm[i]);

            formData.append('action', "newsendr");
            formData.append('nonce', allAjax.nonce);

            let phone = formData.get("phone")
            

            let re = /([\+]?[7|8][\s-(]?[9][0-9]{2}[\s-)]?)?([\d]{3})[\s-]?([\d]{2})[\s-]?([\d]{2})/


            if (re.test(phone)) {

                fetch(allAjax.ajaxurl, {
                    method: "POST",
                    body: formData
                    }).then(res => console.log(res)).then(res => {
                        console.log(res)
                        document.location.href="/thencs";
                    }).catch(error => console.log(error))	
                
            }

            // messageSendet();
        })

})