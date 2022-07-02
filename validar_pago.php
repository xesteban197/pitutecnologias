<?php
session_start();
require 'conexion_tarjeta.php';
 
$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$nombre_tarjeta = $_POST['nombre_tarjeta'];
$numero_tarjeta = $_POST['numero_tarjeta'];
$cvv = $_POST['cvv'];
$fecha_tarjeta = $_POST['fecha_tarjeta'];
$año = date("Y");
$mes = date("m");
$dia = date("d");
$fecha = "$año-$mes-$dia";
$cantidad = $_POST["cantidad"];
$estado = ($_POST["estado"]-$cantidad);
$total = ($cantidad*$precio);
$A = "A";
$B = "B";
$C = "C";

    if($cantidad<=0){
   
        header("location:comprar2.php?id_producto=$id_producto&nombre=$nombre&precio=$precio&estado=$estado");     
    }
    else{
    
     $sql = "Select * from tarjetas 
      where nombre_tarjeta = '$nombre_tarjeta' AND
      numero_tarjeta = $numero_tarjeta AND
      cvv = $cvv AND
      fecha_tarjeta = '$fecha_tarjeta'";  
      $resultado = mysqli_query($mysqli, $sql);

      

                                                    
        if(!$resultado){
          echo "$A.Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
          header("location:comprar1.php?id_producto=$id_producto&nombre=$nombre&precio=$precio&estado=$estado");  
        }
        else{
         require 'conexion.php';
         $cantidadtar = mysqli_num_rows($resultado);
            
            if($cantidadtar != 1){
                header("location:comprar1.php?id_producto=$id_producto&nombre=$nombre&precio=$precio&estado=$estado");  
            }    
            else{
             require 'conexion.php';
             $sql1 ="insert into venta 
             values(null,'$id_producto', '$cantidad', '$precio', '$fecha',
             '$_SESSION[id_usuario]','$total', '6')";
             $resultado1 = mysqli_query($mysqli, $sql1);    

                if(!$resultado1){
                  echo "$B.Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
                }
                else{
                 require 'conexion.php';
                 $sql2 = "UPDATE producto SET estado = '$estado' 
                 WHERE producto.id_producto = $id_producto";
                 $resultado2 = mysqli_query($mysqli, $sql2);
                    
                    if(!$resultado2){
                      echo "$C.Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
                    }
                    else{
                     header("location:inicio.php");
                    }
                }    
            }                                        
        }
    }
