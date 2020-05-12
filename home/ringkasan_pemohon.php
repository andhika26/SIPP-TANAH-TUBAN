      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ringkasan Pemohon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ringkasan Jumlah Pemohon</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
    <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No</th>
                <th>Permohonan</th>
                <th>Berkas Masuk</th>
                <th>Selesai</th>
                <th>Proses</th>
              </tr>
              </thead>
              <tbody>

              <?php
									
	date_default_timezone_set("Asia/jakarta");
	$tahun = date("Y");
	$now = date("d-m-Y");
	  // menghubungkan dengan koneksi
		include ("../config/database.php");
	  $query1 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Konversi' AND tbl_cekberkas.jenis_berkas='Konversi'") or die (mysqli_error());
	  $hitung1 = mysqli_fetch_array($query1);
    
    $query2 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Peta Bidang' AND tbl_cekberkas.jenis_berkas='Peta Bidang'") or die (mysqli_error());
    $hitung2 = mysqli_fetch_array($query2);
    
    $query3 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Pemecahan' AND tbl_cekberkas.jenis_berkas='Pemecahan'") or die (mysqli_error());
    $hitung3 = mysqli_fetch_array($query3);
    
    $query4 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Penggabungan' AND tbl_cekberkas.jenis_berkas='Penggabungan'") or die (mysqli_error());
    $hitung4 = mysqli_fetch_array($query4);
    
    $query5 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Pemisahan' AND tbl_cekberkas.jenis_berkas='Pemisahan'") or die (mysqli_error());
    $hitung5 = mysqli_fetch_array($query5);
    
    $query6 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Pengembalian Batas' AND tbl_cekberkas.jenis_berkas='Pengembalian Batas'") or die (mysqli_error());
    $hitung6 = mysqli_fetch_array($query6);
    
    $query7 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Wakaf' AND tbl_cekberkas.jenis_berkas='Wakaf'") or die (mysqli_error());
    $hitung7 = mysqli_fetch_array($query7);
    
    $query8 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='SK 1' AND tbl_cekberkas.jenis_berkas='SK 1'") or die (mysqli_error());
    $hitung8 = mysqli_fetch_array($query8);
    
    $query9 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Pendaftaran Kedua' AND tbl_cekberkas.jenis_berkas='Pendaftaran Kedua'") or die (mysqli_error());
    $hitung9 = mysqli_fetch_array($query9);
    
    $query10 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='Pendaftaran Kedua' AND tbl_cekberkas.jenis_berkas='Pendaftaran Kedua'") or die (mysqli_error());
    $hitung10 = mysqli_fetch_array($query10);
    
    $query11 = mysqli_query($koneksi, "SELECT COUNT(tbl_pemohon.pemohon), COUNT(tbl_cekberkas.id) FROM tbl_pemohon, tbl_cekberkas WHERE tbl_pemohon.jenis_permohonan='SK 2' AND tbl_cekberkas.jenis_berkas='SK 2'") or die (mysqli_error());
	  $hitung11 = mysqli_fetch_array($query11);
	      
	  ?>
              <tr>
                <td>1</td>
                <td>KONVERSI</td>
                <td><b><?php echo $hitung1[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung1[1] ?></b> Berkas</td>
                <td><b><?php if($hitung1[1]-$hitung1[0]>0){ echo $hitung1[1]-$hitung1[0]; } else { echo "0"; } ?></b> Berkas</td>
              </tr>

              <tr>
                <td>2</td>
                <td>PETA BIDANG</td>
                <td><b><?php echo $hitung2[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung2[1] ?></b> Berkas</td>
                <td><b><?php if($hitung2[1]-$hitung2[0]>0){ echo $hitung2[1]-$hitung2[0]; } else { echo "0"; } ?></b> Berkas</td>
              </tr>
              <tr>
                <td>3</td>
                <td>PEMECAHAN</td>
                <td><b><?php echo $hitung3[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung3[1] ?></b> Berkas</td>
                <td><b><?php if($hitung3[1]-$hitung3[0]>0){ echo $hitung3[1]-$hitung3[0]; } else { echo "0"; } ?></b> Berkas</td>
                </tr>
              <tr>
                <td>4</td>
                <td>PENGGABUNGAN</td>
                <td><b><?php echo $hitung4[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung4[1] ?></b> Berkas</td>
                <td><b><?php if($hitung4[1]-$hitung4[0]>0){ echo $hitung4[1]-$hitung4[0]; } else { echo "0"; } ?></b> Berkas</td>
               </tr>
              <tr>
                <td>5</td>
                <td>PEMISAHAN</td>
                <td><b><?php echo $hitung5[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung5[1] ?></b> Berkas</td>
                <td><b><?php if($hitung5[1]-$hitung5[0]>0){ echo $hitung5[1]-$hitung5[0]; } else { echo "0"; } ?></b> Berkas</td>
                 </tr>
              <tr>
                <td>6</td>
                <td>PENGEMBALIAN BATAS</td>
                <td><b><?php echo $hitung6[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung6[1] ?></b> Berkas</td>
                <td><b><?php if($hitung6[1]-$hitung6[0]>0){ echo $hitung6[1]-$hitung6[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              <tr>
                <td>7</td>
                <td>WAKAF</td>
                <td><b><?php echo $hitung7[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung7[1] ?></b> Berkas</td>
                <td><b><?php if($hitung7[1]-$hitung7[0]>0){ echo $hitung7[1]-$hitung7[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              <tr>
                <td>8</td>
                <td>SK</td>
                <td><b><?php echo $hitung8[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung8[1] ?></b> Berkas</td>
                <td><b><?php if($hitung8[1]-$hitung8[0]>0){ echo $hitung8[1]-$hitung8[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              <tr>
                <td>9</td>
                <td>PENDAFTARAN KEDUA</td>
                <td><b><?php echo $hitung9[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung9[1] ?></b> Berkas</td>
                <td><b><?php if($hitung9[1]-$hitung9[0]>0){ echo $hitung9[1]-$hitung9[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              <tr>
                <td>10</td>
                <td>PENGGANTIAN SERTIPIKAT</td>
                <td><b><?php echo $hitung10[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung10[1] ?></b> Berkas</td>
                <td><b><?php if($hitung10[1]-$hitung10[0]>0){ echo $hitung10[1]-$hitung10[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              <tr>
                <td>11</td>
                <td>BMN</td>
                <td><b><?php echo $hitung11[0] ?></b> Berkas</td>
                <td><b><?php echo $hitung11[1] ?></b> Berkas</td>
                <td><b><?php if($hitung11[1]-$hitung11[0]>0){ echo $hitung11[1]-$hitung11[0]; } else { echo "0"; } ?></b> Berkas</td>
                
              </tr>
              </tbody>
            </table>
          </div>


    </section>
    <!-- /.content -->
  </div>