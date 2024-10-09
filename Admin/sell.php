<?php
define('TITLE', 'sell');
define('PAGE', 'sell');

include('includes/header.php');
include('../dbConnection.php');

session_start();

if(isset($_SESSION['is_adminlogin'])){
	$aEmail = $_SESSION['aEmail'];
} else {
	echo "<script> location.href='login.php'; </script>";
}
?>

<div class="col-sm-9 col-md-10 mt-5">
	<h1>Sell book list </h1>
	<table class="table">
		<tr>
			<td>Product name</td>
			<td>brand</td>
			<td>cat</td>
			<td>price</td>
			<td>Cname</td>
			<td>adress</td>
			<td>city</td>
			<td>state</td>
			<td>Pincode</td>
		</tr>

<?php
	$q="select *from sell";
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
		//$mno=$row['mobileno'];
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
