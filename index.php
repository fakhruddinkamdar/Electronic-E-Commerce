<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

<title>OSMS Electronics 💡</title>

</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Online Electronic Centre</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>

        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/requesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>

  </nav>
  <!-- End Navigation -->


  <div id="demo" class="carousel slide " data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item back-image active">
        <img class="carousel-img" src="images/Banner10.jpg" alt="Los Angles">
      </div>
      <div class="carousel-item">
        <img class="carousel-img" src="images/Banner11.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img class="carousel-img" src="images/Banner12.jpg" alt="Chicago">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <div class="slider">
        <span class="carousel-control-prev-icon" style="margin-top:5px"></span>
      </div>
    </a>

    <a class="carousel-control-next" href="#demo" data-slide="next">
      <div class="slider">
        <span class="carousel-control-next-icon" style="margin-top:5px"></span>
      </div>
    </a>

  </div>


  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron" style="margin-top: 20px; border-radius: 20px;">
      <h3 class="service-title">Our Services</h3>
      <p >
        <p class="service-para">
          Online Electronic Centre is India’s <b>one-stop-shop</b> for leading chain of <b>multi-brand Electronics and Electrical service
          workshops offering wide array of services.</b> We focus on enhancing your uses experience by <b>offering world-class
          Electronic Appliances maintenance services.</b> Our sole mission is <b>“To provide Electronic Appliances care
          services to keep the devices fit and healthy and customers happy and smiling”.</b><br/>

          With well-equipped Electronic Appliances service centres and fully trained mechanics, we
          provide quality services with excellent packages that are designed to offer you great savings.

          Our state-of-art workshops are conveniently located in many cities across the country. Now you
          can book your service online by doing Registration.
        </p>
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="p-3 bg-secondary" id="Customer" style="margin: 80px 0px;">

  <!-- Start Happy Customer Jumbotron -->
    <div class="container">

    <!-- Start Customer Container -->
      <h2 class="text-center text-white mb-4">Happy Customers</h2>

      <div class="row mt-3">
        <div class="col-lg-3 col-sm-6">

          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2" style="border-radius: 20px;">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Nice work dude.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2" style="border-radius: 20px;">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">really amazing.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2" style="border-radius: 20px;">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Cant get it better.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2" style="border-radius: 20px;">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Service is good.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->

      </div> <!-- End Customer Row-->

    </div> <!-- End Customer Container -->

  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
   <h3 id="Contact"></h3>

   <!--Start Contact Us Container-->
    <h2 class="text-center mt-4 mb-4">Contact Us</h2> <!-- Contact Us Heading -->
    <div class="container text-right">

    <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
    <!-- End Contact Us 1st Column -->

    </div>

  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">

    <div class="container" >

    <!-- Start Footer Container -->
      <div class="row py-3">

      <!-- Start Footer Row -->
        <div class="col-md-6">

        <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <!-- <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a> -->
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small>Designed by Fakhruddin, Harsh, Dishang &copy; December 2024.
          </small>
          <small class="ml-2"><a href="Admin/index.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->

      </div> <!-- End Footer Row -->

    </div> <!-- End Footer Container -->

  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>

</body>

</html>