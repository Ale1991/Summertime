<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FUtente
 *
 * @author Stefano
 */
class FUtente extends Fdb
{
    public function inserisci (EUtente & $utente)
    {
        $query="INSERT INTO Utente VALUES (?,?,?)";
        $arr=array($utente->getNomeUtente(),$utente->getEmail(),$utente->getPassword());
        $stmt=$this->db->prepare($query);
        $stmt->execute($arr);
    }
    
    public function getObject($NomeUtente)
    {
        $query= "SELECT * FROM Utente WHERE NomeUtente = ? ";
        $stmt=$this->db->prepare($query);
   	$stmt->execute([$NomeUtente]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //print var_dump ($stmt);
        $user = $stmt->fetch();
        $utente= new EUtente($NomeUtente);
        $utente->setEmail($user["Email"]);
        $utente->setPassword($user["Password"]);
        return $utente;
        //print var_dump($user);
        

    }
    //put your code here
}
