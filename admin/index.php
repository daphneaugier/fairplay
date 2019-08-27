<?php

/*

    Fairplay
    --------

    Daphné Augier

    (c) 2019

*/

require_once '../vendor/autoload.php';
// Initialisation twig
$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader, [
    'cache' => '../cache',
]);

echo $twig->render('admin.html');  


?>

