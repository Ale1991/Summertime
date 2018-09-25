<?php

error_reporting(E_ALL);

/**
 * UML - class.Lido.php
 *
 * $Id$
 *
 * This file is part of UML.
 *
 * Automatically generated on 23.05.2018, 13:06:57 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Gestore
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Gestore.php');

/**
 * include Ombrellone
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Ombrellone.php');

/* user defined includes */
// section -64--88-0-6--3526dac2:1634f42c0f7:-8000:0000000000000AB6-includes begin
// section -64--88-0-6--3526dac2:1634f42c0f7:-8000:0000000000000AB6-includes end

/* user defined constants */
// section -64--88-0-6--3526dac2:1634f42c0f7:-8000:0000000000000AB6-constants begin
// section -64--88-0-6--3526dac2:1634f42c0f7:-8000:0000000000000AB6-constants end

/**
 * Short description of class Lido
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Lido
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute nomeLido
     *
     * @access public
     * @var String
     */
    public $nomeLido = null;

    /**
     * Short description of attribute numeroOmbrelloni
     *
     * @access public
     * @var Ombrellone
     */
    public $numeroOmbrelloni = null;

    /**
     * Short description of attribute prenotazioni
     *
     * @access public
     * @var Prenotazione
     */
    public $prenotazioni = null;

    /**
     * Short description of attribute indirizzo
     *
     * @access public
     * @var String
     */
    public $indirizzo = null;

    // --- OPERATIONS ---

    /**
     * Short description of method setNome
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  nomeLido
     * @return mixed
     */
    public function setNome($nomeLido)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009EE begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009EE end
    }

    /**
     * Short description of method getNome
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getNome()
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F1 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F1 end

        return $returnValue;
    }

    /**
     * Short description of method aggiungiOmbrellone
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  riga
     * @param  colonna
     * @param  ID
     * @return Ombrellone
     */
    public function aggiungiOmbrellone($riga, $colonna, $ID)
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F4 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F4 end

        return $returnValue;
    }

    /**
     * Short description of method rimuoviOmbrellone
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  ID
     * @return mixed
     */
    public function rimuoviOmbrellone($ID)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F9 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009F9 end
    }

    /**
     * Short description of method setIndirizzo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  indirizzo
     * @return mixed
     */
    public function setIndirizzo($indirizzo)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009FF begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009FF end
    }

    /**
     * Short description of method getIndirizzo
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getIndirizzo()
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A02 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:0000000000000A02 end

        return $returnValue;
    }

} /* end of class Lido */

?>