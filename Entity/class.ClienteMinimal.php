<?php
require_once('EUtente.php')

class Cliente
    extends EUtente
{
    private $nomeCliente = string;
    private $cognomeCliente = string;
    private $dataDiNascita = date;
    private $residenza = string;

    public function __construct ($nomeCliente,$cognomeCliente,$dataDiNascita,$residenza)
    {
        $this->nomeCliente = $nomeCliente;
        $this->cognomeCliente = $cognomeCliente;
        $this->dataDiNascita = $dataDiNascita;
        $this->residenza = $residenza;
    }

    

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    /**
     * Short description of attribute cognome
     *
     * @access public
     * @var String
     */
    public $cognome = null;

    /**
     * Short description of attribute datadinascita
     *
     * @access public
     * @var Data
     */
    public $datadinascita = null;

    /**
     * Short description of attribute residenza
     *
     * @access public
     * @var String
     */
    public $residenza = null;

    // --- OPERATIONS ---

}

?>