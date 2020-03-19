<?php 
// mengaktifkan session
$id = $_GET['id'];

// Koneksi 
		// menghubungkan dengan koneksi
		include ("../config/database.php");
		// SQL query untuk memeriksa apakah users terdapat di database?
		$query = mysqli_query($koneksi, "DELETE FROM pegawai WHERE id='$id'");
		
		
		if ($query) {
				echo "<script type='text/javascript'>alert('Data Register $id Sudah Terhapus!');document.location='./?page=user'</script>";
			} else {
				 echo "<script type='text/javascript'>alert('Maaf! Data Gagal Dihapus');document.location='./?page=user'</script>";
			}

?>