<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


function loginUtente(Request $request, Response $response)
{
    $nomeUtente = $request->getParsedBody()['nomeUtente'];
    $password = $request->getParsedBody()['password'];

    try {
        $futente = new FUtente();
        $utente = $futente->getObject($nomeUtente);
        if ($utente->getPassword() == $password) {

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
}