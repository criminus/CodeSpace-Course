<?php
//Include delete function item
require 'delete.func.php';

//Start session to get errors
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Get item_id from the form
    $itemID = isset($_POST['itemID']) ? $_POST['itemID'] : '';

    $errors = deleteItem($itemID);

    if (empty($errors)) {
        header("Location: ../delete.php?item_id={$itemID}&success=true");
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: ../delete.php?item_id={$itemID}&error=true");
        exit();
    }
} else {
    header("Location: ../delete.php?item_id={$itemID}&error=true");
    exit();   
}