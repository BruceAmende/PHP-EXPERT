<?php
$database_lokatie     = 'localhost';
$database_naam        = 'voetbalclubasd';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';

$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$sql = "SELECT * FROM gebruikers where voornaam= '$_GET[voornaam]' ";
$statement = $db_conn->prepare($sql); 
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html>
<head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<table>
    <h2>Gevonden lid:</h2>
  <tr>
  
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>Email</th>
    <th>Wachtwoord</th>
    <th>Team</th>
    <th>Contributie</th>
  </tr>
  <tbody>
   <?php foreach($database_gegevens as $data):?>
  <tr>
    <td><?php echo $data["voornaam"]?></td>
    <td><?php echo $data["achternaam"]?></td>
    <td><?php echo $data["email"]?></td>
    <td><?php echo $data["wachtwoord"]?></td>
    <td><?php echo $data["team"]?></td>
    <td><?php echo $data["contributie"]?></td>
    
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>

<a href="..\overzicht.php" class="btn btn-light">Terug naar overzicht</a>

</body>
</html>