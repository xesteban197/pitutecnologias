<?php
session_start();
require 'conexion.php';
 

$nombre = $_POST['nombre'];
$precio = $_POST['precio']; 
$descripcion = $_POST['descripcion']; 
$categoria = $_POST['categoria'];
$imagen1 = "imagenes/".time().$_FILES['imagen1']['name'];
move_uploaded_file($_FILES['imagen1']['tmp_name'], $imagen1);
$imagen2 = "imagenes/".time().$_FILES['imagen2']['name'];
move_uploaded_file($_FILES['imagen2']['tmp_name'], $imagen2);
$imagen3 = "imagenes/".time().$_FILES['imagen3']['name'];
move_uploaded_file($_FILES['imagen3']['tmp_name'], $imagen3);
$imagen4 = "imagenes/".time().$_FILES['imagen4']['name'];
move_uploaded_file($_FILES['imagen4']['tmp_name'], $imagen4);
$imagen5 = "imagenes/".time().$_FILES['imagen5']['name'];
move_uploaded_file($_FILES['imagen5']['tmp_name'], $imagen5);
$imagen6 = "imagenes/".time().$_FILES['imagen6']['name'];
move_uploaded_file($_FILES['imagen6']['tmp_name'], $imagen6);
$estado = $_POST["cantidad"];



$resultado = mysqli_query($mysqli,"insert into producto values(null,'$nombre', '$precio', '$descripcion', 
'$categoria', '$estado', '$imagen1', '$imagen2', '$imagen3', '$imagen4', '$imagen5', '$imagen6')");

if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{

    $id_admin = $_SESSION['id_admin'];  
    $sql1="Select MAX(id_producto) AS id_producto from producto";
    
    $resultado1 = mysqli_query($mysqli, $sql1);
    $validar = mysqli_fetch_assoc($resultado1);

$resultado2 = mysqli_query($mysqli,"insert into registro_producto values(null,'$id_admin', '$validar[id_producto]')");
if(!$resultado2){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{

    header("location:inicio_admin.php");
}}
?>