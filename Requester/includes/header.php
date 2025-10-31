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
  <nav class="navbar navbar-dark fixed-top bg-secondary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 mr-0" href="requesterProfile.php">Online Electronic Centre</a>
  </nav>

  <!-- Side Bar -->
  <div class="container-md">
    <div class="row mr-1 ml-1" style="margin-top:60px;">
      <nav class="col-sm-2 sidebar d-print-none" style="background-color:#a2b887">
        <div class="sidebar-sticky">

          <ul class="nav flex-column">

            <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="requesterProfile.php">
              <i class="fas fa-user"></i> Profile
              <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="submitRequest.php">
              <i class="fas fa-arrow-right"></i> Submit Request
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'Purchase') { echo 'active'; } ?>" href="purchase.php">
              <i class="fas fa-shopping-cart"></i> Purchase
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="checkStatus.php">
              <i class="fas fa-align-center"></i> Service Status
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="requesterChangePass.php">
              <i class="fas fa-key"></i> Change Password
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../logout.php">
              <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </li>

          </ul>

        </div>
      </nav>