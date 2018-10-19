<!DOCTYPE html>
<html>
<body>
<h1 title="Prenotazione">The title Attribute</h1>
<h2>Ciao {$name}</h2>

<fieldset>
    <legend>Scegli la data!</legend>

    <div>
        <label for="start"></label>
        <input type="date" id="start" name="trip"
               {* value="2018-07-22" *}
               min="2018-01-01" max="2018-12-31" />
    </div>



</fieldset>
<button>PRENOTA ORA</button>
</body>
</html>