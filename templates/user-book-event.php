<?php
session_start();

if( !isset($_SESSION["loginsubmit"])){
    header("Location: login.php");
    exit;
}

require 'functions2.php';

$id_user = $_SESSION["loginsubmit"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../static/css//materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Book Event Details</title>
    </head>

    <body class="white">

      <!--Navbar-->
      <nav class="blue">
        <div class="nav-wrapper">
            <a><img class="first-logo" src="../static/img/profile.png"></a>
            <a href="#" class="brand-logo white-text" style="font-size: 25px;"><b>SISDAKOM</b></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="user-home.php" class="white-text" style="font-size: 20px;"><b>Home</b></a></li>
                <li><a href="user-events.php" class="white-text" style="font-size: 20px;"><b>Events</b></a></li>
                <li><a href="user-message.php" class="white-text" style="font-size: 20px;"><b>Messages</b></a></li>
                <li><a href="user-profile-info.php" class="white-text" style="font-size: 20px;"><b>Profile</b></a></li>
            </ul>
        </div>
    </nav>
    
    <ul class="sidenav" id="mobile-demo">
        <li><a href="user-home.php" class="black-text">Home</a></li>
        <li><a href="user-events.php" class="black-text">Events</a></li>
        <li><a href="user-message.php" class="black-text">Messages</a></li>
        <li><a href="user-profile-info.php" class="black-text">Profile</a></li>
    </ul>

<!--Halaman Utama-->
<div class="container">
  <div class="row">
    <div class="col s3 l3">
      <img class="responsive-img" src="../static/img/logo-thewalls.png" style="margin-top: 20px;">
    </div>
    <div class="col s4 l5">
      <h4 class="blue-text bold">The Walls Seminar</h4>
      <h5 class="blue-text bold" style="font-size: 20px; margin-top: 20px;">3 November 2020</h5>
      <h5 class="blue-text bold" style="font-size: 20px;">13.00 - 15.00</h5>
      <h5 class="blue-text bold" style="font-size: 20px;">GDS 505, UNJ</h5>
    </div>
    <div class="col s5 l4">
      <h5 class="blue-text bold" style="font-size: 23px;">Status</h5>
      <h5 class="black-text bold" style="font-size: 20px;">Pembayaran Sedang Dikonfirmasi</h5>
      <a href="#" class="white-text btn-large blue" style="margin-top: 20px;">Payment Receipt</a>
    </div>
    <div class="col s12 l12">
      <p class="black-text bold" style="font-size: 20px;">
        The Walls mengadakan seminar yang akan membahas bisnis desain interior dan properti berbasis website. Seminar akan diadakan di UNJ gedung GDS 505. 
      </p>
      <p class="black-text bold" style="font-size: 20px;">
        Benefits : 
        <br>- E-Certificate <br>- Makan Siang <br>- Doorprize
      </p>
    </div>
  </div>
</div>

<!--Footer--> 
  <footer class="page-footer blue">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text">About</h5>
          <p class="white-text">A website that provide platform for Computer Science events on State University of Jakarta</p>
        </div>
        <div class="col l4 s12">
            <h5 class="white-text">Address</h5>
              <p class="white-text">Jl. Rawamangun Muka, RT.11/RW.14 Rawamangun, Pulo Gadung, Kota Jakarta Timur, DKI Jakarta 13220</p>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Contact</h5>
          <ul>
            <li><a class="white-text">+6285200000000</a></li>
            <li><a class="white-text">emailaddressexample@unj.ac.id</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright indigo">
      <div class="container center">
        <a class="white-text"><b>Copyright © 2020 - Developed by Diyah, Izzat, Rachel</b></a>
      </div>
    </div>
  </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
      </script> 
    </body>
  </html>
