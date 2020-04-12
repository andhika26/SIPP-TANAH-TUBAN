<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['DI307'])) {
			echo "<script type='text/javascript'>alert('Maaf! Nomor DI3017 Belum Terisi!');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$update_at		= date('d-m-Y H:i:s');
		$no302 			= $_POST['DI302'];
		$no307 			= $_POST['DI307'];
		$seriblangko	= $_POST['seriblangko'];
		$petugas_gambar = $_POST['petugas_gambar'];
		$status 		= '1';
     
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"UPDATE tbl_cekberkas SET DI307='$no307', seriblangko='$seriblangko', petugas='$petugas_gambar', updated='$update_at', status='$status'  WHERE DI302='$no302' ");  

		//$query = mysqli_query($koneksi,"INSERT INTO tbl_ukur VALUES ('', '$noberkas','$di302', '', '', '', '', '', '', '', '', '0')");  
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('STATUS : Berkas No.302 = $no302 Telah Terdata ke Blangko Nomor Seri : $seriblangko');document.location='./?page=olahgambar'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>