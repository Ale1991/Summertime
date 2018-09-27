<?php

/*
 * @Access public
 * @package Entity
 */

/**
 * Description of EUtente
 *
 * @author Stefano
 */
class EUtente {
    private $userId; //int
    private $nome; //string
    private $cognome; //string
    private $data_nascita; //DateTime
    private $luogo_nascita; //EResidenza
    private $sesso; //char
    private $nome_utente; //string
    private $mail; //string
    private $residenza; //EResidenza
    private $is_proprietario=false; //boolean
    private $is_amministratore=false; //boolean
    private $login_status=false; //boolean
    
    //Questa funzione restituisce una stringa
    public function getNome()
    {
        return $this->nome;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    //Questa funzione restituisce una stringa
    public function getCognome()
    {
        return $this->cognome;
    }
    
    //Questa funzione restituisce un oggetto di tipo "DateTime"
    public function getData_nascita()
    {
        return $this->data_nascita;
    }
    
    //Questa funzione restituisce un oggetto di tipo "EResidenza"
    public function getLuogo_nascita()
    {
        return $this->luogo_nascita;
    }
    
    //Questa funzione restituisce un char
    public function getSesso()
    {
        return $this->sesso;
    }
    
    //Questa funzione restituisce una stringa
    public function getNome_utente()
    {
        return $this->nome_utente;
    }
    
    //Questa funzione restituisce una stringa
    public function getMail()
    {
        return $this->mail;
    }
    
    //Questa funzione restituisce un oggetto di tipo "EResidenza"
    public function getResidenza()
    {
        return $this->residenza;
    }
    
    //Questa funzione restituisce un booleano
    public function getIs_proprietario()
    {
        return $this->is_propietario;
    }
    
    //Questa funzione restituisce un booleano
    public function getIs_amministratore()
    {
        return $this->is_amministratore;
    }
    
    public function getLogin_status()
    {
        return $this->login_status;
    }
    

     /**
     * @access public
     * @param $nome string
     * Inserisce il nome dell'utente (string) 
     */
    public function setNome($nome) {
        $this->nome=$nome;
    }
    
     /**
     * @access public
     * @param $cognome string
     * Inserisce il cognome dell'utente (string) 
     */
    public function setCognome($cognome) {
        $this->cognome=$cognome;
    }
    
     /**
     * @access public
     * @param $luogo_nascita EResidenza
     * Inserisce il luogo di nascita dell'utente (EResidenza) 
     */
    public function setLuogo_nascita(EResidenza $luogo_nascita) {
        $this->luogo_nascita=$luogo_nascita;
    }
    
     /**
     * @access public
     * @param $data_nascita data
     * Inserisce la data di nascita dell'utente (data) 
     */
    public function setData_nascita(DateTime $data_nascita) {
        $this->data_nascita=$data_nascita;
    }
    
     /**
     * @access public
     * @param $sesso char
     * Inserisce il sesso dell'utente (char) 
     */
    public function setSesso($sesso) {
        $this->sesso=$sesso;
    }
    
     /**
     * @access public
     * @param $nome_utente string
     * Inserisce il nome_utente dell'utente (string) 
     */
    public function setNome_utente($nome_utente) {
        $this->nome_utente=$nome_utente;
    }
    
     /**
     * @access public
     * @param $mail string
     * Inserisce la mail dell'utente (string) 
     */
    public function setMail($mail) {
        $this->mail=$mail;
    }
    
      /**
     * @access public
     * @param $residenza EResidenza
     * Inserisce la residenza dell'utente (EResidenza) 
     */
    public function setResidenza(EResidenza $residenza) {
        $this->residenza=$residenza;
    }
    
     /**
     * @access public
     * @param Entity.EOrdine aOrdine
     * @ParamType aOrdine Entity.EOrdine
     */
    
     /**
     * @access public
     * @param $prop boolean
     * Modifica lo stato dell'utente semplice in proprietario (boolean) 
     */
    public function setIs_proprietario($prop) {
        $this->is_proprietario=$prop;
    }
    
    /**
     * @access public
     * @param $amm boolean
     * Modifica lo stato dell'utente semplice in amministratore (boolean) 
     */
    public function setIs_amministratore($amm) {
        $this->is_amministratore=$amm;
    }
    
    public function set_UserId($i)
    {
        $this->id=$i;
    }
    
   
    
    
    
    
  
    
    
    
    
    
    
    
    
    
}

        