<?php 
include 'php/function.php';

$result = mysqli_query($conn, "SELECT * FROM produk2");


?>
<div class="container">
<h1 class="mt-5 mb-5 text-center" data-aos="flip-up"><u>|MENU KUE</u></h1>
<div class="row mt-5 justify-content-center">
    <?php while( $row = mysqli_fetch_array($result) ) :?>
    <div class="col-4">
            <div class="card">
                <img src="./img/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["nama_kue"]; ?></h5>
                    <p class="card-text"><?= $row["deskripsi"]; ?></p>
                    <a href="halaman/form-pesan2.php" class="btn btn-primary">Buy!</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
</div>