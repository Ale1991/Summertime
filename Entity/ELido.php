 <?php
error_reporting(E_ALL);
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* include Ombrellone */
require_once('EOmbrellone.php');
/**
 * Short description of class Lido
 * un oggetto di tipo Lido e' associato ad un unico Oggetto di tipo Gestore ed e' costituito da un insieme di Oggetti di tipo Ombrellone 
 * @access public
 */

class ELido
{
    
    public $nomeLido = null;
    public $IDLido;
    public $numeroOmbrelloni = null;
    public $prenotazioni = null;
    public $indirizzo = null;
    public $righe = null;
    public $colonne = null;
    public $griglia;

    public function __construct ($nomeLido,$indirizzo)//($righe,$colonne,$nomeLido,$indirizzo)
    {
        $this->nomeLido = $nomeLido;
        $this->indirizzo = $indirizzo;

        $nomeoriginale = $this->nomeLido;
        $NNN= array();
        $nomemaiuscolo = strtoupper($nomeoriginale)."XXX";
        preg_match_all('/[^AEIOUX]/', $nomemaiuscolo , $consonanti);
        preg_match_all('/[AEIOUX]/', $nomemaiuscolo , $vocali);
        for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
        {
            array_push($NNN , $consonanti[0][$i]);
        }
        if(sizeof($NNN) < 3)
        {
            for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
            {
                array_push($NNN , $vocali[0][$i]);
            }
            if (sizeof($NNN) < 3)
            {
                array_push($NNN , "X");
            }
        }
        $NNNLido=implode('' , $NNN);

        $IDLido=$NNNLido.$indirizzo->getIDIndirizzo();
        $this->IDLido = $IDLido;
    }



    public function setNome($nomeLido){$this->nomeLido=$nomeLido;}
    public function getNome(){return $this->nomeLido;}
    public function setIndirizzo($indirizzo){$this->indirizzo=$indirizzo;}
    public function getIndirizzo(){return $this->indirizzo;}
    public function setRighe($righe){$this->righe=$righe;}
    public function getRighe(){return $this->righe;}
    public function setColonne($colonne){$this->colonne=$colonne;}
    public function getColonne(){return $this->colonne;}

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
    $this->griglia = $griglia;
    }

    public function getNNNL()
    {
        $nomeoriginale = $this->nomeLido;
        $NNN= array();
        $nomemaiuscolo = strtoupper($nomeoriginale)."XXX";
        preg_match_all('/[^AEIOUX]/', $nomemaiuscolo , $consonanti);
        preg_match_all('/[AEIOUX]/', $nomemaiuscolo , $vocali);
        for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
        {
            array_push($NNN , $consonanti[0][$i]);
        }
        if(sizeof($NNN) < 3)
        {
            for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
            {
                array_push($NNN , $vocali[0][$i]);
            }
            if (sizeof($NNN) < 3)
            {
                array_push($NNN , "X");
            }
        }
        return implode('' , $NNN);
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