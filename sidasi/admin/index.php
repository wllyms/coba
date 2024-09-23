<?php
    session_start();

    if($_SESSION["level"] != 1){
        header("Location: logout.php");
        exit;
    }

    if(!isset($_SESSION["loginadmin"])){
        header("Location: ../index.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <title>Sidasi - Dashboard</title>
</head>

<body class="bg-theme bg-theme1">

    <div class="wrapper">

        <?php include "theme-sidebar.php" ?>

        <?php include "theme-header.php" ?>

        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 bg-primary bg-gradient">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Jumlah Fakultas</p>
                                        <h4 class="my-1 text-white">10</h4>
                                    </div>
                                    <div class="text-white ms-auto font-35"><i class='bx bx-buildings'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-danger bg-gradient">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Jumlah Prodi</p>
                                        <h4 class="my-1 text-white">26</h4>
                                    </div>
                                    <div class="text-white ms-auto font-35"><i class='bx bx-home-circle'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-warning bg-gradient">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-dark">Jumlah Dosen</p>
                                        <h4 class="text-dark my-1">474</h4>
                                    </div>
                                    <div class="text-dark ms-auto font-35"><i class='bx bx-user'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-success bg-gradient">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Akreditasi PT</p>
                                        <h4 class="my-1 text-white">Baik Sekali</h4>
                                    </div>
                                    <div class="text-white ms-auto font-35"><i class='bx bx-trophy'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="mb-1">Skor Akreditasi PT</h5>
                                        <p class="mb-0 font-13"><i class='bx bxs-file'></i> Skor berdasarkan PERBAN-PT No. 3 Tahun 2019 Lampiran 6d Matriks IAPT 3.0 PTA PTS</p>
                                    </div>
                                </div>
                                <div class="table-responsive mt-4">
                                    <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Peringkat</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Unggul</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Baik Sekali</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Baik</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Prodi Baru</td>
                                                <td>0</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>NSA</th>
                                                <th>2,54</th>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Saat ini PT Anda memenuhi untuk <b>BAIK SEKALI</b></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <small>Syarat Perlu Unggul adalah <b>3.25</b> dan Syarat Perlu Baik Sekali adalah <b>2.5</b></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-15 bg-light">
                            <div class="card-body text-center">
                                <div class="p-4 radius-15">
                                    <img src="../assets/images/users/man.png" width="110" height="110" class="rounded-circle shadow p-1 bg-white" alt="man.png">
                                    <h5 class="mb-0 mt-2 text-dark">Andie</h5>
                                    <p class="mb-3 text-dark">Admin</p>
                                    <div class="d-grid">
                                        <a href="tel:08" class="btn btn-white radius-15 mb-2"><i class="bx bx-phone"></i>08</a>
                                        <a href="mailto:a@email.c" class="btn btn-white radius-15 mb-2"><i class="bx bx-envelope"></i>a@email.c</a>
                                        <a href="profile.php" class="btn btn-success radius-15 mb-2"><i class="bx bx-pencil"></i> Edit</a>
                                        <a href="logout.php" class="btn btn-warning radius-15 mb-2"><i class="bx bx-power-off"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

        <?php include "theme-footer.php" ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="../assets/js/index.js"></script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>

</body>

</html>