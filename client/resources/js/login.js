// Open
function openModal() {
    document.getElementById('mymodal').style.display = 'block';
}

// Close
function closeModal() {
    document.getElementById('mymodal').style.display = 'none';
}

$(document).ready(function () {
    $('#modal-btn').on('click', openModal);
    $('#closemodal').on('click', closeModal);
    $('#username_error_message').hide();

    $('#login_form').on('click', function () {
        datiLogin = {
            'nomeUtente': $('#form_username_log').val(),
            'password': $('#form_password_log').val(),
        }
        //console.log(JSON.stringify(datiLogin))
        $.ajax({
            url: "http://summertimeapp/api/v1/utenti/login",
            type: "POST",
            contentType: 'application/json',
            data: JSON.stringify(datiLogin),
            success: function (jsonRisposta) {
                var risposta = JSON.parse(jsonRisposta);
                if (risposta.text == 'Successfully logged!') {
                    closeModal()
                    var container = document.getElementById('successLogin');
                    var h2 = document.createElement('h1');
                    container.appendChild(h2);
                    var idh2 = document.createAttribute('id');
                    idh2.value = 'h2text';
                    h2.setAttributeNode(idh2);
                    var text = document.createTextNode(risposta.text);
                    h2.appendChild(text);
                    $("#h2text").fadeToggle(6000, "swing", function () {
                        this.remove();
                    });
                } else {
                    $('#username_error_message').html(risposta.text);
                    $('#username_error_message').show();
                }
            }
        });

    })
})