<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Peminjaman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/sucofindo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

</head>

<body>

<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location: index.php?pesan=gagal");
	}
?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard_admin.php" class="logo d-flex align-items-center">
        <img src="asset/sucofindo.png" alt="">
        <span class="d-none d-lg-block" style="font-size: 1.1em;">SIPEBA</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <img src="assets/img/profile-admin.jpg" alt="Profile" class="rounded-circle">
  <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li class="dropdown-header">
    <h6>Admin</h6>
    <span>Developer</span>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="dashboard_admin.php">
      <i class="bi bi-person"></i>
      <span>My Profile</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="dashboard_admin.php">
      <i class="bi bi-gear"></i>
      <span>Account Settings</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="https://seppmat.github.io">
      <i class="bi bi-question-circle"></i>
      <span>Need Help?</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center" href="logout.php">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </a>
  </li>

</ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Dashboard</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard_admin.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-heading">Peminjaman</li>
      
      <li class="nav-item">
        <a class="nav-link " href="data_peminjaman.php">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Data Peminjaman</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">User</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="data_user.php">
          <i class="bi bi-person"></i>
          <span>Data User</span>
        </a>
      </li><!-- End Tables Nav -->


  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>From Formulir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_admin.php">Home</a></li>
          <li class="breadcrumb-item">Data Peminjaman</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

    <div class="col-12">
              <div class="card recent-sales overflow-auto">


                <div class="card-body">
                  <h5 class="card-title">Data <span>| Peminjaman</span></h5>

                  <table class="table table-hover datatable">
                    <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">No. Inventaris</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Atasan</th>
                    <th scope="col">Peminjaman</th>
                    <th scope="col">Pengembalian</th>
                    <th scope="col">File</th>
                    <th scope="col" name="status">Status</th>
                    <th scope="col">Setting</th>
                    </tr>
                    </thead>

                    <tbody>
                <?php

                        include "sql.php";

                        // $status = 'status';

                        $query = "SELECT * FROM formulir";
                        // $query2 = mysqli_query($connect, "SELECT * FROM formulir WHERE status='$status'");
                        $sql = mysqli_query($connect, $query);
                        // $jml = mysqli_num_rows($query2);

                        while ($data = mysqli_fetch_array ($sql)){
                
                        echo "<tr>";
                        echo "<th scope='row'>" . $data['nomor'] . "</th>";
                        echo "<td>" . $data['nama_barang'] . "</td>";
                        echo "<td>" . $data['jenis_barang'] . "</td>";
                        echo "<td>" . $data['serial_number'] . "</td>";
                        echo "<td>" . $data['nomor_handphone'] . "</td>";
                        echo "<td>" . $data['tujuan_peminjaman'] . "</td>";
                        echo "<td>" . $data['atasan'] . "</td>";
                        echo "<td>" . $data['tanggal_pinjam'] . "</td>";
                        echo "<td>" . $data['tanggal_kembali'] . "</td>";
                        echo "<td>" . $data['file'] . "</td>";

                        // if($jml > 0 ){
                        //   $data = mysqli_fetch_assoc($query2);

                        //  if ($data['status']==["In Progress"]) {
                        //   echo "<td><span class ='badge bg-warning'>" . $data['In Progress'] . "</span></td>";
                        // }elseif ($data['status']==["Completed"]) {
                        //   echo "<td><span class ='badge bg-success'>" . $data['Completed'] . "</span></td>";
                        // }elseif ($data['status']==["Expired"]) {
                        //   echo "<td><span class ='badge bg-danger'>" . $data['status'] . "</span></td>";
                        // }

                        echo "<td><span class ='badge bg-warning'>" . $data['status'] . "</span></td>";
                              
                        
                        // warning, danger, success

                        echo "<td><a href ='edit_data.php?nomor=" . $data['nomor'] . "'>Edit Data</a></td>";
                        echo "<tr>";
                      
                      }
                  ?>
                
                    </tbody>
                  </table>

            </div>
          </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright  <strong><span><a href="https://seppmat.github.io/">Sepp</a></span></strong> All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



            
            
         
            