<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function addPrenotazione(Request $request, Response $response)
{
    $nome_Gestore = $request->getParsedBody()['nomeGestore'];
    $data_in = $request->getParsedBody()['dataIn'];
    $data_out = $request->getParsedBody()['dataOut'];
    $id_Utente = $request->getParsedBody()['idUtenteLoggato'];
    $via = $request->getParsedBody()['via'];
    $civico = $request->getParsedBody()['civico'];
    $comune = $request->getParsedBody()['comune'];
    $provincia = $request->getParsedBody()['provincia'];
    $nome_Lido = $request->getParsedBody()['nomeLido'];
    $array_ombrelloni = $request->getParsedBody()['ombrelloni'];

    $data_in = date("Y-m-d", strtotime($data_in));
    $data_out = date("Y-m-d", strtotime($data_out));

    $gestore = new EGestore($nome_Gestore);
    $utente = new EUtente($id_Utente);
    $indirizzoLido = new EIndirizzo($via, $civico, $comune, $provincia);
    $gestore->aggiungiLido($nome_Lido, $indirizzoLido);
    $a = $gestore->getLidi();
    $lidouno = $a[0];

    try {
        $fpren = new FPrenotazione();
        for ($i = 0; $i < count($array_ombrelloni); $i++) {
            $omb_temp = $array_ombrelloni[$i];
            $riga = ord($omb_temp[0]) - 64;
            $colonna = $omb_temp[1];
            $omb = new EOmbrellone($riga, $colonna);
            $pren = new EPrenotazione($data_in, $data_out, $omb, $lidouno, $utente);
            $fpren->inserisci($pren);
        }
        echo json_encode('aggiunto con successo!');
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
