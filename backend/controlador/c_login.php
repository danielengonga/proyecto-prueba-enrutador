<?php

include "controlador/c_generic.php";
include "modelo/m_login.php";
include "dao/conexion.php";
include "dao/d_login.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try {
        $data = json_decode(file_get_contents('php://input'), true);

        $usuario = new Login(limpiar_cadena($data['correo']),limpiar_cadena($data['contrasena']));

        if(preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $usuario->correo) == 0){
           throw new Exception("El correo no es valido");
        }
        if(preg_match('/^[a-zA-Z0-9._%+-]{8,}$/', $usuario->contrasena) == 0){
            throw new Exception("La contraseña no es valida");
        }

        if(comprobarLogin($conexion,$usuario->correo,$usuario->contrasena)){
            $_SESSION['correo'] = $usuario->correo;
            http_response_code(200);
            echo json_encode([
                'status' => 200,
                'success' => true,
                'message' => "se ha logueado correctamente",
                'data' => [
                    'correo' => $usuario->correo
                ]
            ]);
        }else{
            http_response_code(401);
            echo json_encode([
                'status' => 401,
                'success' => false,
                'message' => "El correo o la contraseña son incorrectos"
            ]);
        }

    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            'status' => 400,
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
}
if($_SERVER['REQUEST_METHOD'] == 'GET'){

}
if($_SERVER['REQUEST_METHOD'] == 'PUT'){

}
if($_SERVER['REQUEST_METHOD'] == 'DELETE'){

}


?>