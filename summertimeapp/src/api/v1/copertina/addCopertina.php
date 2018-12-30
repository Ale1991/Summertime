<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

function addCopertina(Request $request, Response $response)
{
    $files=$request->getUploadedFiles();
    //print var_dump($file);
    $newimage=$files['Profile_photo'];
    //print var_dump($newimage);
    if ($newimage->getError() === UPLOAD_ERR_OK)
    {
        $uploadFileName = $newimage->getClientFilename();
       // print var_dump($uploadFileName);
        $type=$newimage->getClientMediaType();
       // print var_dump($type);
       $name = uniqid('img-'.date('Ymd').'-');
       //print var_dump($name);
       $name.=$newimage->getClientFileName();
       //print var_dump($name);
        
      $whitelist=array('127.0.0.1','::1');
      //print var_dump($whitelist);
      if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist))
      {
            
        $newimage->moveTo("C:\Users\Stefano\Documents\GitHub\Summertime\summertimeapp\src\api\v1\copertina/photos/$name");
      } 
      else{
          $newimage->moveTo("C:/Users/Stefano/Documents/GitHub/Summertime/summertimeapp/src/api/v1/copertina/photos/$name");
      
    }
    //print var_dump($name);
    //$nomeLido = $request->getParsedBody()['nomeLido'];
    //$righe = $request->getParsedBody()['righe'];
    //print $nomeLido;
    /*$colonne = $request->getParsedBody()['colonne'];
    $dataApertura = $request->getParsedBody()['dataApertura'];
    $dataChiusura = $request->getParsedBody()['dataChiusura'];
    $via = $request->getParsedBody()['via'];
    $civico = $request->getParsedBody()['civico'];
    $comune = $request->getParsedBody()['comune'];
    $provincia = $request->getParsedBody()['provincia'];
    $idGestore = $request->getParsedBody()['idGestore'];
    */
    /*
    $gestore = new EGestore("$idGestore");
    $indirizzo = new EIndirizzo($via, $civico, $comune, $provincia);
    $gestore->aggiungiLido($nomeLido, $indirizzo);
    $a = $gestore->getLidi();
    $lido = $a[0];
    $datein = new DateTime($dataApertura);
    $lido->setDataApertura($datein);
    $dateout = new DateTime($dataChiusura);
    $lido->setDataChiusura($dateout);
    $lido->setRighe($righe);
    $lido->setColonne($colonne);

    try {
        $db = new FLido();
        $db->inserisci($lido);
        echo json_encode('ok');

    } catch (PDOException $e) {
        echo ' {"error":{"text": ' . $e->getMessage() . '}';
    }
    */  
    

}}