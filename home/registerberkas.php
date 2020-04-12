
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Berkas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register Berkas </li>
              <a href=""> <li class="breadcrumb-item active"> / Laporan Excel</li></a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
   
<!---- data permohonan ----------->
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Register Berkas Masuk Seksi IP</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form method="post" class="form-horizontal" action="registerberkas_aksi.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
			
                <div class="form-group">
				<label>Tanggal Terima</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" name="tglterima">
                  </div>
                </div>
                <!-- /.form-group -->
				
                <div class="form-group">
				<label>Nama Pemohon</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="pemohon" placeholder="Nama Pemohon">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
                  <label>Jenis Permohonan</label>
				  
                  <select class="form-control select2" style="width: 100%;" name="permohonan">
                    <option value="Konversi">1.KONVERSI</option>
                    <option value="Peta Bidang">2.PETA BIDANG</option>
                    <option value="Pemecahan">3.PEMECAHAN</option>
                    <option value="Penggabungan">4.PENGGABUNGAN</option>
                    <option value="Pemisahan">5.PEMISAHAN</option>
					<option value="Pengembalian Batas">6.PENGEMBALIAN BATAS</option>
					<option value="Wakaf">7.WAKAF</option>
					<option value="SK 1">8.SK</option>
					<option value="Pendaftaran Kedua">9.PENDAFTARAN KEDUA</option>
					<option value="Penggantian Sertifikat">10.PENGGANTIAN SERTIFIKAT</option>
					<option value="SK 2">11.SK</option>
                  </select>
                </div>
				
               
                <div class="form-group">
                <label>Alamat Pemohon</label>       
                <div class="col-sm-3">
                                            <!--provinsi-->
                                            <select id="provinsi" class="form-control" name="provinsi">
                                                <option value="">Please Select</option>
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT * FROM provinsi ORDER BY provinsi");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option value="<?php echo $row['id_provinsi']; ?>">
                                                        <?php echo $row['provinsi']; ?>
                                                    </option>

                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                            <!--kota-->
                                            <select id="kota" class="form-control" name="kota">
                                                <option value="">Please Select</option>
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT * FROM kota INNER JOIN provinsi ON kota.id_provinsi_fk = provinsi.id_provinsi ORDER BY nama_kota");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option id="kota" class="<?php echo $row['id_provinsi']; ?>" value="<?php echo $row['id_kota']; ?>">
                                                        <?php echo $row['nama_kota']; ?>
                                                    </option>

                                                <?php } ?>
                                            </select>
                                       </div>
                                      
                                            <!--kecamatan-->
                                            <select id="kecamatan" class="form-control" name="kecamatan">
                                                <option value="">Please Select</option>
                                                <?php
                                                    $query = mysqli_query($koneksi, "SELECT * FROM kecamatan INNER JOIN kota ON kecamatan.id_kota_fk = kota.id_kota ORDER BY nama_kecamatan");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option id="kecamatan" class="<?php echo $row['id_kota']; ?>" value="<?php echo $row['id_kecamatan']; ?>">
                                                        <?php echo $row['nama_kecamatan']; ?>
                                                    </option>

                                                <?php } ?>
                                            </select>
                                       
                                    </div>                         <!--provinsi-->
                               
                
				
				<div class="form-group">
                  <label>Luas Permohonan M2</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="luasan" placeholder="Luasan">
                  </div>
                </div>
				
				<div class="form-group">
                  <label>Kuasa</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="kuasa" placeholder="Kuasa Pemohon">
                  </div>
                </div>
				
				<div class="form-group">
                  <label>Tahun</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="tahun" required value="<?php echo date('Y'); ?>">
                  </div>
                </div>
				
			
				
              </div>
              <!-- /.col -->
              <div class="col-md-6">
			  <div class="form-group">
                  <label>No.Berkas</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="noberkas">
                  </div>
                </div>
				
                <div class="form-group">
                  <label>No. DI 301</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="di301">
                  </div>
                </div>
                <!-- /.form-group -->
                 <div class="form-group">
                  <label>No. DI 302</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="di302">
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Tanggal DI 302</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" name="tgldi302">
                  </div>
                </div>
				<div class="form-group">
                  <label>No. DI 305</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="di305">
                  </div>
                </div>
                <!-- /.form-group -->
				<div class="form-group">
                  <label>Biaya Ukur Rp.</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-archive"></i></span>
                    </div>
                    <input type="text" class="form-control" name="biayaukur" placeholder="Biaya Ukur (Tanpa Titik)">
                  </div>
                </div>
				
				<div class="form-group">
                  <label>Petugas</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $nama; ?>" readonly="on">
                  </div>
                </div>
				
				
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" value="Simpan Berkas">
                  </div>
                </div>
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="reset" class="btn btn-block btn-danger btn-lg" value="Batalkan">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

           </form>
            
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          
        </div>
        
		
		
		<!-- data list permohonan -->
		
		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Daftar Berkas Seksi SPP</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  
            
             
			 <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Tgl Terima</th>
                <th>Pemohon</th>
                <th>No.302</th>
                <th>Tgl.302</th>
                <th>Lokasi</th>
				<th>No.Berkas</th>
				<th>Permohonan</th>
				<th>Kuasa</th>
				<th>Aksi</th>
              </tr>
              </thead>
              <tbody>
			  	<?php
									
	date_default_timezone_set("Asia/jakarta");
	$tahun = date("Y");
	$now = date("d-m-Y");
	  // menghubungkan dengan koneksi
		include ("../config/database.php");
	  $query = mysqli_query($koneksi, "SELECT * FROM tbl_pemohon WHERE status='1' ORDER BY id DESC") or die (mysqli_error());
	  if(mysqli_num_rows($query) == 0){
	  echo "<b>Tidak ada data yang tersedia</b>";
	  }else{
	  while($r = mysqli_fetch_array($query)):  
	      
	  ?>
              <tr>
                <td><?php echo $r['tgl_terima']; ?></td>
                <td><?php echo $r['pemohon']; ?></td>
                <td><?php echo $r['DI302']; ?></td>
                <td><?php echo $r['tgl_DI302']; ?></td>
                <td><?php echo $r['desa']."-".$r['kecamatan']; ?></td>
				 <td><?php echo $r['no_berkas']; ?></td>
                <td><?php echo $r['jenis_permohonan']; ?></td>
                <td><?php echo $r['kuasa']; ?></td>
                <td> 
                       <div class="btn-group btn-group-sm">
					    <a href="?page=lacak&&id=<?php echo $r['DI302']; ?>" class="btn btn-primary" title="Lacak Berkas"><i class="fas fa-search"></i></a>
                        <a href="xregister.php?id=<?php echo $r['DI302']; ?>" onclick="javascript: return confirm('Anda Yakin Akan Menghapus Disposisi dari <?php echo $r['pemohon']; ?>?')" class="btn btn-danger" title="Hapus Data"><i class="fas fa-trash"></i></a>
                        
                      </div>
				</td>
              </tr>
              
             <?php
  endwhile;
  }
  ?> 
              </tbody>
     
            </table>
            
          </div>
          <!-- /.card-body -->
          
        </div>
		<br>
		
		</section>
    <!-- /.content -->
  </div>
  