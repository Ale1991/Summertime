<?php

$endpoint = '/api/v1/utenti';

$getUtenti = require 'getUtente.php';
$addUtente = require 'addUtente.php';
$deleteUtente = require 'deleteUtente.php';
$updateUtente = require 'updateUtente.php';

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
$app->delete($endpoint . '/:idUtente', function ($request, $response) {
    //deleteUtente($request, $response);
});

//$app->get($endpoint . '/login', function ($request, $response) {
//
//});

//$app->post($endpoint . '/login', function ($request, $response) {
//    $nomeUtente = $request->getParsedBody()['nomeUtente'];
//    $password = $request->getParsedBody()['password'];

 /*   try {
        $futente = new FUtente();
        $utente = $futente->getObject($nomeUtente);
        if ($utente->getPassword() == $password) {
            //session_start();//????????????????????????????
            $_SESSION['utente'] = $nomeUtente;
            $message = [
                "text" => 'Successfully logged!',
                "session" => $_SESSION,
            ];
            echo json_encode($message);
        } else {
            $message = [
                "text" => 'Nome Utente o Password errati!',
                "session" => '',
            ];
            echo json_encode($message);//da gestire l'eccezione lato FUtente! verifica se esiste il nome utente richiesto, altrimenti lanciare da restituire
        }

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }

});

$app->get($endpoint . '/logout', function ($request, $response) {
    Session::destroy();
    // Redirect to home page after logout
    //$response->redirect($app->urlFor('/'), 303);
});
*/