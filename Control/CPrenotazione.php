<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CPrenotazione
 *
 * @author Stefano
 */
class CPrenotazione 
{
    public function ImpostaFormPrenotazione($lido,$utente)
    {
        $id=filter_input(INPUT_POST, 'ombrellone');
        $data=filter_input(INPUT_POST, 'data');
        if($id!="" && $data!=NULL)
        {
            $idLido=$lido->getIdLido();
            $Ombr=new FOmbrellone();
            $Ombrellone=$Ombr->getObject($id,$idLido);
            //print var_dump($Ombrellone);
            $pren=new EPrenotazione($data, $Ombrellone, $lido, $utente);
            $fpren=new FPrenotazione();
            if($fpren->verificaDisp($pren))
            {
            $fpren->inserisci($pren);
            echo "La prenotazione è andata a buon fine";
            }
            else
            {
                echo "L'ombrellone non è disponibile per quella data";
            }
            
        }
        else 
        {
        $vpren=new VPrenotazione();
        $vpren->MostraFormPrenotazione($lido, $utente);
        
        }
        
    }
  
    
    
    
}
    

    //put your code here

