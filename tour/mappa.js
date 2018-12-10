var mappa;


function load()
{
	$.ajax({
	url: "map.php",
	type: "GET",
	cache: false,
	async: false,
	dataType: 'json',
	data: {
		'session': '<?php echo md5(uniqid(mt_rand(),true))?>', 
		'id': 17

	},
		
	success: function(data){
		mappa=data;
		console.dir(mappa);
		var dati = data.splice(data.length -1 , 1);
		
		


		
		var containertitolo =document.getElementById("titolo-lido");


		var nomeLido = document.createElement("h1");
		containertitolo.appendChild(nomeLido);
		var textNomeLido = document.createTextNode('Lido ' + dati[0].nomeLido);		
		nomeLido.appendChild(textNomeLido); 	
		
        var nomeGestore = document.createElement("h3");
		containertitolo.appendChild(nomeGestore);
		var textNomeGestore = document.createTextNode('Di: ' + dati[0].cognome+ ' ' + dati[0].nome);//
		nomeGestore.appendChild(textNomeGestore);


		var idLido = document.createElement("h6");
		containertitolo.appendChild(idLido);
		var textIdLido = document.createTextNode('Id Lido: ' + dati[0].idLido);
		idLido.appendChild(textIdLido); 

		
		


		var lastElement = data[data.length - 1].riga;
		var numerorighe = lastElement.charCodeAt(0) - 64 ;
		var numerocolonne = data[data.length - 1].colonna;
		
		document.getElementById("container-ombrelloni").style.width =  40*1.9*numerocolonne + "px";
		
		
		var i=0;
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
				i++;
			};

			
		};
		$(".grid-ombrelloni").width(40);
		$(".grid-ombrelloni").height(40);
		$(".grid-ombrelloni").append('<img class ="grid-ombrelloni-img" src="umbrella.jpg" />')
		//$(".grid-ombrelloni").append('<img class="img-circle" src="umbrella.jpg" />')

		

	}
});
}


$(function(){
	load();
}); 


//$(document).ready(function () {  //jQuery string (tolto per eliminare la dipendenza da jQuery)
document.addEventListener("DOMContentLoaded", function () { //javascript pure dom ready
    
	var cliccato = false;
	$(".grid-ombrelloni").click(function () {

		var clickedDiv = document.getElementById(this.id);

		if (clickedDiv.getAttribute("selected") == 'false')
		{
			clickedDiv.setAttribute("selected" , 'true');
			var element = document.createElement("li");
			var container = document.getElementById("selectedList");
			container.appendChild(element);

			var liID = document.createAttribute("id");
			liID.value = "list-" + this.id;
			element.setAttributeNode(liID);
			var text = document.createTextNode('posto_'+this.id);
			element.appendChild(text); 
			
			clickedDiv.style.borderColor = "green";
			//console.log(document.getElementById('list-'+this.id));
 
		}
		else
		{
			if (clickedDiv.getAttribute("selected") == 'true') 
			{
				clickedDiv.setAttribute("selected", 'false');
				clickedDiv.style.borderColor = "black";
				var elem = document.getElementById('list-' + this.id);
				elem.parentNode.removeChild(elem);
			}
		}
	})
})



//function per debug variabili con button associato nell'HTML
function checkdiv() {
	
	

	console.log(container);
}
