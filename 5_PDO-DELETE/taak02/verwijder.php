<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
?>
<form method='get' action="verwijder.php">
  <label for="fname">Verwijder id:</label>
  <input type="number" id="fname" name="remove"><br><br>
<a href="verwijder.php?id=<?php $id = $_GET['remove']; ?>"  class="btn btn-danger">Verwijder</a></td>
 
</form>
<?php


$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "DELETE FROM users WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); 
$stmt->bindParam(":ph_id", $id );
$stmt->execute()


?>
