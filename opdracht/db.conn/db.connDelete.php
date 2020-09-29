<?php

$database_lokatie     = 'localhost';
$database_naam        = 'voetbalclubasd';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$id = $_GET['id'];
$sql = "DELETE FROM gebruikers where id= $id ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);



?>

<h1>Gebruiker succesvol verwijdert</h1>
<a href="..\overzicht.php" class="btn btn-light">Terug naar overzicht</a>