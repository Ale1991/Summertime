<?php

$endpoint = '/api/v1/lidi';

$getLidi = require 'getLidi.php';
$addLido = require 'addLido.php';

//$getLido = require 'getLido.php';
//$updateLido = require 'updateLido.php';
//$deleteLido = require 'deleteLido.php';


//Get all Lidi implementato e testato
$app->get($endpoint, function ($request, $response) {
    getLidi($request, $response);
});
//implementato e testato
$app->post($endpoint, function ($request, $response) {
    addLido($request, $response);
});

//da implementare
$app->get('/api/v1/lido/{idLido}', function ($request, $response) {
    getLido($request, $response);
});

//da implementare
$app->put($endpoint . '/:idLido', function ($request, $response) {
    //updateLido($request, $response);
});

//da implementare
$app->delete($endpoint . '/:idLido', function ($request, $response) {
    //deleteLido($request, $response);
});

