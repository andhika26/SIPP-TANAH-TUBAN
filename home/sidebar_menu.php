<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=ringkasan" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Ringkasan Pemohon</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=register" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Register Berkas
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=ukur" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                SPK Petugas Ukur
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=olahdata" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Pengolahan Data
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=olahgambar" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Pengolahan Gambar
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=validasi" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Proses Validasi
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=pemetaan" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Pemetaan
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="?page=pemberkasan" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Penyelesaian Berkas
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pengolahan Tambahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?page=tambahbiaya" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Tambah Biaya</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?page=ba" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Berita Acara</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?page=bonminut" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>BON Minut</p>
                </a>
              </li>
              
            </ul>
          </li>


          <?php if($jabatan=="Sys Admin"){ ?>
            <li class="nav-item has-treeview">
            <a href="?page=user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                <font color="yellow"><b>Tambah Users</b></font>
              </p>
            </a>
          </li>

          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->