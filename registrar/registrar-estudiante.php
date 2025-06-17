<?php 
    include("../conexion.php");
    $sql = "SELECT nombre_carrera FROM carreras GROUP BY nombre_carrera";
    $sql2 = "SELECT grado FROM carreras group by grado";
    $carreras = mysqli_query($conn, $sql);
    $grados = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"  id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Menu de la pagina</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="registrar-estudiante.php">
                <i class="fa-solid fa-cash-register"></i>
                    <span>Registrar nuevo Estudiante</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Agenda de Contactos
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tabla-estudiantes.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lista de estudiantes</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="container">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                        <img src="https://lh3.googleusercontent.com/proxy/HM2DtXVAJNxoKSKgEtuXFQcxJZWmCaatvsT2_H7dL1ao7Q5VpaS6Ycs-9_lDVUz74daDrsW6xOauxTymFeor1zKo--6CSNm4fWXJBZjuqBJTE5H7mFp1hleWpc3c2rx0mHJ3" alt="imagen" class="logoagenda" style="width: 100%; height: 75%; margin-left:10%">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">REGISTRAR ESTUDIANTE!</h1>
                                            </div>
                                            <form class="user" method="post" action="create.php" id="registro">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user" name="nombre" placeholder="Nombre" id="nombre" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control form-control-user" name="apellido" placeholder="Apellido" id="apellido">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label for="" style="color: transparent; font-size: 10px;">Fecha de Nacimiento</label>
                                                        <select class="form-control" name="genero" id="genero" required 
                                                        style="
                                                        border-radius: 25px;
                                                        height: 48.5px;
                                                        font-size: 13px;
                                                        ">
                                                        <option value="" disabled selected hidden>Genero</option>
                                                        <option value="Masculino" select>Masculino</option>
                                                        <option value="Femenino" select>Femenino</option>
                                                        <option value="Otro" select>Otro</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="" style="font-size: 10px; color:black;">Fecha de Nacimiento</label>
                                                        <input type="date" class="form-control form-control-user" name="fechaNacimiento" placeholder="Fecha Nacimiento" id="fecha">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="tel" class="form-control 
                                                form-control-user" name="telefono" 
                                                placeholder="Telefono del estudiante" id="telefono" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" name="jornada" 
                                                        id="carrera" required 
                                                        style="
                                                        border-radius: 25px;
                                                        height: 48.5px;
                                                        font-size: 13px;
                                                        ">
                                                        <option value="" disabled selected hidden>Jornada</option>
                                                        <option value="Matutina" select>Matutina</option>
                                                        <option value="Vespertina" select>Vespertina</option>
                                                        <option value="Doble" select>Doble</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <select class="form-control" name="carrera" 
                                                        id="carrera" required 
                                                        style="
                                                        border-radius: 25px;
                                                        height: 48.5px;
                                                        font-size: 13px;
                                                        ">
                                                        <option value="" disabled selected hidden>Carrera</
                                                        option>
                                                        <?php while($row = mysqli_fetch_array($carreras)): ?>
                                                            <option value="<?= $row['nombre_carrera']?>"><?php echo $row['nombre_carrera']; ?></option>
                                                        <?php endwhile?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" name="grado" 
                                                        required 
                                                        style="
                                                        border-radius: 25px;
                                                        height: 48.5px;
                                                        font-size: 13px;
                                                        ">
                                                        <option value="" disabled selected hidden>Grado</
                                                        option>
                                                        <?php while($row = mysqli_fetch_array($grados)): ?>
                                                            <option value="<?= $row['grado']?>"><?php echo $row['grado']; ?></option>
                                                        <?php endwhile?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control form-control-user" name="correo" id="exampleInputEmail" placeholder="Correo electronico" id="correo">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" placeholder="Direccion" name="direccion" id="direccion">
                                                </div>
                                                <hr>
                                                <button type="submit" class="btn btn-facebook btn-user btn-block">
                                                    REGISTRAR
                                                </button>
                                            </form>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/espaciosBlanco.js"></script>

    <!--iconos de acciones-->
<script src="https://kit.fontawesome.com/46324eb03e.js" crossorigin="anonymous"></script>
</body>

</html>