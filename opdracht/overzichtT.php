<?php
    require('db.conn/db.connT.php');
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

<h2>Overzicht teams</h2>

<table>

  <tr>
  
    <th>Teamnaam</th>

  </tr>
  <tbody>
   <?php foreach($database_gegevens as $data):?>
  <tr>
    <td><?php echo $data["naam"]?></td>

    
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>