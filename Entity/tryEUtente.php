<?php

require_once 'includes/autoload.inc.php';

$a=new EGestore();
$a->setNomeUtente('Alessio');



//indirizzo primo lido
$v='Giovanni Paolo IV';
$n='32';
$com='Sulmona';
$prov='AQ';
$indirizzoLido=new EIndirizzo($v,$n,$com,$prov);
$nomeLido='Lam pa ra';
$a->aggiungiLido($nomeLido,$indirizzoLido);//aggiungo un lido al gestore dichiarato sopra

print_r($a);



?>