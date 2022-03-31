<?php include 'controller/authController.php'?>
<?php
// redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>Ellipsis url shortener</title>
</head>

<body><nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="./index.html">Ellipsis Url Shortener</a>
                <a class="btn btn-primary" href="./login.php">Go Home</a>
            </div>
        </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 home-wrapper">

        <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>

        <h4>Welcome</h4>
        <?php if (!$_SESSION['verified']): ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            This is a web application to shorten URLs ...<br>
            Username : admin123<br>
            Password: admin123
          </div>
        <?php else: ?>
          
        <?php endif;?>
      </div>
    </div>
  </div>
</body>
</html>