<?php
session_start();

if ($_SESSION["level"] != 1) {
    header("Location: logout.php");
    exit;
}

if (!isset($_SESSION["loginadmin"])) {
    header("Location: ../index.php");
    exit;
}

include "../koneksi.php";

$fakultas = mysqli_query($conn, "SELECT * FROM m_fakultas");
$jml_fakultas = mysqli_num_rows($fakultas);
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
    <link href="../assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <title>Sidasi - Data Fakultas</title>
</head>

<body class="bg-theme bg-theme1">

    <div class="wrapper">

        <?php include "theme-sidebar.php" ?>

        <?php include "theme-header.php" ?>

        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Fakultas</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Data Fakultas</h5>
                        <p>Data diambil langsung dari database <b class="text-warning">SIA</b></p>
                    </div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <?php if ($jml_fakultas == 0) { ?>
                            <div class="alert border-0 alert-dismissible fade show py-2">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-warning"><i class='bx bx-info-circle'></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 text-warning">Data Masih Kosong</h6>
                                        <div class="text-warning">Data hanya bisa diisi di SIA UNISKA</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } else { ?>
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Kode Fakultas</th>
                                            <th>Nama Fakultas</th>
                                            <th>Dekan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row_fakultas = mysqli_fetch_assoc($fakultas)) { ?>
                                            <tr>
                                                <td><?php echo $row_fakultas["kode_fakultas"] ?></td>
                                                <td><?php echo $row_fakultas["nama_fakultas"] ?></td>
                                                <td>
                                                    <?php
                                                    $nidn = $row_fakultas["pejabat"];
                                                    $result_dosen = mysqli_query($conn, "SELECT * FROM tbl_dosen WHERE NIDN = '$nidn'");
                                                    $row_dosen = mysqli_fetch_assoc($result_dosen);
                                                    echo $row_dosen["nama_dosen"];
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Kode Fakultas</th>
                                            <th>Nama Fakultas</th>
                                            <th>Dekan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        <?php } ?>
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
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script> -->
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                "pageLength": 30,
                buttons: ['copy', 'excel', 'pdf', 'print'],
                "order": [0, 'asc']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>
</body>

</html>