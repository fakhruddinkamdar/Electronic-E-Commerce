<?php
	session_start();

	define('TITLE', 'Purchase');
	define('PAGE', 'Purchase');

	include('includes/header.php');
	include('../dbConnection.php');

	if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
		header('Location: requesterLogin.php');
		exit();
	}

	$rEmail = $_SESSION['rEmail'];

?>
<!--<div class="col-md-4">!-->
<?php
	$d2="Redmi";
	$sql="select * from uploadproduct where brand like '%$d2'";
	$result=mysqli_query($conn,$sql);

	if($result->num_rows > 0) {

		while($row=mysqli_fetch_assoc($result)) {

			$id=$row['id'];
			$img=$row['product_image'];
			$price=$row['product_price'];
			$brand=$row['Brand'];
?>

						<!--<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:50px; padding:16px;margin-bottom:10px;" align="center">!-->
			<table width="300" border="0" style="margin-top:40px;" cellpadding="20" class="product-img">
				<tr>
				<td align="center" valign="center">

				<?php echo "<img src='../Admin/$img' height='150px' width='150px' class='product-img'>";?></center>
				<br/>
				<h3 align="center"><?php echo $price; ?></h3>
				<h3 align="center"><?php echo $brand; ?></h3>

				<center><a href="b.php?id=<?php echo $id;?>" class="btn btn-success"> Buy now</a></center>
				</td>
				</tr>
			</table>

<?php
		}
	}
?>

	<div class="container">
		<h1 align="center">Brands</h1>
		<a href="whirpool.php">whirpool</a>
		<a href="lg.php">LG</a>
		<a href="videocon.php">videcon</a>
		<a href="redmi.php">redmi</a>
	</div>

<?php
include('includes/footer.php');
?>
