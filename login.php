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
        <h1> WELCOME TO WISATA BALIGE^^! <h1>
            <font color="purple" size="6px" face="Gabriola">
                <center>
<body style="background-image:url(alex.jpg); background-size:cover; background-attachment">
<body>
    <div class="container">
<!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="" method="post">
      <h2><center>LOGIN</center></h2>
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="text" id="loginName" class="form-control" />
        <label class="form-label" for="loginName" name="username">username</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label" for="loginPassword" name="password">Password</label>
      </div>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Login</button>
      <div class="text-center">
        <p>Not a member? <a href="regis.php">Register</a></p>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Pills content -->
</body>
</html>
<?php
if (isset($_POST['login'])) {
  include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
header("location:index.php?pesan=input");
}
?>
<style>
  body{
    background-image : url("pxfuel.jpg");
  }
</style>