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

/*Almecenamos un mensaje para mostrarlo una vez los datos se hayan ingresado*/
$_SESSION['message'] = 'Datos guardados';
$_SESSION['message_type'] = 'success';

header("location: index.php");
} 

?>