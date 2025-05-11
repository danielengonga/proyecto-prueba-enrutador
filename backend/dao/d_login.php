<?php

function comprobarLogin($con,$correo,$contrasena){
    $sql = "SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena";
    $stmt = $con->prepare($sql);
    $stmt->execute([
        ":correo" => $correo,
        ":contrasena" => $contrasena
    ]);
    $result = $stmt->fetch();
    if ($result) {
        return true;
    } else {
        return false;
    }
}

?>