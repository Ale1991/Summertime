<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->post('/api/prenotazioni', function (Request $request, Response $response) {

    $nome_Gestore = $request->getParam('nomeGestore');
    $gestore = new EGestore($nome_Gestore);

    $data_in = $request->getParam('dataIn');
    $data_in = date("Y-m-d", strtotime($data_in));
    $data_out = $request->getParam('dataOut');
    $data_out = date("Y-m-d", strtotime($data_out));

    $id_Utente = $request->getParam('idUtenteLoggato');
    $utente = new EUtente($id_Utente);

    $via = $request->getParam('via');
    $civico = $request->getParam('civico');
    $comune = $request->getParam('comune');
    $provincia = $request->getParam('provincia');
    $indirizzoLido = new EIndirizzo($via, $civico, $comune, $provincia);

    $nome_Lido = $request->getParam('nomeLido');
    $gestore->aggiungiLido($nome_Lido, $indirizzoLido);

    $a = $gestore->getLidi();
    $lidouno = $a[0];

    $array_ombrelloni = $request->getParam('ombrelloni');

    $fpren = new FPrenotazione();
    for ($i = 0; $i < count($array_ombrelloni); $i++) {
        $omb_temp = $array_ombrelloni[$i];
        $riga = ord($omb_temp[0]) - 64;
        $colonna = $omb_temp[1];
        $omb = new EOmbrellone($riga, $colonna);
        $pren = new EPrenotazione($data_in, $data_out, $omb, $lidouno, $utente);

        $fpren->inserisci($pren);
    }
    try {
        //Get DB Object

        echo json_encode('aggiunto con successo!');
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
});
