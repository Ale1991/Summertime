<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;


function logoutUtente(Request $request, Response $response)
{
    Session::destroy();
    // Redirect to home page after logout
    //$response->redirect($app->urlFor('/'), 303);
}