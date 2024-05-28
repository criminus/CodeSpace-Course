<?php
//Include config file for database query
require 'config.php';

//Define the getItems function
function getItems(
) {
    //Get PDO inside the function using global
    global $pdo;
    
    try {
        $stmt = $pdo->prepare('SELECT * FROM products');
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $items;

    } catch (PDOException $e) {
        die('Error fetching items' . $e->getMessage());
    }
}