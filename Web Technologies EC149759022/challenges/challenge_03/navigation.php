<?php
//Load Twig
require 'includes/autoload.php';

//Define a navigation handler for active pages.

//Get the file name without extension using superglobal REQUEST_URI
$uri = $_SERVER["REQUEST_URI"];
$activePage = basename($uri, ".php"); // Remove the php extension for the file

//Define each page if active and its name
$pages = [
    'contact'   => [
        'url'       => 'contact.php',
        'isActive'  => $activePage == 'contact'
    ],
    'index'     => [
        'url'       => 'index.php',
        'isActive'  => $activePage == 'index',
    ],
    'mens'      => [
        'url'       => 'mens.php',
        'isActive'  => $activePage == 'mens',
    ],
    'pocket'    => [
        'url'       => 'pocket.php',
        'isActive'  => $activePage == 'pocket',
    ],
    'signin'    => [
        'url'       => 'signin.php',
        'isActive'  => $activePage == 'signin',
    ],
    'signup'    => [
        'url'       => 'signup.php',
        'isActive'  => $activePage == 'signup',
    ],
    'womens'    => [
        'url'       => 'womens.php',
        'isActive'  => $activePage == 'womens',
    ],
];

return [
    'pages' => $pages,
    'activePage' => $activePage,
];