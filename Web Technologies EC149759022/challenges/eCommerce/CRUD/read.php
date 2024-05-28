<?php
//Load Config
require 'includes/config.php';
//Load Twig
require 'includes/autoload.php';

//Include navigation
$navigation = include 'navigation.php';

//Include Read Functions file
require 'includes/read.func.php';

$data = array_merge($navigation, [
    'site_name'     => 'C.R.U.D Practice',
    'page_title'    => 'Read',
    'itemList'      => getItems()
]);

echo $twig->render('read.twig', $data);