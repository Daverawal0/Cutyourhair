<?php
if(!isset($_SESSION)){
  session_start();
}

$isLoggedIn = false;
if(isset($_SESSION['logged']) && ($_SESSION['logged'] == 1)){
  $isLoggedIn = true;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Strathfield Barber Shop</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery library -->
  	<script src="js/jquery.min.js"></script>
  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="js/script.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <span class="navbar-brand">Strathfield Barber Shop</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if($isLoggedIn):?>
            <li class="nav-item">
              <a class="nav-link" href="makeAppointment.php">Book Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manageBooking.php">Manage Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="backend/logout.php">Logout</a>
            </li>
            <?php else:?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <?php endif;?>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <?php if($isLoggedIn):?>
        <div class="mx-auto order-0">
          <span class="navbar-brand mx-auto">Welcome, <?php echo $_SESSION['username']; ?></span>
        </div>
        <?php endif;?>

      </nav>
    </header>

    <main role="main">
