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
        require_once 'Entity/ELido.php';
        require_once 'Entity/EOmbrellone.php';
        require_once 'Entity/EGestore.php';
/*         //$prova=new Fdb();
        //print $prova->get_hostname();
        $pren=new EPrenotazione();
        $pren->setIdLido(66);
        $pren->setIdUtente(10);
        $pren->setNumOmbrellone("A13");
        $a=new DateTime();
        $a->setTime('0', '0', '0');
        $a->setDate('2017', '11', '11');
        $pren->setDate($a);
        $b=$a;
        $prova=new FPrenotazione();
        //$prova->inserisci($pren);
        $prova->cerca("id", 4);
        //$prova->cancella("id", 3); */
        
        
        $data=new DateTime();
        $data->setTime('0', '0', '0');
        $data->setDate('2017', '11', '11');        

        $ombrellone=new EOmbrellone('5','1');

        $user1='Gennaro';
        $gestore=new EGestore($user1);    
        $gestore->setIsGestore(true);
        //$gestore->aggiungiLido('Venere',new EIndirizzo('Everest','32','Sulmona','AQ'));
        $lido=new ELido('venere', $gestore , new EIndirizzo('Everest','32','Sulmona','AQ'));

        $utente=new EUtente('Mario95');


        $pren=new EPrenotazione($data , $ombrellone , $lido , $utente);
        $idLido=$pren->getLido()->getIdLido();

        print_r($idLido);
        //print_r($pren);


        
        
        
        
        

        
        
   
        
        
        
        ?>
    </body>
</html>
