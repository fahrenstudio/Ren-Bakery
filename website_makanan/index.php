<?php
session_start();
include 'halaman/php/function.php';
if ( pesan($_POST) > 1 ) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Ren Bakery</title>
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
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
    <?php if(!isset($_SESSION["login"]) ) : ?>
        <a class="nav-link" href="halaman/login.php">Login!</a>
    <?php endif; ?>
    <?php if(isset($_SESSION["login"]) ) : ?>
        <a class="nav-link" href="halaman/logout.php">Logout!</a>
    <?php endif; ?>
    <?php if(isset($_SESSION["admin"]) ) : ?>
        <a class="nav-link" href="halaman/admin.php">Halaman Admin!</a>
    <?php endif; ?>



    
      </div>
    </div>
  </div>
</nav>
    <!-- End NavBar -->

    <!-- Jumbotron -->
    <section class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4"><b>Ren</b> Bakery</h1>
            <p class="paraf">Ren Bakery <b>roti</b> berkualitas <b>tinggi</b> dan <b>bergizi</b></p>
        </div>
    </section>
    <!-- End Jumbotron -->

    <!-- Navs -->
    <ul class="navbar justify-content-center bg-dark navbar-dark shadow-lg">
        <li class="nav-item">
            <a class="nav-link active" href="index.php?page=Home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=Menu-Roti">Menu Roti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=Menu-Kue">Menu Kue</a>
        </li>
     </ul>
    <!-- End Navs -->

    <!-- Dynamic -->
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'Home':
                include 'halaman/home.php';
                break;
            case 'Menu-Roti':
                include 'halaman/menu-makanan.php';
                break;
            case  'Menu-Kue':
                include 'halaman/menu-kue.php';
                break;
            case   'pesanan':
                include 'halaman/pesanan.php';
                break;
            default:
                include 'halaman/404.php';
                break;
        }
    } else {
        include 'halaman/home.php';
    }
    ?>
    <!-- End Dynamic -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Aos -->
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
