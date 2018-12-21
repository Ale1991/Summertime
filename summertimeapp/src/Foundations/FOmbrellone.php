<?php

class FOmbrellone extends Fdb
{

    public function inserisci(EOmbrellone &$ombrellone)
    {
        $query = "INSERT INTO Ombrellone VALUES (?,?,?,?,?)";
        $arr = array($ombrellone->getID(), $ombrellone->getRiga(), $ombrellone->getColonna(), $ombrellone->getOccupato(), $ombrellone->getIdLido());
        $stmt = $this->db->prepare($query);
        $stmt->execute($arr);
    }

    public function getObject($idOmbrellone, $idLido)
    {
        $query = "SELECT * FROM Ombrellone WHERE id = ? AND idLido = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$idOmbrellone, $idLido]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'EOmbrellone');
        $user = $stmt->fetch();
        return $user;
    }
}
