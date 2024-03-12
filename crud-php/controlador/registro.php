<?php
if (!empty($_POST["btnregistrar"])){
    
    if(!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["apellidop"]) and !empty($_POST["apellidom"]) and !empty($_POST["edad"]) and !empty($_POST["carrera"])){
       
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $ape=$_POST["apellidop"];
        $apem=$_POST["apellidom"];
        $edad=$_POST["edad"];
        $carrera=$_POST["carrera"];
        
        $sql=$con->query("INSERT INTO regis(Id_persona,nombre,apellidop,apellidom,edad,carrera) values($id,'$nombre','$ape','$apem',$edad,'$carrera')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona: </div>';
        } 

    } else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }  
}  
$con->close(); 
?> 
