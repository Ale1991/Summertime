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
$nomeLido='Lampara';
$gestore->aggiungiLido($nomeLido,$indirizzoLido);

$a=$gestore->getLidi();
$lidouno=$a[0];
$lidouno->setRighe(8);
$lidouno->setColonne(16);
//$lidouno->setDataApertura(01/06/2018);
//$lidouno->setDataChiusura(30/09/2018);
$lidouno->generaGriglia();
$griglia=$lidouno->getGriglia();

 for($i=0;$i<count($griglia);$i++)
  {
      $array[$i]=[
          'riga' => $griglia[$i]->getRiga(),
          'colonna' => $griglia[$i]->getColonna(),
          'id' => $griglia[$i]->getID(),
          'occupato' => $griglia[$i]->getOccupato(),
      ];
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