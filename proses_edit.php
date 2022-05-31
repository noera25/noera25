<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiswaa SET nama='$nama', alamat='$alamat', telepon='$telepon', prodi='$prodi' WHERE id_mahasiswa=$id";
    $query = mysqli_query($db, $sql);

header('location:index.php');
}