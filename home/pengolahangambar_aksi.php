<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['tgl_setor'])) {
			echo "<script type='text/javascript'>alert('Maaf! NO.SERI BON Belum Terisi!');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$update_at	= date('d-m-Y H:i:s');
		$no302 		= $_POST['DI302'];
		$setor_ke	= $_POST['setor_ke'];
		$tgl_setor  = $_POST['tgl_setor'];
		$status 	= '1';
     
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"UPDATE tbl_gambar SET setor_ke='$setor_ke', tgl_setor='$tgl_setor', updated='$update_at', status='$status'  WHERE DI302='$no302' ");  

		//$query = mysqli_query($koneksi,"INSERT INTO tbl_ukur VALUES ('', '$noberkas','$di302', '', '', '', '', '', '', '', '', '0')");  
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('STATUS : Berkas No.302 = $no302 Telah disetor ke $setor_ke');document.location='./?page=olahgambar'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>