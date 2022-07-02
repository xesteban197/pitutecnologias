<?php
require 'conexion.php';
 
$id_admin = $_POST['id_admon'];
$nombre = $_POST['nombre_admon'];
$correo = $_POST['correo_admon'];
$pass = $_POST['pass_admon'];

$sql="
UPDATE administrador SET nombre = '$nombre', correo = '$correo', pass = '$pass' WHERE administrador.id_admin = '$id_admin';";
$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:ajustes_crear.php");
    
}
?>