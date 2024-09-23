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
    <link href="../assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <title>Sidasi - Edit Admin</title>
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
                                <li class="breadcrumb-item"><a href="admin.php">Data Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Edit Admin</h5>
                        <p class="mb-0 font-13">Silahkan mengedit data Admin pada form dibawah ini, password default adalah <b>admin</b></p>
                    </div>
                    <div class="font-22 ms-auto"><a href="admin.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="nm_admin" class="form-label">Nama :</label>
                                        <input type="text" class="form-control" name="nm_admin" id="nm_admin" value="" placeholder="Nama Lengkap dengan Gelar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nidn" class="form-label">NIDN :</label>
                                        <input type="number" class="form-control" name="nidn" id="nidn" value="" placeholder="Nomor Induk Dosen Nasional" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kode_prodi" class="form-label">Program Studi :</label>
                                        <select class="form-select" name="kode_prodi" id="kode_prodi">
                                            <option value="#">#</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telp" class="form-label">Telpon :</label>
                                        <input type="number" class="form-control" name="telp" id="telp" value="" placeholder="Telpon aktif Whatsup" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email :</label>
                                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email aktif Anda" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Jenis Kelamin :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk01" value="Laki-Laki">
                                            <label class="form-check-label" for="jk01">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk02" value="Perempuan">
                                            <label class="form-check-label" for="jk02">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="level" class="form-label">Level :</label>
                                        <select class="form-select" name="level" id="level" required>
                                            <option value="3">Prodi</option>
                                            <option value="2">LPM</option>
                                            <option value="1">Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-light" name="submit"><i class="bx bx-save"></i> Simpan</button>
                                        <a href="admin.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay toggle-icon"></div>

        <?php include "theme-footer.php" ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="../assets/plugins/input-tags/js/tagsinput.js"></script>
    <script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="../assets/js/app.js"></script>
</body>

</html>