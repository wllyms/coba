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

$delete = mysqli_query($conn, "DELETE FROM tbl_lembaga_akred WHERE id_lembaga_akred = $id_lembaga");

if ($delete) {
    echo "<script>
            alert('Data berhasil dihapus...!');
            document.location.href = 'lembaga.php';
        </script>";
}
