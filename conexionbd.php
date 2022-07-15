<?php


$conexion=mysqli_connect(
'localhost',
 'root',
  '',
  'test'

);
if(isset($conexion)){
echo 'conexion exitosa a la base de datos testC';
}else{
   echo 'hubo un error al conectarse...';
}



?>