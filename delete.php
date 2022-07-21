<?php
include("conexionbd.php");

if(isset($_GET['idusuarios'])){
   $id = $_GET['idusuarios']; /*Guardamos el usuario en una variable */
    /*Hacemos el query*/ 
   $query = "DELETE FROM usuarios
   WHERE idusuarios = $id";
   $result = mysqli_query($conexion, $query);

   if(!$result){

    die("Query Failed");

   }
   $_SESSION['message'] = 'Usuario Removido Exitosamente';
   $_SESSION['message_type'] = 'danger';
   /*De esta manera al final lo redirigimos a la 
   pagina de inicio*/
   header("Location: index.php");

} 


?>