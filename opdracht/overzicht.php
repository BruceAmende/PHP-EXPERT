<?php
    require('db.conn/db.conn.php');
    include('include/header.php');
    
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






<h2>Overzicht leden</h2>

<table>

  <tr>
  
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>email</th>
    <th>wachtwoord</th>
    <th>team</th>
    <th>contributie</th>
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

</body>
</html>

