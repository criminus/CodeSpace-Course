<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

$data = [
    'site_name'     => 'CRUD',
    'page_title'    => 'Home'
];

echo $twig->render('index.twig', $data);