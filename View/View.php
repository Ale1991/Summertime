<?php
require('lib\Smarty\Smarty.class.php');
/**
 * @access public
 * @package View
 */

class View extends Smarty {
    public function __construct() {

     $smarty=new Smarty();  
     $smarty->setTemplateDir('Summertime\Summertime\templates');//C:\Users\Alessio\Desktop\S
     $smarty->setCompileDir('Summertime\Summertime\templates\main\templates_c');
     $smarty->setCacheDir('Summertime\Summertime\templates\main\cache');
     $smarty->setConfigDir('Summertime\Summertime\templates\main\configs');
     //$smarty->assign('name','Penguin');
    }
}
?>
