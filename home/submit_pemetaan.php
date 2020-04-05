      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PEMETAAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemetaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
  <?php
	$no302 = $_GET['id'];
  $hariini = date('m/d/Y');
  $q = mysqli_query($koneksi, "SELECT dr_pemetaan FROM tbl_olahdata WHERE DI302='$no302'") or die (mysqli_error());
	$tglpemetaan = mysqli_fetch_array($q);
	?>
   
<!---- data permohonan ----------->
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Tahapan Pemetaan</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form method="post" action="prosesvalidasi_aksi.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
			
				<div class="form-group">
                  <label>Petugas Login</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $nama; ?>" readonly="on">
                  </div>
                </div>
				
                <div class="form-group">
				<label>No.302 <i>Terisi Otomatis</i></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon far fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="DI302" value="<?php echo $no302; ?>" readonly="on">
                  </div>
                </div>
                <!-- /.form-group -->
				
                <div class="form-group">
				<label>Tanggal Terima Berkas <i>Terisi Otomatis</i> :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="tglolahdata" value="<?php echo $tglpemetaan[0]; ?>" readonly="on">
                  </div>
                </div>
                <!-- /.form-group -->
				
				
                <!-- /.form-group -->
				
				
			  </div>
			  
              <!-- /.col -->
              <div class="col-md-6">
			  
				<div class="form-group">
                  <label>Setor Ke :</label>
				  
                  <select class="form-control select2" style="width: 100%;" name="permohonan">
                    <option value="petugas">KASUBSI UKUR</option>
                    <option value="petugas">PEMETAAN</option>
                    <option value="petugas">PETUGAS UKUR</option>
                    <option value="petugas">PETUGAS GAMBAR</option>
                    <option value="petugas">KONFIRMASI PEMOHON</option>
                    <option value="petugas">PEMBATALAN BERKAS</option>
                  </select>
                </div>
				
			  
				<div class="form-group">
				<label>Tgl Setor Ke :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="nip" placeholder="No Pegawai">
                  </div>
                </div>
				
				
				
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" value="Tambahkan Pengguna">
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
       
		<br>
		
		</section>
    <!-- /.content -->
  </div>
  
  