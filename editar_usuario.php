<?php
require 'conexion.php';

$id_usuario = $_POST['id_user'];
$nombre = $_POST['nombres_user'];
$apellidos = $_POST['apellidos_user'];
$documento = $_POST['documento_user'];
$correo = $_POST['correo_user'];
$pass = $_POST['pass_user'];
$telefono = $_POST['telefono_user']; 
$ciudad =$_POST['ciudad_user'];
$direccion =$_POST['direccion_user'];
$torre =$_POST['torre_user'];
$apto =$_POST['apto_user'];
$casa =$_POST['casa_user'];


$sql="
UPDATE usuario SET nombres = '$nombre', apellidos = '$apellidos', documento = '$documento', 
correo = '$correo', pass = '$pass', telefono = '$telefono', id_ciudad = '$ciudad', 
direccion = '$direccion', torre = '$torre', apto = '$apto', casa = '$casa'
WHERE usuario.id_usuario = '$id_usuario';";
$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    header("location:cliente_crear.php");
    
}
?>