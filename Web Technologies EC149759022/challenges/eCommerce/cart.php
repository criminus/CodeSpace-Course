<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';
//Get cart function
require 'includes/cart.func.php';

//Start Session
session_start();

if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'])) {
    $user_id = $_SESSION['user_id'];
    $my_items = getBasket($user_id);
    $total_cart = getTotal($user_id);
    $template = 'cart.twig';
} else {
    $my_items = '';
    $total_cart = '';
    $template = 'error.twig';
}

// Load Navigation
$navigation = include 'navigation.php';

// Merge the navigation data with other data to pass to Twig
$data = array_merge($navigation, [
    'sitename'              => 'MK Time',
    'pageTitle'             => 'My Basket',
    'items'                 => $my_items,
    'total'                 => $total_cart
]);

// Render the template
echo $twig->render($template, $data);