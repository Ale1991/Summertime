$(document).ready(function () {

    $("#submitRicerca").on("click", function () {
        console.log($('#location').val());
        
        $('#name').devbridgeAutocomplete().setOptions({
            params: { add: add }
        });

        $('.location').devbridgeAutocomplete();

    })
})