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

    <!-- Main content -->
    <section class="content">
    <?php
	$no302 = $_GET['id'];
	$hariini = date('m/d/Y');
	?>
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
		  <form method="post" action="petugasukur_aksi.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
			
                <div class="form-group">
				<label>No.302</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon far fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="302" value="<?php echo $no302 ?>" readonly="on">
                  </div>
                </div>
                <!-- /.form-group -->
				
                <div class="form-group">
				<label>Tgl.Tunjuk Ukur</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="tgltunjuk" placeholder="No Pegawai" value="<?php echo $hariini ?>">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
				<label>Tgl.Ke Ketik SPK</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="tglketik" placeholder="No Pegawai" value="<?php echo $hariini ?>">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Tgl.dr Ketik SPK</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="selesaiketik" placeholder="No Pegawai" value="<?php echo $hariini ?>">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
				<label>Tgl.Ke TTD SPK</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="spkbaru" placeholder="No Pegawai" value="<?php echo $hariini ?>">
                  </div>
                </div>
				
				
				
              </div>
			  
			  
              <!-- /.col -->
              <div class="col-md-6">
			  
				<div class="form-group">
				<label>Tgl.dr TTD SPK</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="spkselesai" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
                  <label>Petugas Ukur</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $nama; ?>" readonly="on">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Tgl.Ke Petugas Ukur</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="masukptgsukur" placeholder="No Pegawai" value="<?php echo $hariini ?>">
                  </div>
                </div>
				
				<div class="form-group">
				<label>Tgl.dr Petugas Ukur</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" name="keluarptgsukur" value="<?php echo $hariini ?>" placeholder="No Pegawai">
                  </div>
                </div>
				
				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" value="Kirim Berkas Pemohon">
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
  
  