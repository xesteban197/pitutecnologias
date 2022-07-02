<?php
require 'conexion.php';
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
            
        </div>
    </div>
    
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">usuario</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.php" data-placement="bottom" title="Salir del sistema">
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
              <h1 class="all-tittles">REGISTRARSE</small></h1>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo usuario</div>
                <form class="form-horizontal" method="POST" action="mail.php" autocomplete="off">
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
                            <input type="text" class="material-control tooltips-general" name="documento" placeholder="c.c o nit" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Documento</label>
                            </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" name="correo" placeholder="correo electronico"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del administrador">
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
                            <input type="text" class="material-control tooltips-general" name="telefono" placeholder="Telefono" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe un numero de relefono">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Telefono</label>
                        </div>
      

                        <div class="group-material">        
                        Ciudad
                        <select type="text" class="material-control tooltips-general" name="ciudad"  required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="selecciona una subcategoria">
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