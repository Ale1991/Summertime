<?php

$endpoint = '/api/v1/copertina';


require 'addCopertina.php';
require 'getCopertina.php';
require 'updateCopertina.php';
require 'deleteCopertina.php';

//Get all Lidi implementato e testato
$app->get($endpoint, function ($request, $response) {
    //getLidi($request, $response);
});
//implementato e testato
$app->post($endpoint, function ($request, $response, $args) {
    addCopertina($request, $response);
});

//implementato, testato e funzionante nel client js
$app->get($endpoint . '/{idLido}', function ($request, $response) {
    getCopertina($request, $response);
    //$response = $response->withHeader('Content-type', 'application/json');//da sistemare l'header di risposta php del server sempre (Content-Type: text/html;)
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