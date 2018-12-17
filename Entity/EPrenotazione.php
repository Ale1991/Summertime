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
    /** Booleano settato a true nel caso di prenotazione andata a buon fine */
    private $prenotazioneEffettuata;
    /** Id carta di credito */
    private $CartaDiCredito;

    /** Oggetto Data relativa alla prenotazione */
    private $dataInizio;
    private $dataFine;
    /** Oggetto Ombrellone */
    //private $ombrelloni=array();
    private $Ombrellone;
    /** Oggetto Gestore */
    private $Lido;
    /** Oggetto Utente */
    private $Utente;

    /** Costruttore */
    public function __construct($dataInizio, $dataFine, $Ombrellone, $Lido, $Utente)
    {
        $this->dataInizio = $dataInizio;
        $this->dataFine = $dataFine;
        $this->Ombrellone = $Ombrellone;
        $this->Lido = $Lido;
        $this->Utente = $Utente;
        /* $this->prenotazioneEffettuata = true; */
    }

    public function setNumeroPrenotazione($numeroPrenotazione)
    {$this->numeroPrenotazione = $numeroPrenotazione;}
    public function getNumeroPrenotazione()
    {return $this->numeroPrenotazione;}

    public function setAmount($amount)
    {$this->amount = $amount;}
    public function getAmount()
    {return $this->amount;}

    public function setDataInizio(Datetime $dataInizio)
    {$this->dataInizio = $dataInizio;}
    public function getDataInizio()
    {return $this->dataInizio;}

    public function setDataFine(Datetime $dataFine)
    {$this->dataFine = $dataFine;}
    public function getDataFine()
    {return $this->dataFine;}

    public function setUtente($Utente)
    {$this->Utente = $Utente;}
    public function getUtente()
    {return $this->Utente;}

    public function setLido($Lido)
    {$this->Lido = $Lido;}
    public function getLido()
    {return $this->Lido;}

    public function setCartaDiCredito($CartaDiCredito)
    {$this->CartaDiCredito = $CartaDiCredito;} //?????????
    public function getCartaDiCredito()
    {return $this->CartaDiCredito;} //?????????????

    public function setPrenotazioneEffettuata($prenotazioneEffettuata)
    {$this->prenotazioneEffettuata = $prenotazioneEffettuata;} //???
    public function getPrenotazioneEffettuata()
    {return $this->$prenotazioneEffettuata;} //????

    public function setOmbrellone($Ombrellone)
    {$this->Ombrellone = $Ombrellone;}
    public function getOmbrellone()
    {return $this->Ombrellone;}

/////////////////////////////////////////////////////////////////////////////////////////////
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

//?????
    public function aggiungiOmbrellone($riga, $colonna)
    {
        array_push($this->ombrelloni, new EOmbrellone($riga, $colonna));
    }

    public function __toString()
    {
        $ts = "NumeroPrenotazione: " . $this->getNumeroPrenotazione() . " Amount: " . $this->getAmount() . " Data: " . $this->getDate();
    }

}
