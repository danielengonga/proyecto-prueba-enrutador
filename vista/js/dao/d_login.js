export async function enviarDatos(formulario) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "backend/gateway.php?route=login", true);
    xhr.setRequestHeader("Content-Type", "application/json"); // Establecer Content-Type

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                return true; // Inicio de sesión exitoso
            } else {
                return false; // Error en el inicio de sesión
            }
        }
    };

    xhr.send(JSON.stringify(formulario)); // Convertir formulario a JSON
}

export async function enviarDatos2(formulario) {
    try {
        const response = await fetch("backend/gateway.php?route=login", {
            method: "POST",
            headers: {
                "Content-Type": "application/json" // Establecer Content-Type
            },
            body: JSON.stringify(formulario) // Convertir formulario a JSON
        });

        if (response.ok) {
            return true; // Inicio de sesión exitoso
        } else {
            return false; // Error en el inicio de sesión
        }
    } catch (error) {
        console.error("Error en la solicitud:", error);
        return false; // Error en la solicitud
    }
}
