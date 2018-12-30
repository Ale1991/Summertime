<?php

$endpoint = '/api/v1/utenti';

require 'getUtente.php';
require 'addUtente.php';
require 'deleteUtente.php';
require 'updateUtente.php';

//$getUtente = require 'getUtente.php';
//$updateUtente = require 'updateUtente.php';
//$deleteUtente = require 'deleteUtente.php';

//da implementare
//$app->get($endpoint, function ($request, $response) {
//    
//});

$app->post($endpoint, function ($request, $response) {
    addUtente($request, $response);
});


$app->get($endpoint . '/{idUtente}', function ($request, $response) {
    getUtente($request, $response);
});

//da implementare
$app->put($endpoint, function ($request, $response) {
    updateUtente($request, $response);
});

//da implementare
$app->delete($endpoint . '/{idUtente}', function ($request, $response) {
    deleteUtente($request, $response);
});

//test alessio
$startSession = require 'startSession.php';
$stopSession = require 'stopSession.php';

//test alessio
$app->post($endpoint . '/login', function ($request, $response) {
    startSession($request, $response);

});
//test alessio
$app->post($endpoint . '/logout', function ($request, $response) {
    stopSession($request, $response);
});
