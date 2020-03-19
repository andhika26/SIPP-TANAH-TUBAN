      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengolahan Gambar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengolahan Gambar</li>
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
            <h3 class="card-title"><b>Pengolahan Gambar Pemohon</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form>
				<div class="row">
				<div class="col-md-6">
			  <div class="form-group">
                  <label>No.Berkas</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-file"></i></span>
                    </div>
                    <input type="text" class="form-control" name="pemohon" required>
                  </div>
                </div>

                <!-- /.form-group -->
              </div>
			  
              <!-- /.col -->
              <div class="col-md-6">
			  <div class="form-group">
                  <label>Tahun</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="pemohon" required>
                  </div>
                </div>

				<div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-primary btn-lg" name="simpan" required value="Cari Berkas">
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
		  
		  <div class="card-header">
            <h3 class="card-title"><b>Data Berkas Pengukuran</b></h3>
          </div>
		  
		  <div class="card-body">
		  
            
             
			 <table id="example1" class="table table-bordered table-striped" width="100%">
              <thead>
              <tr>
                <th>No.302</th>
                <th>Pemohon</th>
				<th>Tgl.Terima</th>
				<th>Tgl. Setor</th>
				<th>Setor Ke</th>
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
	  $query = mysqli_query($koneksi, "SELECT tbl_pemohon.pemohon, tbl_pemohon.DI302,tbl_pemohon.no_berkas, tbl_ukur.tjk_ukur, tbl_ukur.kektk_ukur, tbl_ukur.drktk_ukur, tbl_ukur.kettd_ukur, tbl_ukur.drttd_ukur, tbl_ukur.petugas, tbl_ukur.ke_ukur, tbl_ukur.dari_ukur, tbl_ukur.status FROM tbl_pemohon JOIN tbl_ukur ON tbl_pemohon.no_berkas = tbl_ukur.no_berkas WHERE tbl_ukur.status='0'") or die (mysqli_error());
	  if(mysqli_num_rows($query) == 0){
	  echo "<button class='btn btn-danger'><b>Belum Ada Data Yang Masuk</b></button>";
	  }else{
	  while($r = mysqli_fetch_array($query)):  
	      
	  ?>
              <tr>
                <td><?php echo $r[1]; ?></td>
                <td><?php echo $r[1]; ?></td>
                <td><?php echo $r[1]; ?></td>
				<td><?php echo $r[2]; ?></td>
				<td><?php echo $r[2]; ?></td>
                <td><a href="?page=subberkas&&id=<?php echo $r[2]; ?>"><button class="btn btn-block btn-success btn-sm">Edit</button></a></td>
              </tr>
              <?php
  endwhile;
  }
  ?> 
              </tbody>
            </table>
			
	
	
			
  
          </div>
        </div>
      </section>
    <!-- /.content -->
  </div>
  
  
 