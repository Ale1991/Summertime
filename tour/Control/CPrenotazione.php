<?php

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
    public function ImpostaFormPrenotazione($lido,$utente)
    {
        $id=filter_input(INPUT_POST, 'ombrellone');
        $data1=filter_input(INPUT_POST, 'data1');
        $data2=filter_input(INPUT_POST, 'data2');
        if($id!="" && $data1!=NULL && $data2!=NULL)
        {
            $idLido=$lido->getIdLido();
            $Ombr=new FOmbrellone();
            $Ombrellone=$Ombr->getObject($id,$idLido);
            //print var_dump($Ombrellone);
            $pren=new EPrenotazione($data1, $data2, $Ombrellone, $lido, $utente);
            //print var_dump($pren);
            $fpren=new FPrenotazione();
            if($fpren->verificaDisp($pren))
            {
            $fpren->inserisci($pren);
            echo "La prenotazione è andata a buon fine";
            }
            else
            {
                echo "L'ombrellone non è disponibile per quella data";
            }
            
        }
        else 
        {
        $vpren=new VPrenotazione();
        $vpren->MostraFormPrenotazione($lido, $utente);
        }   
    }   
}

$date_in = isset($_POST['dateIn']) ? $_POST['dateIn'] : '';
$date_out = isset($_POST['dateOut']) ? $_POST['dateOut'] : '';
$ok = true;
$messages = array();

if (!isset($date_in) || empty($date_in) ){
    $ok = false;
    $messages[] = 'DATE-IN cannot be empty';
}
if (!isset($date_out) || empty($date_out) ){
    $ok = false;
    $messages[] = 'DATE-OUT cannot be empty';
}

if ($ok) {
    
            $ok = true;
            $messages[] = 'Successful date choise!';
        //if ($date_in === 'dcode' ) {
           // $ok = true;
            //$messages[] = 'Successful date choise!';
        //} else {
            //$ok = false;
            //$messages[] = 'Incorrect date!';
        //}
    }
    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );

    //put your code here


$file = 'date.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$date_in" . "->" . "$date_out\r\n";
// Write the contents back to the file
file_put_contents($file, $current);
?>
