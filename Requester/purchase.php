<?php
define('TITLE', 'Purchase');
define('PAGE', 'Purchase');

include('includes/header.php');
include('../dbConnection.php');

session_start();

if($_SESSION['is_login']) {
	$rEmail = $_SESSION['rEmail'];
} else {
	echo "<script> location.href='RequesterLogin.php'; </script>";
}

?>

<?php
	$sql="select * from uploadproduct";
	$result=mysqli_query($conn,$sql);

	if($result->num_rows > 0) {
?>

	<div class="product-list" style="margin-left:20px;">

			<?php
		while($row = mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$img=$row['product_image'];
			$price=$row['product_price'];
			$brand=$row['Brand'];
			?>

			<!-- <ul> -->
				<div class="product fa-ul">
					<img src='../Admin/<?php echo $img; ?>' height='150px' width='150px' class="shadow">
					<h3 align="center"><?php echo $brand; ?></h3>
					<h5 align="center"><?php echo $price; ?></h5>
					<center><a href="b.php?id=<?php echo $id;?>" class="btn btn-success">Buy now</a></center>
				</div>
			<!-- </ul> -->

		<?php
		}
		?>

	</div>

<?php
	}
?>

	<div class="container" style="clear:both;">
		<h1 align="center">Brands</h1>
		<a href="whirpool.php">whirpool</a>
		<a href="lg.php">LG</a>
		<a href="videocon.php">videcon</a>
		<a href="redmi.php">Redmi</a>
	</div>

<?php include('includes/footer.php'); ?>
