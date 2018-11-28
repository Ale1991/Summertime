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
        require_once 'lib/Smarty/Smarty.class.php';
        require_once 'includes/autoload.inc.php';
        $a=new DateTime();
        $b=new DateTime();
        //$a->setTime('0', '0', '0');
        $a->setDate('2019', '6', '1');
        $b->setDate('2019', '9', '15');
        //$data=$a;
        //$ombrellone= new EOmbrellone();
        $gestore= new EGestore("Mimmo");
        $indirizzo=new EIndirizzo("via roma",66,"Francavilla al Mare","CH");
        $lido= new ELido("Rosa dei venti", $gestore, $indirizzo);
        $lido->setDataApertura($a);
        $lido->setDataChiusura($b);
        //$prova=$lido->getDataForm();
        //print var_dump($prova);
        $utente= new EUtente("Alessio");
        $var=new CPrenotazione();
        $var->ImpostaFormPrenotazione($lido, $utente);
        //$prova=new FPrenotazione();
        
        
        
        
        
        
        
      
        

        
    
        
        
     
        
        
       
        
     
        
        
        
        
      
        
        
        
        
        
     
        
        
        
        
        
        
        
        
        
        
        
        

        
        
   
        
        
        
        ?>
    </body>
</html>
