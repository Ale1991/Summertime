<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function getUtente(Request $request, Response $response)
{
    $IDUtente = $request->getAttribute('idUtente');
    try {
        $futente=new FUtente();
        $utente=$futente->getObject($IDUtente);
        
        $dati = [
            'NomeUtente' => $utente->getNomeUtente(),
            'email' => $utente->getEmail(),
            'password' => $utente->getPassword(),
            'is_Gestore' => $utente->getIsGestore(),
     
            
        ];
        $array[] = $dati;
        echo json_encode($array);        
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
