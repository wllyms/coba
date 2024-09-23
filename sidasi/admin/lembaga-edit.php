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

$id_lembaga = $_GET["id"];

$query_lembaga = "SELECT * FROM tbl_lembaga_akred WHERE id_lembaga_akred = $id_lembaga";
$result_lembaga = mysqli_query($conn, $query_lembaga);
$row_lembaga = mysqli_fetch_assoc($result_lembaga);

if (isset($_POST["submit"])) {

    $nm_lembaga = $_POST["nm_lembaga"];

    $query = "UPDATE tbl_lembaga_akred SET nm_lembaga = '$nm_lembaga' WHERE id_lembaga_akred = $id_lembaga";
    $update = mysqli_query($conn, $query);

    if ($update) {
        echo "<script>
            alert('Data berhasil di Simpan...!');
            document.location.href = 'lembaga.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal disimpan...! hindari pengisian dengan tanda petik');
            history.go(-1);
        </script>";
    }
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
    <title>Sidasi - Edit Lembaga Akreditasi</title>
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
                                <li class="breadcrumb-item"><a href="lembaga.php">Data Lembaga Akreditasi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Lembaga Akreditasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Edit Lembaga Akreditasi</h5>
                        <p class="mb-0 font-13">Silahkan mengedit data Lembaga Akreditasi pada form dibawah ini...!</p>
                    </div>
                    <div class="font-22 ms-auto"><a href="lembaga.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="nm_lembaga" class="form-label">Nama Lembaga Akreditasi :</label>
                                        <input type="text" class="form-control" name="nm_lembaga" id="nm_lembaga" value="<?php echo $row_lembaga["nm_lembaga"] ?>" placeholder="Nama Lembaga Akreditasi" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-light" name="submit"><i class="bx bx-save"></i> Simpan</button>
                                        <a href="lembaga.php" class="btn btn-light"><i class="bx bx-caret-left"></i> Cancel</a>
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