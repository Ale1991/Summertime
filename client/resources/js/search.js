var searchRequest = '';

$(document).ready(function () {
    $("#lista-lidi").hide();
    $("#location").autocomplete({ source: nomiComuni });

    $("#submitRicerca").on('click', getListaLidi)

})
