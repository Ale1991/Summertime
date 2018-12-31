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
            
        $newimage->moveTo(__DIR__ . "/photos/$name");
      } 
      else{
          $newimage->moveTo(__DIR__ . "/photos/$name");
      
    }

}}