<?php

require_once 'twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates/');
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate('index.html.twig');
$user = null;
if($_POST!=null)
    {
    $user = $_POST['username'];
    } else{
    $user='guest';    
    }
$template->display(array('name' => $user));