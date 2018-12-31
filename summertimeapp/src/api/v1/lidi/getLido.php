<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function getLido(Request $request, Response $response)
{
    $IDLido = $request->getAttribute('idLido');
    try {
        $flido = new FLido();
        $obj_lido = $flido->getObject($IDLido);
        $obj_lido->generaGriglia();
        $griglia = $obj_lido->getGriglia();
        $gestore = $obj_lido->getGestore();
        for ($i = 0; $i < count($griglia); $i++) {
            $array[$i] = [
                'riga' => $griglia[$i]->getRiga(),
                'colonna' => $griglia[$i]->getColonna(),
                'id' => $griglia[$i]->getID(),
                'occupato' => $griglia[$i]->getOccupato(),
            ];
        }
        $dati = [
            'via' => $obj_lido->getIndirizzo()->getVia(),
            'civico' => $obj_lido->getIndirizzo()->getCivico(),
            'comune' => $obj_lido->getIndirizzo()->getComune(),
            'provincia' => $obj_lido->getIndirizzo()->getProvincia(),
            'idLido' => $obj_lido->getIdLido(),
            'nomeLido' => $obj_lido->getNomeLido(),
            'nomeGestore' => $gestore->getNomeUtente(),
            'password' => $gestore->getPassword(),
            'loginStatus' => $gestore->getLoginStatus(),
            'email' => $gestore->getEmail(),
            'isGestore' => $gestore->getIsGestore(),
            'isAmministratore' => $gestore->getIsAmministratore(),
            'idUtenteLoggato' => 'utenteloggato!!',

        ];
        $array[] = $dati;
        echo json_encode($array);        
    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
}
?>