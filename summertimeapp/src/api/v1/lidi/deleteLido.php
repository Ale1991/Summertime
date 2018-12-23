<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function deleteLido(Request $request, Response $response)
{
    
    try {
        //$db = new FLido();
        // echo json_encode('');

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
