<?php
require_once 'Entity/EUtente.php';
class EGestore extends EUtente
{
  private $lidi=array();


  public function aggiungiLido($nomeLido,$indirizzo){array_push($this->lidi,new ELido($nomeLido,$indirizzo) );}
  public function getLidi(){return $this->lidi;}
  public function rimuoviLido($IDLido){/*....da completare*/}

}



?>