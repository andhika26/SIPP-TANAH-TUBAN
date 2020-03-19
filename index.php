<?php
session_start(); // Start session nya

// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak

if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: home/index.php"); // Kita Redirect ke halaman welcome.php
} else {
	header("location: login/index.php?pesan=belum_login");
}

?>
