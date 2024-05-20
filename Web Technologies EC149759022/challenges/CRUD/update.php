<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Include navigation
$navigation = include 'navigation.php';

$data = array_merge($navigation, [
    'site_name'     => 'C.R.U.D Practice',
    'page_title'    => 'Update'
]);

echo $twig->render('update.twig', $data);