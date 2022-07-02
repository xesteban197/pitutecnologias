<?php
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
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
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
                    <li><a href="inicio_admin.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-smartphone-setup zmdi-hc-fw"></i>&nbsp;&nbsp; Telefonos-Tablets<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="telefonos_admin.php"><i class="zmdi zmdi-smartphone zmdi-hc-fw"></i>&nbsp;&nbsp; Telefonos-Celulares</a></li>
                            <li><a href="tablets_admin.php"><i class="zmdi zmdi-tablet-android zmdi-hc-fw"></i>&nbsp;&nbsp; Tablets</a></li>
                            <li><a href="accesorios_cel_admin.php"><i class="zmdi zmdi-usb zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios para celulares</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-tv-play zmdi-hc-fw"></i>&nbsp;&nbsp; Tv-Audio-Video-Camaras<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="tv_admin.php"><i class="zmdi zmdi-tv zmdi-hc-fw"></i>&nbsp;&nbsp; Tv-Proyectores-Video beams</a></li>
                            <li><a href="video_admin.php"><i class="zmdi zmdi-videocam zmdi-hc-fw"></i>&nbsp;&nbsp; Reproductores de video</a></li>
                            <li><a href="audio_admin.php"><i class="zmdi zmdi-headset zmdi-hc-fw"></i>&nbsp;&nbsp; Audio</a></li>
                            <li><a href="camaras_admin.php"><i class="zmdi zmdi-camera zmdi-hc-fw"></i>&nbsp;&nbsp; Camaras y Accesorios</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-devices zmdi-hc-fw"></i>&nbsp;&nbsp; Computadores-Portatiles<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="computadores_admin.php"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>&nbsp;&nbsp; Computadoras de escritorio</a></li>
                            <li><a href="portatiles_admin.php"><i class="zmdi zmdi-laptop zmdi-hc-fw"></i>&nbsp;&nbsp; Portatiles-Laptops</a></li>
                            <li><a href="impresoras_admin.php"><i class="zmdi zmdi-scanner zmdi-hc-fw"></i>&nbsp;&nbsp; Impresoras-Scaners-Multifuncionales</a></li>
                            <li><a href="monitores_admin.php"><i class="zmdi zmdi-desktop-windows zmdi-hc-fw"></i>&nbsp;&nbsp; Monitores</a></li>
                            <li><a href="accesorios_pc_admin.php"><i class="zmdi zmdi-keyboard zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios-Componentes-otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-gamepad zmdi-hc-fw"></i>&nbsp;&nbsp; Videos juegos-Consolas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="consolas_admin.php"><i class="zmdi zmdi-playstation zmdi-hc-fw"></i>&nbsp;&nbsp; Consolas</a></li>
                            <li><a href="video_juegos_admin.php"><i class="zmdi zmdi-play zmdi-hc-fw"></i>&nbsp;&nbsp; Video juegos</a></li>
                            <li><a href="accesorios_juegos_admin.php"><i class="zmdi zmdi-input-composite zmdi-hc-fw"></i>&nbsp;&nbsp; Accesorios-otros</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-collection-text zmdi-hc-fw"></i>&nbsp;&nbsp; Facturas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="facturero.php"><i class="zmdi zmdi-file-plus zmdi-hc-fw"></i>&nbsp;&nbsp; informacion de factura</a></li>
                            <li><a href="proceso_factura.php"><i class="zmdi zmdi-file zmdi-hc-fw"></i>&nbsp;&nbsp; generar factura</a></li>
                        </ul>   
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-mall zmdi-hc-fw"></i>&nbsp;&nbsp; ventas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                        <li><a href="proceso_ventas.php"><i class="zmdi zmdi-case-play zmdi-hc-fw"></i>&nbsp;&nbsp; Proceso Ventas</a></li>
                        <li><a href="ventas.php"><i class="zmdi zmdi-collection-case-play zmdi-hc-fw"></i>&nbsp;&nbsp; Todas las Ventas</a></li>
                        </ul>   
                    </li>
                        <li><a href="cliente_crear.php"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Clientes</a></li>
                        <li><a href="registrar_producto.php"><i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar producto</a></li>
                        <li><a href="ajustes_crear.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
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
                
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">registrar producto</small></h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo producto</div>
                <form class="form-horizontal" method="POST" action="producto_nuevo.php" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" placeholder="nombre" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombre</label>
                            </div>
                           <div class="group-material">
                                <input type="number" class="material-control tooltips-general" name="precio" placeholder="Precio" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe el precio del producto">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Precio</label>
                           </div>
                           <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="descripcion" placeholder="Descripcion" required="" maxlength="500" data-toggle="tooltip" data-placement="top" title="Escribe la descripcion del producto">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Decripcion</label>
                            </div>
                            <div class="group-material">        
                        Categoria
                        <select type="text" class="material-control tooltips-general" name="categoria" placeholder="Subcategoria"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="selecciona una subcategoria">
                        <?php     
                        $sql="Select * from categoria";
                        $resultado = mysqli_query($mysqli, $sql);
                        if(!$resultado){
                            echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
                        }else{
                            while($fila=mysqli_fetch_assoc($resultado)){
                                echo "
                                <option value= '$fila[id_categoria]'>$fila[nombre]</option>
                                ";
                            }
                        }
                        ?>
                        <span class="highlight"></span>
                            <span class="bar"></span>
                        </select>
                        </div>
                        <div class="group-material">
                            <input type="number" class="material-control tooltips-general" name="cantidad" placeholder="cantidad" required="" maxlength="5" >
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>catidad</label>
                            </div>
                        <div class="group-material">
                        imagen1        
                                <input type="file" name="imagen1" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div> 
                           <div class="group-material">
                        imagen2        
                                <input type="file" name="imagen2" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div> 
                           <div class="group-material">
                        imagen3        
                                <input type="file" name="imagen3" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div> 
                           <div class="group-material">
                        imagen4        
                                <input type="file" name="imagen4" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div> 
                           <div class="group-material">
                        imagen5        
                                <input type="file" name="imagen5" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div> 
                           <div class="group-material">
                        imagen6        
                                <input type="file" name="imagen6" class="material-control tooltips-general" accept="imagen/*">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                           </div>  
                                <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" value="Insertar" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>      <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    comunicate con la uniajc
                </div>
                <div class="modal-footer" >
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset" >
            <div class="container-fluid">
                <div class="row" >
                    <div class="col-xs-12 col-sm-6"> 
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            desarrollado por estudiantes de institucion universitaria antonio jose camacho.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; esteban lopez ortiz <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-instagram zmdi-hc-fw footer-social"></i><i class = "zmdi zmdi-whatsapp"> </i></li>
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