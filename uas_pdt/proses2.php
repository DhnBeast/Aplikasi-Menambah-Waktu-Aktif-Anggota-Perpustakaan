<?php
include 'koneksi.php';

  $nama            = $_POST['nama'];
  $alamat       = $_POST['alamat'];
  $kelamin       = $_POST['kelamin'];
  $pekerjaan           = $_POST['pekerjaan'];
  $jenis            = $_POST['jenis'];
  $perpanjang          = $_POST['perpanjang'];
  $ibu     = $_POST['ibu'];
  $tempat_vaksin  = $_POST['tempat_vaksin'];
  $waktu_vaksin   = $_POST['waktu_vaksin'];
  
   $query = "INSERT INTO semen (nama, alamat, kelamin, pekerjaan, jenis, perpanjang, ibu) VALUES ('$nama', '$alamat', '$kelamin', '$pekerjaan', '$jenis', '$perpanjang', '$ibu')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data Berhasil Dikirim.');window.location='index.php';</script>";
                  }
                  ?>