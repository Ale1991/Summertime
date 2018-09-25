<?php

error_reporting(E_ALL);

/**
 * UML - class.Ombrellone.php
 * $Id$
 * This file is part of UML.
 */

if (0 > version_compare(PHP_VERSION, '5')) {//da vedere bene
    die('This file was generated for PHP 5');
}

/* include Lido */
require_once('class.Lido.php');

/* include Prenotazione */
require_once('class.Prenotazione.php');

/**
 * Short description of class Ombrellone
 * @access public 
 * */
class Ombrellone
{
    // --- ASSOCIATIONS ---

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute riga:
     * definisce la posizione dell'ombrellone
     * @access public
     * @var Integer
     */
    public $riga = null;

    /**
     * Short description of attribute colonna
     * definisce la posizione dell'ombrellone
     * @access public
     * @var Integer
     */
    public $colonna = null;

    /**
     * Short description of attribute occupato
     * stato dell'ombrellone relativo alle prenotazioni
     * @access public
     * @var Boolean
     */
    public $occupato = null;

    /**
     * Short description of attribute ID
     * attributo calcolato dal metodo getID come combinazione tra riga e colonna
     * @access public
     * @var String
     */
    public $ID = null;

    // --- OPERATIONS ---

    /**
     * Short description of method getID
     * calcola un ID univoco per ogni oggetto di tipo ombrellone basato sulla posizione dell'oggetto all'interno del lido
     * @access public
     * @return String
     */
    public function getID($riga,$colonna)
    {
        $id=$riga.$colonna
        $returnValue = $id;
        return $returnValue;
    }

    /**
     * Short description of method setOccupato
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOccupato()
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A06 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A06 end
    }

    /**
     * Short description of method getOccupato
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Boolean
     */
    public function getOccupato()
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A08 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A08 end

        return $returnValue;
    }

    /**
     * Short description of method setRiga
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  riga
     * @return mixed
     */
    public function setRiga($riga)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A1C begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A1C end
    }

    /**
     * Short description of method getRiga
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Integer
     */
    public function getRiga()
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A20 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A20 end

        return $returnValue;
    }

    /**
     * Short description of method setColonna
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  colonna
     * @return mixed
     */
    public function setColonna($colonna)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A22 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A22 end
    }

    /**
     * Short description of method getColonna
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return Integer
     */
    public function getColonna()
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A25 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A25 end

        return $returnValue;
    }

} /* end of class Ombrellone */

?>