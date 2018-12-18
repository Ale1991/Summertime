<?php
require_once 'includes/autoload.inc.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPrenotazione
 *
 * @author Stefano
 */
class CPrenotazione
{
    public function ImpostaFormPrenotazione($lido, $utente)
    {
        $id = filter_input(INPUT_POST, 'ombrellone');
        $data1 = filter_input(INPUT_POST, 'data1');
        $data2 = filter_input(INPUT_POST, 'data2');
        if ($id != "" && $data1 != null && $data2 != null) {
            $idLido = $lido->getIdLido();
            $Ombr = new FOmbrellone();
            $Ombrellone = $Ombr->getObject($id, $idLido);
            //print var_dump($Ombrellone);
            $pren = new EPrenotazione($data1, $data2, $Ombrellone, $lido, $utente);
            //print var_dump($pren);
            $fpren = new FPrenotazione();
            if ($fpren->verificaDisp($pren)) {
                $fpren->inserisci($pren);
                echo "La prenotazione è andata a buon fine";
            } else {
                echo "L'ombrellone non è disponibile per quella data";
            }

        } else {
            $vpren = new VPrenotazione();
            $vpren->MostraFormPrenotazione($lido, $utente);
        }
    }
}

/* $data_in = isset($_POST['dataIn']) ? $_POST['dataIn'] : ''; //dati per effettuare query sul db
$data_out = isset($_POST['dataOut']) ? $_POST['dataOut'] : ''; //dati per effettuare query sul db
//$id_Utente = isset($_GET['idUtente']) ? $_GET['idUtente'] : ''; //ancora non implementabile perche' manca il meccanismo di login
$id_Utente = 'ALESSIOOOOOOO';
$id_Lido = isset($_POST['idLido']) ? $_POST['idLido'] : ''; //dati per effettuare query sul db
$ombrelloni = isset($_POST['ombrelloni']) ? $_POST['ombrelloni'] : ''; //dati per effettuare query sul db

for($i=0;$i<count($ombrelloni);$i++){
$pren = new EPrenotazione($data_in, $data_out, $ombrellone[$i], $id_Lido, $id_Utente);
$fpren = new FPrenotazione();
$fpren->inserisci($pren);
}

$file = 'prenotazioni.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$id_Utente" . ":" . "$id_Lido" . ":" . "$data_in" . "->" . "$data_out\r\n" . "$ombrelloni[0]\r\n";
// Write the contents back to the file
file_put_contents($file, $current); */

$nome_Gestore = isset($_GET['nomeGestore']) ? $_GET['nomeGestore'] : '';
$gestore = new EGestore($nome_Gestore);

$data_in = isset($_POST['dataIn']) ? $_POST['dataIn'] : '';
$data_in = date("Y-m-d", strtotime($data_in));

$data_out = isset($_POST['dataOut']) ? $_POST['dataOut'] : '';
$data_out = date("Y-m-d", strtotime($data_out));

$id_Utente = isset($_POST['idUtenteLoggato']) ? $_POST['idUtenteLoggato'] : ''; //da sistemare lato javascript recuperandolo dal login
$utente = new EUtente($id_Utente);

$via = isset($_POST['via']) ? $_POST['via'] : '';
$civico = isset($_POST['civico']) ? $_POST['civico'] : '';
$comune = isset($_POST['comune']) ? $_POST['comune'] : '';
$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : '';
$indirizzoLido = new EIndirizzo($via, $civico, $comune, $provincia);

$id_Lido = isset($_POST['idLido']) ? $_POST['idLido'] : ''; //id lido venuto dal javascript paragonabile con
// id lido preso dal lido appena creato con aggiungiLido
$nome_Lido = isset($_POST['nomeLido']) ? $_POST['nomeLido'] : '';
$gestore->aggiungiLido($nome_Lido, $indirizzoLido);

$a = $gestore->getLidi();
$lidouno = $a[0];

$array_ombrelloni = isset($_POST['ombrelloni']) ? $_POST['ombrelloni'] : '';

for ($i = 0; $i < count($array_ombrelloni); $i++) {
    $omb_temp = $array_ombrelloni[$i];
    $riga = ord($omb_temp[0]) - 64;
    $colonna = $omb_temp[1];
    $omb = new EOmbrellone($riga, $colonna);
    $pren = new EPrenotazione($data_in, $data_out, $omb, $lidouno, $utente);
    $fpren = new FPrenotazione();
    $fpren->inserisci($pren);
}

//print_r($griglia);
