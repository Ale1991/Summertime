var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};
var id_Lido = getUrlParameter('IDLido');
var dataPrenotazione = '';
var datiPrenotazione;
var dati;
var mappa;

function load() {
    $.ajax({
        url: 'http://summertimeapp.server/api/v1/lidi/' + id_Lido,
        type: "GET",
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        },
        contentType: 'application/json',
        success: getJSONGrid
    });
}

$(function () {
    load();
});


$(document).ready(function () {
    $('#dateIn').datepicker('setStartDate', 'today');
    $('#dateOut').datepicker('setStartDate', 'today');
    document.getElementById('form-group out').style.display = 'none';

    $('#singleDay-check').on('change', function () {
        $('#dateIn').val('');//reset valori iniziali
        $('#dateOut').val('');//reset valori iniziali
        document.getElementById('form-group out').style.display = 'none';
    });

    $("#dateIn").datepicker().on('changeDate', function (selected) {
        $('#dateOut').datepicker('setStartDate', $('#dateIn').val());//inizializzo l'inizio dei valori della data finale con quella iniziale
        $('#dateOut').datepicker('setDate', $('#dateIn').val());//inizializzo la data finale con il valore di quella iniziale in modo da non far mandare il campo vuoto

        if ($('#dateIn').val() != '' && document.getElementById('singleDay-check').checked == false) {
            document.getElementById('form-group out').style.display = 'block';
        }
    });

    $(document).on("click", ".grid-ombrelloni", function () {
        var clickedDiv = document.getElementById(this.id);

        if (clickedDiv.getAttribute("selected") == 'false') {
            clickedDiv.setAttribute("selected", 'true');
            var element = document.createElement("li");
            var container = document.getElementById("selectedList");
            container.appendChild(element);
            var liID = document.createAttribute("id");
            liID.value = "list-" + this.id;
            element.setAttributeNode(liID);
            var text = document.createTextNode('posto_' + this.id);
            element.appendChild(text);
            clickedDiv.style.borderColor = "blue";
            if (dataPrenotazione != '') {
                btnPrenotazione.style.display = 'block';
            }
            else {
                alert('inserisci prima la data!')
            }

        }
        else {
            if (clickedDiv.getAttribute("selected") == 'true') {
                clickedDiv.setAttribute("selected", 'false');
                clickedDiv.style.borderColor = "green";
                var elem = document.getElementById('list-' + this.id);
                elem.parentNode.removeChild(elem);
                if (document.getElementById('selectedList').getElementsByTagName('li').length == 0) {
                    btnPrenotazione.style.display = 'none';
                }
            }
        }
    });

    var btnDisponibilita = document.getElementById("submit");
    btnDisponibilita.addEventListener('click', function () {
        var messaggioErrori = '';
        if ($('#dateIn').val() == '') {
            var containerErrori = document.getElementById("errorMessages");
            messaggioErrori = "inserire la data di check in!";
        }
        if ($('#dateOut').val() == '' && document.getElementById('singleDay-check').checked == false) {
            messaggioErrori += "inserire la data di check out!"
        }
        if (messaggioErrori == '') {
            getOmbrelloni();
        }
        else {
            alert(messaggioErrori);
        }
        if ($('#dateIn').val() != '' && $('#dateOut').val() != '') {
            dataPrenotazione = $('#dateIn').val() + '&' + $('#dateOut').val();
            dataIn = $('#dateIn').val();
            dataOut = $('#dateOut').val();
        }
    })

    var btnPrenotazione = document.getElementById("submitPrenotazione");
    btnPrenotazione.style.display = 'none';

    btnPrenotazione.addEventListener('click', postPrenotazione);

})

