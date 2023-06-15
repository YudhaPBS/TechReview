<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Regist Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="assets/css/stylelogin.css">
  <link rel="stylesheet" href="assets/css/backend/plugins.bundle.css">
  <link rel="stylesheet" href="assets/css/backend/style.bundle.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="bottom"></div>
    <div class="center">
      <h2>&nbsp;</h2>
      <h2>&nbsp;</h2>
      <h2>Create an Account</h2>
      <div class="text-gray-400 fw-bold fs-4">Already have an account?
          <a href="login.php" class="link-primary fw-bolder">Sign in here</a>
      </div>
      <form method="POST" action="register_check.php">
        <input type="email" name="email" id="email" placeholder="Email"/>
        <input type="text" name="username" id="username" placeholder="Username"/>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <h2>&nbsp;</h2>
        <div class="text-center">
        <button type="submit" name="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-50 mb-5">
            <span class="indicator-label">Sign Up</span>
        </button>
      </div>
      </form>
    </div>
  </div>
  <script src='https://codepen.io/banik/pen/3f837b2f0085b5125112fc455941ea94.js'></script>
</body>
</html>
