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
                <li role="presentation" class="active"><a href="ajustes_crear.php">Clientes</a></li>
            </ul>
        </div>
        <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para administrar los perfiles de los Clientes
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                    <li class="active">perfiles de clientes</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo usuario</div>
                <div class="title-flat-form title-flat-blue">las contraseñas no coinciden</div>
                <form class="form-horizontal" method="POST" action="registrar_usuario_admin.php" autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" placeholder="Nombres" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe tus nombres">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="apellidos" placeholder="Apellidos" required="" maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip" data-placement="top" title="Escribe tus apellidos">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                           </div>
                           <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="documento" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Documento</label>
                            </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" name="correo" placeholder="E-mail"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del administrador">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group-material">
                                <input type="password" class="material-control tooltips-general" name="pass" placeholder="Contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contraseña</label>
                            </div>
                           <div class="group-material">
                                <input type="password" class="material-control tooltips-general" name="repass" placeholder="Repite la contraseña" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Repetir contraseña</label>
                           </div>
                           <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="telefono" placeholder="Telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Telefono</label>
                        </div>
      

                        <div class="group-material">        
                        Ciudad
                        <select type="text" class="material-control tooltips-general" name="ciudad" placeholder="Subcategoria"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="selecciona una subcategoria">
                        <?php     
                        $sql="Select * from ciudad";
                        $resultado = mysqli_query($mysqli, $sql);
                        if(!$resultado){
                            echo "Fallo al ejecutar la consulta: (". $mysqli->errno.")".$mysqli->error;
                        }else{
                            while($fila=mysqli_fetch_assoc($resultado)){
                                echo "
                                <option value= '$fila[id_ciudad]'>$fila[nombre]</option>
                                ";
                            }
                        }
                        ?>
                        <span class="highlight"></span>
                            <span class="bar"></span>
                        </select>
                        </div>  
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="direccion" placeholder="Direccion" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Direccion</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="torre" placeholder="Torre" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Torre</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="apto" placeholder="Apto" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Apto</label>
                        </div>
                        <div class="group-material">
                            <input type="text" class="material-control tooltips-general" name="casa" placeholder="Casa" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Casa</label>
                        </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">listado de clientes</h2>
            <table border=3 style="background-color:#DFF0D8; font-weight:bold;">
                <tr>
                    <th style="width: 7%;">
                        NOMBRES
                    </th>
                    <th style="width: 7%;">
                        APELLIDOS
                    </th>
                    <th style="width: 7%;">
                        DOCUMENTO
                    </th>
                    <th style="width: 7%;">
                        CORREO
                    </th>
                    <th style="width: 7%;">
                        CONTRASEÑA
                    </th>
                    <th style="width: 7%;">
                        TELEFONO
                    </th>
                    <th style="width: 7%;">
                        CIUDAD
                    </th>
                    <th style="width: 7%;">
                        DIRECCION
                    </th>
                    <th style="width: 7%;">
                        TORRE
                    </th>
                    <th style="width: 7%;">
                        APTO
                    </th>
                    <th style="width: 7%;">
                        CASA
                    </th>
                    <th style="width: 7%;">
                        EDITAR
                    </th>
                    <th style="width: 7%;">
                        ELIMINAR
                    </th>
                </tr>

                <?php
                $sql = "select * from usuario";
                $resultado = mysqli_query($mysqli, $sql);
                if (!$resultado) {
                    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ")" . $mysqli->error;
                } else {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "
                    <tr>
                        <td>
                            $fila[nombres]
                        </td>
                        <td >
                            $fila[apellidos]
                        </td>
                        <td >
                            $fila[documento]
                        </td>
                        <td >
                            $fila[correo]
                        </td>
                        <td >
                            $fila[pass]
                        </td>
                        <td >
                            $fila[telefono]
                        </td>
                        <td >
                            $fila[id_ciudad]
                        </td>
                        <td >
                            $fila[direccion]
                        </td>
                        <td >
                            $fila[torre]
                        </td>
                        <td >
                            $fila[apto]
                        </td>
                        <td >
                            $fila[casa]
                        </td>
                        <td>
                        <form method='POST' action='cliente_crear1.php'>
                        <input type='hidden' name='id_usuario' value='$fila[id_usuario]'>
                        <input type='hidden' name='nombres' value='$fila[nombres]'>
                        <input type='hidden' name='apellidos' value='$fila[apellidos]'>
                        <input type='hidden' name='documento' value='$fila[documento]'>
                        <input type='hidden' name='correo' value='$fila[correo]'>
                        <input type='hidden' name='pass' value='$fila[pass]'>
                        <input type='hidden' name='telefono' value='$fila[telefono]'>
                        <input type='hidden' name='id_ciudad' value='$fila[id_ciudad]'>
                        <input type='hidden' name='direccion' value='$fila[direccion]'>
                        <input type='hidden' name='torre' value='$fila[torre]'>
                        <input type='hidden' name='apto' value='$fila[apto]'>
                        <input type='hidden' name='casa' value='$fila[casa]'>
                        <button class='btn btn-success' type='submit' value='actualizar'><i class='zmdi zmdi-refresh'></i>
                        </form>
                        </td>
                        <td>
                        <form method='POST' action='eliminar_usuario.php'>
                        <input type='hidden' name='id_usuario' value='$fila[id_usuario]'>
                            <button class='btn btn-danger' type='submit' value='eliminar'><i class='zmdi zmdi-delete'></i></input>
                            </form>
                        </td>
                    </tr>
                ";
                    }
                }
                ?>
            </table>
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