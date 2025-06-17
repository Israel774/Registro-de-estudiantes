<?php
require "../conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$direccion = $_POST['direccion'];

$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$carrera = $_POST['carrera'];
$grado = $_POST['grado'];
$jornada = $_POST['jornada'];


$sql = "INSERT INTO estudiantes(nombre, apellido, genero, fecha_nacimiento, direccion, correo_electronico, telefono_estudiante, carrera, grado, jornada, estado, createAt) values ('$nombre', '$apellido', '$genero', '$fechaNacimiento', '$direccion', '$correo', '$telefono', '$carrera', '$grado', '$jornada', 'Activo', now())";

if ($conn->query($sql) === TRUE) {
    header("Location: registrar-estudiante.php");
    exit(); // Asegurar que el script se detenga aquí
} else {
    echo "Error: " . $conn->error;
}
?>