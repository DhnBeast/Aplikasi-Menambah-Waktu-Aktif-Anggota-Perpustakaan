<?php
include 'koneksi.php';
$id = $_GET["id"];

$query = $koneksi->query("INSERT INTO perma (nama, alamat, kelamin, pekerjaan, jenis, perpanjang, ibu) 
SELECT nama, alamat, kelamin, pekerjaan, jenis, perpanjang, ibu FROM semen WHERE id ='$_GET[id]'");
 $delete = $koneksi->query("DELETE FROM semen WHERE id = '$_GET[id]'");
    $hasil_query = mysqli_query($koneksi, $query);

    echo "<script>alert('Data berhasil diterima.');window.location='admin.php';</script>";
    ?>