<?php
print_r($POST);
session_start();
require 'conexion.php';


if(@$_SESSION["nombre"] == ""){
echo "no pudiste entrar jajaja";
}else{
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>principal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
    </script>
    
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
<div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                pitutecnologias
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo.jpg" alt="pitutecnologias" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">pitutecnologias</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="inicio.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-smartphone-setup zmdi-hc-fw"></i>&nbsp;&nbsp; Telefonos-Tablets<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="telefonos.php"><i class="zmdi zmdi-smartphone zmdi-hc-fw"></i>&nbsp;&nbsp; Telefonos-Celulares</a></li>
                            <li><a href="tablets.php"><i class="zmdi zmdi-tablet-android zmdi-hc-fw"></i>&nbsp;&nbsp; Tablets</a></li>
                            <li><a href="accesorios_cel.php"><i class="zmdi zmdi-usb zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios para celulares</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-tv-play zmdi-hc-fw"></i>&nbsp;&nbsp; Tv-Audio-Video-Camaras<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="tv.html"><i class="zmdi zmdi-tv zmdi-hc-fw"></i>&nbsp;&nbsp; Tv-Proyectores-Video beams</a></li>
                            <li><a href="video.html"><i class="zmdi zmdi-videocam zmdi-hc-fw"></i>&nbsp;&nbsp; Reproductores de video</a></li>
                            <li><a href="audio.html"><i class="zmdi zmdi-headset zmdi-hc-fw"></i>&nbsp;&nbsp; Audio</a></li>
                            <li><a href="camaras.html"><i class="zmdi zmdi-camera zmdi-hc-fw"></i>&nbsp;&nbsp; Camaras y Accesorios</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-devices zmdi-hc-fw"></i>&nbsp;&nbsp; Computadores-Portatiles<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="computadores.html"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>&nbsp;&nbsp; Computadoras de escritorio</a></li>
                            <li><a href="portatiles.html"><i class="zmdi zmdi-laptop zmdi-hc-fw"></i>&nbsp;&nbsp; Portatiles-Laptops</a></li>
                            <li><a href="impresoras.html"><i class="zmdi zmdi-scanner zmdi-hc-fw"></i>&nbsp;&nbsp; Impresoras-Scaners-Multifuncionales</a></li>
                            <li><a href="monitores.html"><i class="zmdi zmdi-desktop-windows zmdi-hc-fw"></i>&nbsp;&nbsp; Monitores</a></li>
                            <li><a href="accesorios_pc.html"><i class="zmdi zmdi-keyboard zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios-Componentes-otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-gamepad zmdi-hc-fw"></i>&nbsp;&nbsp; Videos juegos-Consolas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="consolas.html"><i class="zmdi zmdi-playstation zmdi-hc-fw"></i>&nbsp;&nbsp; Consolas</a></li>
                            <li><a href="video_juegos.html"><i class="zmdi zmdi-play zmdi-hc-fw"></i>&nbsp;&nbsp; Video juegos</a></li>
                            <li><a href="accesorios_juegos.html"><i class="zmdi zmdi-input-composite zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios-otros</a></li>
                        </ul>
                        
                    </li>
                    <li><a href="mis_compras.php"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Mis compras</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                    <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php echo $_SESSION['nombre']; ?></span>
                </li>   
                <li  class="tooltips-general exit-system-button" data-href="cerrar_sesion.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>

                <li class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>

        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified" style="font-size: 17px;">
                <li  class="title-flat-form "><h2>Comprar</h2></li>
                <br></br>
                <li  class="title-flat-form "><h2>seleccione una cantidad valida</h2></li>
            </ul>
        </div>
        <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/tarjetas.png" alt="user" class="img-responsive center-box" style="max-width: 300px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                    <li class="active"></li>
                    </ol>
                </div>
            </div>
        </div>
        <form  action='inicio.php' autocomplete="off">
        <button class="btn btn-primary" ><i class="zmdi zmdi-undo"></i> &nbsp;&nbsp; regresar a la lista</button>
        </form>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">comprar producto</div>
                <form class="form-horizontal" method="POST" action="validar_pago.php" autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                       <div class="group-material">
                                <input type="hidden" class="material-control tooltips-general" name="id_producto" maxlength="70"  
                                value="<?php echo $_GET['id_producto']?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                               
                            </div> 
                            <label>Nombre</label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" maxlength="100"
                                value="<?php echo $_GET['nombre']?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                            </div>
                            <label>precio</label>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="precio" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" maxlength="100"
                                value="<?php echo $_GET['precio']?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                
                           </div>
                           <div class="group-material">
                                <input type="hidden" class="material-control tooltips-general" name="estado" maxlength="70"  
                                value="<?php echo $_POST['estado']?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                            </div>
                           <div>
                           <h2>pagar</h2>
                           </div>
                           <br></br>
                           <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="nombre_tarjeta" placeholder="nombre del titular en mayusculas" required="" maxlength="200">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>nombre titular de la tarjeta</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="numero_tarjeta" required="" placeholder="coloque el numero de su tarjeta sin espacios" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" maxlength="50">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Numero de tarjeta</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="cvv" maxlength="3" placeholder="son 3 numeros en la parte de atras de su tarjeta" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>C V V</label>
                            </div>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="fecha_tarjeta" placeholder="MM/AAAA" required="" maxlength="7">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>fecha de expiracion</label>
                           </div>
                           <div class="group-material">
                                <input type="number" class="material-control tooltips-general" name="cantidad" maxlength="3" placeholder="indique la cantidad que desea llevar" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>cantidad</label>
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-card"></i> &nbsp;&nbsp; usar esta tarjeta</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid">
            
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                    </div>
                    <div class="modal-body">
                        comunicate con la uniajc
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            desarrollado por estudiantes de institucion universitaria antonio jose camacho.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; esteban lopez ortiz <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-instagram zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-whatsapp"> </i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2020 antonio jose camacho</div>
        </footer>
    </div>
</body>

</html>
<?php
}
?>