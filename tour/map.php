<?php
require_once 'includes/autoload.inc.php';
$nome='Alessio';
$cognome='Susco';
$gestore=new EGestore('Alessio91911');
$gestore->setNome($nome);
$gestore->setCognome($cognome);

$v='Everest';
$n='32';
$com='Sulmona';
$prov='AQ';
$indirizzoLido=new EIndirizzo($v,$n,$com,$prov);
$nomeLido='Alcyone';
$gestore->aggiungiLido($nomeLido,$indirizzoLido);

$a=$gestore->getLidi();
$lidouno=$a[0];
$lidouno->setRighe(2);
$lidouno->setColonne(5);
//$lidouno->setDataApertura(01/06/2018);
//$lidouno->setDataChiusura(30/09/2018);
$lidouno->generaGriglia();
$griglia=$lidouno->getGriglia();

$arrayDB = ['A1' , 'A2', 'A3' , 'A4', 'B1' , 'B2', 'B3' , 'B5'];//ARRAY DI STRINGE CONTENENTE GLI ID DEGLI OMBRELLONI OCCUPATI RITORNATI DALLA QUERY SUL DB

for($i=0;$i<count($griglia);$i++){
  if (in_array($griglia[$i]->getID(), $arrayDB)) {
    $array[$i]=[
          'riga' => $griglia[$i]->getRiga(),
          'colonna' => $griglia[$i]->getColonna(),
          'id' => $griglia[$i]->getID(),
          'occupato' => 'true',//set  "true" 
        ];
      }
      else{
        $array[$i]=[
          'riga' => $griglia[$i]->getRiga(),
          'colonna' => $griglia[$i]->getColonna(),
          'id' => $griglia[$i]->getID(),
          'occupato' => $griglia[$i]->getOccupato(),//set  "true" 
        ];
      }
    }
 $dati= [
        'idLido' => $lidouno->getIdLido(),
        'nomeLido' => $lidouno->getNomeLido(),
        'nomeUtente' => $gestore->getNomeUtente(),
        'password' => $gestore->getPassword(),
        'loginStatus' => $gestore->getLoginStatus(),
        'nome' => $gestore->getNome(),
        'cognome' => $gestore->getCognome(),
        'email' => $gestore->getEmail(),
        'isGestore' => $gestore->getIsGestore(),
        'isAmministratore' => $gestore->getIsAmministratore()
      ];
$array[]=$dati;
echo json_encode($array);
//print_r($array);
?>