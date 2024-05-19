<?php
//Load Twig
require 'includes/autoload.php';

//Define a navigation handler for active pages.

//Get the file name without extension using superglobal REQUEST_URI
$uri = $_SERVER["REQUEST_URI"];
$activePage = basename($uri, ".php"); // Remove the php extension for the file

//Define each page
$pages = [
    'contact'   => $activePage == 'contact',
    'index'     => $activePage == 'index',
    'mens'      => $activePage == 'mens',
    'pocket'    => $activePage == 'pocket',
    'signin'    => $activePage == 'signin',
    'signup'    => $activePage == 'signup',
    'womens'    => $activePage == 'womens',
];

return [
    'pages' => $pages,
    'activePage' => $activePage,
    'testData'      => 'test',
];