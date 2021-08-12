<?php 
require 'php/function2.php';

if(isset($_POST["regis"])){
 	if(registrasi($_POST) > 0){
    header("Location: login.php");
 	} else {
 		$error = true;
 	}
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
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
    <!-- End NavBar -->


    <!-- Form -->
    <?php if (isset($_POST["regis"]) ) : ?>    
            <?php if (isset($error) ) : ?>
                <div class="alert alert-danger" role="alert">
                Password tidak sama atau Username sudah ada!
                </div>
            <?php endif; ?>
        <?php endif; ?>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>REGISTER</h2>
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

                <label for="user-password" style="padding-top:13px">&nbsp;Password Verify</label>
                <input
                id="user-password"
                class="form-content"
                type="password"
                name="password2"
                autofocus="on"
                autocomplete="off"
                required />
                <div class="form-border"></div>
                
                
                <button id="submit-btn" type="submit" name="regis">DAFTAR!</button>

            </form>
        </div>
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