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
    <title>Sidasi - Laporan Data Kelas</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Laporan Data Kelas</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Laporan Data Kelas</h5>
                        <p class="mb-0 font-13">Silahkan cari data kelas berdasarkan filter di bawah ini...!</p>
                    </div>
                    <div class="font-22 ms-auto"><a href="kelas-report.php" class="btn btn-light"><i class="bx bx-reset"></i> Reset</a></div>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="GET" class="row g-3">
                            <div class="col-md-5">
                                <select id="bulan" name="bulan" class="form-select" required>
                                    <option value="">-- Pilih Bulan --</option>
                                    <option value="01">Januari</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select id="tahun" name="tahun" class="form-select" required>
                                    <option value="">-- Pilih Tahun --</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-grid">
                                <button type="submit" class="btn btn-light"><i class="bx bx-search"></i> Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>Edinburgh</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="mt-3">
                            <a href="theme-print.php?id=1" class="btn btn-light" target="_blank"><i class="bx bx-printer"></i> Print</a>
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
    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>
</body>

</html>