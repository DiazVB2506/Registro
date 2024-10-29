<?php
// URL para acceder al archivo: http://localhost/REGISTRO/empleado.html

$nombre = $_POST['nombre_php'];
$primer_apellido = $_POST['primer_apellido_php']; // Nuevo campo para primer apellido
$segundo_apellido = $_POST['segundo_apellido_php']; // Nuevo campo para segundo apellido
require('conexion1.php');

// Verificar si la conexión fue exitosa
if ($cn->connect_errno) {
    echo "Fallo la Conexión: " . $cn->connect_errno;
    exit(); // Termina el script si hay un error de conexión
}

echo "Conexión exitosa.<br>";

// Insertar el registro
$insertar = $cn->query("INSERT INTO empleados (nombre, primer_apellido, segundo_apellido) VALUES ('" . $nombre . "', '" . $primer_apellido . "', '" . $segundo_apellido . "')");

// Verificar si la consulta se ejecutó correctamente
if ($insertar) {
    echo "El registro se guardó correctamente. Insertar = " . $insertar;
} else {
    echo "No se guardó el registro: " . $cn->error . " | Insertar = " . $insertar;
}

$cn->close();
?>
