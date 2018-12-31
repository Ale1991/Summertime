<?php

$endpoint = '/api/v1/utenti';

require 'getUtente.php';
require 'addUtente.php';
require 'updateUtente.php';
require 'deleteUtente.php';
require 'startSession.php';
require 'stopSession.php';


//implementato e funzionante
$app->get($endpoint . '/{idUtente}', function ($request, $response) {
    getUtente($request, $response);
});

//implementato e funzionante
$app->post($endpoint, function ($request, $response) {
    addUtente($request, $response);
});

//da implementare
$app->put($endpoint, function ($request, $response) {
    updateUtente($request, $response);
});

//da implementare
$app->delete($endpoint . '/{idUtente}', function ($request, $response) {
    deleteUtente($request, $response);
});

//implementato e funzionante
$app->post($endpoint . '/login', function ($request, $response) {
    startSession($request, $response);

});
//implementato e funzionante
$app->post($endpoint . '/logout', function ($request, $response) {
    stopSession($request, $response);
});
