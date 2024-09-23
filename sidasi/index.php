<?php

session_start();
if(isset($_SESSION["loginadmin"])){
    header("Location: logout.php");
    exit;
}

include "koneksi.php";

if(isset($_POST["login"])){
    $nidn = $_POST["nidn"];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE nidn = '$nidn' AND status=1");
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){

            $_SESSION["loginadmin"] = true;
            $_SESSION["id_admin"]   = $row["id_admin"];
            $_SESSION["nm_admin"]   = $row["nm_admin"];
            $_SESSION["nidn"]       = $row["nidn"];
            $_SESSION["kode_prodi"] = $row["kode_prodi"];
            $_SESSION["telp"]       = $row["telp"];
            $_SESSION["email"]      = $row["email"];
            $_SESSION["jk"]         = $row["jk"];
            $_SESSION["foto"]       = $row["foto"];
            $_SESSION["level"]      = $row["level"];


            if($row["level"] == 1){
                header("Location: admin/index.php");
            } else if ($row["level"] == 2){
                header("Location: ");
            }
        }
    } 
    $error = true;   
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>Sidasi - Login</title>
</head>

<body class="bg-theme bg-theme1">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="assets/images/logo-img.png" width="200" alt="logo-img.png" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-2 rounded">
                                    <div class="text-center">
                                        <h3 class="">Login Aplikasi</h3>
                                        <p>Sistem Informasi Data Akreditasi</p>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>SIGN IN HERE</span>
                                        <hr>
                                    </div>
                                    <div class="form-body">
                                        <?php if(isset($error)) {?>
                                        <div class="alert border-0 alert-dismissible fade show">
                                            <div class="text-warning">NIDN atau Password salah...!</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <?php } ?>
                                        <form class="row g-3" method="POST" target="">
                                            <div class="col-12">
                                                <label for="nidn" class="form-label">NIDN</label>
                                                <input type="number" class="form-control" name="nidn" id="nidn" placeholder="Nomor Induk Dosen Nasional" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Password" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-end"> <a href="reset.php">Reset Password ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" name="login" class="btn btn-light"><i class="bx bxs-lock-open"></i>Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>