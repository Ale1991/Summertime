<?php
//header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
//header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Origin: http://summertime");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, *");


//header('Content-type: application/json');

require '../vendor/autoload.php';
//include foundation
require '../src/Foundations/Fdb.php';
require '../src/Foundations/FLido.php';
require '../src/Foundations/FOmbrellone.php';
require '../src/Foundations/FPrenotazione.php';
require '../src/Foundations/FUtente.php';
//include entity
require '../src/Entity/EUtente.php';
require '../src/Entity/EGestore.php';
require '../src/Entity/EIndirizzo.php';
require '../src/Entity/ELido.php';
require '../src/Entity/EOmbrellone.php';
require '../src/Entity/EPrenotazione.php';
//include utility
require '../src/Utility/DBSessionHandler.php';
require '../src/Utility/Session.php';
//include my light fdb
require '../src/config/db.php';

//enable session on db
// Session::dbSession();
//Session::generate();

$app = new \Slim\App;

// API endpoint
require '../src/api/v1/index.php';

$app->run();



?>
