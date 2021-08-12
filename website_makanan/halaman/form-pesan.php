<?php
include 'php/function.php';
session_start();
if(!isset($_SESSION["login"])){
        header('Location: login.php');
} 

$result = mysqli_query($conn, "SELECT * FROM produk");
pesan($_POST);


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="../style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid container">
    <a class="navbar-brand" href="#"><b>Ren Bakery</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="logout.php">Logout!</a>
      </div>
    </div>
  </div>
</nav>
    <!-- End NavBar -->

    <!-- Form -->
    <div class="container mt-5">
            <form action="" method="post" enctype="multipart/form-data" class="border border-dark container">
                <div class="text-center">
                <img src="../img/logo.png" alt="" width="300px">
                <h1><b>Pesan Roti!</b></h1>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Menu Roti</label>
                <select class="form-select" aria-label="Default select example" name="menu">
                <option selected >Menu Roti!</option>
                <?php while($menu_db = mysqli_fetch_array($result) ) : ?>
                <option><?= $menu_db["nama_roti"]; ?></option>
                <?php endwhile; ?>
                </select>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama anda" autocomplete="off" autofocus="on" required>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat anda" autocomplete="off" autofocus="on" required>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">No. Hp</label>
                <input name="nomor" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor Hp anda" autocomplete="off" autofocus="on" required>
                </div>
                <button type="submit" name="send" class="btn btn-success mb-5 mt-5">Kirim!</button>
            </form>
        </div>
    <!-- End Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>