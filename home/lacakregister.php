      <!-- Content Wrapper. Contains page content -->
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
              <li class="breadcrumb-item active">Register Berkas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
		<!-- data list permohonan -->
		
		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"><b>Data Pelacakan Berkas Pemohon</b></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
		  
		  <div class="card-body">
		  <table id="example2" class="table table-bordered">
              <thead>
              <tr>
                <th>Register</th>
                <th>Ukur</th>
                <th>Data</th>
                <th>Gambar</th>
                <th>Validasi</th>
				<th>Pemetaan</th>
				<th>Berkas</th>
				<th>Tambahan</th>
				<th>BA</th>
				<th>BON Minut</th>
              </tr>
              </thead>
              <tbody>
			  	<tr>
				<?php
				include ("../config/database.php");
				$id1 = $_GET['id'];
				$t1 = mysqli_query($koneksi, "SELECT * FROM tbl_pemohon WHERE status='1' AND DI302='$id1'") or die (mysqli_error());
				$r1 = mysqli_fetch_array($t1);
				?>
                <th>
				<?php if($r1['status']=='1'){
				echo "<center><i class='fas fa-check-circle'></i></center>";
				} else {
				echo "<center><i class='fas fa-circle'></i></center>";
				}
				?>
				</th>
                <?php
				include ("../config/database.php");
				$id1 = $_GET['id'];
				$t2 = mysqli_query($koneksi, "SELECT * FROM tbl_ukur WHERE status='1' AND DI302='$id1'") or die (mysqli_error());
				$r2 = mysqli_fetch_array($t2);
				?>
                <th>
				<?php if($r2['status']=='1'){
				echo "<center><i class='fas fa-check-circle'></i></center>";
				} else {
				echo "<center><i class='fas fa-circle'></i></center>";
				}
				?>
				</th>
                <th><center><i class='fas fa-circle'></i></center></th>
                <th><center><i class='fas fa-circle'></i></center></th>
                <th><center><i class='fas fa-circle'></i></center></th>
				<th><center><i class='fas fa-circle'></i></center></th>
				<th><center><i class='fas fa-circle'></i></center></th>
				<th><center><i class='fas fa-circle'></i></center></th>
				<th><center><i class='fas fa-circle'></i></center></th>
				<th><center><i class='fas fa-circle'></i></center></th>
              </tr>
			  </tbody>
     
            </table>
		  
             <hr>
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
	$id = $_GET['id'];
	  // menghubungkan dengan koneksi
		include ("../config/database.php");
	  $query = mysqli_query($koneksi, "SELECT * FROM tbl_pemohon WHERE status='1' AND DI302='$id' ORDER BY id DESC") or die (mysqli_error());
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
					    <a href="?page=lacak&&id=<?php echo $r['ids']; ?>" class="btn btn-primary" title="Lacak Berkas"><i class="fas fa-search"></i></a>
                        <a href="xregister.php?id=<?php echo $r['ids']; ?>" onclick="javascript: return confirm('Anda Yakin Akan Menghapus Disposisi dari <?php echo $r['pemohon']; ?>?')" class="btn btn-danger" title="Hapus Data"><i class="fas fa-trash"></i></a>
                        
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
  
  