<?php
require 'conexion1.php';
 

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono']; 
$ciudad =$_POST['ciudad'];
$cantidad =$_POST['cantidad'];
$producto =$_POST['producto'];
$imei1 =$_POST['imei1'];
$imei2 =$_POST['imei2'];
$precio = $_POST['precio'];
$valor_letras = $_POST['valor_letras'];
$observaciones = $_POST['observaciones'];
$valor_envio = $_POST['valor_envio'];
$año = date("Y");
$mes = date("m");
$dia = date("d");
$fecha = "$año-$mes-$dia";
$total=(($_POST['precio']*$_POST['cantidad'])+$_POST['valor_envio']);


if($imei2 ==''){

    $imai2='0000000000';

    $resultado = mysqli_query($mysqli,"insert into venta values(null, '$cantidad', '$producto',
    '$imei1', '$imai2', '$precio', '$fecha', '$nombres', '$apellidos', 
    '$documento', '$direccion', '$telefono', '$ciudad',  
      '$valor_letras', '$observaciones', '$valor_envio', '$total')");
}
else {
    $resultado = mysqli_query($mysqli,"insert into venta values(null, '$cantidad', '$producto',
    '$imei1', '$imei2', '$precio', '$fecha', '$nombres', '$apellidos', 
    '$documento', '$direccion', '$telefono', '$ciudad',  
      '$valor_letras', '$observaciones', '$valor_envio', '$total')");
}

    if(!$resultado){
        echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;    
    }else{
        header("location:facturero.php");
    }
?>