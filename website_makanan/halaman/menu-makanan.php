<?php
include 'php/function.php';
$result = mysqli_query($conn, "SELECT * FROM produk");
?>


<div class="container">
<h1 class="mt-5 mb-5 text-center" data-aos="flip-up"><u>|MENU ROTI</u></h1>
<div class="row mt-5 justify-content-center">

<?php while($isdata = mysqli_fetch_array($result) ) : ?>
    <div class="col-md-4 mt-5">
        <div class="card">
            <img src="./img/<?= $isdata['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $isdata['nama_roti']; ?></h5>
                <p class="card-text"><?= $isdata['deskripsi']; ?></p>
                <a href="halaman/form-pesan.php" class="btn btn-primary">Buy!</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
</div>
</div>