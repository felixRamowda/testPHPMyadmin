<?php

session_start();

$conexion=mysqli_connect(
'localhost',
 'root',
  'password',
  
  'Testreanara'

);

/*
if(isset($conexion)){
echo 'conexion exitosa a la base de datos Testreanara';
}else{
   echo 'hubo un error al conectarse...';
}
*/
?>