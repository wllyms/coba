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
    <title>Sidasi - Tambah Akreditasi</title>
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
                                <li class="breadcrumb-item"><a href="akreditasi.php">Data Akreditasi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Akreditasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Tambah Akreditasi</h5>
                        <p class="mb-0 font-13">Silahkan menambahkan data akreditasi pada form dibawah ini...!</p>
                    </div>
                    <div class="font-22 ms-auto"><a href="akreditasi.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="id_akreditasi" class="form-label">Program Studi :</label>
                                        <select class="form-select" name="id_akreditasi" id="id_akreditasi" required>
                                            <option value="">-- Pilih Prodi --</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="peringkat" class="form-label">Peringkat Akreditasi :</label>
                                        <select class="form-select" name="peringkat" id="peringkat" required>
                                            <option value="">-- Pilih Peringkat --</option>
                                            <option value="Unggul">Unggul</option>
                                            <option value="A">A</option>
                                            <option value="Baik Sekali">Baik Sekali</option>
                                            <option value="B">B</option>
                                            <option value="Baik">Baik</option>
                                            <option value="C">C</option>
                                            <option value="Prodi Baru">Prodi Baru</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nilai" class="form-label">Nilai Akreditasi :</label>
                                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Nilai Akreditasi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mulai" class="form-label">Tanggal Diberikan :</label>
                                        <input type="date" class="form-control" name="mulai" id="mulai" placeholder="Tanggal ditetapkan akreditasi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sampai" class="form-label">Tanggal Berakhir :</label>
                                        <input type="date" class="form-control" name="sampai" id="sampai" placeholder="Tanggal berakhir" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lembaga" class="form-label">Lembaga Akreditasi :</label>
                                        <select class="form-select" name="lembaga" id="lembaga" required>
                                            <option value="">-- Pilih Lembaga --</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nosk" class="form-label">No SK Akreditasi :</label>
                                        <input type="text" class="form-control" name="nosk" id="nosk" placeholder="Nomor SK Akreditasi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ket" class="form-label">Keterangan :</label>
                                        <input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link_sk" class="form-label">Link File SK :</label>
                                        <input type="text" class="form-control" name="link_sk" id="link_sk" placeholder="Link file di Google Drive terbuka" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="link_sertifikat" class="form-label">Link File Sertifikat :</label>
                                        <input type="text" class="form-control" name="link_sertifikat" id="link_sertifikat" placeholder="Link file di Google Drive terbuka" required>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-light" name="submit"><i class="bx bx-save"></i> Simpan</button>
                                        <a href="akreditasi.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a>
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