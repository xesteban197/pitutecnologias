<?php
require('fpdf/fpdf.php'); 

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

$año = date("Y");
$mes = date("m");
$dia = date("d");
    // Logo
    $this->Image('fpdf/logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',22);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'FACTURA',0,0,'C');
    $this->Cell(80);
    $this->Image('fpdf/firmapitu.jpg',160,8,33);
    // Salto de línea
    $this->Ln(30);
    $this->SetFont('Arial','B',15);
    $this->Cell(40,10,utf8_decode('pitutecnologias'));
    $this->SetFont('Arial','B',12);
    $this->Cell(70);
    $this->Cell(50,20,'fecha de vencimiento',1,0,'C');
    $this->Ln(5);
    $this->SetFont('Arial','B',9);
    $this->Cell(40,10,utf8_decode('+57 3186680837'));
    $this->SetFont('Arial','B',12);
    $this->Ln(4);
    $this->SetFont('Arial','B',9);
    $this->Cell(40,10,utf8_decode('instagram: @pitutecnologias'));
    $this->Ln(4);
    $this->SetFont('Arial','B',9);
    $this->Cell(40,10,utf8_decode('facebook: pitutecnologias'));
    $this->Cell(70);
    $this->SetFont('Arial','B',12);
    $this->Cell(15,7,$dia,1,0,'C', 0);
    $this->SetFont('Arial','B',12);
    $this->Cell(1);
    $this->Cell(15,7,$mes,1,0,'C', 0);
    $this->SetFont('Arial','B',12);
    $this->Cell(1);
    $this->Cell(18,7,($año+1),1,0,'C', 0);
    $this->Ln(4);
    $this->SetFont('Arial','B',8);
    $this->Cell(40,10,utf8_decode('Email: pitutecnologias@gmail.com'));
    $this->Ln(20);
    
}


// Pie de página
function Footer()
{
 
    $this->SetY(-40);
    $this->SetFont('Arial','B',6);
    $this->Cell(40,10,utf8_decode('Todos los dispositivos moviles cuentan con garantia de imei de por vida.'));
    $this->Ln(3);
    
    $this->SetFont('Arial','B',6);
    $this->Cell(40,10,utf8_decode('Esta factura se asimila una letra de cambio en los terminos de la ley 1231 de 2008, y los articulos 772 y subsiguientes del codigo de comercio. La factura de venta es un titulo valor que '));
    $this->Ln(3);
    $this->Cell(40,10,utf8_decode('El vendedor o prestador del servicio podra librar y entregar o remitir al comprador o beneficiario del servicio, segun el art 772 y subsiguientes del codigo de comercio'));
    $this->Ln(3);
    $this->Cell(40,10,utf8_decode('Nuestra empresa no se hace responsable por fatantes de mercancia o por empaques averiados que no hayan sido reportados en la factura de venta o al momento de la entrega'));
    $this->Ln(3);
    $this->Cell(40,10,utf8_decode('Les informamos que la garantia de los productos que aparece en esta factura esta sujeta a las politicas de garantias de cada  fabricante y de acuerdo con nuestras politicas de garantias.'));
    $this->Ln(3);
    $this->Cell(40,10,utf8_decode('Para el cambio de producto debe estar en perfecto estado, completo (accesorios y empaques), con previa validacion tecnica, y estar dentro de los 3 dias habiles despues de realizada la entrega'));
    $this->Ln(10);

    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion1.php';
$sql = "Select * from venta where id_venta = $_POST[id_venta]";
$resultado = mysqli_query($mysqli, $sql);
                      
                            

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


if(!$resultado){
    echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
}else{
while($fila=mysqli_fetch_assoc($resultado)){

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,utf8_decode('CLIENTE :'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(100,5, $fila['apellidos'].' '.$fila['nombres'], 1, 0, 'C', 0);      
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(30,5,utf8_decode('NIT O C.C :'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(100,5, $fila['documento'], 1, 0, 'C', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(30,5,utf8_decode('DIRECCION :'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(100,5, $fila['direccion'], 1, 0, 'C', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(30,5,utf8_decode('TELEFONO :'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(100,5, $fila['telefono'], 1, 0, 'C', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(30,5,utf8_decode('CIUDAD :'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(100,5, $fila['ciudad'], 1, 0, 'C', 0);
$pdf->Ln(30);



$pdf->SetFont('Arial','B',10);    
$pdf->Cell(10,10,utf8_decode('CANT'), 1, 0, 'C', 0);  
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(60,10,utf8_decode('PRODUCTO'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(40,10,utf8_decode('IDENTIFICACION1'), 1, 0, 'C', 0);
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(40,10,utf8_decode('IDENTIFICACION2'), 1, 0, 'C', 0); 
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(20,10,utf8_decode('PRECIO'), 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->Cell(20,10,utf8_decode('FECHA'), 1, 0, 'C', 0);    
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(10,10, $fila['cantidad'], 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(60,10, $fila['producto'], 1, 0, 'C', 0);    
$pdf->SetFont('Arial','B',10);    
$pdf->cell(40,10, $fila['imei1'], 1, 0, 'C', 0);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(40,10, $fila['imei2'], 1, 0, 'C', 0);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(20,10, '$'.$fila['precio'], 1, 0, 'C', 0);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(20,10, $fila['fecha'], 1, 0, 'C', 0);
$pdf->Ln(30);

$pdf->SetFont('Arial','B',10);    
$pdf->cell(50,5, 'SUBTOTAL:   $'.($fila['precio']*$fila['cantidad']), 1, 0, 'F', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(50,5, 'ENVIO:   $'.$fila['valor_envio'], 1, 0, 'F', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(50,5, 'TOTAL:   $'.(($fila['cantidad']*$fila['precio'])+$fila['valor_envio']), 1, 0, 'F', 0);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',10);    
$pdf->cell(190,10, 'son:   '.$fila['valor_letras'], 1, 0, 'F', 0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',10);    
$pdf->cell(190,10, 'observaciones:   '.$fila['observaciones'], 1, 0, 'F', 0);
$pdf->Ln(20);

$pdf->SetFont('Arial','B',10);    
$pdf->cell(60,10, 'id de venta:   '.$fila['id_venta'], 0, 0, 'F', 0);
$pdf->Ln(20);

$pdf->Output();



}}

?>