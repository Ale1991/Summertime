<?php
/*require_once necessari, in seguito tutti questi require_once saranno sostituiti da un file include.php (per esempio)*/
require_once('class.ClienteMinimal.php');
require_once('class.OmbrelloneMinimal.php');
require_once('EProprietario.php');
require_once('class.LidoMinimal.php');
class Prenotazione
{
    /** Codice id della prenotazione */
    private int $idPrenotazione == 0; /** Successivamente potremmo dare un autoincrement direttamente dal DBMS */
    /** Quantità di denaro versata */
    private $amount;
    /** Data relativa alla prenotazione */
    private $date;
    /** Codice id del cliente */
    private $idCliente;
    /** Codice id del lido */
    private $idLido;
    /** Codice id del proprietario */
    private $idProprietario;
    /** Booleano settato a true nel caso di prenotazione andata a buon fine */
    private $prenotazioneEffettuata;
    /** Id carta di credito */
    private $idCartaDiCredito;


    /** Costruttore */
    public function __construct ($amount, $date, $idCliente, $idLido, $idProprietario, $idCartaDiCredito)
    {
        $this->idPrenotazione = idPrenotazione++;
        $this->amount = $amount;
        $this->date = $date;
        $this->idCliente = $idCliente;
        $this->idLido = $idLido;
        $this->idProprietario = $idProprietario;
        $this->idCartaDiCredito = $idCartaDiCredito;
        $this->prenotazioneEffettuata = true;
    }

    /** Setters and Getters */

    public function setIdPrenotazione($idPrenotazione)
    {
        $this->idPrenotazione = $idPrenotazione;
    }

    public function getIdPrenotazone()
    {
        return $this->idPrenotazione;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }
    
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
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
    public function __toString()
    {
        $ts="IdPrenotazione: ".$this->getIdPrenotazone()." Amount: ".$this->getAmount()." Data: ".$this->getDate();
    }



}

?>