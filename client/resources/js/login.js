// Open
function openModal() {
    document.getElementById('mymodal').style.display = 'block';
}

// Close
function closeModal() {
    document.getElementById('mymodal').style.display = 'none';
}

$(document).ready(function () {


    //console.log(sessionStorage['dataStored'])
    if (typeof sessionStorage['dataStored'] === 'undefined') {
        $('#modal-btn-login').show();
        $('#modal-btn-logout').hide();
        var idUtente = 'Guest';
    } else {
        $('#modal-btn-login').hide();
        $('#modal-btn-logout').show();
        var dataSession = sessionStorage['dataStored'];
        var dataParsed = JSON.parse(dataSession);
        console.log(dataParsed)
        var idUtente = dataParsed.session['nomeUtente']
    }
    console.log(idUtente)


    //$('#modal-btn-logout').hide();
    $('#modal-btn-login').on('click', openModal);
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
            //cache: false,
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            contentType: 'application/json',
            data: JSON.stringify(datiLogin),
            success: function (jsonRisposta) {
                console.log(jsonRisposta)
                var risposta = JSON.parse(jsonRisposta);

                if (risposta.text == 'Successfully logged!') {
                    //session_id = risposta.session['id'];
                    sessionStorage.setItem('dataStored', jsonRisposta);
                    $('#modal-btn-login').hide();
                    $('#modal-btn-logout').show();
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
                    if (risposta.text == 'Already Logged') {
                        sessionStorage.setItem('dataStored', jsonRisposta);
                        $('#modal-btn-login').hide();
                        $('#modal-btn-logout').show();
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
            }
        });

    })



    $('#modal-btn-logout').on('click', function () {
        //console.log(JSON.stringify(datiLogout))
        datiLogout = {
            'nomeUtente': $('#form_username_log').val(),
            //     'password': $('#form_password_log').val(),
        }
        $.ajax({
            url: "http://summertimeapp/api/v1/utenti/logout",
            type: "POST",
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            contentType: 'application/json',
            data: JSON.stringify(datiLogout),
            success: function (jsonRisposta) {
                console.log(jsonRisposta)
                sessionStorage.removeItem('dataStored');
                $('#modal-btn-login').show();
                $('#modal-btn-logout').hide();
            }
        });
    })


})