<?php

$date_in = isset($_GET['dateIn']) ? $_GET['dateIn'] : '';//dati per effettuare query sul db
$date_out = isset($_GET['dateOut']) ? $_GET['dateOut'] : '';//dati per effettuare query sul db
$nome_Gestore = isset($_GET['nomeGestore']) ? $_GET['nomeGestore'] : '';//dati per effettuare query sul db
$id_Lido = isset($_GET['IdLido']) ? $_GET['IdLido'] : '';//dati per effettuare query sul db

$ok = true;
$messages = array();
$arrayDB = ['A1', 'A2', 'A3', 'A4', 'B1', 'B2', 'B3', 'B5']; //ARRAY DI STRINGHE CONTENENTE GLI ID DEGLI OMBRELLONI OCCUPATI RITORNATI DALLA QUERY SUL DB

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
echo json_encode(
    array(
        'ok' => $ok,
        'messages' => $messages,
        'dataIn' => $date_in,
        'dataOut' => $date_out,
        'nomeGestore' => $nome_Gestore,
        'idLido' => $id_Lido,
        'arrayDB' => $arrayDB,
    )
);

//put your code here

$file = 'date.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "$nome_Gestore" . ":" . "$id_Lido" . ":" . "$date_in" . "->" . "$date_out\r\n";
// Write the contents back to the file
file_put_contents($file, $current);

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
