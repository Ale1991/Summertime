<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

//Get all Lidi
$app->post('/api/ombrelloni/disponibili', function (Request $request, Response $response) {

    $date_in = $request->getParam('dataIn');
    $date_in = date("Y-m-d", strtotime($date_in));

    $date_out = $request->getParam('dataOut'); //dati per effettuare query sul db
    $date_out = date("Y-m-d", strtotime($date_out));

    $id_Lido = $request->getParam('idLido');
    

    try {
        $fpren = new FPrenotazione();
        $arrayDB = $fpren->getOmbrelloniOccupati($id_Lido, $date_in, $date_out);
        $ok = true;
        $messages = array();

        if (!isset($date_in) || empty($date_in)) {
            $ok = false;
            $messages[] = 'DATE-IN cannot be empty';
        }
        if (!isset($date_out) || empty($date_out)) {
            $ok = false;
            $messages[] = 'DATE-OUT cannot be empty';
        }
        if ($ok) {
            $ok = true;
            $messages[] = 'Successful date choise!';
        }
        $array = [
            'ok' => $ok,
            'messages' => $messages,
            'dataIn' => $date_in,
            'dataOut' => $date_out,
            'idLido' => $id_Lido,
            'arrayDB' => $arrayDB
        ];
        echo json_encode($array); 
    

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});


