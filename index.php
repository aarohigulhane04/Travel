<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style type="text/css">
    .navbar a {
      color: white;
    }

    .navbar a:hover {
      font-weight: bold;
      text-decoration: none;
    }

    .dropdown-item {
      color: black;
    }

    /* .jumbotron {
      background-image: url("images/trek.jpg") !important; 

    } */

    .carousel-caption {
      color: black;
      padding-top: 200px;
    }

    /* Basic reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body and general text styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    /* Footer styles */
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    .footer-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      max-width: 1200px;
      margin: auto;
    }

    .footer-section {
      flex: 1;
      padding: 20px;
      min-width: 250px;
    }

    .footer-section h2 {
      margin-bottom: 10px;
      font-size: 20px;
      color: #ff9800;
    }

    .footer-section p {
      margin: 10px 0;
      line-height: 1.6;
    }

    .footer-section ul {
      list-style: none;
    }

    .footer-section ul li {
      margin: 5px 0;
    }

    .footer-section ul li a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-section ul li a:hover {
      color: #ff9800;
    }

    .footer-section a {
      color: #fff;
      font-size: 20px;
      margin: 0 10px;
      transition: color 0.3s;
    }

    .footer-section a:hover {
      color: #ff9800;
    }

    .footer-bottom {
      margin-top: 20px;
      font-size: 14px;
    }

    @media (max-width: 768px) {
      .footer-content {
        flex-direction: column;
        text-align: left;
      }

      .footer-section {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-dark sticky-top">
    <a class="navbar-brand" href="#">Tours and Travels </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Destinations
          </a>
          <div class="dropdown-menu bg-dark">
            <a class="dropdown-item" href="login.php">Manali</a>
            <a class="dropdown-item" href="login.php">Goa</a>
            <a class="dropdown-item" href="login.php">Rajashtan</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Things To Do
          </a>
          <div class="dropdown-menu bg-dark">
            <a class="dropdown-item" href="login.php">Trecking</a>
            <a class="dropdown-item" href="login.php">Rafting</a>
            <a class="dropdown-item" href="login.php">Sking</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Plan your trip</a>
        </li>

      </ul>
      <span class="navbar-text">
        <a href="#footer">About Us </a> &nbsp;&nbsp;<a href="login.php">Login</a> &nbsp;&nbsp; <a href="register.php">Register</a>
      </span>
    </div>
  </nav>

  <!-- JUMBOTRON -->

  <div class="jumbotron jumbotron-fluid" >
    <h1 style="padding-left: 20px">Travel Where You Want....</h1>
    <p style="padding-left: 20px">Book Your Saudi Holiday Now — Enjoy Your Solo Saudi Trip Now And Check Our Exceptional Marine Life And Swim With Sharks</p>
  </div>


  <!-- IMAGES -->

  <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: -35px;">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/manali.jpg" alt="Manali">
        <div class="carousel-caption">
          <h3>Manali</h3>
          <p>We had such a great time in Manali!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/goa.jpg" alt="Goa">
        <div class="carousel-caption">
          <h3>Goa</h3>
          <p>Beaches are the best!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/rajasthan.jpg" alt="Rajashtan">
        <div class="carousel-caption">
          <h3>Rajashtan</h3>
          <p>Historic pages to visit!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  <!-- 
    FOOTER -->

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h2>About Us</h2>
        <p>
          We are a company dedicated to providing the best products and services.
          Our goal is to exceed our customers' expectations through continuous improvement and customer interaction.
        </p>
      </div>
      <div class="footer-section links">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section contact">
        <h2>Contact Us</h2>
        <p>1234 Street Name, City, State, 56789</p>
        <p>+1 (555) 123-4567</p>
        <p>info@example.com</p>
      </div>
      <div class="footer-section social">
        <h2>Follow Us</h2>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2024 Your Company Name. All rights reserved.
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>