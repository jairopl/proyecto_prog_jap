<?php
require_once('conectar.php');
$doc = $_POST['documento'];
$tipo_doc = $_POST['tipo_documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$rol = $_POST['rol'];

$sql = "INSERT INTO visitante VALUES ('$doc', '$tipo_doc', '$nombre', '$apellido', '$telefono', '$rol')";
$insertar = mysql_query($sql, $conexion);

if ($insertar) {
  echo "Se ha guardado el visitante satisfactoriamente";
} else {
  echo "Se ha producido un error al guardar";
}
?>