export async function enviarDatos(formulario){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "backend/gateway.php?route=login", true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                return true; // Inicio de sesión exitoso
            } else {
                return false; // Error en el inicio de sesión
            }
        }
    };

    xhr.send(formulario);
}

