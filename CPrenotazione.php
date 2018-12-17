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
/* class CPrenotazione
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
} */

$data_in = isset($_POST['dataIn']) ? $_POST['dataIn'] : ''; //dati per effettuare query sul db
$data_out = isset($_POST['dataOut']) ? $_POST['dataOut'] : ''; //dati per effettuare query sul db
//$id_Utente = isset($_GET['idUtente']) ? $_GET['idUtente'] : ''; //ancora non implementabile perche' manca il meccanismo di login
$id_Utente = 'ALESSIOOOOOOO';
$id_Lido = isset($_POST['idLido']) ? $_POST['idLido'] : ''; //dati per effettuare query sul db
$ombrelloni = isset($_POST['ombrelloni']) ? $_POST['ombrelloni'] : ''; //dati per effettuare query sul db

$nomel= 'ciccio';
$indirizzo = 'Pescara';
$lido = new ELido($nomel,$id_Utente,$indirizzo);
$lido->setIdLido($id_Lido);

for($i=0;$i<count($ombrelloni);$i++){
    $id = $ombrelloni[$i];
    $riga=substr($id,0,1);
    $colonna=substr($id,1);
    $omb = new EOmbrellone($riga,$colonna,$indirizzo);

    

    $pren = new EPrenotazione($data_in, $data_out, $omb, $lido, $id_Utente);
    $fpren = new FPrenotazione();
    $fpren->inserisci($pren);
}

$file = 'prenotazionisenza.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$id_Utente" . ":" . "$id_Lido" . ":" . "$data_in" . "->" . "$data_out\r\n" . "$ombrelloni[0]\r\n";
// Write the contents back to the file
file_put_contents($file, $current);





?>
