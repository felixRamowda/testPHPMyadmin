<?php
include("conexionbd.php");
$nombre = '';
$apellido= '';
$telefono= '';

if  (isset($_GET['idusuarios'])) {
  $idusuarios = $_GET['idusuarios'];
  $query = "SELECT * FROM usuarios WHERE idusuarios=$idusuarios";
  $result = mysqli_query($conexion, $query);

  /*Comprobar el resultado*/ 
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $telefono = $row['telefono'];
   
  }

}

if (isset($_POST['update'])) {
  $idusuarios = $_GET['idusuarios'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  
  $query = "UPDATE usuarios set nombre = '$nombre', apellido = '$apellido' 
   , telefono= '$telefono'  WHERE idusuarios=$idusuarios" ;

  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Datos actualizados correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');

}

?>
<!--CREACION DEL FORMULARIO PARA EDITAR A BASE DE BOOTSTRAP5-->
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idusuarios=<?php echo $_GET['idusuarios']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value= "<?php   echo $nombre; ?>" placeholder="Update Name">
          <input name="apellido" type="text" class="form-control" value= "<?php echo $apellido; ?>" placeholder="Update Surname">
          <input name="telefono" type="text" class="form-control" value= "<?php echo $telefono; ?>" placeholder="Update PhoneNumber">
       </div>

        <button class="btn  btn-success" name="update">
          Update
      </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>