<?php
 $conn = mysqli_connect("localhost", "root", "", "dbren");

 function registrasi($data) {
    global $conn;
	$username = strtolower(stripcslashes(($data["username"])));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	$result = mysqli_query($conn, "SELECT username FROM akun  WHERE username = '$username'");
	
    if(mysqli_fetch_assoc($result)){
		return false;
	}

	if($password !== $password2){
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);
	$query = "INSERT INTO akun VALUES ('', '$username', '$password')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}