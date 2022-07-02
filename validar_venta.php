<?php
session_start();
require 'conexion_tarjeta.php';
 
$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$año = date("Y");
$mes = date("m");
$dia = date("d");
$fecha = "$año-$mes-$dia";
$cantidad = $_POST["cantidad"];
$estado = (($_POST["estado"]-$cantidad));
$validar = (($_POST["estado"]-$cantidad));
$total = ($cantidad*$precio);
$A = "A";
$B = "B";
$C = "C";

    if($validar<0){
    
        $estadorevi = $_POST["estado"];
        header("location:vender2.php?id_producto=$id_producto&nombre=$nombre&precio=$precio&estado=$estadorevi");     
    }
    else{
                                                    
             require 'conexion.php';
             $sql1 ="insert into venta 
             values(null,'$id_producto', '$cantidad', '$precio', '$fecha',
             '0','$total', '6')";
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
                     header("location:inicio_admin.php");
                    }
                }    
            }                                        
        
    
