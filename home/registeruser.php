      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Register Berkas</li>
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
            <h3 class="card-title"><b>Register User</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
          <!-- /.card-header -->
          <div class="card-body">
		  <form method="post" action="registeruser_aksi.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
			
                <div class="form-group">
				<label>Nama Pegawai</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <!-- /.form-group -->
				
                <div class="form-group">
				<label>NIP/NIPK</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="nip" placeholder="No Pegawai">
                  </div>
                </div>
                <!-- /.form-group -->
				
				<div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control select2" style="width: 100%;" name="jabatan">
                    <option value="Register">Petugas Register</option>
                    <option value="Petugas Ukur">Petugas Ukur</option>
                    <option value="Petugas Data">Petugas Olah Data</option>
                    <option value="Petugas Gambar">Petugas Olah Gambar</option>
                    <option value="Validator">Petugas Validasi</option>
                    <option value="Petugas Pemetaan">Petugas Pemetaan</option>
                  </select>
                </div>
				
				<div class="form-group">
				<label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon far fa-mail"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <!-- /.form-group -->
				
				
              </div>
			  
			  
              <!-- /.col -->
              <div class="col-md-6">
			  <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
				
				<div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="nav-icon fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" name="sandi">
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
        
		
		
		<!-- data list permohonan -->
		
		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Daftar Nama Pengguna</b></h3>

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
                <th>Nama</th>
                <th>NIP/NIPK</th>
                <th>Jabatan</th>
                <th>User</th>
                <th>Status</th>
				<th>Login Time</th>
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
	  $query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE status='1' AND username!='admin' ORDER BY id DESC") or die (mysqli_error());
	  if(mysqli_num_rows($query) == 0){
	  echo "<button class='btn btn-danger'><b>Belum Ada Data Pengguna Selain Admin</b></button>";
	  }else{
	  while($r = mysqli_fetch_array($query)):  
	      
	  ?>
              <tr>
                <td><?php echo $r['nama_pegawai']; ?></td>
                <td><?php echo $r['nomor_induk']; ?></td>
                <td><?php echo $r['jabatan']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['status']; ?></td>
                <td><?php echo $r['log_time']; ?></td>
                <td> 
                       <div class="btn-group btn-group-sm">
					    <a href="?page=ubahuser&&id=<?php echo $r['id']; ?>" class="btn btn-primary" title="Lacak Berkas">Edit</a>
                        <a href="xuser.php?id=<?php echo $r['id']; ?>" onclick="javascript: return confirm('Anda Yakin Akan Menghapus User dari <?php echo $r['nama_pegawai']; ?>?')" class="btn btn-danger" title="Hapus Data">Hapus</a>
                        
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
  
  