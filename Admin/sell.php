<?php
define('TITLE', 'sell');
define('PAGE', 'sell');

include('includes/header.php');
include('../dbConnection.php');

session_start();

if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];
} else {
	echo "<script> location.href='index.php'; </script>";
}
?>

<div class="col-sm-9 col-md-10 mt-2">
	<h1>Sell book list </h1>
	<table class="table">
		<tr>
			<th>Product name</th>
			<th>Brand</th>
			<th>Category</th>
			<th>Price</th>
			<th>Customer name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Pincode</th>
		</tr>

<?php
	$q="select * from sell";
	$run=mysqli_query($conn,$q);

	while($row = mysqli_fetch_assoc($run)) {
		$pname = $row['Pname'];
		$brand = $row['brand'];
		$cat = $row['cat'];

		$price = $row['price'];

		$cname=$row['Cname'];
		$add=$row['address'];
		$city=$row['city'];
		$state=$row['state'];
		// $mno=$row['mobileno'];
		$pin=$row['pincode'];
?>

	<tr>
		<td><?php echo $pname; ?></td>
		<td><?php echo $brand; ?></td>
		<td><?php echo $cat; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $cname; ?></td>
		<td><?php echo $add; ?></td>
		<td><?php echo $city; ?></td>
		<td><?php echo $state; ?></td>
		<td><?php echo $pin; ?></td>
	</tr>

<?php
	}
?>
	</table>
</div>
