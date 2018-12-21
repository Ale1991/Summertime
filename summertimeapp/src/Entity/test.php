<?php
require __DIR__.'/EIndirizzo.php';
require __DIR__.'/ELido.php';

$idGestore = 'idGestore';

$nomeLido = 'nomeLido';
$via ='via';
$civico ='30';
$comune = 'sulmona';
$provincia ='AQ';
$dataApertura = '2019-01-01';
$dataChiusura = '2019-12-31';
$righe = '2';
$colonne = '6';

$indirizzo = new EIndirizzo($via, $civico, $comune, $provincia);
$lido = new ELido($nomeLido, $idGestore, $indirizzo);
$IDLido = $lido->getIdLido();

print_r($IDLido);



?>
