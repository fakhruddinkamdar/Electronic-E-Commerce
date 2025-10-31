<?php
session_start();

define('TITLE', 'Product Report');
define('PAGE', 'sellreport');

if (!isset($_SESSION['is_adminlogin']) || !$_SESSION['is_adminlogin']) {
    header('Location: index.php');
    exit();
}

$rEmail = $_SESSION['aEmail'];

include('includes/header.php');
include('../dbConnection.php');

?>

<div class="col-md-10 mt-5">
  <form action="" method="POST" class="d-print-none">

    <div class="form-row" style="justify-content: safe">
      <div class="form-group col-md-2 mt-2 ml-2">
        <input type="date" class="form-control" id="startdate" name="startdate">
      </div>

      <div class="ml-2" style="align-self:center">  To  </div>

      <div class="form-group col-md-2 mt-2 ml-2">
        <input type="date" class="form-control" id="enddate" name="enddate">
      </div>

      <div class="form-group mt-2 ml-2">
        <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
      </div>
    </div>

  </form>
  <?php
    if(isset($_REQUEST['searchsubmit'])) {
        $startdate = $_REQUEST['startdate'];
        $enddate = $_REQUEST['enddate'];
        // $sql = "SELECT * FROM customer_tb WHERE cpdate BETWEEN '2018-10-11' AND '2018-10-13'";
        $sql = "SELECT * FROM customer_tb WHERE cpdate BETWEEN '$startdate' AND '$enddate'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
        echo '
          <p class=" bg-dark text-white p-2 mt-4">Details</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Customer ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Address</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price Each</th>
                <th scope="col">Total</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>';

          while($row = $result->fetch_assoc()) {
            echo '<tr>
              <th scope="row">'.$row["custid"].'</th>
              <td>'.$row["custname"].'</td>
              <td>'.$row["custadd"].'</td>
              <td>'.$row["cpname"].'</td>
              <td>'.$row["cpquantity"].'</td>
              <td>'.$row["cpeach"].'</td>
              <td>'.$row["cptotal"].'</td>
              <td>'.$row["cpdate"].'</td>
            </tr>';
          }

          echo '<tr>
          <td>
            <form class="d-print-none">
              <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
            </form>
          </td>
          </tr></tbody>
      </table>';
      } else {
        echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found ! </div>";
      }
    }
  ?>
  </div>
</div>
</div>

<?php include('includes/footer.php'); ?>