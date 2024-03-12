<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql = $con->query("DELETE FROM regis WHERE Id_persona = $id"); 

    if ($sql==1) {
        echo '<div class="alert alert-danger">Persona eliminada</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar persona</div>';
    }
    
}
?>