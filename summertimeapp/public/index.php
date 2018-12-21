<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');


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
//include my light fdb
require '../src/config/db.php';

$app = new \Slim\App;
/* $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
}); */

//Lidi Route
require '../src/routes/lidi.php';
require '../src/routes/ombrelloni.php';

// require '../src/routes/prenotazioni.php';
// require '../src/routes/utenti.php';



$app->run();
