<?php 
include("conexionbd.php")?>
<?php 
include("includes/header.php")?>

<div class="container p-4">
 
   <div class="row">
      <div class="col-md-4">

          <!--comprobacion del mensaje si los datos se han guardado  --> 
        <?php if(isset($_SESSION['message'])) { ?>           
          <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
          <?php session_unset(); }?>

        <div class="card  card-body">
            <form action="save.php"  method="POST">
              <div class="form-group">
                  <input type="text" name="nombre" class="form-control"
                  placeholder="escriba su nombre" autofocus>
                  <input type="text" name="apellido" class="form-control"
                  placeholder="escriba su apellido" autofocus>
                  <input type="text" name="correo" class="form-control"
                  placeholder="escriba su correo@" autofocus>
                  <input type="text" name="telefono" class="form-control"
                  placeholder="escriba su telefono" autofocus>
                  <input type="text" name="pass" class="form-control"
                  placeholder="Escriba una contraseña" autofocus>
                 <input type="submit" class="btn btn-success btn-block" 
                  name="save_data" value="Save Date">
                  
                </div>
            </form><!--fin del form-->
        </div>  

      </div>
    
    
  <!--Tabla que lista los resultados-->
    
      <div class="col-md-8">
         
      <table class="table table-bordered">

        
    <thead>
      <tr>
            <th>idusuario</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>correo</th>
            <th>telefono</th>
           <th>Password</th>
           <th>Fecha</th>
           <th>Actions</th>
      </tr>
      
    </thead>
        <tbody>
          <?php 
          $query = "SELECT * FROM usuarios";
          $result_query = mysqli_query($conexion, $query);

           while($row = mysqli_fetch_array($result_query)){ ?>
            <tr>
                <td><?php echo $row[idusuarios]?></td>
                <td><?php echo $row[nombre]?></td>
                <td><?php echo $row[apellido]?></td>
                <td><?php echo $row[correo]?></td>
                <td><?php echo $row[telefono]?></td>
                <td><?php echo $row[pass]?></td>
                <td><?php echo $row[Fecha_de_creacion]?></td>
                
                <td>
                  
            <div class="btn-group" role ="group">
                  <a href="edit.php?idusuarios=<?php echo $row[idusuarios]?>"
                     class="btn btn-dark">
                     <i class="uil uil-edit"></i>
                  </a> 

                  <a href="delete.php?idusuarios=<?php echo $row[idusuarios]?>"
                     class="btn btn-danger" >
                     <i class="uil uil-trash-alt"></i>
                  </a>
                  
           </div>

                </td>





            </tr>

           <?php } ?>
 

        
      </tbody>
       


      </table>
     
    
      </div> 
        

   </div> <!--end div row-->

</div>


<?php include("includes/footer.php") ?>



