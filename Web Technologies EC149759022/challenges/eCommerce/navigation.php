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

//Shopping cart quantity
require_once 'includes/user.func.php';

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
    'add'       => [
        'url'       => 'add.php',
        'isActive'  => $activePage == 'add'
    ],
    'cart'      => [
        'url'       => 'cart.php',
        'isActive'  => $activePage == 'cart'
    ]
];

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $basket_quantity = getMyItems($user_id);
    $my_orders = getMyOrders($user_id);
} else {
    $basket_quantity = 0;
    $my_orders = 0;
}

$user_data = [
    'userLoggedIn'      => isset($_SESSION['loggedin']) && $_SESSION['loggedin'],
    'email'             => isset($_SESSION['email']) ? $_SESSION['email'] : null,
    'first_name'        => isset($_SESSION['first_name']) ? $_SESSION['first_name'] : null,
    'last_name'         => isset($_SESSION['last_name']) ? $_SESSION['last_name'] : null,
    'user_id'           => isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null,
    'basket_quantity'   => $basket_quantity,
    'my_orders'         => $my_orders
];

return [
    'pages'             => $pages,
    'activePage'        => $activePage,
    'user'              => $user_data,
];