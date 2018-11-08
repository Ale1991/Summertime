<?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {//da vedere bene
    die('This file was generated for PHP 5');
}

//require_once('class.Lido.php');
//require_once('class.Prenotazione.php');

/**
 * Short description of class Ombrellone:
 * gli oggetti di tipo Ombrellone vengono costruiti passando la posizione (riga,colonna) e automaticamente viene calcolato un ID univoco per ogni oggetto appartenente ad un lido
 * assumendo di default il valore booleano false=0 per quanto riguarda lo stato occupato=0 (libero)
 * @access public 
 * */
class EOmbrellone
{
    private $riga;
    private $colonna;
    private $occupato =false;
    private $id; 
    private $idLido;

         public function __construct ()
         {
          
           $this->id = $this->generaID(); 
         }
        
    
    
    
    public function generaID()
    {
        $alfabeto=['A', 'B', 'C', 'D', 'E','F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        if ($this->riga!=null & $this->colonna!=null){
            $id=$alfabeto[$this->riga-1].$this->colonna;
        }
        else{
            $id='N.D.';
        }
        
        return $id;
    }

    public function setOccupato($occupato){$this->occupato=$occupato;}
    public function getOccupato(){return $this->occupato;}
    public function getIdLido(){return $this->idLido;}
    public function setRiga($riga){$this->riga=$riga;}
    public function getRiga(){return $this->riga;}
    public function setColonna($colonna){$this->colonna=$colonna;}
    public function getColonna(){return $this->colonna;}
    public function getID(){return $this->id;}
    public function setIdLido($idLido){$this->idLido=$idLido;}
    public function setID($id){$this->id=$id;}
} /* end of class Ombrellone */


?>