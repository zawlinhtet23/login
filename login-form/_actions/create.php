<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

$db = new PDO('mysql:host;dbhost=localhost;dbname=login', 'root', '');
$db->query($sql);

header("location: ../index.php?register");