<?php
session_start();
include 'koneksi.php';
if(isset($_POST['registrasi'])){

    // ambil data dari formulir
    $username = $_POST['username'];
    $level = $_POST['level'];
    $password=($_POST["password"]);

    // buat query
    $sql = "INSERT INTO daftar_login ( username, level, password) VALUE ('$username', '$level', '$password')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        header('Location: index.php?status=sukses');
        exit;
      }
    else {
        echo "Gagal simpan data anggota";
        exit;


} 
}
?>