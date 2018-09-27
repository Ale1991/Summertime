<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EProprietario
 *
 * @author Stefano
 */
class EProprietario extends EUtente 
{
    private $lido; //ELido
    
    public function __construct() 
        {
            $this->is_proprietario=true;
        
      
        }
        
    public function getLido()
    {
        return $this->lido;
    }
    
    public function setLido($lid)
    {
        $this->lido=$lid;
    }
    //put your code here
}
