<?php

include("conexionbd.php");


if(isset($_POST['save_data'])){

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$pass = $_POST['pass'];


$query = "INSERT INTO usuarios(nombre,apellido,correo,telefono,pass) VALUES('$nombre',
'$apellido' ,'$correo', '$telefono','$pass')";

$result = mysqli_query($conexion, $query);

if(!$result) {
 die("Query Failed");
}
header("location: index.php");
}

?>