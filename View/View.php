<?php
require_once 'lib\Smarty\Smarty.class.php';
//require_once 'lib/Smarty/Smarty.class.php';
/**
 * @access public
 * @package View
 */

class View extends Smarty {
    
    public function __construct () 
   {
        $this->Smarty();
        $this->smarty->setTemplateDir('templates/main/template');
        $this->smarty->setCompileDir('templates/main/templates_c');
        //$smarty->assign('nomelido',$lido->getNome());
        //$smarty->assign('nomeutente',$utente->getNomeUtente());
        //$smarty->display('welcome.tpl');
    }
}

