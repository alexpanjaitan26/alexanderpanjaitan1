<?php
include_once("koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="pasput.jpeg" alt="porsea" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>Lokasi Pantai Pasir Putih Parparean ini berada di Desa Parparean II, Kecamatan Porsea, Kabupaten Toba Samosir atau Tobasa, Sumatera Utara.

Jika Anda berangkat dari pusat Kota Medan, maka perjalanan memerlukan waktu sekitar 4-5 jam.

Saat sudah tiba di Daerah Porsea, ambil jalur menuju Rumah Sakit Umum Daerah Porsea supaya mudah menemukan lokasi wisata ini.

Setelah sampai di RSUD, silahkan ambil arah Barat. Akses jalanan menuju pantai memang tidak beraspal, tetapi masih tetap aman.
</h2>

      <div class="item">
        <img src="bulbul.jpeg" alt="Chicago" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>Pantai Bulbul merupakan salah satu destinasi wisata alam di Balige, Kabupaten Toba yang sangat menarik untuk dikunjungi oleh wisatawan baik dari Sumatera Utara maupun wisatawan dari luar provinsi. Keindahan alam yang disuguhkan mampu menghipnotis dan membuat takjub serta menciptakan rasa kepuasan tersendiri bagi siapapun yang berkunjung di wisata ini.
</h2>
    
      <div class="item">
        <img src="parparean2.jpeg" alt="New York" style="width:65%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>
      Pantai Pasifik Porsea merupakan sebuah dataran berpasir putih yang menghadap langsung ke Danau Toba. Dari tempat ini bisa terlihat hamparan luas perairan Danau Toba yang berwarna kebiruan. Permukaan airnya yang berombak akibat tiupan angin menghadirkan suasana seperti di pinggir laut, padahal berada di tepi danau.

Pantai Pasifik Porsea yang memiliki pemandangan dan keunikan tersendiri.
Pantai ini berada di Kecamatan Porsea, Kabupaten Toba Samosir, Sumatera Utara ini memiliki pasir cantik berwarna putih dengan tekstur agak kasar yang dapat memanjakan mata.
</h2>
    </div>
    <div class="item">
        <img src="pakkodianbalige.jpeg" alt="New York" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h2>
      Pantai Pakkodian berada persis di pinggir Danau Toba sehingga wisatawan dapat menikmati teduhnya danau dan pemandangan yang asri.
</h2>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <tbody>
  <?php
    while($nonim=mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $nonim['id_transaksi'] ?></td>  
      <td><?php echo $nonim['nomor_motor'] ?></td>
      <td><?php echo $nonim['nama_motor'] ?></td>
      <td><?php echo $nonim['harga_motor'] ?></td>
      <td><?php echo $nonim['bayar_motor'] ?></td>
      <td>
            <a href="hapustransaksi.php?id_transaksi=<?php echo $nonim['id_transaksi']; ?>" class="btn btn-danger" >HAPUS</a>
      </td>
    </tr>
        
    <?php
    }
    ?>
    
  </tbody>
</table>
</body>
</html>