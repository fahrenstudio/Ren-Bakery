<?php
 $conn = mysqli_connect("localhost", "root", "", "dbren");

if(function_exists("insert_produk") != true) {
    function insert_produk($data, $file){
        if(isset($_POST["insert"])){
            // Connect Database
            $conn = mysqli_connect("localhost", "root", "", "dbren");

            // Save File
            $namafile = $file["gambar"]["name"];
            $ukuranfile = $file["gambar"]["size"];
            $error = $file["gambar"]["error"];
            $tmp = $file["gambar"]["tmp_name"];

            if($error === 4){
                echo "<script> alert('gambar belum di masukan');";
                exit;
            }
            $ekstensivalid = ['jpg', 'jpeg', 'png'];
            $ekstensi = explode('.', $namafile);
            $ekstensi = strtolower(end($ekstensi));

            if(!in_array($ekstensi, $ekstensivalid)){
                echo "<script> alert('yang anda inputkan bukanlah file');";
                exit;
            }
            $gambar = $namafile;
            move_uploaded_file($tmp, '../img/' . $namafile);




            // Insert Data
            $gambar = $namafile;
            $judul = htmlspecialchars($data["judul"]);
            $deskripsi = htmlspecialchars($data["deskripsi"]);
            $link = htmlspecialchars($data["link"]);
            

            $query = "INSERT INTO produk VALUES ('', '$gambar', '$judul', '$deskripsi', '$link')";
            mysqli_query($conn, $query);

        $error = true;

        return mysqli_affected_rows($conn);
            
        } 
        
    }
}

if(function_exists("insert_produk2") != true) {
    function insert_produk2($data, $file){
        if(isset($_POST["insert"])){
            // Connect Database
            $conn = mysqli_connect("localhost", "root", "", "dbren");

            // Save File
            $namafile = $file["gambar"]["name"];
            $ukuranfile = $file["gambar"]["size"];
            $error = $file["gambar"]["error"];
            $tmp = $file["gambar"]["tmp_name"];

            if($error === 4){
                echo "<script> alert('gambar belum di masukan');";
                exit;
            }
            $ekstensivalid = ['jpg', 'jpeg', 'png'];
            $ekstensi = explode('.', $namafile);
            $ekstensi = strtolower(end($ekstensi));

            if(!in_array($ekstensi, $ekstensivalid)){
                echo "<script> alert('yang anda inputkan bukanlah file');";
                exit;
            }
            $gambar = $namafile;
            move_uploaded_file($tmp, '../img/' . $namafile);




            // Insert Data
            $gambar = $namafile;
            $judul = htmlspecialchars($data["judul"]);
            $deskripsi = htmlspecialchars($data["deskripsi"]);
            $link = htmlspecialchars($data["link"]);
            

            $query = "INSERT INTO produk2 VALUES ('', '$gambar', '$judul', '$deskripsi', '$link')";
            mysqli_query($conn, $query);

        $error = true;

        return mysqli_affected_rows($conn);
            
        } else {
            $error = false;
        }
    
    }
}



if(function_exists("login") != true){


    function login($data){
        session_start();

        if (isset($_SESSION["login"])) {
            header("Location: ../index.php");
        }
        $conn = mysqli_connect("localhost", "root", "", "dbren");
        if(isset($_POST["login"])){
            $username = $data["username"];
            $password = $data["password"];

            $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
            if(mysqli_num_rows($result)){
                $row = mysqli_fetch_assoc($result);
                if(password_verify($password, $row["password"])){
                    $_SESSION["login"] = true;
                    header("Location: ../index.php");
                    exit;
                }

            } elseif($username == "admin") {
                if($password == "admin"){
                    session_start();
                    $_SESSION["admin"] = true;
                    header("Location: ./admin.php");
                    exit;
                }
            } else {
            $error = true;
            return $error;
            }
        }

    }
}

if(function_exists("pesan") != true){


    function pesan($data){
        global $conn;
            if(isset($data["send"])){
                $menu = htmlspecialchars($data["menu"]);
                $nama = htmlspecialchars($data["nama"]);
                $alamat = htmlspecialchars($data["alamat"]);
                $no = htmlspecialchars($data["nomor"]);

                mysqli_query($conn, "INSERT INTO pesan VALUES ('','$menu', '$nama', '$alamat', '$no')");
                header("Location: ./confirmed.php");
                return mysqli_affected_rows($conn);

                exit;
            }
    }
}