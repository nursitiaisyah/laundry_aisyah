<!doctype html>
<html lang="en">
  <head>
    <title>Login Aplikasi Laundry</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="assets/login2/css/style.css">

  </head>
<?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=='gagal'){
    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
    }
  }
  ?>
  <body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Aisyah Laundry</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="d-flex">
              <div class="w-100">
                <h3 class="mb-4">Login</h3>
              </div>
            
            </div>
            <form action="ceklogin.php" method="post">
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
              </div>
              <div class="form-group">
                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
              </div>
              <div class="form-group d-flex align-items-center">
                <div class="w-100">
                  <label class="checkbox-wrap checkbox-primary mb-0">Save Password
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="w-100 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary rounded submit">Login</button>
                </div>
              </div>
              <div class="form-group mt-4">
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

