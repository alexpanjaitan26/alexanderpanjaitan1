<?php
include_once("koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM daftarmotor");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="Gabriola">
    <center>
        <h1>'<h1>
            <font color="purple" size="6px" face="Gabriola">
                <center>
                <body style="background-image:url(alex2.jpeg); background-size:cover; background-attachment">
<body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="objekwisata.php">Objek Wisata</a>
      <a class="nav-item nav-link" href="informasi penduduk.php">Informasi Penduduk</a>
      <a class="nav-item nav-link" href="penghasilanutama.php">Penghasilan Utama</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">NAMA PENDUDUK</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">TANGGAL LAHIR</th>
      <th scope="col">GOLONGAN DARAH</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($nonim=mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $nonim['nomormotor'] ?></td>
      <td><?php echo $nonim['namamotor'] ?></td>
      <td><?php echo $nonim['warnamotor'] ?></td>
      <td><?php echo $nonim['jenismotor'] ?></td>
      <td><?php echo $nonim['hargamotor'] ?></td>
      <td>
            <a href="edit.php?nomormotor=<?php echo $nonim['nomormotor']; ?>">EDIT</a>||
            <a href="hapus.php?nomormotor=<?php echo $nonim['nomormotor']; ?>">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a href="tambahdata.php" class="display-4" class="badge"> + TAMBAH DATA</a>
</body>
</html>