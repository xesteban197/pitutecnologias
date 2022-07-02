<?php
require 'conexion.php';

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio']; 
$descripcion = $_POST['descripcion']; 
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
$estado = $_POST["estado"];
$imagen = "imagenes/".time();


if($imagen1!="$imagen" && $imagen2=="$imagen" && $imagen3=="$imagen" 
&& $imagen4=="$imagen" && $imagen5=="$imagen" 
&& $imagen6=="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', estado = '$estado'
WHERE producto.id_producto = '$id_producto';";
}
else if($imagen1!="$imagen" && $imagen2!="$imagen" && $imagen3=="$imagen" 
&& $imagen4=="$imagen" && $imagen5=="$imagen" 
&& $imagen6=="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', imagen2 = '$imagen2', estado = '$estado'
WHERE producto.id_producto = '$id_producto';";
}
else if($imagen1!="$imagen" && $imagen2!="$imagen" && $imagen3!="$imagen" && $imagen4=="$imagen" 
&& $imagen5=="$imagen" && $imagen6=="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', imagen2 = '$imagen2', imagen3 = '$imagen3', estado = '$estado'
WHERE producto.id_producto = '$id_producto';";
}
else if($imagen1!="$imagen" && $imagen2!="$imagen" && $imagen3!="$imagen" 
&& $imagen4!="$imagen" 
&& $imagen5=="$imagen" && $imagen6=="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', imagen2 = '$imagen2', imagen3 = '$imagen3',
imagen4 = '$imagen4', estado = '$estado'
WHERE producto.id_producto = '$id_producto';";
}
else if($imagen1!="$imagen" && $imagen2!="$imagen" && $imagen3!="$imagen" 
&& $imagen4!="$imagen" && $imagen5!="$imagen" 
&& $imagen6=="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', imagen2 = '$imagen2', imagen3 = '$imagen3',
imagen4 = '$imagen4', imagen5 = '$imagen5', estado = '$estado'
WHERE producto.id_producto = '$id_producto';";
}
else if($imagen1!="$imagen" && $imagen2!="$imagen" && $imagen3!="$imagen" 
&& $imagen4!="$imagen" && $imagen5!="$imagen" && $imagen6!="$imagen" ){ 
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
imagen1 = '$imagen1', imagen2 = '$imagen2', imagen3 = '$imagen3',
imagen4 = '$imagen4', imagen5 = '$imagen5', imagen5 = '$imagen5', 
estado = '$estado' WHERE producto.id_producto = '$id_producto';";
}
else{
$sql="
UPDATE producto SET nombre = '$nombre', precio = '$precio', descripcion = '$descripcion', 
estado = '$estado' WHERE producto.id_producto = '$id_producto';";  
}
//echo "$sql";

$resultado = mysqli_query($mysqli, $sql);

if(!$resultado){
echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
header("location:inicio_admin.php");
    
}
?>