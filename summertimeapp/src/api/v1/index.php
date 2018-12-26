<?php


$app->get("/", function ($request, $response) {
    if(Session::getUtente() != null) {
		echo 'Logged';
	} else {
		echo 'Not logged';
	}
});

require 'lidi/index.php';
require 'utenti/index.php';
require 'prenotazioni/index.php';

