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
class Fprenotazione extends Fdb 
{
  public function inserisci(Eprenotazione & $prenotazione)
	{
		$query="INSERT INTO prenotazione VALUES ( null ,?,?,?,?, null )";
                $dataPrenotazione=$prenotazione->getDate();
                $dataPrenotazioneS=$dataPrenotazione->format("Y-m-d H:i:s");
                $arr= array($prenotazione->getIdLido(), $prenotazione->getNumOmbrellone(), $prenotazione->getIdUtente(), $dataPrenotazioneS);
                
                //$arr= array($this->obj->get_ristorante()->get-id(),$this->obj->get_utente()->get_nome_utente(),$this->obj->get_tavolo()->get_id(),$this->obj->get_effettuata(),$this->obj->get_data_prenotazione(),$this->obj->get_visualizzata(),$this->obj->get_info());
		$stmt=$this->db->prepare($query);
                $stmt->execute($arr);
		
	}
    
  
    public function selezionaPrenotazione($id)
    {
        $idS=strval($id);
        $sql = 'SELECT * FROM prenotazione WHERE idPrenotazione like "%:idS%"';
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(':idS', $idS, PDO::FETCH_ASSOC);
        $stmt->execute();
        $totale = $stmt->rowCount();
        print $totale;
    }
        
        
        
    }
    
    
    //put your code here



