      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Berkas Ukur Pemohon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Berkas Ukur Pemohon</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <?php
	$no302 = $_GET['id'];
	$hariini = date('m/d/Y');
	?>


    <!-- Main content -->
    <section class="content">
    
   
<!---- data permohonan ----------->
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Berkas Ukur Pemohon</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form method="post" action="pengolahandata_aksi.php" enctype="multipart/form-data">
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
				<label>No.302</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon far fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="DI302" value="<?php echo $no302; ?>" readonly="on">
                  </div>
                </div>
                <!-- /.form-group -->
				
                <div class="form-group">
				<label>Petugas BON Blangko</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="petugasbon" value="<?php echo $nama; ?>">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
				<label>Ke BON Blangko</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="kebon" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
				<label>dari BON Blangko</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="daribon" placeholder="No Pegawai">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
				<label>No.Seri Blangko</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="seribon" placeholder="No Pegawai">
                  </div>
                </div>
				
				
				
              </div>
			  
			  
              <!-- /.col -->
              <div class="col-md-6">
			  
				<div class="form-group">
                  <label>Petugas Gambar</label>
				  
                  <select class="form-control select2" style="width: 100%;" name="petugasgambar">
                    <option value="petugas">1.PETUGAS</option>
                    <option value="petugas">1.PETUGAS</option>
                    <option value="petugas">1.PETUGAS</option>
                    <option value="petugas">1.PETUGAS</option>
                    <option value="petugas">1.PETUGAS</option>
                  </select>
                </div>
				
			  
				<div class="form-group">
				<label>Tgl.ke Petugas Gambar</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="kepetugasgambar" placeholder="No Pegawai">
                  </div>
                </div>
				
				
				<div class="form-group">
				<label>Tgl.dr Petugas Gambar</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="daripetugasgambar" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Tgl.dr Petugas Ukur</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="daripetugasukur" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Ke Pemetaan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="kepemetaan" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Dari Pemetaan</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="daripemetaan" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" value="SIMPAN BERKAS PENGOLAHAN DATA">
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
  
  