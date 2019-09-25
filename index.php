<?php

/**
 * Ejemplo para enseñar los primeros días
 * Esto es un Docblock
 *  (al menos un comentario obligatorio al menos las etiquetas: @author, @return y @param)
 *
 * Descripción extensa (opcional)
 *
 * @author Fulanito de Tal <fulanito@example.com>
 * @copyright 2018 Fulanito de Tal
 * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * @version 2019-09-09
 * @link https://docentes.educacion.navarra.es/carocena/PrimerEjemploHTML5/
 */

require_once "libreria/funciones.php";
// Aquí se concentra la lógica de toda la aplicaci�n
if (!isset($_POST["enviar"])) { // no se ha enviado el formulario                      
    include "vistas/saludo.php";
} else {
    // se ha enviado, hay que procesarlo
    $nombre = htmlspecialchars(trim($_POST["nombre"]), ENT_QUOTES, 'UTF-8');
    $dni = htmlspecialchars(trim($_POST["dni"]), ENT_QUOTES, 'UTF-8');
    $errores = validar_formulario($nombre, $dni); // Aquí generamos los distintos mensajes de error
    if (!empty($errores)) { //   hay errores
        include "vistas/saludo.php"; // mostramos el formulario con los errores
        exit();
    }
    $salida = "Bienvenido/a " . $nombre . " | DNI: " . $dni;

    include "vistas/saludo.php";
}
