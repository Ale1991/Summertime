<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

//da testare
function updateUtente(Request $request, Response $response)
{
    $id_Utente = $request->getParsedBody()['idUtente'];
    $nuovaPassword = $request->getParsedBody()['nuovaPassword'];
    try {
        $fUtente= new FUtente();
        $fUtente->modificaPassword($id_Utente, $nuovaPassword);
        //echo json_encode($array);        
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

