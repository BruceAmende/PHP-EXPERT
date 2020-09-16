<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM users";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($database_gegevens as $gebruiker){  
  echo $gebruiker['firstname'] . "<br>";
}

?>