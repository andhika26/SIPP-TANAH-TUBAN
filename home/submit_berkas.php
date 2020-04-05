      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penyelesaian Berkas Pemohon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penyelesaian Berkas Pemohon</li>
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
            <h3 class="card-title"><b>Penyelesaian Berkas Pemohon</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form method="post" action="penyelesaianberkas_aksi.php" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <!-- /.form-group -->
				
				
				<div class="form-group">
				<label>Tgl.Terima Berkas <i>Terisi Otomatis</i></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="nip" placeholder="No Pegawai">
                  </div>
                </div>
				
				
				
				
				
              </div>
			  
			  
              <!-- /.col -->
              <div class="col-md-6">

              <div class="form-group">
				<label>DI 307</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nip" placeholder="No DI307">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
				<label>No.Seri Blangko</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nip" placeholder="No Pegawai">
                  </div>
                </div>
			  
				<div class="form-group">
                  <label>Petugas Gambar</label>
				  
                  <select class="form-control select2" style="width: 100%;" name="permohonan">
                    <option value="petugas">1.KASI IP</option>
                    <option value="petugas">2.PETUGAS GAMBAR</option>
                    <option value="petugas">3.PETUGAS UKUR</option>
                    <option value="petugas">4.WARKAH</option>
                    <option value="petugas">5.SEKSI H2P</option>
                  </select>
                </div>
				
			  
				
				
			
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" value="Update Data">
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
  
  