<?php
include 'koneksi.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="assets/css/stylelogin.css" />
  <link rel="stylesheet" href="assets/css/backend/plugins.bundle.css" />
  <link rel="stylesheet" href="assets/css/backend/style.bundle.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="container" onclick="onclick">
    <!-- <div class="top"></div> -->
    <div class="bottom"></div>
    <div class="center">
      <h2>&nbsp;</h2>
      <h2>Sign In to IT Course</h2>
      <div class="text-gray-400 fw-bold fs-4">
        New Here?
        <a href="register.php" class="link-primary fw-bolder">Create an Account</a>
      </div>
      <?php if(isset($_SESSION['error'])){
        echo "<div class='alert alert-danger' role='alert'>".$_SESSION['error']."</div>";
        $_SESSION['error'] = null;
      } ?>
      <form id="login-form" method="POST" action="login_check.php">
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
        <div class="text-gray-400 fw-bold fs-4 text-center">
          <a href="forgot.php" class="link-primary fw-bolder">Lupa Password?</a>
        </div>
        <div class="text-center">
          <div>
            <!-- <div class="g-recaptcha mb-5" data-sitekey="6LfkO1AlAAAAAIgYov5ZbDbsmU1_ksvclkbRNwfW" style="margin-left: 17px;"></div> -->
            <button type="submit" name="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-50 mb-5">
              <span class="indicator-label">Sign In</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- partial -->
  <script src='https://codepen.io/banik/pen/3f837b2f0085b5125112fc455941ea94.js'></script>
</body>
</html>
