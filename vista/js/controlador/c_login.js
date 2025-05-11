import {enviarDatos, enviarDatos2} from "../dao/d_login.js";

export async function iniciarSesion() {
    
    let formulario = document.getElementById("formulario");
    
    formulario.addEventListener("submit", async function (e) {
        e.preventDefault(); 

        let correo = document.getElementById("correo").value;
        let contrasena = document.getElementById("contrasena").value;

        if(correo === "" || contrasena === "") {
            new bootstrap.Modal(document.getElementById('modalError')).show();
            document.getElementById("modal-body").textContent = "Por favor, complete todos los campos.";
            return;
        }

        let regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let regexContrasena = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        if(!regexCorreo.test(correo)) {
            new bootstrap.Modal(document.getElementById('modalError')).show();
            document.getElementById("modal-body").textContent = "El correo no coincide con el formato solicitado.";
            return;
        }
        if(!regexContrasena.test(contrasena)) {
            new bootstrap.Modal(document.getElementById('modalError')).show();
            document.getElementById("modal-body").textContent = "La contraseña no coincide con el formato solicitado.";
            return;
        }
        
        // let resultado = await enviarDatos({correo, contrasena});
        let resultado = await enviarDatos2({correo, contrasena});
        if (resultado) {
            new bootstrap.Modal(document.getElementById('modalError')).show();
            document.getElementById("modal-body").textContent = "Inicio de sesión exitoso.";
            setTimeout(() => {
            new bootstrap.Modal(document.getElementById('modalError')).hide();
            }, 2000);
        } else {
            new bootstrap.Modal(document.getElementById('modalError')).show();
            document.getElementById("modal-body").textContent = "Error en el inicio de sesión, usuario o contraseña incorrectos.";
        }

    });
}