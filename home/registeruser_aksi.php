<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['username'])) {
			echo "<script type='text/javascript'>alert('Maaf! Username Belum Diisi');window.history.go(-1);</script>";
	}
	else
	{

        // menghubungkan dengan koneksi
		include ("../config/database.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
		$namauser = $_POST['nama'];
		$nipk = $_POST['nip'];
		$jabatan = $_POST['jabatan'];
		$email = $_POST['email'];
		$user = $_POST['username'];
		$sandi = md5($_POST['sandi']);
		$buat = date('d/m/Y');
		$status = '1';
		
		
    
        // SQL query untuk memeriksa apakah users terdapat di database?
        $query = mysqli_query($koneksi,"INSERT INTO pegawai VALUES ('','$namauser','$nipk','$jabatan','$email','$user','$sandi','$status','','$buat')");      
		
		
		if ($query > 0 ) {
				
		echo "<script type='text/javascript'>alert('Pendaftaran $nama Telah Teregister!');document.location='./?page=user'</script>";
			} else {
		echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
            }
                
	}
}
?>