<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


function isLoggedUtente(Request $request, Response $response)
{
    if(Session::getUtente() != null) {
		echo 'Logged';
	} else {
		echo 'Not logged';
	}
}