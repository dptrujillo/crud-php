<?php
if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellidop"]) and !empty($_POST["apellidom"]) and !empty($_POST["edad"]) and !empty($_POST["carrera"])) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $ape=$_POST["apellidop"];
        $apem=$_POST["apellidom"];
        $edad=$_POST["edad"];
        $carrera=$_POST["carrera"];
        $sql=$con->query("UPDATE regis SET nombre='$nombre',apellidop='$ape',apellidom='$apem',edad=$edad,carrera='$carrera' WHERE Id_persona = $id ");
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar los datos</div>';

        }
        
    } else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
?>