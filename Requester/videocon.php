<?php
session_start();

define('TITLE', 'Purchase');
define('PAGE', 'Purchase');

if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
    header('Location: RequesterLogin.php');
    exit();
}

$rEmail = $_SESSION['rEmail'];

include('includes/header.php');
include('../dbConnection.php');

?>

<!--<div class="col-md-4">!-->
<?php
$d2 = "Videocon";
$sql = "select * from uploadproduct where brand like '%$d2'";
$result = mysqli_query($conn,$sql);

if($result->num_rows > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$img = $row['product_image'];
		$price = $row['product_price'];
		$brand = $row['Brand'];
?>

		<table width="300" border="0" cellpadding="20" class="product-img">
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
		<a href="redmi.php">Redmi</a>
	</div>

<?php
include('includes/footer.php');
?>
