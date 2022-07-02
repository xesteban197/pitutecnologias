<?php
require 'conexion.php';
 

$id = $_POST['id_usuario'];

$sql="DELETE FROM usuario where id_usuario = '$id'";

$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:cliente_crear.php");
}
?>