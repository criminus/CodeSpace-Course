<?php
//Include config file for database query
require 'config.php';

//Define updateItem function
function updateItem(
    $itemName,
    $itemDesc,
    $itemImage,
    $itemPrice,
    $itemID
) {
    //Get PDO inside the function using global
    global $pdo;

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

    //If there are no errors, we can update the item based on it's id.
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare('UPDATE products SET item_name = ?, item_desc = ?, item_img = ?, item_price = ? WHERE item_id = ?');
            $stmt->execute([$itemName, $itemDesc, $itemImage, $itemPrice, $itemID]);
        } catch (PDOException $e) {
            $errors[] = 'Database error ' . $e->getMessage();
        }
    }

    //return errors
    return $errors;
}

//Get data for this item
function getItemDetails(
    $itemID
) {
    //Get PDO inside the function using global
    global $pdo;

    //Try catch block
    try {
        $stmt = $pdo->prepare('SELECT item_id, item_name, item_desc, item_img, item_price FROM products WHERE item_id = :item_id');
        $stmt->execute([':item_id' => $itemID]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    } catch (PDOException $e) 
    {
        $errors[] = 'Database error ' . $e->getMessage();
    }

    //return errors
    return $errors;
}