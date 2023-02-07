<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login!</title>
    <style>
        *, html, body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: 0;
        }
        body{
            background-color: ghostwhite;
        }
     
    </style>
</head>
<body>
  <form action="register.php" method="POST" name="register">

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Create an Account</h3>
                  <form>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" name="email" required>
                          <label class="form-label" for="firstName">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline datepicker w-100">
                          <input type="password" class="form-control form-control-lg" id="birthdayDate" name="password" required>
                          <label for="birthdayDate" class="form-label">Password</label>
                        </div>

                      </div>
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" name="username" required>
                        <label class="form-label" for="lastName">Your Name</label>
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2 d-flex align-items-center">

                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" id="emailAddress" class="form-control form-control-lg" name="npp" required>
                          <label class="form-label" for="emailAddress">NPP</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="nomor_telephone" required>
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <select class="select form-control-lg" name="bidang" required>
                          <option selected disabled>Bidang/Divisi</option>
                          <option>Dukungan Bisnis</option>
                          <option>Dukungan Operasi & Penjualan</option>
                          <option>Inspeksi Teknik</option>
                          <option>Inspeksi Umum</option>
                          <option>Pengujian & Konsultasi</option>
                        </select>
      
                      </div>
                    </div>

                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

</form>
</body>
</html>
