<?php
//Update Form Control
//Include Update Form Control Functions
require 'update.func.php';

//Start session to get errors
session_start();

//Check for input & request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Define input variables
    $itemID         = isset($_POST['itemID']) ? $_POST['itemID'] : '';
    $itemName       = isset($_POST['itemName']) ? $_POST['itemName'] : '';
    $itemDesc       = isset($_POST['itemDesc']) ? $_POST['itemDesc'] : '';
    $itemImage      = isset($_POST['itemImage']) ? $_POST['itemImage'] : '';
    $itemPrice      = isset($_POST['itemPrice']) ? $_POST['itemPrice'] : '';

    //Get any errors & call the itemCreate function
    $errors = updateItem($itemName, $itemDesc, $itemImage, $itemPrice, $itemID);

    //Check for errors
    if (empty($errors)) {
        header("Location: ../update.php?item_id={$itemID}&success=true");
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: ../update.php?item_id={$itemID}&error=true");
        exit();
    }
} else {
    header("Location: ../update.php?item_id={$itemID}&error=true");
    exit();
}