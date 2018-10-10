<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Foundations/Fdb.php';
        require_once 'Foundations/FPrenotazione.php';
        require_once 'Entity/EPrenotazione.php';
        //$prova=new Fdb();
        //print $prova->get_hostname();
        $pren=new EPrenotazione();
        $pren->setIdLido(66);
        $pren->setIdUtente(10);
        $pren->setNumOmbrellone("A13");
        $a=new DateTime();
        $a->setTime('0', '0', '0');
        $a->setDate('2017', '11', '11');
        $pren->setDate($a);
        print $pren->getNumOmbrellone();
        
        //print $a->format("d-m-Y H:i:s");
       
        $fpren=new FPrenotazione();
        $fpren->caricaPrenotazione($pren);
        
        
        //$fpren->connetti($prova->get_hostname(), $prova->get_dbname(), $prova->get_user(), $prova->get_pass());
        
        
        //$prova->connetti($prova->get_hostname(), $prova->get_dbname(), $prova->get_user(), $prova->get_pass());
        
        
        
        ?>
    </body>
</html>
