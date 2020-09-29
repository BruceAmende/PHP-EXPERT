<?php
    
    include('include/header.php');
?>

<html>
<body>
<h2>Update Lid <?php echo $_GET['id']?></h2>

<form  action="db.conn/db.connUpdate.php" method="get">
ID:         <input type="number" name="idForm"><br>
Voornaam:   <input type="text" name="voornaam"><br>
Achternaam: <input type="text" name="achternaam"><br>
Email:      <input type="text" name="email"><br>
Wachtwoord: <input type="text" name="wachtwoord"><br>
Team:       <input type="text" name="team"><br>
Contributie:<input type="text" name="contributie"><br>
<input type="submit" value='Update'>
</form>

</body>
</html>