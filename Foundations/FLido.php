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
        $a=new DateTime($user["dataApertura"]);
        //$a->createFromFormat('Y/m/d', $user["dataApertura"]);
        //print var_dump($a);
        $b=new DateTime($user["dataChiusura"]);
        //$b->createFromFormat('Y/m/d', $user["dataChiusura"]);
        
        //print var_dump($a);
        
        //$a=strtotime($user["dataApertura"]);
        //$newformat = date('Y-m-d',$a);
        //$dataA=$user["dataApertura"]->format('Y-m-d');
        //print var_dump($dataA);
        //$dataApertura = date('Y-m-d',$dataA);
        //print var_dump($dataApertura);
        $lido->setDataApertura($a);
        $lido->setDataChiusura($b);
        //print var_dump($lido);
        return $lido;

    }
    
    public function getTuttiILidi()
    {
        $query= "SELECT * FROM Lido ";
        $stmt=$this->db->prepare($query);
   	$stmt->execute();
        $arrayRes=array();
        while ($user = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $fu=new FUtente();
            $gestore=$fu->getObject($user["idGestore"]);
            $lido=new ELido($user["nomeLido"],$gestore, $indirizzo);
            $lido->setRighe($user["righe"]);
            $lido->setColonne($user["colonne"]);
            $a=new DateTime($user["dataApertura"]);
            $b=new DateTime($user["dataChiusura"]);
            $lido->setDataApertura($a);
            $lido->setDataChiusura($b);
            $arrayRes[]=$lido;
            
        }
        return $arrayRes;
    }
    
    public function getLidiByComune($comune)
    {
        $query= "SELECT * FROM Lido WHERE comune = ? ";
        $stmt=$this->db->prepare($query);
   	$stmt->execute([$comune]);
        $arrayRes=array();
        while ($user = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $fu=new FUtente();
            $gestore=$fu->getObject($user["idGestore"]);
            $indirizzo=new EIndirizzo($user["via"],$user["civico"],$user["comune"],$user["provincia"]);
            $lido=new ELido($user["nomeLido"],$gestore, $indirizzo);
            $lido->setRighe($user["righe"]);
            $lido->setColonne($user["colonne"]);
            $a=new DateTime($user["dataApertura"]);
            $b=new DateTime($user["dataChiusura"]);
            $lido->setDataApertura($a);
            $lido->setDataChiusura($b);
            $arrayRes[]=$lido;
            
        }
        return $arrayRes;
    }
    
    //put your code here
}
