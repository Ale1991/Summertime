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
       public function caricaPrenotazione (EPrenotazione & $prenotazione)
    {
        $lido=$prenotazione->getIdLido();
        $numOmbrellone=$prenotazione->getNumOmbrellone();
        $utente=$prenotazione->getIdUtente();
        $dataPrenotazione=$prenotazione->getDate();
        $dataPrenotazioneS=$dataPrenotazione->format("Y-m-d H:i:s");
        //$sql="INSERT INTO `prenotazioni` (`idPrenotazione`, `idLido`, `numOmbrellone`, `idUtente`, `dataPrenotazione`,`effettuata`) VALUES (NULL, ':lido', ':numOmbrellone', ':idUtente', ':dataPrenotazioneS', CURRENT_TIMESTAMP)";
        //$stmt=$this->db->prepare($sql);
        //$stmt->bindParam(':lido', $lido, PDO::PARAM_INT);
        //$stmt->execute();
        $this->db->query("INSERT INTO prenotazioni (idPrenotazione, idLido, numOmbrellone, idUtente, dataPrenotazione,effettuata) VALUES (NULL, '$lido', '$numOmbrellone', '$utente', '$dataPrenotazioneS', CURRENT_TIMESTAMP)");
    }
        
        
        
    }
    
    
    //put your code here



