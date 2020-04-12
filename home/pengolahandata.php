      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengolahan Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengolahan Data</li>
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
            <h3 class="card-title"><b>Pengolahan Data Pemohon</b></h3>

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

                <div class="form-group">
                  
                  <div class="input-group">
                    <input type="submit" class="btn btn-block btn-success btn-lg" name="semua_data_olahdata" required value="Lihat Semua Data Pengolahan Data">
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
				<th>No.Berkas</th>
				<th>Petugas</th>
				<th>Ke BON</th>
				<th>dr BON</th>
				<th>No.Seri BON</th>
				<th>Petugas Gambar</th>
				<th>Ke Ptgs Gambar</th>
				<th>Dr Ptgs Gambar</th>
				<th>Ke Pemetaan</th>
				<th>Dr Pemetaan</th>
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
	  $query = mysqli_query($koneksi, "SELECT tbl_pemohon.pemohon, tbl_pemohon.DI302, tbl_pemohon.no_berkas, tbl_olahdata.ke_bon, tbl_olahdata.dari_bon, tbl_olahdata.seri_bon, tbl_olahdata.petugas_gambar, tbl_olahdata.ke_ptgsgambar, tbl_olahdata.dr_ptgsgambar, tbl_olahdata.ke_pemetaan, tbl_olahdata.dr_pemetaan, tbl_olahdata.status FROM tbl_pemohon JOIN tbl_olahdata ON tbl_pemohon.no_berkas = tbl_olahdata.no_berkas WHERE tbl_olahdata.status='0'") or die (mysqli_error());
	  if(mysqli_num_rows($query) == 0){
	  echo "<button class='btn btn-danger'><b>Belum Ada Data Yang Masuk</b></button>";
	  }else{
	  while($r = mysqli_fetch_array($query)):  
	      
	  ?>
              <tr>
                <td><?php echo $r[1]; ?></td>
                <td><?php echo $r[2]; ?></td>
				<td><?php echo $nama; ?></td>
				<td><?php echo $r[3]; ?></td>
				<td><?php echo $r[4]; ?></td>
				<td><?php echo $r[5]; ?></td>
				<td><?php echo $r[6]; ?></td>
				<td><?php echo $r[7]; ?></td>
				<td><font color="blue"><?php echo $r[8]; ?></font></td>
				<td><?php echo $r[9]; ?></td>
				<td><?php echo $r[10]; ?></td>
                <td><a href="?page=submitdata&&id=<?php echo $r[1]; ?>"><button class="btn btn-block btn-success btn-sm">Edit</button></a></td>
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
  
  
 