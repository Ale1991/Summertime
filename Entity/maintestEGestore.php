<?php
//MAIN PER IL TEST DELLE CLASSI GESTORE->INDIRIZZO->LIDO->OMBRELLONI

require_once 'includes/autoload.inc.php';

$nome='Alessio';
$cognome='Susco';
$gestore=new EGestore($nome,$cognome);
echo"GESTORE INIZIALIZZATO";
echo"\n";
print_r($gestore);

//indirizzo primo lido
$v='Everest';
$n='32';
$com='Sulmona';
$prov='AQ';
$indirizzoLido=new EIndirizzo($v,$n,$com,$prov);
$nomeLido='Lampara';
$gestore->aggiungiLido($nomeLido,$indirizzoLido);//aggiungo un lido al gestore dichiarato sopra
/* echo"GESTORE INIZIALIZZATO CON LIDO senza (ombrelloni)";
echo"\n";
print_r($gestore);  */

//indirizzo secondo lido
$v2='Carso';
$n2='10';
$com2='Soliera';
$prov2='MO';
$indirizzoLido2=new EIndirizzo($v2,$n2,$com2,$prov2);
$nomeLido2='Cazzimm';
$gestore->aggiungiLido($nomeLido2,$indirizzoLido2);//aggiungo un lido al gestore dichiarato sopra
/* echo"GESTORE INIZIALIZZATO CON LIDO senza (ombrelloni)";
echo"\n";
print_r($gestore);  */


$lid=$gestore->getLidi();
$a=$lid[0];
/* print_r($a); */
$a->setRighe(2);
$a->setColonne(1);
/* print_r($a); */
/* print_r($gestore); */
$a->generaGriglia();
/* echo"GESTORE INIZIALIZZATO CON LIDO E OMBRELLONI(griglia)";
echo"\n";
print_r($gestore); */



$b=$lid[1];
/* print_r($a); */
$b->setRighe(1);
$b->setColonne(2);
/* print_r($a); */
/* print_r($gestore); */
$b->generaGriglia();
echo"GESTORE INIZIALIZZATO CON LIDO E OMBRELLONI(griglia)";
echo"\n";
print_r($gestore);

?>

