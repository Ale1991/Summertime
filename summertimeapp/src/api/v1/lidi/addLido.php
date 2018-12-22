<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function addLido(Request $request, Response $response)
{
    $nomeLido = $request->getParsedBody()['nomeLido'];
    $righe = $request->getParsedBody()['righe'];
    $colonne = $request->getParsedBody()['colonne'];
    $dataApertura = $request->getParsedBody()['dataApertura'];
    $dataChiusura = $request->getParsedBody()['dataChiusura'];
    $via = $request->getParsedBody()['via'];
    $civico = $request->getParsedBody()['civico'];
    $comune = $request->getParsedBody()['comune'];
    $provincia = $request->getParsedBody()['provincia'];
    $idGestore = $request->getParsedBody()['idGestore'];

    $gestore = new EGestore("$idGestore");
    $indirizzo = new EIndirizzo($via, $civico, $comune, $provincia);
    $gestore->aggiungiLido($nomeLido, $indirizzo);
    $a = $gestore->getLidi();
    $lido = $a[0];
    $datein = new DateTime($dataApertura);
    $lido->setDataApertura($datein);
    $dateout = new DateTime($dataChiusura);
    $lido->setDataChiusura($dateout);
    $lido->setRighe($righe);
    $lido->setColonne($colonne);

    try {
        $db = new FLido();
        $db->inserisci($lido);
        echo json_encode('ok');

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
