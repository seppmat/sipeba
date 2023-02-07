<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Peminjaman</title>
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

$query = mysqli_query($connect, "SELECT * from formulir WHERE nomor='$nomor'");
$data = mysqli_fetch_array($query);

?>

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
      <h1>Data Peminjaman</h1>
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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Data Peminjaman</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li>

              </ul>
              <div class="tab-content pt-2">


                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="post" action="editing_data.php?nomor=<?php echo $nomor; ?>" enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Barang</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nama_barang" type="text" class="form-control" id="fullName" value="<?php echo $data['nama_barang']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Jenis Barang</label>
                      <div class="col-md-8 col-lg-9">

                        <select name="jenis_barang" class="form-control">
                          <?php
                          if ($data['jenis_barang'] == "Peralatan Sistem Informasi")echo "<option value='Peralatan Sistem Informasi' selected>Peralatan Sistem Informasi</option>";
                          else echo "<option value='Peralatan Sistem Informasi'>Peralatan Sistem Informasi</option>";
      
                          if ($data['jenis_barang'] == "Peralatan Operasional")echo "<option value='Peralatan Operasional' selected>Peralatan Operasional</option>";
                          else echo "<option value='Peralatan Operasional'>Peralatan Operasional</option>";
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nomor Inventaris</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="serial_number" type="text" class="form-control" id="fullName" value="<?php echo $data['serial_number']; ?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nomor Handphone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nomor_handphone" type="text" class="form-control" id="fullName" value="<?php echo $data['nomor_handphone']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tujuan Peminjaman</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tujuan_peminjaman" type="text" class="form-control" id="fullName" value="<?php echo $data['tujuan_peminjaman']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Atasan</label>
                      <div class="col-md-8 col-lg-9">

                        <select name="atasan" class="form-control">
                          <?php
                          if ($data['atasan'] == "TRI HARYADI")echo "<option value='TRI HARYADI' selected>TRI HARYADI</option>";
                          else echo "<option value='TRI HARYADI'>TRI HARYADI</option>";
      
                          if ($data['atasan'] == "ZUBER KERTAPATI")echo "<option value='ZUBER KERTAPATI' selected>ZUBER KERTAPATI</option>";
                          else echo "<option value='ZUBER KERTAPATI'>ZUBER KERTAPATI</option>";
      
                          if ($data['atasan'] == "ESNI FRIDAWATI")echo "<option value='ESNI FRIDAWATI' selected>ESNI FRIDAWATI</option>";
                          else echo "<option value='ESNI FRIDAWATI'>ESNI FRIDAWATI</option>";
      
                          if ($data['atasan'] == "RUSMAN AYADI")echo "<option value='RUSMAN AYADI' selected>RUSMAN AYADI</option>";
                          else echo "<option value='RUSMAN AYADI'>RUSMAN AYADI</option>";
      
                          if ($data['atasan'] == "MUHAMMAD NAZLI")echo "<option value='MUHAMMAD NAZLI' selected>MUHAMMAD NAZLI</option>";
                          else echo "<option value='MUHAMMAD NAZLI'>MUHAMMAD NAZLI</option>";
      
                          if ($data['atasan'] == "IDRIS")echo "<option value='IDRIS' selected>IDRIS</option>";
                          else echo "<option value='IDRIS'>IDRIS</option>";
      
                          if ($data['atasan'] == "MUHAMMAD PANJI")echo "<option value='MUHAMMAD PANJI' selected>MUHAMMAD PANJI</option>";
                          else echo "<option value='MUHAMMAD PANJI'>MUHAMMAD PANJI</option>";
                          ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tanggal Peminjaman</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tanggal_pinjam" type="date" class="form-control" id="fullName" value="<?php echo $data['tanggal_pinjam']; ?>">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tujuan Pengembalian</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="tanggal_kembali" type="date" class="form-control" id="fullName" value="<?php echo $data['tanggal_kembali']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Status Barang</label>
                      <div class="col-md-8 col-lg-9">

                        <select name="status" class="form-control">
                          <?php
                          if ($data['status'] == "In Progress")echo "<option value='In Progress' selected>In Progress</option>";
                          else echo "<option value='In Progress'>In Progress</option>";
      
                          if ($data['status'] == "Completed")echo "<option value='Completed' selected>Completed</option>";
                          else echo "<option value='Completed'>Completed</option>";
      
                          if ($data['status'] == "Expired")echo "<option value='Expired' selected>Expired</option>";
                          else echo "<option value='Expired'>Expired</option>";
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="text-center">
                      <a href="data_peminjaman.php"><input type="button" value="Cancel Change" style="float: right;" class="btn btn-primary"></a>
                      <input type="hidden" name="nomor" value="<?php echo $data['nomor']; ?>">
                    </div>

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings" >
                    <div class="text">
                      <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                      <?php echo "<button class='btn btn-primary'><a style='color: white;' href ='delete_data.php?nomor=" . $data['nomor'] . "'>Delete</a></button>"; ?>
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

