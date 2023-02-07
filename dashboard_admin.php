<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>
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

<?php 

include "sql.php";

$data_peminjaman = mysqli_query($connect, "SELECT * from formulir");
$total_peminjaman = mysqli_num_rows($data_peminjaman);

$data_user = mysqli_query($connect, "SELECT * from user");
$total_user = mysqli_num_rows($data_user);

$data_progress = mysqli_query($connect, "SELECT * from formulir WHERE status='In Progress'");
$total_progress = mysqli_num_rows($data_progress);

$data_completed = mysqli_query($connect, "SELECT * from formulir WHERE status='Completed'");
$total_completed = mysqli_num_rows($data_completed);

$data_expired = mysqli_query($connect, "SELECT * from formulir WHERE status='Expired'");
$total_expired = mysqli_num_rows($data_expired);
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
        <a class="nav-link " href="dashboard_admin.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Peminjaman</li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" href="data_peminjaman.php">
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

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_admin.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Data Peminjaman Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data <span>| Peminjaman</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-eye"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_peminjaman; ?></h6>
                      <span class="text-success small pt-1 fw-bold">Peminjaman Barang</span></span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Data Peminjaman Card -->

            <!-- Data User Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Data <span>| User</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_user ?></h6>
                      <span class="text-success small pt-1 fw-bold">User SIPEBA</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Data User Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Chart <span>| SIPEBA</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Peminjam',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'User',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->


            <!-- In Progress Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                    <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Peminjaman <span>| In Progress</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hourglass"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_progress ?></h6>
                      <span class="text-success small pt-1 fw-bold">In Progress</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End In Progress Card -->

            <!-- Completed Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Peminjaman <span>| Completed</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-lg"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_completed ?></h6>
                      <span class="text-success small pt-1 fw-bold">Completed</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Dikembalikan Card -->

            <!-- Expired Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Fiture</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Peminjaman <span>| Expired</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-x-lg"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $total_expired ?></h6>
                      <span class="text-success small pt-1 fw-bold">Expired</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Expired Card -->

          </div>
        </div><!-- End Left side columns -->

        
        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Fiture</h6>
                </li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                    <li><a class="dropdown-item" href="#">Soon</a></li>
                </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Peminjaman Terakhir <span>| SIPEBA</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">5 sec</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">34 min</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">5 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Soon <a href="#" class="fw-bold text-dark">Nama Barang</a> Not Available
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span><a href="https://seppmat.github.io/">Sepp</a></span></strong> All Rights Reserved
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