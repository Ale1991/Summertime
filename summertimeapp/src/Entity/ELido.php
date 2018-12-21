<?php

class ELido
{
    private $nomeLido = null;
    private $IDLido;
    private $numeroOmbrelloni = null;
    private $indirizzo = null;
    private $righe = null;
    private $colonne = null;
    private $griglia;
    private $dataApertura;
    private $dataChiusura;
    private $gestore;

    public function __construct($nomeLido, $gestore, $indirizzo)
    {
        $this->nomeLido = $nomeLido;
        $this->gestore = $gestore;
        $this->indirizzo = $indirizzo;
        $IDLido = $this->getNNNL() . $indirizzo->getIDIndirizzo();
        $this->IDLido = $IDLido;
    }

    public function getGriglia()
    {return $this->griglia;}

    public function setNomeLido($nomeLido)
    {$this->nomeLido = $nomeLido;}
    public function getNomeLido()
    {return $this->nomeLido;}
    public function setGestore($gestore)
    {$this->gestore = gestore;}
    public function getGestore()
    {return $this->gestore;}
    public function setIndirizzo($indirizzo)
    {$this->indirizzo = $indirizzo;}
    public function getIndirizzo()
    {return $this->indirizzo;}
    public function setRighe($righe)
    {$this->righe = $righe;}
    public function getRighe()
    {return $this->righe;}
    public function setColonne($colonne)
    {$this->colonne = $colonne;}
    public function getColonne()
    {return $this->colonne;}
    public function setIdLido($IDLido)
    {$this->IDLido = $IDLido;}
    public function getIdLido()
    {return $this->IDLido;}
    public function setDataApertura(DateTime $dataApertura)
    {$this->dataApertura = $dataApertura;}
    public function getDataApertura()
    {return $this->dataApertura;}
    public function setDataChiusura(DateTime $dataChiusura)
    {$this->dataChiusura = $dataChiusura;}
    public function getDataChiusura()
    {return $this->dataChiusura;}

    public function generaGriglia()
    {
        $alfabeto = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $arrayRighe = array();
        $griglia = array();
        for ($i = 1; $i <= $this->righe; $i++) {
            for ($j = 1; $j <= $this->colonne; $j++) {
                $griglia[] = new EOmbrellone($i, $j);
            }
        }
        $this->griglia = $griglia;
    }

    public function getNNNL()
    {
        $nomeoriginale = $this->nomeLido;
        $NNN = array();
        $nomemaiuscolo = strtoupper($nomeoriginale) . "XXX";
        preg_match_all('/[^AEIOUX]/', $nomemaiuscolo, $consonanti);
        preg_match_all('/[AEIOUX]/', $nomemaiuscolo, $vocali);
        for ($i = 0, $size = sizeof($consonanti[0]); $i < $size; $i++) {
            array_push($NNN, $consonanti[0][$i]);
        }
        if (sizeof($NNN) < 3) {
            for ($i = 0, $size = 3 - sizeof($consonanti[0]); $i < $size; $i++) {
                array_push($NNN, $vocali[0][$i]);
            }
            if (sizeof($NNN) < 3) {
                array_push($NNN, "X");
            }
        }
        $NNNL = implode('', $NNN);
        $NNNL = preg_replace('/\s+/', '', $NNNL);
        $this->NNNL = $NNNL;
        return $NNNL;
    }

    public function getDataForm()
    {
        $periodo = array();
        $oggi = new DateTime();
        $oggi->getTimestamp();
        if ($oggi < $this->dataApertura) {
            $periodo[0] = $this->dataApertura;
            $periodo[1] = $this->dataChiusura;
            return $periodo;

        } elseif ($oggi > $this->dataApertura && $oggi < $this->dataChiusura) {
            $periodo[0] = $oggi;
            $periodo[1] = $this->dataChiusura;
        }
        return $periodo;
    }

}
