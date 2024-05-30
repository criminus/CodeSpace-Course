<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Require read items function file
require 'includes/read.func.php';

//Start Session
session_start();

//if we are returning to the shop, we reset the last_added_item
$_SESSION['last_added_item'] = '';

// Load Navigation
$navigation = include 'navigation.php';

// Merge the navigation data with other data to pass to Twig
$data = array_merge($navigation, [
    'sitename'              => 'MK Time',
    'pageTitle'             => 'Mens watches',
    'items'                 => getItems()
]);

// Render the template
echo $twig->render('mens.twig', $data);