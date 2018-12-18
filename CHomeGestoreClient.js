const idUtente = 'Alessio1991';
var dataPrenotazione = '';
var dati;

function load() {
	$.ajax({
		url: 'CHomeGestoreServer.php',
		//url: "map.php",
		type: "GET",
		cache: false,
		async: false,
		dataType: 'json',
		data: {
			idLido: "RSDVNTVRM66D763"
		},
		success: getJSONGrid
	});
}
//var ajaxGET = $.get("map.php", getJSONGrid());
function getJSONGrid(data) {
	mappa = data;
	
	dati = data.splice(data.length - 1, 1);
	
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

	//var lastElement = data[data.length - 1].riga;
	//var numerorighe = lastElement.charCodeAt(0) - 64;
	var numerorighe = data[data.length - 1].riga;
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
		//textIdLido: document.getElementById('titolo-lido').nodeValue,

		//submit: document.getElementById('submit'),
		//messages: document.getElementById('errorMessages'),
	};

	requestData = `dateIn=${form.dateIn.value}&dateOut=${form.dateOut.value}&IdLido=${dati[0].idLido}&nomeGestore=${dati[0].nomeGestore}`//
	var ajaxPOST = $.get("/Control/CVerificaDisponibilita.php", requestData, function () {


		var json = $.parseJSON(ajaxPOST.responseText)
		//const dataPrenotazione = json.dataIn + "&" + json.dataOut;
		//console.log(json.arrayDB);
		for (i = 0; i < json.arrayDB.length; i++) {
			var idtemp = json.arrayDB[i];
			var element = document.getElementById(idtemp);
			element.style.borderColor = "red";
			element.style.pointerEvents = "none";
			console.log(idtemp)
		}
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
	})


	var btnDisponibilita = document.getElementById("submit");
	//btn.addEventListener('click', sendDate);//funzionante ma non gestisce il caso di campi vuoti
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
			sendDate();
		}
		else {
			alert(messaggioErrori);
		}
		if ($('#dateIn').val() != '' && $('#dateOut').val() != '') {
			dataPrenotazione = $('#dateIn').val() + '&' + $('#dateOut').val();
			dataIn = $('#dateIn').val();
			dataOut = $('#dateOut').val();
			//console.log(dataPrenotazione)
		}
	})

	var btnPrenotazione = document.getElementById("submitPrenotazione");
	btnPrenotazione.style.display = 'none';





	btnPrenotazione.addEventListener('click', function () {
		//console.log(dataPrenotazione)
		console.log(dati[0]);
		if (document.getElementById('selectedList').getElementsByTagName("li").length == 0) {
			alert("seleziona almeno un ombrellone!")
		}
		else {
			var array = [];
			var listaOmbrelloni = document.getElementById('selectedList').getElementsByTagName("li");
			for (var i = 0; i < document.getElementById('selectedList').getElementsByTagName("li").length; i++) {
				//console.log(listaOmbrelloni[i].id)//console.log(array)
				var id = listaOmbrelloni[i].id.split("-")
				id = id[1];
				array[i] = id;
				//console.log(array[i])
			}
			datiPrenotazione = {
				'dataIn': dataIn,
				'dataOut': dataOut,
				'ombrelloni': array,
				'idLido': dati[0].idLido,
				'nomeLido': dati[0].nomeLido,
				'idGestore': dati[0].nomeGestore,
				'idUtenteLoggato': idUtente,//DA SISTEMARE LE VARIABILI DA INVIARE TRAMITE METODO POST JSON

				'via': dati[0].via,
				'civico': dati[0].civico,
				'comune': dati[0].comune,
				'provincia': dati[0].provincia,
			}
			//console.log(datiPrenotazione)
			var ajaxPOST = $.post("CPrenotazione.php", datiPrenotazione, function () {
				//var json = $.parseJSON(ajaxPOST.responseText);
				console.log(ajaxPOST.responseText)
			})
		}
	})


})
