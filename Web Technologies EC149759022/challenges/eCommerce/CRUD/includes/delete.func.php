<?php
//Include config file for database query
require 'config.php';

function deleteItem(
    $itemID
) {
    //Global PDO
    global $pdo;

    //Define empty errors array to hold any errors
    $errors = [];

    try {
        //Check if there is an item with this ID first
        $stmt = $pdo->prepare('SELECT * FROM products WHERE item_id = ?');
        $stmt->execute([$itemID]);
        $item = $stmt->fetch();

        try {
            //If item ID found, we perform the deletion based on its ID
            if ($item) {
                $stmt = $pdo->prepare('DELETE FROM products WHERE item_id = ?');
                $stmt->execute([$itemID]);
                return [];
            } else {
                $errors[] = 'Item not found.';
            }
        } catch (PDOException $e) {
            $errors[] = 'Database error ' . $e->getMessage();
        }

    } catch (PDOException $e) {
        $errors[] = 'Database error ' . $e->getMessage();
    }

    //Return any errors
    return $errors;
}