<?php

class EOmbrellone
{
    private $riga;
    private $colonna;
    private $occupato = 'false';
    private $id;
    private $idLido;

    public function __construct($r, $c)
    {
        $this->riga = $r;
        $this->colonna = $c;
        $this->id = $this->generaID();
    }

    public function generaID()
    {
        $alfabeto = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        if ($this->riga != null & $this->colonna != null) {
            $id = $alfabeto[$this->riga-1] . $this->colonna;
        } else {
            $id = 'N.D.';
        }

        return $id;
    }

    public function setOccupato($occupato)
    {$this->occupato = $occupato;}
    public function getOccupato()
    {return $this->occupato;}
    public function setRiga($riga)
    {$this->riga = $riga;}
    public function getRiga()
    {return $this->riga;}
    public function setColonna($colonna)
    {$this->colonna = $colonna;}
    public function getColonna()
    {return $this->colonna;}
    public function setID($id)
    {$this->id = $id;}
    public function getID()
    {return $this->id;}
}
