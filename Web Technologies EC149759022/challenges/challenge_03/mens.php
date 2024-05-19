<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

// Load Navigation
$navigation = include 'navigation.php';

// Merge the navigation data with other data to pass to Twig
$data = array_merge($navigation, [
    'sitename'              => 'MK Time',
    'pageTitle'             => 'Mens watches',
]);

// Render the template
echo $twig->render('mens.twig', $data);