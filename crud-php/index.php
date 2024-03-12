 <!DOCTYPE html>
 <html lang="en"> 
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud en php and mysql</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d8709d3581.js" crossorigin="anonymous"></script>
  </head>

  <script>
    function eliminar(){
      var respuesta=confirm("Estas seguro de borrar la credencial?");
      return respuesta
    }
  </script>

 <body>
    <h1 class="text-center p-3"  >Registro de persona</h1>
    <div class="container-fluid row">
    <?php 
    include "modelo/conexion.php";
    include "controlador/eliminar_crede.php";
    ?>
    <form class="col-4 p-3" method="POST">
    <?php
   include "controlador/registro.php";
   ?>
        <h3 class="text-center text-secundary">Detalles de credencial</h3>
   
  <div class="mb-3">
    <label for="id" class="form-label">Id_Persona</label>
    <input type="number" class="form-control" name="id" >
  </div>
   
   <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" >
  </div>

  <div class="mb-3">
    <label for="apellidop" class="form-label">Apellidos Paterno</label>
    <input type="text" class="form-control" name="apellidop" >
  </div>

  <div class="mb-3">
    <label for="apellidom" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="apellidom" >
  </div>

  <div class="mb-3">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" class="form-control" name="edad" >
  </div>

  <div class="mb-3">
    <label for="carrera" class="form-label">Carrera</label>
    <input type="text" class="form-control" name="carrera" >
  </div>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value='1' >registrar</button> 
</form>

 <div class="col-8 p-4">
 <table class="table table-striped">
 <thead class="bg-info">
    <tr>
      <th scope="col">Id_Persona</th>
      <th scope="col">Nombres</th>
      <th scope="col">ApellidoP</th>
      <th scope="col">ApellidoM</th>
      <th scope="col">Edad</th>
      <th scope="col">Carrera</th>
      <th></th>
    </tr>
  </thead>
  <tbody>  
    
 <?php
 include "modelo/conexion.php"; 

 $sql = $con->query("SELECT * FROM regis");

 if (!$sql) {
    // Imprimir el mensaje de error si hay un problema con la consulta
    echo "Error en la consulta: " . mysqli_error($con);
 } else {
  while ($row = $sql->fetch_assoc()) {
    ?>
       <tr>
        <td><?= $row['Id_persona'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['apellidop'] ?></td>
        <td><?= $row['apellidom'] ?></td>
        <td><?= $row['edad'] ?></td>
        <td><?= $row['carrera'] ?></td>
        
            <td>
                <a href="modificar_crede.php?id=<?=$row['Id_persona']?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <a onclick="return eliminar()" href="index.php?id=<?=$row['Id_persona']?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
            </td>
      </tr>
        
        <?php }
 }

 $con->close();
 ?>
 </tbody>
 </table>
 </div>
 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
 </body>
 </html>