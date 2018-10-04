<?php
require_once('EUtente.php')

class ECliente
    extends EUtente
{
    /**Costruttore */
    public function __construct ($nome,$cognome,$userId)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->userId = $userId;
        $this->login_status=true;
    }


}

public function __toString()
    {
        $ts="Nome: ".$this->getNome()." Cognome: ".$this->getCognome()." UserId: ".$this->getUserId();
    }
?>