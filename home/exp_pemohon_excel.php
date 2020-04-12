<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pemohonan</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pemohon.xls");
	?>

	<center>
		<h1>DAFTAR PEMOHON</h1>
	</center>

	<table border="1">
		<tr>
            <th>No</th>
            <th>Nama Pemohonan</th>
			<th>Tanggal Terima</th>
			<th>Permohonan</th>
            <th>Luasan</th>
            <th>Tahun/Alamat</th>
            <th>No Berkas</th>
            <th>DI 301</th>
            <th>DI 302</th>
            <th>Tanggal</th>
            <th>DI 305</th>
            <th>Biaya Ukur</th>
            <th>Petugas</th>
            <th>Kuasa</th>
            <th>Satus</th>
		</tr>
		<?php 
		// koneksi database
        include ("../config/database.php");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tbl_pemohon");
		$no = 1;
		while($r = mysqli_fetch_array($data)){
		?>
		<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $r['pemohon']; ?></td>
                <td><?php echo $r['tgl_terima']; ?></td>
                <td><?php echo $r['jenis_permohonan']; ?></td>
                <td><?php echo $r['luasan']; ?></td>
                <td><?php echo $r['tahun']."-".$r['kecamatan']."/".$r['desa']; ?></td>
				<td><?php echo $r['no_berkas']; ?></td>
                <td><?php echo $r['DI301']; ?></td>
                <td><?php echo $r['DI302']; ?></td>
                <td><?php echo $r['tgl_DI302']; ?></td>
                <td><?php echo $r['DI305']; ?></td>
                <td><?php echo $r['biaya_ukur']; ?></td>
                <td><?php echo $r['petugas']; ?></td>
                <td><?php echo $r['kuasa']; ?></td>
                <td><?php echo $r['status']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>