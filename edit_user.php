<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit User</title>
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

include "sql.php";

$nomor = $_GET['nomor'];    

$query = mysqli_query($connect, "SELECT * from user WHERE nomor='$nomor'");
$data = mysqli_fetch_array($query);
?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard_admin.php" class="logo d-flex align-items-center">
        <img src="asset/sucofindo.png" alt="">
        <span class="d-none d-lg-block" style="font-size: 1.1em;">SIPEBA</span>
      </a>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_user.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Data User</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

              </ul>
              <div class="tab-content pt-2">


                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="editing_user.php?nomor=<?php echo $nomor; ?>" enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="fullName" value="<?php echo $data['email']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="fullName" value="<?php echo $data['username']; ?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">NPP</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="npp      " type="text" class="form-control" id="fullName" value="<?php echo $data['npp']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Bidang/Divisi</label>
                      <div class="col-md-8 col-lg-9">

                        <select name="bidang" class="form-control">
                          <?php
                          if ($data['bidang'] == "DUKUNGAN BISNIS")echo "<option value='DUKUNGAN BISNIS' selected>DUKUNGAN BISNIS</option>";
                          else echo "<option value='DUKUNGAN BISNIS'>DUKUNGAN BISNIS</option>";
      
                          if ($data['bidang'] == "DUKUNGAN OPERASI DAN PENJUALAN")echo "<option value='DUKUNGAN OPERASI DAN PENJUALAN' selected>DUKUNGAN OPERASI DAN PENJUALAN</option>";
                          else echo "<option value='DUKUNGAN OPERASI DAN PENJUALAN'>DUKUNGAN OPERASI DAN PENJUALAN</option>";
      
                          if ($data['bidang'] == "INSPEKSI TEKNIK")echo "<option value='INSPEKSI TEKNIK' selected>INSPEKSI TEKNIK</option>";
                          else echo "<option value='INSPEKSI TEKNIK'>INSPEKSI TEKNIK</option>";
      
                          if ($data['bidang'] == "INSPEKSI UMUM")echo "<option value='INSPEKSI UMUM' selected>INSPEKSI UMUM</option>";
                          else echo "<option value='INSPEKSI UMUM'>INSPEKSI UMUM</option>";
      
                          if ($data['bidang'] == "PENGUJIAN DAN KONSULTASI")echo "<option value='PENGUJIAN DAN KONSULTASI' selected>PENGUJIAN DAN KONSULTASI</option>";
                          else echo "<option value='PENGUJIAN DAN KONSULTASI'>PENGUJIAN DAN KONSULTASI</option>";
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="data_user.php"><input type="button" value="Cancel Change" style="float: right;" class="btn btn-primary"></a>
                      <input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">
                    </div>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings" >
                    <div class="text">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                      <?php echo "<button class='btn btn-primary'><a style='color: white;' href ='delete_user.php?nomor=" . $data['nomor'] . "'>Delete</a></button>"; ?>
                    </div>
                  </form><!-- End settings Form -->

                  </div>
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

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