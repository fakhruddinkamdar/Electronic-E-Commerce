<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title><?php echo TITLE ?></title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="../css/all.min.css">

   <!-- Custome CSS -->
   <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
   <!-- Top Navbar -->
   <nav class="navbar navbar-dark fixed-top bg-secondary p-0 shadow">
      <a class="navbar-brand col-sm-3 mr-0" href="dashboard.php">Online Electronic Centre</a>
   </nav>

   <!-- Side Bar -->
   <div class="container-md" style="margin-top:60px;">
      <div class="row mr-1 ml-1">

         <nav class="col-sm-2 sidebar d-print-none" style="background-color:#a2b887">
            <div class="sidebar-sticky">

               <ul class="nav flex-column">

                  <li class="nav-item">
                     <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link <?php if(PAGE == 'uploadproduct') { echo 'active'; } ?> " href="uploadProduct.php">
                        <i class="fas fa-upload"></i> Upload Product</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link <?php if(PAGE == 'sell') { echo 'active'; } ?> " href="sell.php">
                        <i class="fas fa-shopping-cart"></i> Sell</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'work') { echo 'active'; } ?>" href="work.php">
                  <i class="fab fa-accessible-icon"></i> Work Order</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'request') { echo 'active'; } ?>" href="request.php">
                  <i class="fas fa-align-center"></i> Requests</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'assets') { echo 'active'; } ?>" href="assets.php">
                  <i class="fas fa-database"></i> Assets</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'technician') { echo 'active'; } ?>" href="technician.php">
                  <i class="fab fa-teamspeak"></i> Technician</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'requesters') { echo 'active'; } ?>" href="requester.php">
                  <i class="fas fa-users"></i> Requester</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'sellreport') { echo 'active'; } ?>" href="soldProduectReport.php">
                  <i class="fas fa-table"></i> Sell Report</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'workreport') { echo 'active'; } ?>" href="workReport.php">
                  <i class="fas fa-table"></i> Work Report</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changePass.php">
                  <i class="fas fa-key"></i> Change Password</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" href="../Admin/index.php">
                  <i class="fas fa-sign-out-alt"></i> Logout</a>
                  </li>

               </ul>
            </div>
         </nav>

<?php include('includes/footer.php'); ?>
