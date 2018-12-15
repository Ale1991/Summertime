/* var requestData = null;
var mappa; */
function load() {
	$.ajax({
		url: "/tour/Control/CHomeGestore.php",
		type: "GET",
		cache: false,
		async: false,
		dataType: 'json',
		data: { 'session': '<?php echo md5(uniqid(mt_rand(),true))?>', 'id': 17 },
		success: getJSONGrid
	});
}
//var ajaxGET = $.get("map.php", getJSONGrid());

function getJSONGrid(data) {
	mappa = data;
	var dati = data.splice(data.length - 1, 1);

	var containertitolo = document.getElementById("titolo-lido");

	var nomeLido = document.createElement("h1");
	containertitolo.appendChild(nomeLido);
	var textNomeLido = document.createTextNode('Lido ' + dati[0].nomeLido);
	nomeLido.appendChild(textNomeLido);

	var nomeGestore = document.createElement("h3");
	containertitolo.appendChild(nomeGestore);
	var textNomeGestore = document.createTextNode('Di: ' + dati[0].cognome + ' ' + dati[0].nome);//
	nomeGestore.appendChild(textNomeGestore);

	var idLido = document.createElement("h6");
	containertitolo.appendChild(idLido);
	var textIdLido = document.createTextNode('Id Lido: ' + dati[0].idLido);
	idLido.appendChild(textIdLido);

	var containerHeaderText = document.getElementById("headText");
	var nomeLidoHead = document.createElement("h1");
	containerHeaderText.appendChild(nomeLidoHead);
	nomeLidoHead.appendChild(textNomeLido);

	var lastElement = data[data.length - 1].riga;
	var numerorighe = lastElement.charCodeAt(0) - 64;
	var numerocolonne = data[data.length - 1].colonna;

	document.getElementById("container-ombrelloni").style.width = 40 * 1.8 * numerocolonne + "px";//set logica dimensione righe
	document.getElementById("container-ombrelloni").style.backgroundImage = "url('sabbia.jpg')";

	var i = 0;
	for (var rows = 0; rows < numerorighe; rows++) {
		for (var columns = 0; columns < numerocolonne; columns++) {
			//$("#container").append('<div class=grid id=' + mappa[i].id + '>  </div>');//sintassi jquery
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

$(function () {
	load();
});

function sendDate() {
	const form = {
		dateIn: document.getElementById('dateIn'),
		dateOut: document.getElementById('dateOut'),
		//submit: document.getElementById('submit'),
		//messages: document.getElementById('errorMessages'),
	};

	requestData = `dateIn=${form.dateIn.value}&dateOut=${form.dateOut.value}`//
	var ajaxPOST = $.post("/tour/Control/CPrenotazione.php", requestData, function () {
		//console.log(requestData);
		console.log(ajaxPOST.responseText);
	});
}

$(document).ready(function () {  //jQuery string (tolto per eliminare la dipendenza da jQuery)
	//document.addEventListener("DOMContentLoaded", function () { //javascript pure dom ready

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

	$(".grid-ombrelloni").click(function () {
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
		}
		else {
			if (clickedDiv.getAttribute("selected") == 'true') {
				clickedDiv.setAttribute("selected", 'false');
				clickedDiv.style.borderColor = "green";
				var elem = document.getElementById('list-' + this.id);
				elem.parentNode.removeChild(elem);
			}
		}
	})

	var btn = document.getElementById("submit");
	//btn.addEventListener('click', sendDate);//funzionante ma non gestisce il caso di campi vuoti
	btn.addEventListener('click', function () {
		var messaggioErrori = '';
		if ($('#dateIn').val() == '') {
			var containerErrori = document.getElementById("errorMessages");
			messaggioErrori = "inserire la data di check in!";
		}
		if ($('#dateOut').val() == '' && document.getElementById('singleDay-check').checked == false) {
			messaggioErrori += "inserire la data di check out!"
		}
		if (messaggioErrori == '') {
			sendDate();
		}
		else {
			alert(messaggioErrori);
		}
	})
})
