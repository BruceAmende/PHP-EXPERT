<?php
    
    include('include/header.php');
?>

<html>
<body>
<h2>Voeg lid toe</h2>

<form  action="db.conn/db.connInsert.php" method="get">
        <input type="number"placeholder='ID' name="ID"><br>
        <br>
        <input  type="text"placeholder='Voornaam' name="voornaam"><br>
        <br>
        <input type="text"placeholder='Achternaam' name="achternaam"><br>
        <br>
        <input type="text"placeholder='Email' name="email"><br>
        <br>
        <input type="text"placeholder='Wachtwoord' name="wachtwoord"><br>
        <br>
        <input type="text"placeholder='Team' name="team"><br>
        <br>
        <input type="text"placeholder='Contributie' name="contributie"><br>
        <br>
<input type="submit" value='Voeg toe'>
</form>

</body>
</html>