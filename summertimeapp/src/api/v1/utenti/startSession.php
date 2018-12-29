<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function startSession(Request $request, Response $response)
{
    $nomeUtente = $request->getParsedBody()['nomeUtente'];
    $password = $request->getParsedBody()['password'];


    try
    {
        $futente = new FUtente();
        $utente = $futente->getObject($nomeUtente);
        if ($utente->getPassword() == $password) {

            if (!isset($_SESSION['nomeUtente']) || session_id() == '') {
                //session_start();
                $_SESSION['nomeUtente'] = $nomeUtente;
                $_SESSION['id'] = session_id();
                $message = [
                    "text" => 'Successfully logged!',
                    "session" => $_SESSION,
                ];
            } else {
                $_SESSION['nomeUtente'] = $nomeUtente;
                $_SESSION['id'] = session_id();
                $message = [
                    "text" => 'Already Logged',
                    "session" => $_SESSION,
                ];

            }

        } else {
            $message = [
                "text" => 'Nome Utente o Password Errati!',
                "session_id" => null,
            ];

        }
        echo json_encode($message);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }

}
