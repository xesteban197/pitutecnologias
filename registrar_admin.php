<?php
require 'conexion.php';
 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

$resultado = mysqli_query($mysqli,"insert into administrador values(null,'$nombre', 
'$correo', '$pass')");

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:ajustes_crear.php");
}
?>