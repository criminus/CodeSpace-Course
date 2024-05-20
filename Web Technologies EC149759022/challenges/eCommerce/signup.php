<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';
//Load Register Function File
require 'includes/register.func.php';

//Start Session
session_start();

//Get errors generated while registration
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);

// Load Navigation
$navigation = include 'navigation.php';

//Handle form errors & submit
$form_message = '';
$form_message_type = '';

if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $form_message = 'Your account has been created. You can now login!';
    $form_message_type = 'success';
} elseif (isset($_GET['error']) && $_GET['error'] == 'true') {
    $form_message = 'Something went wrong. Please try again. If the problem persist, please contact the Administrator.';
    $form_message_type = 'danger';
}

// Merge the navigation data with other data to pass to Twig
$data = array_merge($navigation, [
    'sitename'              => 'MK Time',
    'pageTitle'             => 'Sign Up',
    'errors'                => $errors,
    'form_message'          => $form_message,
    'form_message_type'     => $form_message_type,
]);

// Render the template
echo $twig->render('signup.twig', $data);