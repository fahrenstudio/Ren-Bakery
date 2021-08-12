<?php 
require 'php/function.php';
login($_POST);
global $error;
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
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
    <!-- End NavBar -->


    <!-- Form -->
    <?php if(isset($_POST["login"]) ) : ?>
        <?php if(isset($error) ) : ?>
            <div class="alert alert-danger" role="alert">
                Password salah atau Username salah!
            </div>
        <?php endif; ?>

    <?php endif; ?>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" class="form" action=""> 
            <label for="user-username" style="padding-top:13px">&nbsp;username</label>
                <input
                id="user-username"
                class="form-content"
                type="text"
                name="username"
                autofocus="on"
                autocomplete="off"
                required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                <input
                id="user-password"
                class="form-content"
                type="password"
                name="password"
                required />
                <div class="form-border"></div>
                
                <button id="submit-btn" type="submit" name="login">LOGIN!</button>
                <a href="register.php" id="signup">Belum punya akun? Daftar dulu yuk!</a>
            </form>
        </div>
     </div>

    <!-- End Form -->