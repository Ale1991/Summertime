<?php

error_reporting(E_ALL);

/**
 * UML - class.Cliente.php
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
 * include Prenotazione
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Prenotazione.php');

/**
 * include Utente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Utente.php');

/* user defined includes */
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086A-includes begin
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086A-includes end

/* user defined constants */
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086A-constants begin
// section -64--88-0-6-17608819:1633b2931b6:-8000:000000000000086A-constants end

/**
 * Short description of class Cliente
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Cliente
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

} /* end of class Cliente */

?>