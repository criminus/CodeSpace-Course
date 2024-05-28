<?php
//Database connection using PDO
$host = "127.0.0.1";
$dbname = "codespace";
$username = "root";
$password = "root";

try {
    //Try the database connection
    $pdo = new PDO("mysql:host=$host;port=8889;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed:" . $e->getMessage());
}