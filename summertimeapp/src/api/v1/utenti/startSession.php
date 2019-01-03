<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function createSessionByUserId($nomeUtente)
{
    session_start();
    $sessions_id = session_id();
    $sessions_userid = $nomeUtente;
    $sessions_date = time();
    $arr = array($sessions_id, $sessions_userid, $sessions_date);
    //INSERT INTO DB I DATI DI SESSIONE DOPO IL LOGIN
    $a=new Fdb();
    $query = "INSERT INTO sessions  VALUES (?,?,?)";
    
    $stmt = $a->db->prepare($query);
    $stmt->execute($arr);
    
    //$db = new db();
    //$db = $db->connect();
    //$query = "INSERT INTO sessions (sessions_id,sessions_userid,sessions_date) VALUES ('$sessions_id', '$sessions_userid', '$sessions_date')";
    //$arr = array($sessions_id, $sessions_userid, $sessions_date);
    //$stmt = $db->query($query);
}

function getSessionByUserId($nomeUtente)
{
//RECUPERA DAL DB I DATI DI SESSIONE IN BASE AL SESSIONID/USERID
    $sql = "SELECT * FROM sessions WHERE sessions_userid = ? "; //
    $a = new Fdb();
    //$db = $db->connect();
    $stmt = $a->db->prepare($sql);
    $stmt->execute([$nomeUtente]);
    $obj = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    return $obj;
}

function deleteSessionByUserId($nomeUtente)
{
    $sql = "DELETE FROM sessions WHERE sessions_userid = '$nomeUtente'"; //
    $db = new db();
    $db = $db->connect();
    $stmt = $db->query($sql);
    $db = null;
}

function deleteOldSession()
{
    $time = time() - 600;
    //$sql = "DELETE FROM sessions WHERE sessions_date < '$time'"; //
    $sql = "DELETE FROM sessions WHERE sessions_date < ? ";
    $a=new Fdb();
    $stmt = $a->db->prepare($sql);
    $stmt->execute([$time]);
    
    //$db = new db();
    //$db = $db->connect();
    //$stmt = $db->query($sql);
    //$db = null;
    session_start();
    session_unset();
    session_destroy();
}

function startSession(Request $request, Response $response)
{
    //GET USERNAME AND PASSWORD FROM AJAX
    $nomeUtente = $request->getParsedBody()['nomeUtente'];
    $password = $request->getParsedBody()['password'];

    try {
        //VALIDATE USERNAME AND PASSWORD ON DB
        $futente = new FUtente();
        $utente = $futente->getObject($nomeUtente);
        if ($utente->getPassword() == $password) {
            $validate = true;
        } else {
            $validate = false;
        }

        //SE LA VALIDAZIONE FALLISCE FERMO LO SCRIPT E RESTITUISCO L'ERRORE
        if ($validate == false) {
            $jsonResponse = [
                'sessions_id' => null,
                'sessions_userid' => null,
                'message' => 'Nome Utente o Password errati!',
            ];
            echo json_encode($jsonResponse);
            exit();
        }
        //ALTRIMENTI SE LA VALIDAZIONE HA SUCCESSO
        //RECUPERA DAL DB I DATI DI SESSIONE IN BASE AL SESSIONID/USERID
        $sessionObj = getSessionByUserId($nomeUtente);

        if (empty($sessionObj) && $validate == true) {
            createSessionByUserId($nomeUtente);
            $sessionObj = getSessionByUserId($nomeUtente);
            $jsonResponse = [
                'sessions_id' => $sessionObj[0]->sessions_id,
                'sessions_userid' => $sessionObj[0]->sessions_userid,
                'sessions_date' => $sessionObj[0]->sessions_date,
                'message' => 'Success',
            ];
        } else {
            if (!empty($sessionObj) && $validate == true) {
                if ($sessionObj[0]->sessions_date < time() - 600) {
                    deleteOldSession();
                    createSessionByUserId($nomeUtente);
                    $sessionObj = getSessionByUserId($nomeUtente);
                    $jsonResponse = [
                        'sessions_id' => $sessionObj[0]->sessions_id,
                        'sessions_userid' => $sessionObj[0]->sessions_userid,
                        'sessions_date' => $sessionObj[0]->sessions_date,
                        'message' => 'Success,sessione ricreata',
                    ];
                } else {
                    $jsonResponse = [
                        'sessions_id' => $sessionObj[0]->sessions_id,
                        'sessions_userid' => $sessionObj[0]->sessions_userid,
                        'sessions_date' => $sessionObj[0]->sessions_date,
                        'message' => 'Success,sessione ancora attiva',
                    ];

                }
            }

        }

        echo json_encode($jsonResponse);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }

}
