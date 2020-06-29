<?php
// require_once "../../model/conexion.php";
// require_once "../../model/consulta.php";
// require_once "../../controller/admin/cargarUsuario.php";
// require_once "../../controller/admin/verPerfil.php";
// require_once "../../model/seguridad.php";

?>
<!doctype html>
<html class="no-js" lang="es">
<?php 
// include ('../../includes/menulateralsuper.php') 
?>
<head>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ATENTO COLOMBIA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <div class="header-advance-area">
            
                            
                          


    </head>
    <body>
        
        



    
<!-- Formulario de registro -->
<div class="container-fluid-registro">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3 class="registro-usuario">REGISTRO DE USUARIO</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="controller/admin/insertarUsuarioStandar.php" id="loginForm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Identificacion</label>
                                <input type="number" name="identificacion" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Apellido</label>
                                <input type="text" name="apellido" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Whatsapp</label>
                                <input type="text" name="whatsapp" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cargo</label>
                                <!-- <input type="text" name="cargo" class="form-control"> -->
                                <select class="form-control select2" name="cargo" required>
                                    <option selected>Selecione su perfil</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="coordinador">Coordinadora</option>
                                    <option value="bodeguero">Bodeguero</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Fecha de ingreso</label>
                                <input type="date" name="fecha_ingreso" class="form-control" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contraseña</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success loginbtn">REGISTRAR</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </form>

                    
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
    </div>
    <!-- link a la pagina del fabricante -->
    <!-- <div class="row">
        <div class="col-md-12 text-center">
            <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
        </div>
    </div> -->
</div>
                



      </div>
      
  </div>
</header>

<div class="footer-copyright-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="footer-copy-right">
                                    <!-- link a la pagina del fabricante -->
                                    <p>Copyright &copy; 2020 <a href="https://colorlib.com/wp/templates/">SILTO</a> All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</body>

</html>