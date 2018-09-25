<?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {//da vedere bene
    die('This file was generated for PHP 5');
}

//require_once('class.Lido.php');
//require_once('class.Prenotazione.php');


class Ombrellone
{
    public $riga = null;
    public $colonna = null;
    public $occupato =null;
    public $id = null;

         public function __construct ($riga , $colonna)
         {
           $this->riga = $riga;
           $this->colonna = $colonna;
           $id=$this->riga.$this->colonna;
           $this->id = $id;
         }

    public function getID()
    {
        $id=$this->riga.$this->colonna;
        return $id;
    }

    public function setOccupato($occupato)
    {
      $this->occupato=$occupato;
    }

    public function getOccupato()
    {
        $returnValue = $this->occupato;
        return $returnValue;
    }

    public function setRiga($riga)
    {
      $this->riga=$riga;
    }

    public function getRiga()
    {
        $returnValue = $this->riga;
        return $returnValue;
    }

    public function setColonna($colonna)
    {
      $this->colonna=$colonna;
    }

    public function getColonna()
    {
        $returnValue = $this->colonna;
        return $returnValue;
    }
} /* end of class Ombrellone */


?>