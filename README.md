# Proyecto de Prueba: Enrutador en PHP

Este proyecto es un ejemplo básico para implementar un enrutador en PHP. El objetivo es demostrar cómo manejar rutas dinámicas y estáticas en una aplicación web. En el futuro, también se incluirá una demostración de cómo enviar peticiones HTTP desde el frontend al backend utilizando `XMLHttpRequest` y `fetch`.

## Características

- Enrutamiento básico para manejar diferentes rutas.
- Soporte para rutas dinámicas con parámetros.
- Código simple y fácil de entender.
- Ejemplos futuros de peticiones HTTP con `XMLHttpRequest` y `fetch`.

## Requisitos

- PHP 7.4 o superior.
- Servidor local como XAMPP, WAMP o similar.

## Instalación

1. Clona este repositorio en tu servidor local:
    ```bash
    git clone https://github.com/danielengonga/proyecto-prueba-enrutador.git
    ```
2. Asegúrate de colocar los archivos en el directorio raíz de tu servidor (por ejemplo, `/htdocs/prueba` en XAMPP).
3. Inicia el servidor local y accede al proyecto desde tu navegador: `http://localhost/prueba`.

## Uso

1. Define tus rutas en el archivo `routes.php`.
2. Personaliza los controladores para manejar la lógica de cada ruta.
3. Accede a las rutas definidas desde tu navegador.

## Estructura del Proyecto

```
/prueba
├── index.php        # Punto de entrada principal
├── routes.php       # Definición de rutas
├── controllers/     # Controladores para manejar la lógica
└── views/           # Vistas para renderizar contenido
```

## Contribuciones

Si deseas contribuir a este proyecto, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está bajo la Licencia MIT.