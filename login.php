<?php include 'controller/authController.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>Ellipsis url shortener - Login</title>
  <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href=".../index.html">Ellipsis Url Shortener</a>
                
                            </div>
        </nav>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Login</h3>
        
<?php if (count($errors) > 0): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <li>
      <?php echo $error; ?>
    </li>
    <?php endforeach;?>
  </div>
<?php endif;?>

        <form action="login.php" method="post">
          <div class="form-group">
            <label>Username or Email</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
          </div>
        </form>
        <p>Don't yet have an account? <a href="register.php">Register Now</a></p>
      </div>
    </div>
  </div>
</body>
<!-- Footer-->
        <footer class="footer bg-light static-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 h-100 text-center my-auto">                        
                        <p class="text-muted small mb-4 mb-lg-0">ELLIPSIS URL SHORTENER 2022.<br> All Rights Reserved. Developed by <a href="rauphmohamed12@gmail.com" target="_blank">Abdur-rauph Mohammad</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/script.js"></script>
</html>