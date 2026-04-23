<?php

$conexion = new mysqli(
    "db",          // nombre del servicio mysql
    "user",
    "password",
    "testdb"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "✅ Conectado a MySQL correctamente";

?>
