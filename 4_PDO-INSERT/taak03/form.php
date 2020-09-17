<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="db.php" method="post">
    <p>
        <label for="firstName">Naam:</label>
        <input type="text" name="naam" id="firstName">
    </p>
    <p>
        <label for="lastName">Aankoopprijs:</label>
        <input type="text" name="aankoopprijs" id="lastName">
    </p>
    <p>
        <label for="lastName">Verkoopprijs:</label>
        <input type="text" name="verkoopprijs" id="lastName">
    </p>
   
    
    <input type="submit" value="Submit">
</form>
</body>
</html>