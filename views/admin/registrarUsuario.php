<?php
require_once "../../model/conexion.php";
require_once "../../model/consulta.php";
require_once "../../controller/admin/cargarUsuario.php";
require_once "../../controller/admin/verPerfil.php";
require_once "../../model/seguridad.php";

?>
<!doctype html>
<html class="no-js" lang="es">
<?php include ('../../includes/menulateralsuper.php') ?>
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
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/owl.carousel.css">
        <link rel="stylesheet" href="../../css/owl.theme.css">
        <link rel="stylesheet" href="../../css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/main.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/style2.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
        <div class="header-advance-area">
            <nav class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="header-top-wraper">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                                <div class="menu-switcher-pro">
                                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"><i class="fa fa-bars"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                                <div class="header-top-menu tabl-d-n">
                                                    <ul class="nav navbar-nav mai-top-nav">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="header-right-info">
                                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                     
                                                        <li class="nav-item">
                                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                                    <span class="admin-name">Advanda Cro</span>
                                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                                </a>
                                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                                <li><a href="register.html"><span class="fa fa-home author-log-ic"></span>Register</a>
                                                                </li>
                                                                <li>
                                                                <div class="perfil">
                                                                <!-- <
                                                                <div class="imagen">
                                                                    <img class="" src="../'.$farray['foto'].'" alt="foto">
                                                                </>
                                                                <div class="info">
                                                                    <a href="">'.$farray['nombre'].'</a>
                                                                </div>
                                                                </div> -->
                                                                    <?php 
                                                                    perfil();
                                                                    ?>
                                                                </div>
                                                                </li>
                                                                <li><a href="lock.html"><span class="fa fa-diamond author-log-ic"></span> Lock</a>
                                                                </li>
                                                                <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                                </li>
                                                                <li><a href="../../controller/admin/cerrarSesion.php"><span class="fa fa-lock author-log-ic"></span>CERRAR SESION</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                          
                        
                                        </div>              
                                    </div>
                            </div>  
                    </div>  
                </div>              
            </nav>
                            <!-- Mobile Menu start Menu dispositivo movil-->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="mobile-menu">
                                                <nav id="dropdown">
                                                    <ul class="mobile-menu-nav">
                                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul class="collapse dropdown-header-top">
                                                                <li><a href="registrar-usuario-admin.php">Registrar</a></li>
                                                                <li><a href="ver-usuarios-admin.php">Ver</a></li>
                                                                <!-- <li><a href="editar-usuario-admin.php">Editar</a></li> -->
                                                            </ul>
                                                        </li>
                                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                                <li><a href="login.html">Login</a>
                                                                </li>
                                                                <li><a href="register.html">Register</a>
                                                                </li>
                                                                <li><a href="lock.html">Lock</a>
                                                                </li>
                                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu end -->
                            <div class="breadcome-area">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="breadcome-list single-page-breadcome">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="breadcome-heading">
                                                            <form role="search" class="">
                                                                <!-- <input type="text" placeholder="Search..." class="form-control">
                                                                <a href=""><i class="fa fa-search"></i></a> -->
                                                                <br><br>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <ul class="breadcome-menu">
                                                            <!-- <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                            </li>
                                                            <li><span class="bread-blod">Editar Usuario</span>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                    <form action="../../controller/admin/insertarUsuario.php" id="loginForm" method="post" enctype="multipart/form-data">
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

<?php
require_once "../footer.php";
?>

</body>

</html>