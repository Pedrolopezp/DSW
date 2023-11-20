<?php
include 'data_access.php';



    function registrarUsuario($nombres, $apellidos, $email, $identificacion, $fecha_nacimiento, $username, $password, $celular) {
        $resultado = insertar_usuario($nombres, $apellidos, $email, $identificacion, $fecha_nacimiento, $username, $password, $celular);

        // Realizar alguna acción según el resultado
        if ($resultado) {
            echo 'Usuario registrado con éxito';
        } else {
            echo 'Error al registrar el usuario';
        }
    }

    // Otros métodos para actualizar, obtener, etc.
