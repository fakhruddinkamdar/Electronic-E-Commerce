<?php
session_start();

define('TITLE', 'Purchase');
define('PAGE', 'Purchase');

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header('Location: requesterLogin.php');
    exit();
}

$rEmail = $_SESSION['rEmail'];

include('includes/header.php');
include('../dbConnection.php');

?>
<div class="col-md-4">
<?php
	$d2=$_GET['id'];
	$sql="select * from uploadproduct where id like '%$d2'";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_assoc($result);

	$id=$row['id'];
	$img=$row['product_image'];
	$name=$row['product_name'];
	$price=$row['product_price'];
	$cat=$row['product_category'];
	$brand=$row['Brand'];
?>



	<div class="item-purchase shadow" align="center">

		<?php echo "<img src='../Admin/$img' class='shadow' width='150px' height='150px' style='border-radius: 12px; margin-bottom: 20px;' >";?></br>
		<h4 align="center"> Name: <?php echo $name; ?></h4>
		<h4 align="center"> Brand: <?php echo $brand; ?></h4>
		<h4 align="center"> Price: <?php echo $price; ?></h4>

	</div>

	<form  action="" method="post">
		<table class="table">
			<tr>
				<td> Enter Name </td>
				<td> <input type="text" name="n1" placeholder="Enter name" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td> Enter Adress </td>
				<td> <input type="text" name="add" placeholder="Enter Address" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td> Enter City</td>
				<td> <input type="text" name="city" placeholder="Enter City" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td> Enter State </td>
				<td> <input type="text" name="state" placeholder="Enter State" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td> Enter Mobile No </td>
				<td> <input type="text" name="mno" placeholder="Enter Mobile No" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td> Enter Pincode </td>
				<td> <input type="text" name="pin" placeholder="Enter Pincode" class="form-control" required="required"> </td>
			</tr>

			<tr>
				<td colspan="2"><input type="submit" name="sub" value="Buy Now" class="btn btn-primary" required="required"></td>
			</tr>

		</table>
	</form>

	<?php

	if(isset($_POST['sub'])) {
		$n1=$_REQUEST['n1'];
		$add=$_REQUEST['add'];
		$city=$_REQUEST['city'];
		$state=$_REQUEST['state'];
		$mno=$_REQUEST['mno'];
		$pin=$_REQUEST['pin'];

		$sql="insert into sell(Pname,brand,cat,price,Cname,address,city,state,mobileno,pincode)"
			." values('$name','$brand','$cat','$price','$n1','$add','$city','$state','$mno','$pin')";

		if($conn->query($sql) == TRUE) echo "<script>alert('Your Product will be delivered soon...')</script>";
		else echo "<script>alert('Something is Wrong. Please Try Again')</script>";

	}
	?>

</div>

<!-- <div class="container">
	<h1 align="center">Brands</h1>
	<a href="whirpool.php">whirpool</a>
	<a href="#">LG</a>
	<a href="#">videcon</a>
	<a href="#">redmi</a>
</div> -->


<?php include('includes/footer.php'); ?>
