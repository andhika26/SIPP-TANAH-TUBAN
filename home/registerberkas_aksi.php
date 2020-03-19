<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['pemohon'])) {
			echo "<script type='text/javascript'>alert('Maaf! Nama Pemohon dan Kuasa Belum Diisi');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$id2 = date('dmYHis');
		$terima = $_POST['tglterima'];
		$pemohon = $_POST['pemohon'];
		$permohonan = $_POST['permohonan'];
		$kecamatan = $_POST['kecamatan'];
		$desa = $_POST['desa'];
		$lausan = $_POST['luasan'];
		$kuasa = $_POST['kuasa'];
		$tahun = $_POST['tahun'];
		$noberkas = $_POST['noberkas'];
		$di301 = $_POST['di301'];
		$di302 = $_POST['di302'];
		$tgldi302 = $_POST['tgldi302'];
		$di305 = $_POST['di305'];
		$biaya = $_POST['biayaukur'];
		$petugas = $_POST['nama_pegawai'];
		$status = '1';
		$created = date('d-m-Y H:i:s');
     
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"INSERT INTO tbl_pemohon VALUES ('', '$id2', '$pemohon', '$terima', '$permohonan', '$kecamatan', '$desa', '$lausan', '$tahun', '$noberkas', '$di301', '$di302', '$tgldi302', '$di305', '$biaya', '$petugas', '$kuasa', '$status')");  

		$query = mysqli_query($koneksi,"INSERT INTO tbl_ukur VALUES ('', '$noberkas','$di302', '', '', '', '', '', '$petugas', '', '', '0','$created')");  
		
		$query = mysqli_query($koneksi,"INSERT INTO tbl_olahdata VALUES ('', '$di302','$noberkas', '$petugas', '', '', '', '', '', '', '','', '0', '$created')");  
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('Permohonan $pemohon Telah Teregister!');document.location='./?page=register'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>