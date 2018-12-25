<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function addUtente(Request $request, Response $response)
{
    $nomeUtente = $request->getParsedBody()['nomeUtente'];
    $password = $request->getParsedBody()['password'];
    $email = $request->getParsedBody()['email'];
    $isGestore = $request->getParsedBody()['isGestore'];

    try {
        $utente = new EUtente($nomeUtente);
        $utente->setPassword($password);
        $utente->setEmail($email);
        $utente->setIsGestore($isGestore);

        $array = [
            'messages' => 'aggiunto con successo!',
            'nomeUtente' => $utente->getNomeUtente(),
            'password' => $utente->getPassword($password),
            'email' => $utente->getEmail($email),
            'isGestore' => $utente->getIsGestore($isGestore),
        ];
        echo json_encode($array);

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }

}
