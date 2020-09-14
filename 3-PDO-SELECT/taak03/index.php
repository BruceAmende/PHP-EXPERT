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


$sql = 'SELECT * FROM users WHERE firstname = :Mohammed';
$stmt = $pdo->prepare('SELECT * FROM users WHERE firstname = :Mohamed');
$stmt->execute(['firstname' => $firstname]);
$user = $stmt->fetch();

foreach ($stmt as $row)
{
    echo $row['firstname'] . "\n";
}

?>