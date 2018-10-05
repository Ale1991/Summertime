<?php
require_once('ELido.php');
require_once('EUtente.php');
class EGestore extends EUtente
{

 public $lidi=array();
 public $IDGestore;//da togliere
 public $nome;//da togliere
 public $cognome;//da togliere

         public function __construct ($nome , $cognome)
         {
           $this->nome = $nome;
           $this->cognome = $cognome;
           //$IDGestore= $this->getNNNG().$this->getCCCG();
           //$this->IDGestore=$IDGestore;
         }

         public function getNNNG()
         {
           $nomeoriginale = $this->nome;
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

         public function getCCCG()
         {
           $cognomeoriginale = $this->cognome;
           $CCC= array();
           $cognomemaiuscolo = strtoupper($cognomeoriginale)."XXX";
           preg_match_all('/[^AEIOUX]/', $cognomemaiuscolo , $consonanti);
           preg_match_all('/[AEIOUX]/', $cognomemaiuscolo , $vocali);
           for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
           {
             array_push($CCC , $consonanti[0][$i]);
           }
           if(sizeof($CCC) < 3)
           {
             for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
             {
               array_push($CCC , $vocali[0][$i]);
             }
             if (sizeof($CCC) < 3)
             {
               array_push($CCC , "X");
             }
           }
           return implode('' , $CCC);
         }



        public function aggiungiLido($nomeLido,$indirizzo)
        {
        array_push($this->lidi,new ELido($nomeLido,$indirizzo) );
        }

        public function getLidi()
        {
          return $this->lidi;
        }

        public function rimuoviLido($IDLido)
        {
          //....da completare
        }
}
?>