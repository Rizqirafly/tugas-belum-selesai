<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Login Dulu Bre</title>
</head>
<body>
  <form action="proses_logintk.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="username" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="username">username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="password">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="tambah_login.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
              <p class="mb-0">Back <a href="index.php" class="text-white-50 fw-bold">HOME</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>
