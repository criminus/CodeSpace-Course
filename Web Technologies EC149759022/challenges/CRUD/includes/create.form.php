<?php
//Create Form Control
//Include Create Form Control Functions
require 'create.func.php';

//Start session to get errors
session_start();

//Check for input & request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Define input variables
    $itemName       = isset($_POST['itemName']) ? $_POST['itemName'] : '';
    $itemDesc       = isset($_POST['itemDesc']) ? $_POST['itemDesc'] : '';
    $itemImage      = isset($_POST['itemImage']) ? $_POST['itemImage'] : '';
    $itemPrice      = isset($_POST['itemPrice']) ? $_POST['itemPrice'] : '';

    //Get any errors & call the itemCreate function
    $errors = createItem($pdo, $itemName, $itemDesc, $itemImage, $itemPrice);

    //Check for errors
    if (empty($errors)) {
        header('Location: ../create.php?success=true');
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header('Location: ../create.php?error=true');
        exit();
    }
} else {
    header('Location: ../create.php?error=true');
    exit();
}