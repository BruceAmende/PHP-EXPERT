<?php
$database_lokatie     = 'localhost';
$database_naam        = 'voetbalclubasd';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "UPDATE gebruikers SET id='$_GET[idForm]',voornaam='$_GET[voornaam]',achternaam='$_GET[achternaam]',email='$_GET[email]',wachtwoord='$_GET[wachtwoord]',team='$_GET[team]',contributie='$_GET[contributie]'  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gebruiker aangepast</h1>
<a href="..\overzicht.php" class="btn btn-light">Terug naar overzicht</a>

