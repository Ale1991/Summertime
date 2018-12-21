<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app = new \Slim\App;
//Get all Lidi
$app->get('/api/lidi', function (Request $request, Response $response) {

    $sql = "SELECT * FROM lido";
    try {
        //Get DB Object
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $lidi = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($lidi);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});
//TESTATA E FUNZIONANTE
$app->get('/api/lido/{IDLido}', function (Request $request, Response $response) { //

    $IDLido = $request->getAttribute('IDLido');
    try {
        $lido = new FLido();
        //$l = $lido->getLidoById($IDLido);
        $l = $lido->getObject($IDLido);
        //$l = $lido->getLidoByName($IDLido);

        //print_r($l);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});

$app->post('/api/lido/add', function (Request $request, Response $response) { //

    $nomeLido = $request->getParam('nomeLido');
    $righe = $request->getParam('righe');
    $colonne = $request->getParam('colonne');

    $dataApertura = $request->getParam('dataApertura');
    $dataChiusura = $request->getParam('dataChiusura');

    $via = $request->getParam('via');
    $civico = $request->getParam('civico');
    $comune = $request->getParam('comune');
    $provincia = $request->getParam('provincia');

    $idGestore = $request->getParam('idGestore');
    $gestore = new EGestore("$idGestore");

    $indirizzo = new EIndirizzo($via, $civico, $comune, $provincia);
    $lido = new ELido($nomeLido, $gestore, $indirizzo);

    $datein = new DateTime($dataApertura);
    $lido->setDataApertura($datein);
    $dateout = new DateTime($dataChiusura);
    $lido->setDataChiusura($dateout);

    $lido->setRighe($righe);
    $lido->setColonne($colonne);

    try {
        $db = new FLido();
        $db->inserisci($lido);
        //print_r($lido);
        echo ' {"notice":{"text": "Lido Aggiunto"}';

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});

$app->put('/api/prenotazione/update', function (Request $request, Response $response) { //

    try {

        echo json_encode($l);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});
