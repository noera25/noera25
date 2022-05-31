<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO mahasiswaa VALUES
    ('','$nama', '$alamat', '$telepon', '$prodi')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}