<!DOCTYPE html>
<html>
<body>
<h1 title="Prenotazione">{$nomelido}</h1>
<h2>Ciao {$nomeutente}</h2>

<form method="post" action="index.php">
  Inserisci l'ID dell'ombrellone <br>
  <input type="text" name="ombrellone"><br>
   Dal:
  <input type="date" name="data1" min={$dataApertura} max={$dataChiusura}>
   Al:
  <input type="date" name="data2" min={$dataApertura} max={$dataChiusura}>
  
               
    <input type="submit" value="Prenota ora!">
  
  
</form>



</body>
</html>



