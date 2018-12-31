<?php

$endpoint = '/api/v1/lidi';

require 'getLidi.php';
require 'addLido.php';
require 'getLido.php';
require 'updateLido.php';
require 'deleteLido.php';

//Get all Lidi implementato e testato
$app->get($endpoint, function ($request, $response) {
    getLidi($request, $response);
});
//implementato e testato
$app->post($endpoint, function ($request, $response) {
    addLido($request, $response);
});

//implementato, testato e funzionante nel client js
$app->get($endpoint . '/{idLido}', function ($request, $response) {
    getLido($request, $response);
});

//non implementare
$app->put($endpoint . '/:idLido', function ($request, $response) {
    //updateLido($request, $response);
});

//non implementare
$app->delete($endpoint . '/:idLido', function ($request, $response) {
    //deleteLido($request, $response);
});
?>