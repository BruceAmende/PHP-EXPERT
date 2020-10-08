<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
$database_lokatie     = 'localhost';
$database_naam        = 'voetbalclubasd';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "INSERT INTO gebruikers (`id`, `voornaam`, `achternaam`, `email`, `wachtwoord`, `team`, `contributie`) VALUES ('$_GET[ID]','$_GET[voornaam]','$_GET[achternaam]','$_GET[email]','$_GET[wachtwoord]','$_GET[team]','$_GET[contributie]' )  ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Gebruiker toegevoegd</h1>
<a href="..\overzicht.php" class="btn btn-light">Terug naar overzicht</a>