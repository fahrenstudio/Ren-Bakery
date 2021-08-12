<?php
include 'php/function.php';
session_start();
if(!isset($_SESSION["admin"])){
  Header("Location: login.php");
  exit;
}
if (insert_produk2($_POST, $_FILES) > 1){
    $error = true;
} else {
    $error = false;
}

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

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
    <?php if (isset($_POST["insert"]) ) : ?>    
            <?php if (isset($error) ) : ?>
                <div class="alert alert-info" role="alert">
                 Data sudah masuk!
                </div>
            <?php endif; ?>
    <?php endif; ?>
        <div class="container mt-5">
            <form action="" method="post" enctype="multipart/form-data" class="border border-dark container">
                <div class="text-center">
                <img src="../img/logo.png" alt="" width="300px">
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Judul Kue</label>
                <input name="judul" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Kue" autocomplete="off" autofocus="on" required>
                </div>
                <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Link</label>
                <input name="link" type="text" class="form-control" id="formGroupExampleInput" placeholder="Link (tidak wajib)" autocomplete="off" autofocus="on" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" autocomplete="off" autofocus="on" required></textarea>
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar">
                </div>
                <button type="submit" name="insert" class="btn btn-success mb-5 mt-5">Kirim!</button>
            </form>
        </div>
    <!-- End Form -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>