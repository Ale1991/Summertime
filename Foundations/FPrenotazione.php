<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FPrenotazione
 *
 * @author Stefano
 */
class FPrenotazione extends Fdb 
{
  public function inserisci(EPrenotazione & $prenotazione)
	{
		$query="INSERT INTO Prenotazione VALUES ( null ,?,?,?,?, null )";
                $dataPrenotazione=$prenotazione->getDate();
                $dataPrenotazioneS=$dataPrenotazione->format("Y-m-d H:i:s");
                $arr= array($prenotazione->getIdLido(), $prenotazione->getNumOmbrellone(), $prenotazione->getIdUtente(), $dataPrenotazioneS);
                
                //$arr= array($this->obj->get_ristorante()->get-id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_tavolo()->get_id(),$this->obj->get_effettuata(),$this->obj->get_data_prenotazione(),$this->obj->get_visualizzata(),$this->obj->get_info());
		$stmt=$this->db->prepare($query);
                $stmt->execute($arr);
		
	}
    
 
        
        
        
    }
    
    
    //put your code here



