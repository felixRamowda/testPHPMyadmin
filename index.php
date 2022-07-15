<?php 
include("conexionbd.php")?>
<?php 
include("includes/header.php")?>

<div class="container p-4">
 
   <div class="row">
      <div class="col-md-4">
  
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
         

      </div> 
        

   </div> <!--end div row-->

</div>


<?php include("includes/footer.php") ?>



