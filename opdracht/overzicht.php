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
  background-color: lightgray;
 
}

td, th {
  border: 2px solid black;
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
  
    <th>ID</th>
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>Email</th>
    <th>Wachtwoord</th>
    <th>Team</th>
    <th>Contributie</th>
    <th>Verwijder lid</th>
    <th>Update</th>
  </tr>
  <tbody>
   <?php foreach($database_gegevens as $data):?>
  <tr>
    <td><?php echo $data["id"]?></td>
    <td><?php echo $data["voornaam"]?></td>
    <td><?php echo $data["achternaam"]?></td>
    <td><?php echo $data["email"]?></td>
    <td><?php echo $data["wachtwoord"]?></td>
    <td><?php echo $data["team"]?></td>
    <td><?php echo $data["contributie"]?></td>
    <td><a href="db.conn/db.connDelete.php?id=<?php echo $data['id']; ?>"  class="btn btn-danger">Verwijder</a></td></td>
    <td><a href="update.php?id=<?php echo $data['id']; ?>"  class="btn btn-light">Update</a></td></td>
    
    
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>

