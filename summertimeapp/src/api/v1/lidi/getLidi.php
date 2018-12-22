<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
function getLidi(Request $request, Response $response) {
    $sql = "SELECT * FROM lido";
    try {
        //Get DB Object
        $db = new db();
        $db = $db->connect();
        $stmt = $db->query($sql);
        $lidi = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($lidi);
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
?>