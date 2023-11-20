<?php
include 'select.php';

function obtener_usuarios() {
    global $conn;
    $query = "SELECT * FROM usuarios";
    $result = $conn->query($query);

    $usuarios = [];
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }

    return $usuarios;
}

function insertar_usuario($nombres, $apellidos, $email, $identificacion, $fecha_nacimiento, $username, $password, $celular) {
    global $conn;

    $nombres = $conn->real_escape_string($nombres);
    $apellidos = $conn->real_escape_string($apellidos);
    $email = $conn->real_escape_string($email);
    $identificacion = $conn->real_escape_string($identificacion);
    $fecha_nacimiento = $conn->real_escape_string($fecha_nacimiento);
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    $celular = $conn->real_escape_string($celular);

    $query = "INSERT INTO usuarios (nombres, apellidos, email, identificacion, fecha_nacimiento, username, password, celular) 
    VALUES ('$nombres', '$apellidos', '$email', '$identificacion', '$fecha_nacimiento', '$username', '$password', '$celular')";

    $result = $conn->query($query);

    return $result;
}
