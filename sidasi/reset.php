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
    <title>Sidasi - Reset Password</title>
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
                                        <h3 class="">Reset Password</h3>
                                        <p>Sistem Informasi Data Akreditasi</p>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>FORGOT PASSWORD</span>
                                        <hr>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" target="">
                                            <div class="col-12">
                                                <label for="nidn" class="form-label">NIDN</label>
                                                <input type="number" class="form-control" name="nidn" id="nidn" placeholder="Nomor Induk Dosen Nasional" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="telp" class="form-label">Telpon</label>
                                                <input type="number" class="form-control" name="telp" id="telp" placeholder="Nomor Telpon Terdaftar" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Terdaftar" required>
                                            </div>
                                            <small>Apabila berhasil password akan di reset menjadi <b>admin</b></small>
                                            <input type="hidden" name="password" value="$2y$10$bdt2wFLybj2aBpTTKOVKXONWGWnrUVtQXVKZvnogdJVdvUDktqwcq">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" name="submit" class="btn btn-primary mb-2"><i class="bx bxs-lock-open"></i>Reset Password</button>
                                                    <a href="index.php" class="btn btn-light"><i class="bx bx-caret-left"></i>Back to Login</a>
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