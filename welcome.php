<?php

//require('C:\xampp\Smarty\Smarty.class.php');
require('Smarty\Smarty.class.php');
require_once 'includes/autoload.inc.php';
require_once 'includes/config.inc.php';

$smarty = new Smarty();



$smarty->setTemplateDir('C:\Users\Alessio\Desktop\Summertime\Summertime\templates');
$smarty->setCompileDir('C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\templates_c');
$smarty->setCacheDir('C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\cache');
$smarty->setConfigDir('C:\Users\Alessio\Desktop\Summertime\Summertime\templates\main\configs');

$smarty->assign('name','Penguin');
$smarty->display('welcome.tpl');




?>