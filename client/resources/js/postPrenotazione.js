function postPrenotazione() {
    if (document.getElementById('selectedList').getElementsByTagName("li").length == 0) {
        alert("seleziona almeno un ombrellone!")
    }
    else {

        if (typeof sessionStorage['dataStored'] === 'undefined') {
            $('#modal-btn-login').show();
            $('#modal-btn-logout').hide();
            var idUtente = 'Guest';
            var sessions_id = null;
        } else {
            $('#modal-btn-login').hide();
            $('#modal-btn-logout').show();
            var dataSession = sessionStorage['dataStored'];
            var dataParsed = JSON.parse(dataSession);
            var idUtente = dataParsed.sessions_userid;
            var sessions_id = dataParsed.sessions_id;
        }

        console.log(idUtente)
        var array = [];
        var listaOmbrelloni = document.getElementById('selectedList').getElementsByTagName("li");
        for (var i = 0; i < document.getElementById('selectedList').getElementsByTagName("li").length; i++) {

            var id = listaOmbrelloni[i].id.split("-")
            id = id[1];
            array[i] = id;
        }
        datiPrenotazione = {
            'dataIn': dataIn,
            'dataOut': dataOut,
            'ombrelloni': array,
            'idLido': dati[0].idLido,
            'nomeGestore': dati[0].nomeGestore,
            'nomeLido': dati[0].nomeLido,
            'dataApertura': dati[0].dataApertura,
            'dataChiusura': dati[0].dataChiusura,
            'idGestore': dati[0].nomeGestore,
            'idUtenteLoggato': idUtente,
            'via': dati[0].via,
            'civico': dati[0].civico,
            'comune': dati[0].comune,
            'provincia': dati[0].provincia,
            'sessions_id': sessions_id
        }
    }
    $.ajax({
        url: "http://summertimeapp.server/api/v1/prenotazioni",
        type: "POST",
        //cache: false,
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        },
        contentType: 'application/json',
        data: JSON.stringify(datiPrenotazione),
        success: riepilogoPrenotazione
    });
}

