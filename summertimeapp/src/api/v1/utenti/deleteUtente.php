<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

//da testare
function deleteUtente(Request $request, Response $response)
{
    $id_Utente = $request->getAttribute('idUtente');
    
    try {
        $fUtente= new FUtente();
        $fUtente->cancellaUtente($id_Utente);
        $message="Utente eliminato";
        echo json_encode($message);        
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

