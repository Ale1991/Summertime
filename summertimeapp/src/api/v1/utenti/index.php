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

$app->get($endpoint.'/login', function($request, $response) {
	
});

$app->post($endpoint.'/login', function($request, $response) {
	$nomeUtente = $request->getParsedBody()['nomeUtente'];
    $password = $request->getParsedBody()['password'];
	
	try {
		$futente = new FUtente();
		$utente = $futente->getObject($nomeUtente);
		if($utente->getPassword() == $password) {
			$_SESSION['utente'] = $nomeUtente;
			echo 'Successfully logged!';
		}

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
	
});

$app->get($endpoint.'/logout', function($request, $response) {
	Session::destroy();
	// Redirect to home page after logout
	//$response->redirect($app->urlFor('/'), 303);
});
