<?php
session_start();

define('TITLE', 'Change Password');
define('PAGE', 'Requesterchangepass');

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
  header('Location: requesterLogin.php');
  exit();
}

include('includes/header.php');
include('../dbConnection.php');

$rEmail = $_SESSION['rEmail'];

if(isset($_REQUEST['passupdate'])) {
  if(($_REQUEST['rPassword'] == "")) {
    // msg displayed if required field missing
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> All fields are mandatory... </div>';
  } else {
    $sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
      $rPass = $_REQUEST['rPassword'];
      $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";

      if($conn->query($sql) == TRUE){
        // below msg display on form submit success
        $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully... </div>';
        header("Refresh: 0; url=/OSMS/logout.php");
        session_destroy();
      } else {
        // below msg display on form submit failed
        $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update! </div>';
      }

    }
  }
}

?>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">

      <form class="mt-2 mx-5" method="POST">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
        </div>

        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>

        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update
          <i class="fas fa-key"></i>
        </button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>

      </form>

    </div>

  </div>
</div>
</div>
</div>

<?php
include('includes/footer.php');
?>