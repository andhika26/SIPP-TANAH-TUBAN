<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "dashboard.php";
				break;
			
			case 'ringkasan':
				include "ringkasan_pemohon.php";
				break;

			case 'register':
				include "registerberkas.php";
				break;
				
			case 'ukur':
				include "petugasukur.php";
				break;
				
			case 'submitukur':
				include "submit_ukur.php";
				break;
				
			case 'olahdata':
				include "pengolahandata.php";
				break;
				
			case 'submitdata':
				include "submit_data.php";
				break;
				
			case 'olahgambar':
				include "pengolahangambar.php";
				break;
				
			case 'submitgambar':
				include "submit_gambar.php";
				break;
				
			case 'validasi':
				include "proses_validasi.php";
				break;
				
			case 'subval':
				include "submit_validasi.php";
				break;
				
			case 'pemetaan':
				include "pemetaan.php";
				break;
				
			case 'subpeta':
				include "submit_pemetaan.php";
				break;
				
			case 'pemberkasan':
				include "penyelesaian_berkas.php";
				break;
				
			case 'subberkas':
				include "submit_berkas.php";
				break;
				
			case 'lacak':
				include "lacakregister.php";
				break;
				
			case 'user':
				include "registeruser.php";
				break;

			case 'tambahbiaya':
				include "biayatambahan.php";
				break;
					
			default:
				include "err404.php";
				break;
		}
	}else{
		include "dashboard.php";
	}
 
	 ?>