// Open
function openModal() {
    document.getElementById('mymodal').style.display = 'block';
}

// Close
function closeModal() {
    document.getElementById('mymodal').style.display = 'none';
}
function logout() {
    datiLogout = {
        'nomeUtente': $('#form_username_log').val(),
    }
    $.ajax({
        url: "http://summertimeapp.server/api/v1/utenti/logout",
        type: "POST",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        },
        contentType: 'application/json',
        data: JSON.stringify(datiLogout),
        success: function (jsonRisposta) {
            sessionStorage.removeItem('dataStored');
            $('#modal-btn-login').show();
            $('#modal-btn-logout').hide();
            $('#textp').text('Benvenuto Guest');
        }
    });
}


$(document).ready(function () {

    if (typeof sessionStorage['dataStored'] === 'undefined') {
        $('#modal-btn-login').show();
        $('#modal-btn-logout').hide();
        var idUtente = 'Guest';
    } else {
        $('#modal-btn-login').hide();
        $('#modal-btn-logout').show();
        var dataSession = sessionStorage['dataStored'];
        var dataParsed = JSON.parse(dataSession);
        var idUtente = dataParsed.sessions_userid
    }
    var cont = document.getElementById('colorlib-logo');
    var p = document.createElement('p');
    cont.appendChild(p);
    var idp = document.createAttribute('id');
    idp.value = 'textp';
    p.setAttributeNode(idp);
    var textp = document.createTextNode('Benvenuto ' + idUtente);
    p.appendChild(textp);

    $('#modal-btn-login').on('click', openModal);
    $('#closemodal').on('click', closeModal);
    $('#username_error_message').hide();

    $('#login_form').on('click', function () {
        datiLogin = {
            'nomeUtente': $('#form_username_log').val(),
            'password': $('#form_password_log').val(),
        }
        $.ajax({
            url: "http://summertimeapp.server/api/v1/utenti/login",
            type: "POST",
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            contentType: 'application/json',
            data: JSON.stringify(datiLogin),
            success: function (jsonRisposta) {

                var risposta = JSON.parse(jsonRisposta);
                if (risposta.message.includes('Success')) {
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
                    var text = document.createTextNode(risposta.message + 'Welcome ' + risposta.sessions_userid);
                    h2.appendChild(text);
                    $("#h2text").fadeToggle(6000, "swing", function () {
                        this.remove();
                    });
                }
                else {
                    $('#username_error_message').html(risposta.message);
                    $('#username_error_message').show();
                }
                $('#textp').text('Benvenuto ' + risposta.sessions_userid)
            }
        });

    })

    $('#modal-btn-logout').on('click', logout)


})