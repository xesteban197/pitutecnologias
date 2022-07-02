<?php
require 'conexion.php';

$id_venta = $_POST["id_venta"];
$estado = $_POST["estado"];

$sql="UPDATE venta SET id_estado = '$estado' where venta.id_venta = '$id_venta';";
$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
   header("location:proceso_ventas.php");
    
}
?>