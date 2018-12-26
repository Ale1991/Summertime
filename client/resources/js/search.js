var searchRequest = '';

$(document).ready(function () {
    //$("#lista-lidi").style.display = 'none'
    $("#lista-lidi").hide();
    //document.getElementById('lista-lidi').style.display = 'none';
    $("#location").autocomplete({ source: nomiComuni });

    $("#submitRicerca").on('click', getListaLidi)
})