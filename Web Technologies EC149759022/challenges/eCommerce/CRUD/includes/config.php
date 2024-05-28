<?php
//Database connection using PDO
$host = "localhost";
$dbname = "codespace";
$username = "root";
$password = "";

try {
    //Try the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed:" . $e->getMessage());
}