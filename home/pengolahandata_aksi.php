<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['seribon'])) {
			echo "<script type='text/javascript'>alert('Maaf! NO.SERI BON Belum Terisi!');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$update_at		    = date('d-m-Y H:i:s');
		$no302 			    = $_POST['DI302'];
		$petugaslog 		= $_POST['nama_pegawai'];
		$petugasbon 		= $_POST['petugasbon'];
		$kepetugasbon 	    = $_POST['kebon'];
		$daripetugasbon		= $_POST['daribon'];
		$seribon 	        = $_POST['seribon'];
		$petugasgambar 	    = $_POST['petugasgambar'];
		$kepetugasgambar 	= $_POST['kepetugasgambar'];
        $daripetugasgambar  = $_POST['daripetugasgambar'];
        $daripetugasukur    = $_POST['daripetugasukur'];
        $kepemetaan         = $_POST['kepemetaan'];
        $daripemetaan       = $_POST['daripemetaan'];
		$status = '1';
     
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"UPDATE tbl_olahdata petugas='$petugaslog', ke_bon='$kepetugasbon', dari_bon='$daripetugasbon', seri_bon='$seribon', petugas_gambar='$petugasgambar', ke_ptgsgambar='$kepetugasgambar', dr_ptgsgambar='$daripetugasgambar', dr_petugasukur='$daripetugasukur', ke_pemetaan='$kepemetaan', dr_pemetaan='$daripemetaan', status='$status', updated='$update_at' SET WHERE DI302='$no302' ");  

		//$query = mysqli_query($koneksi,"INSERT INTO tbl_ukur VALUES ('', '$noberkas','$di302', '', '', '', '', '', '', '', '', '0')");  
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('STATUS : Berkas No.302 = $no302 Telah Teregister Ke Pengolahan Data!');document.location='./?page=olahdata'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>