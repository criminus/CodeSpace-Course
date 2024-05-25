<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Require the includes files to show current records of this item id
require 'includes/update.func.php';

//Check if the item_id is set
$id = '';
$template = 'delete.twig';
if (isset($_GET['item_id'])) {
    $id = $_GET['item_id'];
    $template = 'delete.twig';
} else {
    $template = 'error.twig';
}

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
    $form_message = 'Item deleted successfully.';
    $form_message_type = 'success';
} elseif (isset($_GET['error']) && $_GET['error'] == 'true') {
    $form_message = 'Something went wrong while deleting this item.';
    $form_message_type = 'danger';
}

$data = array_merge($navigation, [
    'site_name'             => 'C.R.U.D Practice',
    'page_title'            => 'Delete',
    'errors'                => $errors,
    'form_message'          => $form_message,
    'form_message_type'     => $form_message_type,
    //Render the item details 
    'item'                  => getItemDetails($id),
]);

echo $twig->render($template, $data);