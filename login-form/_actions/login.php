<?php

$host = 'localhost';
$dbname = 'login';
$username = 'root';
$password = '';

try {
    // Creating a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define the table name
    $tableName = 'users';

    // Perform database operations here using $pdo and $tableName

    header("location: ../loginSuccessful");

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> 