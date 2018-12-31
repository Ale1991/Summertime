<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function getCopertina(Request $request, Response $response)
{
    $IDLido = $request->getAttribute('idLido');
    $fli = new FLido();
    $nomeFoto = $fli->getNomeCopertina($IDLido);
    $path = __DIR__ . '\photos\\' . "$nomeFoto";
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = base64_encode($data);
    echo $base64;

}
