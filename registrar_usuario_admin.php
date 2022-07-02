<?php
require 'conexion.php';
 

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$documento = $_GET['documento'];
$correo = $_GET['correo'];
$pass = $_GET['pass'];
$repass = $_GET['repass'];
$telefono = $_GET['telefono']; 
$ciudad =$_GET['ciudad'];
$direccion =$_GET['direccion'];
$torre =$_GET['torre'];
$apto =$_GET['apto'];
$casa =$_GET['casa'];

if($pass==$repass){
$resultado = mysqli_query($mysqli,"insert into usuario values(null,'$nombre', '$apellidos', '$documento', 
'$correo', '$pass', '$telefono', '$ciudad', '$direccion', '$torre', '$apto', '$casa')");
}else{
    header("location:cliente_crear2.php");
    exit();
}
if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:cliente_crear.php");
}
?>