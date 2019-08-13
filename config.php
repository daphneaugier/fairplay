<?php
/*
    (c) Daphné Augier 2019
*/
    // Initialisation twig
    $loader = new \Twig\Loader\FilesystemLoader('./templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => './cache',
    ]);

    // Initialisation base de données

    $link = new mysqli("127.0.0.1:8889", "root", "root", "fairplay");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

?>