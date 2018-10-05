<?php

class EUtente 
{
    private $nomeUtente=''; //string
    private $password=''; //string
    private $loginStatus=false; //boolean
    private $nome;
    private $cognome; //string
    private $email; //string
    private $isGestore=false; //boolean
    private $isAmministratore=false; //boolean
    
    /*     public function __construct ($nomeUtente,$password){
            $this->nomeUtente=$nomeUtente;
            $this->password=$password;
            }
         */
        
    public function getNomeUtente(){return $this->nomeUtente;}
    public function setNomeUtente($nomeUtente){$this->nomeUtente=$nomeUtente;}
    public function getPassword(){return $this->password;}
    public function setPassword($password){$this->password=$password;}
    public function getLoginStatus(){return $this->loginStatus;}
    public function setLoginStatus($loginStatus){$this->loginStatus=$loginStatus;}
    public function getNome(){return $this->nome;}
    public function setNome($nome){$this->nome=$nome;}
    public function getCognome(){return $this->cognome;}
    public function setCognome($cognome){$this->cognome=$cognome;}
    public function getEmail(){return $this->email;}
    public function setEmail($email){$this->email=$email;}
    public function getIsGestore(){return $this->isGestore;}
    public function setIsGestore($isGestore){$this->isGestore=$isGestore;}
    public function getIsAmministratore(){return $this->isAmministratore;}
    public function setIsAmministratore($isAmministratore){$this->isAmministratore=$isAmministratore;}
    
    //getNNNU & getCCCU servono per calcolare l'id, attualmente superfluo, della classe cliente
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
    
}

        