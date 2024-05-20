<?php
//Include config file for database query
require 'config.php';

//Define createItem function
function createItem (
    $pdo,
    $itemName,
    $itemDesc,
    $itemImage,
    $itemPrice
) {

    //Define empty errors array to hold any errors
    $errors = [];

    //Check if empty fields
    if (empty($itemName)) {
        $errors[] = 'Please enter a name for this item.';
    }

    if (empty($itemDesc)) {
        $errors[] = 'Please enter a description for this item.';
    }

    if (empty($itemImage)) {
        $errors[] = 'Please enter an image URL for this item.';
    }

    if (empty($itemPrice)) {
        $errors[] = 'Please enter a price for this item.';
    }

    //If there are no errors, we can add the item to the database
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO products (item_name, item_desc, item_img, item_price) VALUES (?, ?, ?, ?)');
            $stmt->execute([$itemName, $itemDesc, $itemImage, $itemPrice]);
        } catch (PDOException $e) {
            $errors[] = 'Database error ' . $e->getMessage();
        }
    }

    //return errors
    return $errors;
}