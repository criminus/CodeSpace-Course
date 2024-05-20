<?php
//Load Twig
require 'includes/autoload.php';

/*
    Creating a navigation file for our project that will
    allow us to update the buttons status, url from this single file.
*/

//Get current file
$uri = $_SERVER['REQUEST_URI'];
//Get file name without extension
$activePage = basename($uri, '.php');

//Define the pages array
$pages = [
    'home'      => [
        'url'       => 'index.php',
        'isActive'  => $activePage == 'index'
    ],
    'create'    => [
        'url'       => 'create.php',
        'isActive'  => $activePage == 'create'
    ],
    'update'    => [
        'url'       => 'update.php',
        'isActive'  => $activePage == 'update'
    ],
    'delete'    => [
        'url'       => 'delete.php',
        'isActive'  => $activePage == 'delete'
    ],
    'read'  => [
        'url'       => 'read.php',
        'isActive'  => $activePage == 'read'
    ]
];

//Return data
return [
    'pages'         => $pages,
    'activePage'    => $activePage
];