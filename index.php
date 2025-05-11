<?php

    define('BASE_URL', '/prueba/vista/');

    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    include 'vista/inc/head.php';
    include 'vista/inc/navbar.php';

    // var_dump($uri);

    switch ($uri) {
        case '':
            include 'vista/php/login-bootstrapp.php';
            break;
        case 'login':
            include 'vista/php/login-bootstrapp.php';
            break;
        case 'registro':
            include 'vista/php/registro-bootstrapp.php';
            break;
        default:
            http_response_code(404);
            include 'vista/inc/404.php';
            break;
    }

    include 'vista/inc/footer.php';
?>