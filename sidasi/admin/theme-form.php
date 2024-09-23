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
    <title>Sidasi - Tambah Kelas</title>
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
                                <li class="breadcrumb-item"><a href="kelas.php">Data Kelas</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Kelas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Tambah Kelas</h5>
                        <p class="mb-0 font-13">Silahkan menambahkan data Kelas pada form dibawah ini...!</p>
                    </div>
                    <div class="font-22 ms-auto"><a href="kelas.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="textfield" class="form-label">Textfield :</label>
                                        <input type="text" class="form-control" name="textfield" id="textfield" placeholder="Textfield" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="combobox" class="form-label">Combobox :</label>
                                        <select class="form-select" name="combobox" id="combobox" required>
                                            <option value="">-- Pilih Combobox --</option>
                                            <option value="Satu">Satu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Jenis Kelamin :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk01" value="Laki-Laki" checked>
                                            <label class="form-check-label" for="jk01">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk" id="jk02" value="Perempuan">
                                            <label class="form-check-label" for="jk02">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-2">Hobi :</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hobi" id="hobi01" value="Makan">
                                            <label class="form-check-label" for="hobi01">Makan</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hobi" id="hobi02" value="Minum">
                                            <label class="form-check-label" for="hobi02">Minum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hobi" id="hobi03" value="Tidur">
                                            <label class="form-check-label" for="hobi03">Tidur</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hobi" id="hobi04" value="Bernafas">
                                            <label class="form-check-label" for="hobi04">Bernafas</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="hobi" id="hobi05" value="Ee">
                                            <label class="form-check-label" for="hobi05">Ee</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <img src="../assets/images/users/man.png" alt="man.png" height="50">
                                    </div>
                                    <div class="mb-3">
                                        File Lama : <a href="../assets/images/users/man.png" target="_blank">man.png <i class="bx bx-link"></i></a>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Upload Gambar :</label>
                                        <input class="form-control" type="file" name="gambar" id="gambar" required>
                                        <small class="text-warning">Gambar dengan format JPG, JPEG, PNG dan GIF dengan ukuran maksimal 1 MB</small>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-light" name="submit"><i class="bx bx-save"></i> Simpan</button>
                                        <a href="kelas.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a>
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