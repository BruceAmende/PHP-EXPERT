<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "INSERT INTO products (name, purchase_price, selling_price) VALUES ('".$_POST["naam"]."','".$_POST["aankoopprijs"]."','".$_POST["verkoopprijs"]."')" ;
$stmt = $db_conn->prepare($sql); 
$stmt->bindParam(":form_firstname", $firstName ); 
$stmt->bindParam(":form_lastname", $lastName ); 
$stmt->execute();

?>