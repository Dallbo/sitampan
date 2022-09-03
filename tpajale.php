<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png" type="image/icon type">
    <title>SiTampan</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar Start-->
        <ul class="navbar-nav  bg-gradient-light sidebar sidebar-dark accordion" style="color:black;" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <img src="logo.png" style="width:80px;height:60px;"/>
                </div>
                <div class="sidebar-brand-text mx-3 text-secondary">Si Tampan</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php" >
                    <span class="text-secondary">Beranda</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="thorti.php">
                    <span class="text-secondary">Tanam Horti</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="tpajale.php">
                    <span class="text-secondary">Tanam Pajale</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span class="text-secondary">Tanam Perkebunan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span class="text-secondary">Panen Horti</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span class="text-secondary">Panen Pajale</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <span class="text-secondary">Panen Perkebunan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- Sidebar Stop-->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar Start-->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <img src="Bojonegoro.png" style="width:80px;height:60px;"/>
                    <div class="col"> 
                        <h5>PEMERINTAH KABUPATEN BOJONEGORO</h5>
                        <small>DINAS KETAHANAN PANGAN DAN PERTANIAN</small>
                    </div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                    </li>
                </nav>
                <!-- Topbar Stop-->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Tanam Pajale Start Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                           
                        </div>

                        <!-- Tanam Horti Start-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            
                        </div>
                        <!-- Tanam Horti Stop-->
                        <!-- Tanam Perkebunan Start -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            
                        </div>
                        <!-- Tanam Perkebunan Stop -->
                        <!-- panen Horti Start-->
                        <div class="col-xl-3 col-md-6 mb-10">
                            <button type="button" class="btn btn-outline-success"><span class="text-dark"><b style="color:black;">Tambah </b></span></button>
                            <button type="button" class="btn btn-outline-success"><span class="text-dark"><b style="color:black;">Eksport</b></span></button>
                            
                        </div>
                        <!-- panen Horti Stop-->
                        <!-- Show Entries Start -->
                        <div class="col-md-8" style="margin-top:15px;">
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <label class="text-dark">Show Entries</label>
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Entrie</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </form>
                            </nav>
                        </div>
                        <div class="col-md-4" style="margin-top:15px;">
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </nav>
                        </div>
                        <!-- Show Entries Stop -->
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Tabel Semua Tanam Start -->
                        <div class="col-sm-12">
                        <table class="table">
                            <div class="d-flex align-items-center justify-content-center">
                                <h4><b style="color:black;">Tanam Pajale</b></h4>
                            </div>
                            <thead class="bg-success">
                                <tr>
                                    <th scope="col"><h7 class="text-white">Nomor</h7></th>
                                    <th scope="col"><h7 class="text-white">Pajale</h7></th>
                                    <th scope="col"><h7 class="text-white">Horti</h7></th>
                                    <th scope="col"><h7 class="text-white">Perkebunan</h7></th>
                                    <th scope="col"><h7 class="text-white">Tanggal</h7></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>33</td>
                                    <td>22</td>
                                    <td>1</td>
                                    <td>2022-01-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>33</td>
                                    <td>22</td>
                                    <td>1</td>
                                    <td>2022-01-11</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>33</td>
                                    <td>22</td>
                                    <td>1</td>
                                    <td>2022-01-11</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- Tabel Semua Tanam Stop -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
</body>

</html>