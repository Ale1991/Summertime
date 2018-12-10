<?php
require_once 'includes/autoload.inc.php';
$nome='Alessio';
$cognome='Susco';
$gestore=new EGestore('Alessio91911');
$gestore->setNome($nome);
$gestore->setCognome($cognome);

$v='Everest';
$n='32';
$com='Sulmona';
$prov='AQ';
$indirizzoLido=new EIndirizzo($v,$n,$com,$prov);
$nomeLido='Lampara';
$gestore->aggiungiLido($nomeLido,$indirizzoLido);

$a=$gestore->getLidi();
$lidouno=$a[0];
$lidouno->setRighe(2);
$lidouno->setColonne(4);
//$lidouno->setDataApertura(01/06/2018);
//$lidouno->setDataChiusura(30/09/2018);
$lidouno->generaGriglia();
$griglia=$lidouno->getGriglia();


//print_r($map);
//echo json_encode($griglia);
//$map = array_merge($gestore, $griglia);
//echo json_encode($gestore);
$dati = $gestore->getNome() . $gestore->getCognome() . $lidouno->getNome() . $lidouno->getIdLido();

$arrayGestore = [
     $gestore
    //'nome' => $gestore->getNome(),
    //'cognome' => $gestore->getCognome(),
    //'nomeLido' => $lidouno->getNome(),
    //'idLido' => $lidouno->getIdLido(),
    //'dataApertura' => $lidouno->getDataApertura(),
    //'dataChiusura' => $lidouno->getDataChiusura(),

];


$array = array_merge($arrayGestore , $griglia);
echo json_encode($griglia);
//print_r($array);
?>