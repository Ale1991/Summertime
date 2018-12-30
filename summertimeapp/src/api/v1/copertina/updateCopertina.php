<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function updateCopertina(Request $request, Response $response)
{

    try {
        echo ' {"error":{"text":  la funzione update non e ancora implementata}';

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
