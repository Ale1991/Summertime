<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *

/**
 * Description of VPrenotazione
 *
 * @author Stefano
 */
class VPrenotazione 
{
    public function MostraFormPrenotazione($lido,$utente)
    {
        $smarty=new Smarty();
        $smarty->setTemplateDir('templates/main/template');
        $smarty->setCompileDir('templates/main/templates_c');
        $smarty->assign('nomelido',$lido->getNome());
        $smarty->assign('nomeutente',$utente->getNomeUtente());
        $smarty->display('welcome.tpl');
    }
    //put your code her
}
