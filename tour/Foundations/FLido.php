<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FLido
 *
 * @author Stefano
 */
class FLido extends Fdb 
{
     public function inserisci (ELido & $lido)
    {
        $query="INSERT INTO Lido VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $arr=array($lido->getIdLido(),$lido->getNomeLido(),$lido->getRighe(),$lido->getColonne(),$lido->getDataApertura()->format("Y-m-d H:i:s"),$lido->getDataChiusura()->format("Y-m-d H:i:s"),$lido->getIndirizzo()->getVia(),$lido->getIndirizzo()->getCivico(),$lido->getIndirizzo()->getComune(),$lido->getIndirizzo()->getProvincia(),$lido->getGestore()->getNomeUtente());
        $stmt=$this->db->prepare($query);
        $stmt->execute($arr);
    }
    
      public function getObject($idLido)
    {
        $query= "SELECT * FROM Lido WHERE idLido = ? ";
        $stmt=$this->db->prepare($query);
   	$stmt->execute([$idLido]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //print var_dump ($stmt);
        $user = $stmt->fetch();
        //print var_dump($user);
        $fu=new FUtente();
        $gestore=$fu->getObject($user["idGestore"]);
        $indirizzo=new EIndirizzo($user["via"],$user["civico"],$user["comune"],$user["provincia"]);
        $lido=new ELido($user["nomeLido"],$gestore, $indirizzo);
        $lido->setRighe($user["righe"]);
        $lido->setColonne($user["colonne"]);
        $a=new DateTime();
        $a->createFromFormat('Y/m/d', $user["dataApertura"]);
        $b=new DateTime();
        $b->createFromFormat('Y/m/d', $user["dataChiusura"]);
        
        //print var_dump($a);
        
        //$a=strtotime($user["dataApertura"]);
        //$newformat = date('Y-m-d',$a);
        $lido->setDataApertura($a);
        //$lido->setDataChiusura($user["dataChiusura"]);
        //print var_dump($lido);
        return $lido;

    }
    //put your code here
}
