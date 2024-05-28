<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Start session
session_start();

//Get errors generated while creating this item
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);

//Include navigation
$navigation = include 'navigation.php';

//Form errors & submit
$form_message = '';
$form_message_type = '';

if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $form_message = 'The item has been added to the database.';
    $form_message_type = 'success';
} elseif (isset($_GET['error']) && $_GET['error'] == 'true') {
    $form_message = 'Something went wrong while adding this item.';
    $form_message_type = 'danger';
}

$data = array_merge($navigation, [
    'site_name'             => 'C.R.U.D Practice',
    'page_title'            => 'Create',
    'errors'                => $errors,
    'form_message'          => $form_message,
    'form_message_type'     => $form_message_type
]);

echo $twig->render('create.twig', $data);