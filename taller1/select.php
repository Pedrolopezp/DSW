<?php

include 'config.php';


try {
    $conn = new PDO("mysql:host=$host;dbname=$database", "$user", "$pass");
    echo "Conexion ok";
} catch (PDOException $e) {
    print "¡Error de conexion a la base de datos!: " . $e->getMessage() . "<br/>";
    die();
}
