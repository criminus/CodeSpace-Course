<?php
//Include config file for database query
require 'config.php';

//Define the getItems function
function getItems(
    $pdo
) {
    try {
        $stmt = $pdo->prepare('SELECT * FROM products');
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $items;

    } catch (PDOException $e) {
        die('Error fetching items' . $e->getMessage());
    }
}