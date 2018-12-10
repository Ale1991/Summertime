<?php

error_reporting(E_ALL);

/**
 * UML - class.Amministratore.php
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
 * include Utente
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Utente.php');

/* user defined includes */
// section -64--88-0-6--291b336:1634e99b227:-8000:0000000000000AA0-includes begin
// section -64--88-0-6--291b336:1634e99b227:-8000:0000000000000AA0-includes end

/* user defined constants */
// section -64--88-0-6--291b336:1634e99b227:-8000:0000000000000AA0-constants begin
// section -64--88-0-6--291b336:1634e99b227:-8000:0000000000000AA0-constants end

/**
 * Short description of class Amministratore
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Amministratore
    extends Utente
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute adminName
     *
     * @access public
     * @var String
     */
    public $adminName = null;

    /**
     * Short description of attribute adminPassword
     *
     * @access public
     * @var String
     */
    public $adminPassword = null;

    /**
     * Short description of attribute email
     *
     * @access public
     * @var String
     */
    public $email = null;

    // --- OPERATIONS ---

} /* end of class Amministratore */

?>