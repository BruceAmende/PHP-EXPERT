<?php
    
    include('include/header.php');
    
?>

<html>
<body>
<h2>Zoek Lid</h2>
<form action="db.conn/db.connZoek.php" method="get">
 <input type="text"placeholder='Voornaam' name="voornaam"><br>
 <br>
 <input type="text"placeholder='Achternaam' name="achternaam"><br>
 <br>
<input type="submit" value='Toon gegevens'>
</form>

</body>
</html>

