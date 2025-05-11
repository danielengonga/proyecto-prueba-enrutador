<?php
// backend/gateway.php

// Obtener la ruta solicitada
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Dividir la ruta en partes
$routeParts = explode('/', trim($route, '/'));

// Suponiendo que la primera parte es el controlador
$controller = isset($routeParts[0]) ? $routeParts[0] : null;

// Cargar el controlador correspondiente
switch ($controller) {
    case 'login':
        require_once 'controlador/c_login.php';
        break;

    case 'registro':
        require_once 'controlador/c_registro.php';
        break;

    default:
        http_response_code(404);
        echo json_encode(['error' => 'Endpoint no encontrado']);
        exit;
}
?>