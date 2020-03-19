<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['tgltunjuk'])) {
			echo "<script type='text/javascript'>alert('Maaf! Tanggal Tunjuk Belum Terisi!');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$update_at			= date('d-m-Y H:i:s');
		$no302 			= $_POST['302'];
		$tgltunjuk 		= $_POST['tgltunjuk'];
		$tglketik 		= $_POST['tglketik'];
		$selesaiketik 	= $_POST['selesaiketik'];
		$spkbaru 		= $_POST['spkbaru'];
		$spkselesai 	= $_POST['spkselesai'];
		$nama_pegawai 	= $_POST['nama_pegawai'];
		$masukptgsukur 	= $_POST['masukptgsukur'];
		$keluarptgsukur = $_POST['keluarptgsukur'];
		$status = '1';
     
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"UPDATE tbl_ukur SET tjk_ukur='$tgltunjuk', kektk_ukur='$tglketik', drktk_ukur='$selesaiketik', kettd_ukur='$spkbaru', drttd_ukur='$spkselesai', petugas='$nama_pegawai', ke_ukur='$masukptgsukur', dari_ukur='$keluarptgsukur' , status='$status', updated='$update_at' WHERE DI302='$no302' ");  

		//$query = mysqli_query($koneksi,"INSERT INTO tbl_ukur VALUES ('', '$noberkas','$di302', '', '', '', '', '', '', '', '', '0')");  
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('STATUS : Berkas No.302 = $no302 Telah Teregister Ke Petugas Ukur!');document.location='./?page=ukur'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>