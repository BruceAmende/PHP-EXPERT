<?php
    
    include('include/header.php');
    
?>

<html>
<body>
<h2>Zoek Lid</h2>
<form action="db.conn/db.connZoek.php" method="get">
Voornaam: <input type="text" name="voornaam"><br>
Achternaam: <input type="text" name="achternaam"><br>
<input type="submit" value='Toon'>
</form>

</body>
</html>

