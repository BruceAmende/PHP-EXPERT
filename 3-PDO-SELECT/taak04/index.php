<?php


$host = 'localhost';
$db   = 'toolsforever';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->prepare('SELECT * FROM locations WHERE city = :city');

while ($row = $stmt->fetch())
{
    echo $row['name'] . "<br>";
    echo $row['address'] . "<br>";
    echo $row['city'] . "<br>";
    echo "<br>";
    
}

?>