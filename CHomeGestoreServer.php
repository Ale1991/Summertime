<?php
require_once 'includes/autoload.inc.php';

//RISORSA UTILIZZATA PER INIZIALIZZARE LA RISORSA lido-home.html passando due parametri con ajax.GET(idLido)
//la quale fara' query sul db per recuperare tutti i dati dei due oggetti i quali verranno restituiti al client javascript
//come JSON, il quale verra' elaborato dal client javascript per costruire la pagina html

//PRENDO I DATI ARRIVATI DALLA RICHIESTA ajax.GET
//$idLido = "RSDVNTVRM66D763";
$idLido = isset($_GET['idLido']) ? $_GET['idLido'] : '';

//implementare codice che dato "$idLido" passati dal client tramite richiesta ajax.GET
//faccia query su db per recuperare tutto l'oggetto $gestore e $lido per poi utilizzare i loro metodi get
//nella costruzione dell'array($array qui sotto) che verra' inviato come JSON al client
$lido = new FLido();
$obj_lido = $lido->getObject($idLido);
$obj_lido->generaGriglia();
$griglia = $obj_lido->getGriglia();
$gestore = $obj_lido->getGestore();

for ($i = 0; $i < count($griglia); $i++) {
    $array[$i] = [
        'riga' => $griglia[$i]->getRiga(),
        'colonna' => $griglia[$i]->getColonna(),
        'id' => $griglia[$i]->getID(),
        'occupato' => $griglia[$i]->getOccupato(), //set  "true"
    ];
}

$dati = [
    'via' => $obj_lido->getVia(),
    'civico' => $obj_lido->getCivico(),
    'comune' => $obj_lido->getComune(),
    'provincia' => $obj_lido->getProvincia(),

    'idLido' => $obj_lido->getIdLido(),
    'indirizzo' => $obj_lido->getIndirizzo(),
    'nomeLido' => $obj_lido->getNomeLido(),
    'nomeGestore' => $gestore->getNomeUtente(),
    'password' => $gestore->getPassword(),
    'loginStatus' => $gestore->getLoginStatus(),
    //'nome' => $gestore->getNome(),
    //'cognome' => $gestore->getCognome(),
    'email' => $gestore->getEmail(),
    'isGestore' => $gestore->getIsGestore(),
    'isAmministratore' => $gestore->getIsAmministratore(),
    'idUtenteLoggato' => 'utenteloggato!!',
];

$array[] = $dati;
echo json_encode($array);
//print_r($array);
