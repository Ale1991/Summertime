function getJSONGrid(dataResponse) {
    var data = JSON.parse(dataResponse);//non serve piu' perche il server invia solo content/type json

    dati = data.splice(data.length - 1, 1);
    mappa = data;
    var containertitolo = document.getElementById("titolo-lido");

    var nomeLido = document.createElement("h1");
    containertitolo.appendChild(nomeLido);
    var textNomeLido = document.createTextNode('Lido ' + dati[0].nomeLido);
    nomeLido.appendChild(textNomeLido);

    var nomeGestore = document.createElement("h3");
    containertitolo.appendChild(nomeGestore);
    textNomeGestore = document.createTextNode(dati[0].nomeGestore);//
    nomeGestore.appendChild(textNomeGestore);

    var idLido = document.createElement("h6");
    containertitolo.appendChild(idLido);
    textIdLido = document.createTextNode(dati[0].idLido);
    idLido.appendChild(textIdLido);

    var containerHeaderText = document.getElementById("headText");
    var nomeLidoHead = document.createElement("h1");
    containerHeaderText.appendChild(nomeLidoHead);
    nomeLidoHead.appendChild(textNomeLido);

    var numerorighe = data[data.length - 1].riga;
    var numerocolonne = data[data.length - 1].colonna;

    document.getElementById("container-ombrelloni").style.width = 40 * 1.8 * numerocolonne + "px";//set logica dimensione righe
    //document.getElementById("container-ombrelloni").style.backgroundImage = "url('./resources/images/sabbia.jpg')";

    var i = 0;
    for (var rows = 0; rows < numerorighe; rows++) {
        for (var columns = 0; columns < numerocolonne; columns++) {

            var element = document.createElement("div");//sintassi pure js
            var container = document.getElementById("container-ombrelloni");
            container.appendChild(element);

            var divClass = document.createAttribute("class");
            divClass.value = "grid-ombrelloni";
            element.setAttributeNode(divClass);

            var divID = document.createAttribute("id");
            divID.value = data[i].id;
            element.setAttributeNode(divID);

            var divRiga = document.createAttribute("riga");
            divRiga.value = data[i].riga;
            element.setAttributeNode(divRiga);

            var divColonna = document.createAttribute("colonna");
            divColonna.value = data[i].colonna;
            element.setAttributeNode(divColonna);

            var divOccupato = document.createAttribute("occupato");
            divOccupato.value = data[i].occupato;
            element.setAttributeNode(divOccupato);

            var divSelected = document.createAttribute("selected");
            divSelected.value = "false";
            element.setAttributeNode(divSelected);

            if (element.getAttributeNode("occupato").value == 'false') {
                element.style.borderColor = "green";
            }
            else {
                element.style.borderColor = "red";
                element.style.pointerEvents = "none";
            }
            i++;
        };
    };
}