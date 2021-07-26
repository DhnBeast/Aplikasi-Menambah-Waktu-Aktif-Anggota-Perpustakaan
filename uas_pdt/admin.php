<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="tampilan2.css" type="text/css">
</head>
<body>

<div class="topnav">
 
  </div>
	<center>
        <h2>Data Perpanjang Sementara</h2>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
		  <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Pekerjaan</th>
          <th>Jenis Anggota</th>
          <th>Perpanjang Berapa Lama</th>
          <th>Nama Ibu Kandung</th>
          
          <th></th>
		  <th></th>
        </tr>
      </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM semen ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
	   
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['alamat'];?> </td>
          <td><?php echo $row['kelamin']; ?></td>
          <td><?php echo $row['pekerjaan']; ?></td>
		  <td><?php echo $row['jenis']; ?></td>
		  <td><?php echo $row['perpanjang'];?></td>
      	<td><?php echo $row['ibu'];?></td>

      <td>
          <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data Vaksin Anda?')">Hapus</a> 
          </td>
      <td>
          <a href="terima.php?id=<?php echo $row['id']; ?>">Terima</a> 
          </td>
      </tr>
      <?php
        $no++;
      }
      ?>
	  </table>


	  </div>
	<center>
        <h2>Data Perpanjang Tersimpan</h2>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
		  <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Pekerjaan</th>
          <th>Jenis Anggota</th>
          <th>Perpanjang Berapa Lama</th>
          <th>Nama Ibu Kandung</th>
          
		  
        </tr>
      </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM perma ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
	   
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['alamat'];?> </td>
          <td><?php echo $row['kelamin']; ?></td>
          <td><?php echo $row['pekerjaan']; ?></td>
		  <td><?php echo $row['jenis']; ?></td>
		  <td><?php echo $row['perpanjang'];?></td>
      	<td><?php echo $row['ibu'];?></td>
		  
      </tr>
      <?php
        $no++;
      }
      ?>
	  </table>
	  

</body>
</html>