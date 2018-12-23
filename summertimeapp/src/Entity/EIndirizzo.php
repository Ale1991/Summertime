<?php
//indirizzi[0]=”Viale Italia 40, La Spezia, Italia”; da google maps API,esempio di struttura

class EIndirizzo
{
    private $via = "";
    private $civico = "";
    private $comune = "";
    private $provincia = "";
    private $indirizzo = "";
    private $codice;
    private $IDIndirizzo;
    //private $path = (__DIR__ . '/codici_comuni_italiani.txt'); //va sistemato il relative path con il require

    public function __construct($via, $civico, $comune, $provincia)
    {
        $this->via = $via;
        $this->civico = $civico;
        $this->comune = $comune;
        $this->provincia = $provincia;
        $indirizzo = 'via ' . $this->via . ' ' . $this->civico . ',' . $this->comune . ',' . $this->provincia;
        $this->indirizzo = $indirizzo;
        $IDIndirizzo = $this->getNNNVia() . $this->civico . $this->_calcolaCodiceComune($this->comune, $this->provincia);
        $this->IDIndirizzo = $IDIndirizzo;
    }

    public function _calcolaCodiceComune($comune, $provincia)
    {
        $found = false;
        $this->comune = $comune;
        $this->provincia = $provincia;
        //$handle = fopen("$this->path", 'r');
        $handle = fopen(__DIR__ . '/codici_comuni_italiani.txt', "r");

        while (!feof($handle)) {
            $lettura = fgets($handle, 4096);
            $comunecorrente = strtoupper($comune);
            if (strpos($lettura, $comunecorrente) !== false) {

                if (strpos($lettura, $provincia) !== false) {

                    $rigaesplosa = explode(";", $lettura); //trasformo la stringa di input in un array di sottostringhe
                    $this->codice = $rigaesplosa[0]; //assegno il codice della stringa alla variabile codice comune
                    break;
                } else {
                    //echo("La stringa '$provincia ' NON e' stata trovata!"."\n"); //check verifica point
                }
            } else {
                //echo("La stringa '$nome ' NON e' stata trovata!"."\n"); //check verifica point
                $this->codice = "nessun match tra il comune di: $comune e la provincia di: $provincia";
            }
        }
        fclose($handle);
        return $this->codice;
    }

    public function getNNNVia()
    {
        $nomeoriginale = $this->via;
        $NNN = array();
        $nomemaiuscolo = strtoupper($nomeoriginale) . "XXX";
        preg_match_all('/[^AEIOUX]/', $nomemaiuscolo, $consonanti);
        preg_match_all('/[AEIOUX]/', $nomemaiuscolo, $vocali);
        for ($i = 0, $size = sizeof($consonanti[0]); $i < $size; $i++) {
            array_push($NNN, $consonanti[0][$i]);
        }
        if (sizeof($NNN) < 3) {
            for ($i = 0, $size = 3 - sizeof($consonanti[0]); $i < $size; $i++) {
                array_push($NNN, $vocali[0][$i]);
            }
            if (sizeof($NNN) < 3) {
                array_push($NNN, "X");
            }
        }
        $NNNVia = implode('', $NNN);
        $NNNVia = preg_replace('/\s+/', '', $NNNVia);
        $this->NNNVia = $NNNVia;
        return $NNNVia;
    }

    public function getIDIndirizzo()
    {
        $found = false;
        $com = $this->comune;
        $prov = $this->provincia;
        $handle = fopen(__DIR__ . '/codici_comuni_italiani.txt', "r");
        while (!feof($handle)) {
            $lettura = fgets($handle, 4096);
            if (strpos($lettura, strtoupper($com)) !== false) {
                //echo("La stringa '$nome ' e' stata trovata!"."\n"); //check verifica point
                if (strpos($lettura, $prov) !== false) {
                    //echo("La stringa '$provincia ' e' stata trovata!"."\n"); //check vericifa point
                    $rigaesplosa = explode(";", $lettura); //trasformo la stringa di input in un array di sottostringhe
                    $this->codice = $rigaesplosa[0]; //assegno il codice della stringa alla variabile codice comune
                    break;
                } else {
                    //echo("La stringa '$provincia ' NON e' stata trovata!"."\n"); //check verifica point
                }
            } else {
                //echo("La stringa '$nome ' NON e' stata trovata!"."\n"); //check verifica point
                $this->codice = "nessun match tra il comune di: $com e la provincia di: $prov";
            }
        }
        fclose($handle);
        $IDIndirizzo = $this->getNNNVia() . $this->civico . $this->codice;
        $this->IDIndirizzo = $IDIndirizzo;
        return $this->IDIndirizzo;
    }

    public function getVia()
    {return $this->via;}
    public function setVia($via)
    {$this->via = $via;}
    public function getCivico()
    {return $this->civico;}
    public function setCivico($civico)
    {$this->civico = $civico;}
    public function getComune()
    {return $this->comune;}
    public function setComune($comune)
    {$this->comune = $comune;}
    public function getProvincia()
    {return $this->provincia;}
    public function setProvincia($provincia)
    {$this->provincia = $provincia;}
    public function getIndirizzo()
    {return $this->indirizzo;}
}
