<?php

$endpoint = '/api/v1/prenotazioni';

$getPrenotazioni = require 'getPrenotazioni.php';
$addLido = require 'addPrenotazione.php';
$getPrenotazione = require 'getPrenotazione.php';
$updatePrenotazione = require 'updatePrenotazione.php';
$deletePrenotazione = require 'deletePrenotazione.php';

//Get all Prenotazioni implementato e testato
$app->get($endpoint, function ($request, $response) {
    getPrenotazioni($request, $response);
});

//implementato e testato
$app->post($endpoint, function ($request, $response) {
    addPrenotazione($request, $response);
});

//da implementare
$app->get($endpoint . '/:idPrenotazione', function ($request, $response) {
    getPrenotazione($request, $response);
});

//da implementare
$app->put($endpoint . '/:idPrenotazione', function ($request, $response) {
    //updatePrenotazione($request, $response);
});

//da implementare
$app->delete($endpoint . '/:idPrenotazione', function ($request, $response) {
    //deletePrenotazione($request, $response);
});
