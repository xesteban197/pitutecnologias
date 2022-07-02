<?php
require 'conexion.php';
 

$id_producto = $_POST['id_producto'];


 
$sql="UPDATE producto SET estado = '0' where producto.id_producto = '$id_producto';";
$resultado = mysqli_query($mysqli, $sql);




if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
}else{
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error; 
echo"$id_producto";
   header("location:inicio_admin.php");
}
?>