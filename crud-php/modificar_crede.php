<?php 
include "modelo/conexion.php";
$id=$_GET["id"];
$sql = $con->query("SELECT * FROM regis WHERE Id_persona = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificacion de credencial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
<h3 class="text-center text-secundary">modificacion de credencial</h3>
<input type="hidden" name="id" value="<?=$_GET["id"]?>">
<?php
include "controlador/modificar_crede.php"; 

while($row = $sql->fetch_object()){ ?>
<div class="mb-1">
<label for="nombre" class="form-label">Nombre</label>
<input type="text" class="form-control" name="nombre" value="<?=$row->nombre?>">
</div>

<div class="mb-1">
<label for="apellidop" class="form-label">Apellidos Paterno</label>
<input type="text" class="form-control" name="apellidop" value="<?=$row->apellidop?>">
</div>

<div class="mb-1">
<label for="apellidom" class="form-label">Apellido Materno</label>
<input type="text" class="form-control" name="apellidom" value="<?=$row->apellidom?>">
</div>

<div class="mb-1">
<label for="edad" class="form-label">Edad</label>
<input type="number" class="form-control" name="edad" value="<?=$row->edad?>">
</div>

<div class="mb-1">
<label for="carrera" class="form-label">Carrera</label>
<input type="text" class="form-control" name="carrera" value="<?=$row->carrera?>">
</div>
<?php }
?>

<button type="submit" class="btn btn-primary" name="btnregistrar" value='1' >modificar datos</button> 
</form>
</body>
</html>