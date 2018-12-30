<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

//use Slim\Http\Request;
//use Slim\Http\Response;
//use Slim\Http\Stream;


function getCopertina(Request $request, Response $response)
{
    $IDLido = $request->getAttribute('idLido');
    $fli=new FLido();
    $nomeFoto=$fli->getNomeCopertina($IDLido);
    //print var_dump($nomeFoto);
    $foto="C:/Users/Stefano/Documents/GitHub/Summertime/summertimeapp/src/api/v1/copertina/photos/$nomeFoto";
    print var_dump($nomeFoto);
      
    $res = $response->withHeader('Content-Description', 'File Transfer')->withHeader('Content-Type', 'application/octet-stream')->withHeader('Content-Disposition', 'attachment;filename="'.basename($foto).'"')->withHeader('Expires', '0')->withHeader('Cache-Control', 'must-revalidate')->withHeader('Pragma', 'public')->withHeader('Content-Length', filesize($foto));

readfile($foto);
return $res;
   /* error_log($fileName);
    $newStream = new \GuzzleHttp\Psr7\LazyOpenStream($fileName, 'r');


    $newResponse = $response->withHeader('Content-type', 'application/octet-stream')
        ->withHeader('Content-Description', 'File Transfer')
        ->withHeader('Content-Disposition', 'attachment; filename=' . basename($fileName))
        ->withHeader('Content-Transfer-Encoding', 'binary')
        ->withHeader('Expires', '0')
        ->withHeader('Cache-Control', 'must-revalidate')
        ->withHeader('Pragma', 'public')
        ->withHeader('Content-Length', filesize($fileName))
        ->withBody($newStream);
return($newResponse);
    
    */
}
?>