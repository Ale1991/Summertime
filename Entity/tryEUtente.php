<?php
require_once('EUtente.php');
require_once('EGestore.php');
require_once('ELido.php');
require_once('EIndirizzo.php');



$a=new EGestore();
$a->setNomeUtente('Alessio');



//indirizzo primo lido
$v='Precipitevolissimevolmente';
$n='32';
$com='Sulmona';
$prov='AQ';
$indirizzoLido=new EIndirizzo($v,$n,$com,$prov);
$nomeLido='Lampara';
$a->aggiungiLido($nomeLido,$indirizzoLido);//aggiungo un lido al gestore dichiarato sopra

print_r($a);



?>