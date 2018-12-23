<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


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
$app->get('/api/lido/{idLido}', function (Request $request, Response $response) { //

    $IDLido = $request->getAttribute('idLido');
    try {
        $flido = new FLido();
        $obj_lido = $flido->getObject($IDLido);
        $obj_lido->generaGriglia();
        $griglia = $obj_lido->getGriglia();
        $gestore = $obj_lido->getGestore();

        for ($i = 0; $i < count($griglia); $i++) {
            $array[$i] = [
                'riga' => $griglia[$i]->getRiga(),
                'colonna' => $griglia[$i]->getColonna(),
                'id' => $griglia[$i]->getID(),
                'occupato' => $griglia[$i]->getOccupato(), //set  "true"
            ];
        }

        $dati = [
            'via' => $obj_lido->getIndirizzo()->getVia(),
            'civico' => $obj_lido->getIndirizzo()->getCivico(),
            'comune' => $obj_lido->getIndirizzo()->getComune(),
            'provincia' => $obj_lido->getIndirizzo()->getProvincia(),

            'idLido' => $obj_lido->getIdLido(),
            'indirizzo' => $obj_lido->getIndirizzo(),
            'nomeLido' => $obj_lido->getNomeLido(),
            'nomeGestore' => $gestore->getNomeUtente(),
            'password' => $gestore->getPassword(),
            'loginStatus' => $gestore->getLoginStatus(),
            //'nome' => $gestore->getNome(),
            //'cognome' => $gestore->getCognome(),
            'email' => $gestore->getEmail(),
            'isGestore' => $gestore->getIsGestore(),
            'isAmministratore' => $gestore->getIsAmministratore(),
            'idUtenteLoggato' => 'utenteloggato!!',
        ];
        //$l = $lido->getLidoById($IDLido);
        //$l = $lido->getLidoByName($IDLido);
        $array[] = $dati;
        echo json_encode($array);
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
    /*     $nomeLido = $request->getParam('nomeLido');
$righe = $request->getParam('righe');
$colonne = $request->getParam('colonne');

$dataApertura = $request->getParam('dataApertura');

$dataChiusura = $request->getParam('dataChiusura');

$via = $request->getParam('via');
$civico = $request->getParam('civico');
$comune = $request->getParam('comune');
$provincia = $request->getParam('provincia');

$idGestore = $request->getParam('idGestore');
$gestore = new EGestore($idGestore);

$indirizzo = new EIndirizzo($via, $civico, $comune, $provincia);
// $lido = new ELido($nomeLido, $gestore, $indirizzo);
$gestore->aggiungiLido($nomeLido, $indirizzo);
$a = $gestore->getLidi();
$lido = $a[0];

$datein = new DateTime($dataApertura);
$lido->setDataApertura($datein);
$dateout = new DateTime($dataChiusura);
$lido->setDataChiusura($dateout);

$lido->setRighe($righe);
$lido->setColonne($colonne); */


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

