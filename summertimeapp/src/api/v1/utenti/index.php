<?php

$endpoint = '/api/v1/utenti';

$getUtenti = require 'getUtenti.php';
$addUtente = require 'addUtente.php';

//$getUtente = require 'getUtente.php';
//$updateUtente = require 'updateUtente.php';
//$deleteUtente = require 'deleteUtente.php';

//da implementare
$app->get($endpoint, function ($request, $response) {
    getUtenti($request, $response);
});

$app->post($endpoint, function ($request, $response) {
    addUtente($request, $response);
});

//da implementare
$app->get($endpoint . '/:idUtente', function ($request, $response) {
    //getUtente($request, $response);
});

//da implementare
$app->put($endpoint . '/:idUtente', function ($request, $response) {
    //updateUtente($request, $response);
});

//da implementare
$app->delete($endpoint . '/:idUtente', function ($request, $response) {
    //deleteUtente($request, $response);
});
