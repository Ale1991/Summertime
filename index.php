<?php
/*
 * Effettuo il redirect a main/index.php
 */
include 'includes/autoload.inc.php';

//$smarty->assign('name','Ned');

//$smarty->display('index.tpl'); */

$a=new CHome();
$a->impostaPagina();

$b=new EIndirizzo('asd','10', 'Sulmona', 'AQ');

?>