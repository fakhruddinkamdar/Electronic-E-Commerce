<?php
session_start();

define('TITLE', 'Requester Profile');
define('PAGE', 'RequesterProfile');

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header('Location: RequesterLogin.php');
    exit();
}

$rEmail = $_SESSION['rEmail'];

include('includes/header.php');
include('../dbConnection.php');

$sql = "SELECT * FROM requesterlogin_tb WHERE r_email='$rEmail'";
$result = $conn->query($sql);

if($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  $rName = $row["r_name"];
}

if(isset($_REQUEST['nameupdate'])) {
  if(empty(trim($_REQUEST['rName']))) {
    // msg displayed if required field missing
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> All fields are mandatory... </div>';
  } else {
    $rName = trim($_REQUEST["rName"]);
    if($rName == "" || empty($rName)) {
      echo "Name Cannot be empty";
      die("dsf");
    }

    $sql = "UPDATE requesterlogin_tb SET r_name = '$rName' WHERE r_email = '$rEmail'";

    if($conn->query($sql) == TRUE) { // on form submit success
      $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully... </div>';
    } else { // on form submit failed
      $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update! </div>';
    }
  }
}
?>

<div class="col-sm-6">
  <form class="mx-5"  method="POST">

    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>

    <div class="form-group">
      <label for="inputName">Name</label>
      <input required="true" type="text" class="form-control" id="inputName" name="rName" value="<?php echo $rName ?>" >
    </div>

    <button type="submit" class="btn btn-danger"  name="nameupdate" onClick="return blank();">Update
      <i class="fa fa-user"></i>
    </button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>

  </form>
</div>

</div>
</div>

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
  function blank() {
	  var nm = document.getElementById('inputName').value.trim();

	  if(!nm) {
      alert("Name cannot be blank");
      return false;
	  }
    return true;
  }
</script>