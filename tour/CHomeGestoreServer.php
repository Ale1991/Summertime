<?php
require_once 'includes/autoload.inc.php';
//RISORSA UTILIZZATA PER INIZIALIZZARE LA RISORSA lido-home.html passando due parametri con ajax.GET(userIdGestore,nomeLido)
//la quale fara' query sul db per recuperare tutti i dati dei due oggetti i quali verranno restituiti al client javascript
//come JSON, il quale verra' elaborato dal client javascript per costruire la pagina html


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


//PRENDO I DATI ARRIVATI DALLA RICHIESTA ajax.GET
$userIdGestore = isset($_GET['userId']) ? $_GET['userId'] : '';//$userIdGestore variabile da usare per query sul db per recuperare l'oggetto gestore
$nomeLido = isset($_GET['nomeLido']) ? $_GET['nomeLido'] : '';//$nomeLido variabile da usare per query sul db per recuperare l'oggetto lido
$gestore->setNomeUtente($userIdGestore);//utilizzo variabile per testare se il get ha avuto successo
$lidouno->setNomeLido($nomeLido);//utilizzo variabile per testare se il get ha avuto successo
$gestore->setNome($userIdGestore);//utilizzo variabile per testare se il get ha avuto successo

//implementare codice che dati "userIdGestore" e "nomeLido" passati dal client tramite richiesta ajax.GET 
//faccia query su db per recuperare tutto l'oggetto $gestore e $lido per poi utilizzare i loro metodi get
//nella costruzione dell'array($array qui sotto) che verra' inviato come JSON al client
for($i=0;$i<count($griglia);$i++){
  $array[$i]=[
    'riga' => $griglia[$i]->getRiga(),
    'colonna' => $griglia[$i]->getColonna(),
    'id' => $griglia[$i]->getID(),
    'occupato' => $griglia[$i]->getOccupato(),//set  "true" 
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