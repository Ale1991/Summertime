<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


function updateUtente(Request $request, Response $response)
{
    $arr = $request->getParams();
    $idUtente=$arr[0]["idUtente"];
    $nuovaPassword =$arr[0]["nuovaPassword"];
    try {
        $fUtente= new FUtente();
        $fUtente->modificaPassword($idUtente, $nuovaPassword);
        $messages="Password modificata con successo";
        echo json_encode($messages);        
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}

