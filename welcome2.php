<?php

require('C:\xampp\Smarty\Smarty.class.php');
$smarty = new Smarty();



$smarty->setTemplateDir('C:\xampp\htdocs\smarty\templates');
$smarty->setCompileDir('C:/xampp/smarty/templates_c');
$smarty->setCacheDir('C:/xampp/smarty/cache');
$smarty->setConfigDir('C:/xampp/htdocs/smarty/config');

$smarty->assign('name','Penguin');
$smarty->display('welcome.tpl');

?>