<?php
require 'conexion.php';
 

$id = $_POST['id'];

$sql="DELETE FROM administrador where id_admin = '$id'";

$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:ajustes_crear.php");
}
?>