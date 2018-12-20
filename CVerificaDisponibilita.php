<?php
require_once 'includes/autoload.inc.php';

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$date_in = isset($_GET['dataIn']) ? $_GET['dataIn'] : ''; //dati per effettuare query sul db
$date_in = date("Y-m-d", strtotime($date_in));

$date_out = isset($_GET['dataOut']) ? $_GET['dataOut'] : ''; //dati per effettuare query sul db
$date_out = date("Y-m-d", strtotime($date_out));

//$nome_Gestore = isset($_GET['nomeGestore']) ? $_GET['nomeGestore'] : '';//dati per effettuare query sul db
$id_Lido = isset($_GET['idLido']) ? $_GET['idLido'] : ''; //dati per effettuare query sul db

$ok = true;
$messages = array();

$fpren = new FPrenotazione();
$arrayDB = $fpren->getOmbrelloniOccupati($id_Lido, $date_in, $date_out);

//$arrayDB = ['A1', 'A2', 'A3', 'A4', 'B1', 'B2', 'B3', 'C1']; //ARRAY DI STRINGHE CONTENENTE GLI ID DEGLI OMBRELLONI OCCUPATI RITORNATI DALLA QUERY SUL DB


if (!isset($date_in) || empty($date_in)) {
$ok = false;
$messages[] = 'DATE-IN cannot be empty';
}
if (!isset($date_out) || empty($date_out)) {
$ok = false;
$messages[] = 'DATE-OUT cannot be empty';
}

if ($ok) {

$ok = true;
$messages[] = 'Successful date choise!';

//if ($date_in === 'dcode' ) {
// $ok = true;
//$messages[] = 'Successful date choise!';
//} else {
//$ok = false;
//$messages[] = 'Incorrect date!';
//}
}

$array = [
    'ok' => $ok,
    'messages' => $messages,
    'dataIn' => $date_in,
    'dataOut' => $date_out,
    //'nomeGestore' => $nome_Gestore,
    'idLido' => $id_Lido,
    'arrayDB' => $arrayDB,
];

echo json_encode($array);

//put your code here

/* $file = 'date.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$arrayDB" ."$id_Lido" . ":" . "$date_in" . "->" . "$date_out\r\n";
// Write the contents back to the file
file_put_contents($file, $current); */

//CODICE PER VERIFICA DISPONIBILITA DELLA GRIGLIA -> SOSTITUIRE I NEW CON DELLE QUERY SU DB PER POI UTILIZZARE IL RISULTATO COME STIRNGA DI CONFRONTO $arrayDB
/* $lidouno->generaGriglia();
$griglia=$lidouno->getGriglia();

$arrayDB = ['A1' , 'A2', 'A3' , 'A4', 'B1' , 'B2', 'B3' , 'B5'];//ARRAY DI STRINGE CONTENENTE GLI ID DEGLI OMBRELLONI OCCUPATI RITORNATI DALLA QUERY SUL DB

for($i=0;$i<count($griglia);$i++){
if (in_array($griglia[$i]->getID(), $arrayDB)) {
$array[$i]=[
'riga' => $griglia[$i]->getRiga(),
'colonna' => $griglia[$i]->getColonna(),
'id' => $griglia[$i]->getID(),
'occupato' => 'true',//
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
echo json_encode($array); */
