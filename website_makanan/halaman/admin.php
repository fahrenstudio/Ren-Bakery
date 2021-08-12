<?php
include 'php/function.php';
session_start();
if(!isset($_SESSION["admin"])){
  Header("Location: login.php");
}

$result = mysqli_query($conn, "SELECT * FROM akun");

$result2 = mysqli_query($conn, "SELECT * FROM pesan");

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

    <!-- judul h1 -->
    <div class="text-center mt-5 mb-5 container">
      <h1><b>WELCOME BACK ADMIN!</b></h1>
      <hr>
    </div>
    <!-- End -->

    <!-- Tabel User -->
    <div class="mt-5 mb-5 container">
    <h1 class="text-left"><b>|USER</b></h1>
    <hr>
    <table cellspacing="0" class="container mt-5">
        <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><?= $row["username"];?></td>
                    <td><?= $row["password"];?></td>
                </tr>
        </tbody>
    	<?php endwhile; ?>
    </table>
    </div>
    <!-- End Tabel -->

    <!-- Tabel Penjualan -->
    <div class="mt-5 mb-5 container">
    <h1 class="text-left"><b>|PENJUALAN</b></h1>
    <hr>
    <table cellspacing="0" class="container mt-5">
        <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($result2)) : ?>
                <tr>
                    <td><?= $row["menu"];?></td>
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["alamat"];?></td>
                    <td><?= $row["no"];?></td>
                </tr>
        </tbody>
    	<?php endwhile; ?>
    </table>
    </div>
    <!-- End Tabel -->

    <!-- Card Insert -->
    <div class="container">
        <h1 class="text-left"><b>|INPUT PENJUALAN</b></h1>
        <hr>
        <div class="row">
            
            <div class="col-md mt-5">

            <div class="card mb-3" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="../img/admin1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Kue</h5>
                        <p class="card-text">Masukan daftar kue dengan sesuai dan tepat</p>
                        <a href="insert2.php"><button type="button" class="btn btn-primary">Go!</button></a>
                    </div>
                    </div>
                </div>
            </div>

            </div>

             <div class="col-md mt-5">

            <div class="card mb-3" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="../img/admin2.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Roti</h5>
                        <p class="card-text">Masukan daftar roti dengan sesuai dan tepat</p>
                        <a href="insert1.php"><button type="button" class="btn btn-primary">Go!</button></a>
                    </div>
                    </div>
                </div>
            </div>

            </div>

        </div>
    </div>
    <!-- End Cards -->

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