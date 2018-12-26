function getListaLidi() {
    $.ajax({
        url: 'http://summertimeapp/api/v1/lidi',
        type: "GET",
        contentType: 'application/json',
        success: plotListaLidi
    });
}

function plotListaLidi(dataResponse) {
    $("#lista-lidi").empty();
    var data = JSON.parse(dataResponse);
    var array_match = [];
    var message = ''

    data.forEach(element => {
        if (element.comune.trim().toLowerCase() === $("#location").val().trim().toLowerCase()) {
            array_match.push(element)
            console.log(element.comune.trim().toLowerCase())
        }
    });
    if (array_match.length == 0) {
        message = 'nessun lido trovato'
    }

    console.log(array_match)
    if (array_match.length > 0) {
        var container_lidi = document.getElementById('lista-lidi');
        array_match.forEach(element => {

            var div = document.createElement("div");
            container_lidi.appendChild(div);

            var divClass = document.createAttribute("class");
            divClass.value = "col-md-6 col-sm-6 animate-box";
            div.setAttributeNode(divClass);

            var divDue = document.createElement("div");
            div.appendChild(divDue);
            var divDueClass = document.createAttribute("class");
            divDueClass.value = "lido-entry";
            divDue.setAttributeNode(divDueClass);

            a = document.createElement('a');
            a.href = "lido.html" + '?' + 'IDLido=' + element.IDLido;
            var aClass = document.createAttribute("class");
            aClass.value = "lido-img";
            a.setAttributeNode(aClass);
            var aStyle = document.createAttribute("style");
            aStyle.value = "background-image: url(images/hotel-1.jpg);";
            a.setAttributeNode(aStyle);
            divDue.appendChild(a);

            var divTre = document.createElement("div");
            divDue.appendChild(divTre);

            var divTreClass = document.createAttribute("class");
            divTreClass.value = "desc";
            divTre.setAttributeNode(divTreClass);
            var h3 = document.createElement("h3");
            divTre.appendChild(h3);
            aDue = document.createElement('a');
            aDue.href = "lido.html";
            var t = document.createTextNode(element.nomeLido);
            aDue.appendChild(t);
            h3.appendChild(aDue);

            var span = document.createElement("span");
            divTre.appendChild(span);

            var spanClass = document.createAttribute("class");
            spanClass.value = "place";
            span.setAttributeNode(spanClass);

            var tSpan = document.createTextNode('in via: ' + element.via + ' n. ' + element.civico + ', ' + element.comune + ', ' + element.provincia);
            span.appendChild(tSpan);
        });
    }
    $("#lista-lidi").show();
}
