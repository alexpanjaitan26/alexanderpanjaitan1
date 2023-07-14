<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALEXANDER PANJAITAN</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="Gabriola">
    <center>
        <h1>ALEXANDER PANJAITAN<h1>
            <font color="purple" size="6px" face="Gabriola">
                <center>
                <body style="background-image:url(alex2.jpeg); background-size:cover; background-attachment">
<body>
<!-- Pills content -->
<div class="container">
<div class="tab-content">
    <form>
        <h2><center>Register</center></h2>
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerName" class="form-control" />
        <label class="form-label" for="registerName" name="nomor">Nomor</label>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerUsername" class="form-control" />
        <label class="form-label" for="registerUsername" name="nama">Nama</label>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="registerEmail" class="form-control" />
        <label class="form-label" for="registerEmail" name="username">Username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="registerPassword" class="form-control" />
        <label class="form-label" for="registerPassword" name="password" >Password</label>
      </div>

      <!-- Repeat Password input -->
      <button type="submit" class="btn btn-primary btn-block mb-3" name="regis">Register</button>
      <a href="login.php" class="btn btn-secondary btn-block mb-3">Login</a>
    </form>
  </div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['regis'])){
    include "koneksi.php";
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['passowrd'];

    $query = mysqli_query($conn,"INSERT INTO login SET nomor='$nomor',nama='$nama',username='$username',password ='$password'"); 
    header("location:login.php?pesan=input");
}
?>