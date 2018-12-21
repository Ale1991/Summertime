<?php

class FPrenotazione extends Fdb
{
    public function inserisci(EPrenotazione &$prenotazione)
    {
        $query = "INSERT INTO Prenotazione VALUES ( null ,?,?,?,?,?, null )";
        $arr = array($prenotazione->getLido()->getIdLido(), $prenotazione->getOmbrellone()->getID(), $prenotazione->getUtente()->getNomeUtente(), $prenotazione->getDataInizio(), $prenotazione->getDataFine());
        $stmt = $this->db->prepare($query);
        $stmt->execute($arr);
    }

    public function verificaDisp(EPrenotazione &$prenotazione)
    {
        $idLido = $prenotazione->getLido()->getIdLido();
        $numOmbrellone = $prenotazione->getOmbrellone()->getID();
        $dataInizio = $prenotazione->getDataInizio();
        $dataFine = $prenotazione->getDataFine();
        $query = "SELECT * FROM Prenotazione WHERE idLido = ? AND numOmbrellone = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$idLido, $numOmbrellone]);
        $i = 0;
        $res = true;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($dataInizio >= $row["dataInizio"] && $dataInizio <= $row["dataFine"]) {
                $i++;
            } elseif ($dataFine >= $row["dataInizio"] && $dataFine <= $row["dataFine"]) {
                $i++;
            }
        }
        if ($i > 0) {
            $res = false;
        }
        return $res;
    }

    public function getOmbrelloniOccupati($idLido, $dataA, $dataB)
    {
        $query = "SELECT * FROM Prenotazione WHERE idLido = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$idLido]);
        $a = $dataA;
        $b = $dataB;
        $arr = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($a >= $row["dataInizio"] && $a <= $row["dataFine"]) {

                $arr[] = $row["numOmbrellone"];
            } elseif ($b >= $row["dataFine"] && $b <= $row["dataFine"]) {
                $arr[] = $row["numOmbrellone"];
            }
        }
        return $arr;
    }
}
