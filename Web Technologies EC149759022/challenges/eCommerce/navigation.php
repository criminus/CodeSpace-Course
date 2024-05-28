<?php
//Load Twig
require 'includes/autoload.php';

//Define a navigation handler for active pages.

//Get current file
$uri = $_SERVER['REQUEST_URI'];
// Remove query string from the URI
$uriWithoutQuery = parse_url($uri, PHP_URL_PATH);
//Get file name without extension
$activePage = basename($uriWithoutQuery, '.php');

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

$user_data = [
    'userLoggedIn' => isset($_SESSION['loggedin']) && $_SESSION['loggedin'],
    'email' => isset($_SESSION['email']) ? $_SESSION['email'] : null
];

return [
    'pages'             => $pages,
    'activePage'        => $activePage,
    'user'              => $user_data,
];