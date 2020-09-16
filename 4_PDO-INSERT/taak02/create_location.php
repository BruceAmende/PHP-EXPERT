<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';



$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "INSERT INTO users (firstname, lastname, address, city) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["adres"]."','".$_POST["stad"]."')" ;
$stmt = $db_conn->prepare($sql); 
$stmt->bindParam(":ph_fname", $firstname ); 
$stmt->bindParam(":ph_lname", $lastname ); 
$stmt->bindParam(":ph_address", $address ); 
$stmt->bindParam(":ph_city", $city ); 
$stmt->execute();


?>