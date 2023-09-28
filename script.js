function SendEmail() {
    var params = {

        full_name: document.getElementById("full_name").value,
        form_phone: document.getElementById("form_phone").value,
        form_email: document.getElementById("form_email").value,
        form_postcode: document.getElementById("form_postcode").value,
    }
    emailjs.send("service_hfs0rup", "template_freecashoffer", params).then(function (res) {
        location.replace("thankyou.html")
    })
}