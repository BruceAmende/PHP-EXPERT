<?php
    
    include('include/header.php');
?>


<html>
<body>

<h2>Update Lid <?php echo  $_GET['id'];?></h2>

<form   action="db.conn/db.connUpdate.php" method="get">

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
        <input type="submit" value='Update'>
</form>

</body>
</html>