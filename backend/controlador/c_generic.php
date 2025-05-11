<?php

    # Limpiar cadenas de texto #
    function limpiar_cadena($cadena)
    {

        // Eliminar espacios en blanco al principio y al final
        $cadena = trim($cadena);

        // Eliminar slashes adicionales
        $cadena = stripslashes($cadena);


        // Patrones a eliminar usando expresiones regulares
        $patrones = array(
            "/<script.*?>.*?<\/script>/si",      // Etiquetas <script> y su contenido
            "/SELECT.*?FROM/si",                 // Consultas SELECT FROM
            "/DELETE.*?FROM/si",                 // Consultas DELETE FROM
            "/INSERT.*?INTO/si",                 // Consultas INSERT INTO
            "/DROP.*?TABLE/si",                  // Consultas DROP TABLE
            "/DROP.*?DATABASE/si",               // Consultas DROP DATABASE
            "/TRUNCATE.*?TABLE/si",              // Consultas TRUNCATE TABLE
            "/SHOW.*?TABLES;/si",                // Consultas SHOW TABLES;
            "/SHOW.*?DATABASES;/si",             // Consultas SHOW DATABASES;
            "/<\?php/si",                        // Etiqueta de apertura de PHP
            "/\?>/si",                           // Etiqueta de cierre de PHP
            "/--/s",                             // Comentarios SQL
            "/\^/s",                             // Carácter ^
            "/</s",                              // Carácter <
            "/\[/s",                             // Carácter [
            "/\]/s",                             // Carácter ]
            "/==/s",                             // Operador de igualdad ==
            "/;/s",                              // Punto y coma ;
            "/::/s",                             // Operador de resolución de ámbito ::
            "/\b(?:or|and|true)\b/i",           // Palabras completas "or", "and", "true"
        );

        // Aplicar los patrones y reemplazar con una cadena vacía
        $cadena = preg_replace($patrones, "", $cadena);

        // Eliminar espacios en blanco adicionales
        $cadena = trim($cadena);

        return $cadena;

    }
?>