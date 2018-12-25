<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FOmbrellone
 *
 * @author Stefano
 */
class FOmbrellone extends Fdb 
{
    
    public function inserisci (EOmbrellone & $ombrellone)
    {
        $query="INSERT INTO Ombrellone VALUES (?,?,?,?,?)";
        $arr=array($ombrellone->getID(),$ombrellone->getRiga(),$ombrellone->getColonna(),$ombrellone->getOccupato(),$ombrellone->getIdLido());
        $stmt=$this->db->prepare($query);
        $stmt->execute($arr);
    }
    
    public function getObject($idOmbrellone, $idLido)
    {
        $query= "SELECT * FROM Ombrellone WHERE id = ? AND idLido = ? ";
        $stmt=$this->db->prepare($query);
   	$stmt->execute([$idOmbrellone,$idLido]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'EOmbrellone');
        //print var_dump ($stmt);
        $user = $stmt->fetch();
        //print var_dump($user);
        return $user;

    }
    

    
    //put your code here
}

