 <?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* include Gestore */
require_once('class.Gestore.php');

/* include Ombrellone */
require_once('class.Ombrellone.php');
/**
 * Short description of class Lido
 * un oggetto di tipo Lido e' associato ad un unico Oggetto di tipo Gestore ed e' costituito da un insieme di Oggetti di tipo Ombrellone 
 * @access public
 */
class Lido
{

    private $nomeLido = null;
    private $numeroOmbrelloni = null;
    private $prenotazioni = null;
    private $indirizzo = null;
    private $righe = null;
    private $colonne = null;

    public function __construct ($righe , $colonne,$nomeLido,$indirizzo)
         {
           $this->righe = $righe;
           $this->colonne = $colonne;
           $this->nomeLido = $nomeLido;
           $this->indirizzo = $indirizzo;
         }



    public function setNome($nomeLido)
    {
        $this->nomeLido=$nomeLido;
    }

    public function getNome()
    {
        $returnValue = $this->nomeLido;
        return $returnValue;
    }

    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo=$indirizzo;
    }

    public function getIndirizzo()
    {
        $returnValue = $this->indirizzo;
        return $returnValue;
    }

    public function setRighe()
    {
        $this->righe=$righe;
    }

    public function getRighe()
    {
        $returnValue = $this->righe;
        return $returnValue;
    }

    public function setColonne()
    {
        $this->colonne=$colonne;
    }


    public function getColonne()
    {
        $returnValue = $this->colonne;
        return $returnValue;
    }

    public function aggiungiOmbrellone($riga, $colonna)
    {

    }

    public function rimuoviOmbrellone($riga, $colonna)
    {
        
    }

    public function generaGriglia($riga, $colonna)
    {
        
    }

} /* end of class Lido */

?>