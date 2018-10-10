<?php
/*require_once necessari, in seguito tutti questi require_once saranno sostituiti da un file include.php (per esempio)*/
//require_once('ECliente.php');
//require_once('EProprietario.php');
//require_once('ELido.php');
//require_once('EOmbrellone.php');

//date_default_timezone_set('Europe/Rome'); //fuso orario italiano
class EPrenotazione
{
    /** Numero prenotazione*/
    private $numeroPrenotazione;
    /** Quantità di denaro versata */
    private $amount;
    /** Data relativa alla prenotazione */
    private $date;
    /** Codice id del cliente */
    private $idUtente;
    /** Codice id del lido */
    private $idLido;
    /** Codice id del proprietario */
    private $idProprietario;
    /** Booleano settato a true nel caso di prenotazione andata a buon fine */
    private $prenotazioneEffettuata;
    /** Id carta di credito */
    private $idCartaDiCredito;
    /** Array di ombrelloni */
    //private $ombrelloni=array();
    private $numOmbrellone;


    /** Costruttore */
   /* public function __construct ($numeroPrenotazione, $amount, $idCliente, $idLido, $idProprietario, $idCartaDiCredito)
    {
        $this->numeroPrenotazione = $numeroPrenotazione;
        $this->amount = $amount;
        $this->date = date('m/d/Y h:i:s a', time());
        $this->idCliente = $idCliente;
        $this->idLido = $idLido;
        $this->idProprietario = $idProprietario;
        $this->idCartaDiCredito = $idCartaDiCredito;
        $this->prenotazioneEffettuata = true;
    }
    */
    /** Possibile generazione codice casuale, andrà poi confrontato su db */

        /** Lunghezza del codice (usare rand(min,max) per una lunghezza casuale)*/
        //$codelength = 20;
        /** Caratteri del codelength */
        //$elenco = "abcdefghijklmnopqrstuvwxyz0123456789";
        //$code='';
        /** Ciclo for */
        //for($i=0;$i<=$codelength;$i++)
        //{
        //$code.=substr($elenco,rand(0,strlen($elenco)),1);
        //}
        /** Stampa codice */
        //echo $code;

    /** Setters and Getters */

    public function setNumeroPrenotazione($numeroPrenotazione)
    {
        $this->numeroPrenotazione = $numeroPrenotazione;
    }

    public function getNumeroPrenotazione()
    {
        return $this->numeroPrenotazione;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setDate(Datetime $date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }
    
    public function setIdUtente($idUtente)
    {
        $this->idUtente = $idUtente;
    }

    public function getIdUtente()
    {
        return $this->idUtente;
    }

    public function setIdLido($idLido)
    {
        $this->idLido = $idLido;
    }

    public function getIdLido()
    {
        return $this->idLido;
    }

    public function setIdProprietario($idProprietario)
    {
        $this->idProprietario = $idProprietario;
    }

    public function getIdProprietario()
    {
        return $this->idProprietario;
    }

    public function setIdCartaDiCredito($idCartaDiCredito)
    {
        $this->idCartaDiCredito = $idCartaDiCredito;
    }

    public function getIdCartaDiCredito()
    {
        return $this->idCartaDiCredito;
    }

    public function setPrenotazioneEffettuata($prenotazioneEffettuata)
    {
        $this->prenotazioneEffettuata = $prenotazioneEffettuata;
    }

    public function getPrenotazioneEffettuata()
    {
        return $this->$prenotazioneEffettuata;
    }

    public function aggiungiOmbrellone($riga, $colonna)
    {
    array_push($this->ombrelloni, new EOmbrellone($riga , $colonna));
    }
    
    public function setNumOmbrellone($ombr)
    {
        $this->numOmbrellone=$ombr;
    }
    
    public function getNumOmbrellone()
    {
        return $this->numOmbrellone;
    }

    public function getOmbrellone()
    {
      return $this->ombrelloni;
    }

    public function __toString()
    {
        $ts="NumeroPrenotazione: ".$this->getNumeroPrenotazione()." Amount: ".$this->getAmount()." Data: ".$this->getDate();
    }



}

?>