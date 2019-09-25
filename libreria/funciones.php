<?php
function validar_formulario($nombre, $dni)
{
    $errores = array();
    if (empty($nombre)) {
        $errores["nombre"] = "Introduzca su nombre y apellido";
    }

    if (empty($dni)) {
        $errores["dni"] = "Introduzca el DNI";
    }

    return $errores;
}
