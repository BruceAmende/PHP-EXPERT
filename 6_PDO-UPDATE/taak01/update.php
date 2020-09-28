<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';



$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "UPDATE users SET firstname = :ph_firstname";
$stmt = $db_conn->prepare($sql); 
$stmt->bindParam(":firstname", $form_firstname );
$stmt->execute();
?>

