function getOmbrelloni() {
    const form = {
        dateIn: document.getElementById('dateIn'),
        dateOut: document.getElementById('dateOut'),
    };
    requestData = {
        dataIn: form.dateIn.value,
        dataOut: form.dateOut.value,
        idLido: dati[0].idLido
    }

    $.ajax({
        url: "http://summertimeapp.server/api/v1/prenotazioni/ombrelloni",
        type: "POST",
        //cache: false,
        crossDomain: true,
        xhrFields: {
            withCredentials: true
        },
        contentType: 'application/json',
        data: JSON.stringify(requestData),
        success: function (json) {
            var response = JSON.parse(json);
            for (i = 0; i < mappa.length; i++) {
                var element = document.getElementById(mappa[i].id);
                element.style.borderColor = "green";
                element.style.pointerEvents = "auto";
            }
            for (i = 0; i < response.arrayDB.length; i++) {
                var idtemp = response.arrayDB[i];
                var element = document.getElementById(idtemp);
                element.style.borderColor = "red";
                element.style.pointerEvents = "none";
            }
        }
    });
}