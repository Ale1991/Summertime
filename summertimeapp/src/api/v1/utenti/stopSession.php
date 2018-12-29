<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function stopSession(Request $request, Response $response)
{
/*     if (!isset($_SESSION['nomeUtente']) || session_id() == '') {
        session_start();
    } */

    $nomeUtente = $request->getParsedBody()['nomeUtente'];

    try
    {
        session_unset();
        session_destroy();
        $message = [
            "text" => 'Sei stato disconnesso!',
            "session" => null,
        ];

        echo json_encode($message);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }

}
