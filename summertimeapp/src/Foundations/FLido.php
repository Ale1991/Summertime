<?php

class FLido extends Fdb
{
    public function inserisci(ELido &$lido)
    {
        $query = "INSERT INTO Lido VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $arr = array($lido->getIdLido(), $lido->getNomeLido(), $lido->getRighe(), $lido->getColonne(), $lido->getDataApertura()->format("Y-m-d H:i:s"), $lido->getDataChiusura()->format("Y-m-d H:i:s"), $lido->getIndirizzo()->getVia(), $lido->getIndirizzo()->getCivico(), $lido->getIndirizzo()->getComune(), $lido->getIndirizzo()->getProvincia(), $lido->getGestore()->getNomeUtente());
        $stmt = $this->db->prepare($query);
        $stmt->execute($arr);
    }

    public function getObject($idLido)
    {
        $query = "SELECT * FROM Lido WHERE idLido = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$idLido]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetch();
        $fu = new FUtente();
        $gestore = $fu->getObject($user["idGestore"]);
        $indirizzo = new EIndirizzo($user["via"], $user["civico"], $user["comune"], $user["provincia"]);
        $lido = new ELido($user["nomeLido"], $gestore, $indirizzo);
        $lido->setRighe($user["righe"]);
        $lido->setColonne($user["colonne"]);
        $a = new DateTime();
        $a->createFromFormat('Y/m/d', $user["dataApertura"]);
        $b = new DateTime();
        $b->createFromFormat('Y/m/d', $user["dataChiusura"]);
        $lido->setDataApertura($a);
        return $lido;

    }

    public function getLidoById($IDLido)
    {
        $sql = "SELECT * FROM lido WHERE IDLido = '$IDLido' ";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $lidi = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return $lidi;
    }

    public function getLidoByName($n)
    {
        $sql = "SELECT * FROM lido WHERE nomeLido = '$n' ";
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $lidi = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return $lidi;
    }
}
