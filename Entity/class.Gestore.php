<?php

error_reporting(E_ALL);

/**
 * UML - class.Gestore.php
 *
 * $Id$
 *
 * This file is part of UML.
 *
 * Automatically generated on 25.09.2018, 16:00:00 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Lido
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Lido.php');

/**
 * include Utente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Utente.php');

/* user defined includes */
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086C-includes begin
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086C-includes end

/* user defined constants */
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086C-constants begin
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086C-constants end

/**
 * Short description of class Gestore
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Gestore
    extends Utente
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute nome
     *
     * @access public
     * @var String
     */
    public $nome = null;

    /**
     * Short description of attribute lidi
     *
     * @access public
     * @var Lido
     */
    public $lidi = null;

    /**
     * Short description of attribute cognome
     *
     * @access public
     * @var String
     */
    public $cognome = null;

    // --- OPERATIONS ---

    /**
     * Short description of method aggiungiLido
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  nomeLido
     * @param  numeroOmbrelloni
     * @param  indirizzo
     * @return Lido
     */
    public function aggiungiLido($nomeLido, $numeroOmbrelloni, $indirizzo)
    {
        $returnValue = null;

        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009E4 begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009E4 end

        return $returnValue;
    }

    /**
     * Short description of method rimuoviLido
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  nomeLido
     * @return mixed
     */
    public function rimuoviLido($nomeLido)
    {
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009FC begin
        // section -64--88-56-1--32a8f8ee:1638c88a92e:-8000:00000000000009FC end
    }

} /* end of class Gestore */

?>