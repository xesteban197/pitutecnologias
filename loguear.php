<?php
session_start();
require 'conexion.php';


$correo = $_POST['correo'];
$pass = $_POST['pass'];
$sql = "select * from usuario where correo = '$correo' and pass = '$pass'"; 
$sql2 = "select * from administrador where correo = '$correo' and pass = '$pass'"; 
$resultado = mysqli_query($mysqli, $sql);
$resultado2 = mysqli_query($mysqli, $sql2);
if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error; 
    
}
    else{
        while($fila=mysqli_fetch_assoc($resultado)){
            $_SESSION["nombre"] = $fila["nombres"];
            $_SESSION["id_usuario"] = $fila["id_usuario"];
            header("location:inicio.php"); 
    exit();
     }
     header("location:index.php");
}
if(!$resultado2){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error; 
    
}
    else{
        while($fila=mysqli_fetch_assoc($resultado2)){
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["id_admin"] = $fila["id_admin"];
            header("location:inicio_admin.php"); 
    exit();
     }
     header("location:index1.php");
}

?>