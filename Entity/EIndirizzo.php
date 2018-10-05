<?php
//indirizzi[0]=”Viale Italia 40, La Spezia, Italia”; da google maps API,esempio di struttura
class EIndirizzo
{
 public $via = "";
 public $civico = "";
 public $comune = "";
 public $provincia = "";
 public $indirizzo = "";
 public $codice;
 //public $NNNVia;
 public $IDIndirizzo;
 //public $path = ('C:\Users\Alessio\Desktop\newpath\PROJECTCF\codici.txt');
 public $path = ('C:\Users\Alessio\Desktop\Summertime\Summertime\Entity\codici_comuni_italiani.txt');//va sistemato il relative path con il require

public function __construct ($via , $civico , $comune , $provincia)
{
 $this->via = $via;
 $this->civico = $civico;
 $this->comune = $comune;
 $this->provincia = $provincia;
 $indirizzo='via '.$this->via.' '.$this->civico.','.$this->comune.','.$this->provincia;
 $this->indirizzo = $indirizzo;

  $nomeoriginale = $this->via;
  $NNN= array();
  $nomemaiuscolo = strtoupper($nomeoriginale)."XXX";
  preg_match_all('/[^AEIOUX]/', $nomemaiuscolo , $consonanti);
  preg_match_all('/[AEIOUX]/', $nomemaiuscolo , $vocali);
  for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
  {
    array_push($NNN , $consonanti[0][$i]);
  }
  if(sizeof($NNN) < 3)
  {
    for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
    {
      array_push($NNN , $vocali[0][$i]);
    }
    if (sizeof($NNN) < 3)
    {
      array_push($NNN , "X");
    }
  }
  $NNNVia=implode('' , $NNN);


  $found = false;
  $com=$this->comune;
  $prov=$this->provincia;
  $handle = fopen($this->path , 'r');
  while (!feof($handle))
  {
    $lettura = fgets($handle, 4096);
    if (strpos($lettura, strtoupper($com)) !== false)
    {
      //echo("La stringa '$nome ' e' stata trovata!"."\n"); //check verifica point
      if(strpos($lettura,$prov) !== false)
      {
        //echo("La stringa '$provincia ' e' stata trovata!"."\n"); //check vericifa point
        $rigaesplosa = explode(";", $lettura); //trasformo la stringa di input in un array di sottostringhe
        $this->codice = $rigaesplosa[0];//assegno il codice della stringa alla variabile codice comune
        break;
      }
      else
      {
        //echo("La stringa '$provincia ' NON e' stata trovata!"."\n"); //check verifica point
      }
    }
    else
    {
      //echo("La stringa '$nome ' NON e' stata trovata!"."\n"); //check verifica point
      $this->codice = "nessun match tra il comune di: $com e la provincia di: $prov";
    }
  }
  fclose($handle);
  //$IDIndirizzo=$NNNVia.$this->civico.$this->codice;
  $IDIndirizzo=$this-
  $this->IDIndirizzo = $IDIndirizzo;
}

public function _calcolaCodiceComune($nome,$provincia)
{
  $found = false;
  $this->nome = $nome ;
  $this->provincia = $provincia;
  $handle = fopen("$this->path" , 'r');
  while (!feof($handle))
  {
    $lettura = fgets($handle, 4096);
    if (strpos($lettura, strtoupper($nome)) !== false)
    {
      //echo("La stringa '$nome ' e' stata trovata!"."\n"); //check verifica point
      if(strpos($lettura,$provincia) !== false)
      {
        //echo("La stringa '$provincia ' e' stata trovata!"."\n"); //check vericifa point
        $rigaesplosa = explode(";", $lettura); //trasformo la stringa di input in un array di sottostringhe
        $this->codice = $rigaesplosa[0];//assegno il codice della stringa alla variabile codice comune
        break;
      }
      else
      {
        //echo("La stringa '$provincia ' NON e' stata trovata!"."\n"); //check verifica point
      }
    }
    else
    {
      //echo("La stringa '$nome ' NON e' stata trovata!"."\n"); //check verifica point
      $this->codice = "nessun match tra il comune di: $nome e la provincia di: $provincia";
    }
  }
  fclose($handle);
  return $this->codice;
}

public function getNNNVia()
{
  $nomeoriginale = $this->via;
  $NNN= array();
  $nomemaiuscolo = strtoupper($nomeoriginale)."XXX";
  preg_match_all('/[^AEIOUX]/', $nomemaiuscolo , $consonanti);
  preg_match_all('/[AEIOUX]/', $nomemaiuscolo , $vocali);
  for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
  {
    array_push($NNN , $consonanti[0][$i]);
  }
  if(sizeof($NNN) < 3)
  {
    for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
    {
      array_push($NNN , $vocali[0][$i]);
    }
    if (sizeof($NNN) < 3)
    {
      array_push($NNN , "X");
    }
  }
  $NNNVia=implode('' , $NNN);
  $this->NNNVia = $NNNVia;
  return $NNNVia;
  //return implode('' , $NNN);
}


public function getIDIndirizzo()
{
  
  $nomeoriginale = $this->via;
  $NNN= array();
  $nomemaiuscolo = strtoupper($nomeoriginale)."XXX";
  preg_match_all('/[^AEIOUX]/', $nomemaiuscolo , $consonanti);
  preg_match_all('/[AEIOUX]/', $nomemaiuscolo , $vocali);
  for($i = 0 , $size = sizeof($consonanti[0]) ; $i < $size; $i++)
  {
    array_push($NNN , $consonanti[0][$i]);
  }
  if(sizeof($NNN) < 3)
  {
    for($i = 0 , $size = 3 - sizeof($consonanti[0]) ; $i < $size; $i++)
    {
      array_push($NNN , $vocali[0][$i]);
    }
    if (sizeof($NNN) < 3)
    {
      array_push($NNN , "X");
    }
  }
  $NNNVia=implode('' , $NNN);


  $found = false;
  $com=$this->comune;
  $prov=$this->provincia;
  $handle = fopen($this->path , 'r');
  while (!feof($handle))
  {
    $lettura = fgets($handle, 4096);
    if (strpos($lettura, strtoupper($com)) !== false)
    {
      //echo("La stringa '$nome ' e' stata trovata!"."\n"); //check verifica point
      if(strpos($lettura,$prov) !== false)
      {
        //echo("La stringa '$provincia ' e' stata trovata!"."\n"); //check vericifa point
        $rigaesplosa = explode(";", $lettura); //trasformo la stringa di input in un array di sottostringhe
        $this->codice = $rigaesplosa[0];//assegno il codice della stringa alla variabile codice comune
        break;
      }
      else
      {
        //echo("La stringa '$provincia ' NON e' stata trovata!"."\n"); //check verifica point
      }
    }
    else
    {
      //echo("La stringa '$nome ' NON e' stata trovata!"."\n"); //check verifica point
      $this->codice = "nessun match tra il comune di: $com e la provincia di: $prov";
    }
  }
  fclose($handle);
  $IDIndirizzo=$NNNVia.$this->civico.$this->codice;
  $this->IDIndirizzo = $IDIndirizzo;
  return $this->IDIndirizzo;
}

public function getVia(){return $this->via;}
public function setVia($via){$this->via=$via;}
public function getCivico(){return $this->civico;}
public function setCivico($civico){$this->civico=$civico;}
public function getComune(){return $this->comune;}
public function setComune($comune){$this->comune=$comune;}
public function getProvincia(){return $this->provincia;}
public function setProvincia($provincia){$this->provincia=$provincia;}
public function getIndirizzo(){return $this->indirizzo;}
            
}
?>
