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
    <title>Sidasi - Update Profile</title>
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
                                <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Update Profile</h5>
                        <p class="mb-0 font-13">Silahkan mengupdate Profile Anda pada form dibawah ini...!</p>
                    </div>
                    <div class="font-22 ms-auto"><button type="button" onclick="self.history.back()" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</button></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nm_admin" class="form-label">Nama :</label>
                                        <input type="text" class="form-control" name="nm_admin" id="nm_admin" value="" placeholder="Nama Lengkap Dengan Titel/Gelar" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="telp" class="form-label">Telpon :</label>
                                        <input type="number" class="form-control" name="telp" id="telp" value="" placeholder="Nomor telpon aktif Whatsup" required>
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
                                        <img src="#" alt="#" height="50">
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">Upload Foto :</label>
                                        <input class="form-control" type="file" name="foto" id="foto">
                                        <small class="text-warning">Foto dengan format JPG, JPEG, PNG dan GIF dengan ukuran maksimal 1 MB</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password :</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password Lama atau Password Baru" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-light" name="submit"><i class="bx bx-save"></i> Simpan</button>
                                        <button type="button" onclick="self.history.back()" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</button>
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