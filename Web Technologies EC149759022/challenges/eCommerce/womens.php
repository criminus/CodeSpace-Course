<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Start Session
session_start();

// Load Navigation
$navigation = include 'navigation.php';

// Merge the navigation data with other data to pass to Twig
$data = array_merge($navigation, [
    'sitename'              => 'MK Time',
    'pageTitle'             => 'Womens watches',
]);

// Render the template
echo $twig->render('womens.twig', $data);