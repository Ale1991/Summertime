 <?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* include Ombrellone */
require_once('class.OmbrelloneMinimal.php');
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

    public function setRighe($righe)
    {
        $this->righe=$righe;
    }

    public function getRighe()
    {
        $returnValue = $this->righe;
        return $returnValue;
    }

    public function setColonne($colonne)
    {
        $this->colonne=$colonne;
    }

    public function getColonne()
    {
        $returnValue = $this->colonne;
        return $returnValue;
    }

    public function generaGriglia()
    {
        $alfabeto=['A', 'B', 'C', 'D', 'E','F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $arrayRighe=array();
        $griglia=array();
        for($r=0;$r<$this->righe;$r++)
        {
            $arrayRighe[$r]=$alfabeto[$r];
        }
        $arrayColonne=array();
        for($c=1;$c<=$this->colonne;$c++)
        {
            $arrayColonne[$c]=$c;
        }
        
        for($i = 0; $i<count($arrayRighe); $i++)
        {
            $a=$arrayRighe[$i];
            for($j = 1; $j<=count($arrayColonne); $j++)
            {
                $b=$arrayColonne[$j];
                $griglia[]=new Ombrellone($a,$b);
            }
        }
   
    return $griglia;
        
    }

/*  DA STUDIARNE LA NECESSITA'
    public function aggiungiOmbrellone($riga, $colonna)
    {
        
    }

    public function rimuoviOmbrellone($riga, $colonna)
    {
         
    }
*/

} /* end of class Lido */

?>