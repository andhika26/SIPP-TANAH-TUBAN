<?php 
// mengaktifkan session
$id = $_GET['id'];

// Koneksi 
		// menghubungkan dengan koneksi
		include ("../config/database.php");
		// SQL query untuk memeriksa apakah users terdapat di database?
		$query = mysqli_query($koneksi, "DELETE FROM tbl_pemohon WHERE DI302='$id'");
		$query = mysqli_query($koneksi, "DELETE FROM tbl_ukur WHERE DI302='$id'");
		$query = mysqli_query($koneksi, "DELETE FROM tbl_olahdata WHERE DI302='$id'");
		
		if ($query) {
				echo "<script type='text/javascript'>alert('Data Register $id Sudah Terhapus!');document.location='./?page=register'</script>";
			} else {
				 echo "<script type='text/javascript'>alert('Maaf! Data Gagal Dihapus');document.location='./?page=register'</script>";
			}

?>