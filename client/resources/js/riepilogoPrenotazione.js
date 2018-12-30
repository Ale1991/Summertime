function riepilogoPrenotazione(jsonPrenotazione) {
    var responsePrenotazione = JSON.parse(jsonPrenotazione);
    //console.log(responsePrenotazione)
    if (responsePrenotazione == 'devi essere loggato per prenotare!') {
        alert(responsePrenotazione)
    } else {
        var container_riepilogo = document.getElementById('container-riepilogo');
        container_riepilogo.style.display = 'block';

        document.getElementById('selectedList').style.display = 'none';
        document.getElementById('container-ombrelloni').style.display = 'none';
        document.getElementById('titolo-lido').style.display = 'none';
        document.getElementById('submitPrenotazione').style.display = 'none';
        document.getElementById('container-form-data').style.display = 'none';

        var titolo_riepilogo = document.createElement("h1");
        container_riepilogo.appendChild(titolo_riepilogo);
        var text_titolo_riepilogo = document.createTextNode('Riepilogo Prenotazione');
        titolo_riepilogo.appendChild(text_titolo_riepilogo);

        var nome_Utente = document.createElement("h6");
        container_riepilogo.appendChild(nome_Utente);
        var text_nome_utente = document.createTextNode('Congratulazioni ' + responsePrenotazione.nomeUtente);
        nome_Utente.appendChild(text_nome_utente);

        var nomeLido = document.createElement("p");
        container_riepilogo.appendChild(nomeLido);
        var text_nome_lido = document.createTextNode('hai effettuato la prenotazione presso il Lido ' + responsePrenotazione.nomeLido);
        nomeLido.appendChild(text_nome_lido);

        var nome_gestore = document.createElement("p");
        container_riepilogo.appendChild(nome_gestore);
        var text_nome_gestore = document.createTextNode('di ' + responsePrenotazione.nomeGestore);
        nome_gestore.appendChild(text_nome_gestore);

        var indirizzo = document.createElement("p");
        container_riepilogo.appendChild(indirizzo);
        var text_indirizzo = document.createTextNode('in via ' + responsePrenotazione.via + ' n. ' + responsePrenotazione.civico + ' ,' + responsePrenotazione.comune + ' ,' + responsePrenotazione.provincia);
        indirizzo.appendChild(text_indirizzo);

        var data = document.createElement("p");
        container_riepilogo.appendChild(data);
        var text_data = document.createTextNode('dal ' + responsePrenotazione.dataIn + ' al ' + responsePrenotazione.dataOut);
        data.appendChild(text_data);

        var button = document.createElement("input");
        button.type = "button";
        button.id = "buttonHome";
        button.className = "btn btn-primary btn-block";
        button.value = "Torna alla Home";
        button.onclick = function () {
            window.location = 'http://summertime/client/index.html';
        }
        container_riepilogo.appendChild(button);
    }

}

