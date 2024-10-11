<?php
define('TITLE', 'uploadproduct');
define('PAGE', 'uploadproduct');

include('includes/header.php');
include('../dbConnection.php');

session_start();

if(isset($_SESSION['is_adminlogin'])) {
	$aEmail = $_SESSION['aEmail'];
} else {
	echo "<script> location.href='index.php'; </script>";
}
?>

<?php
if(isset($_REQUEST['submit1'])) {
 	// Checking for Empty Fields
	if(($_REQUEST['pname'] == "") ||
		($_REQUEST['pprice'] == "") ||
		($_REQUEST['pqty'] == "") ||
		($_REQUEST['pcategory'] == "") ||
		($_REQUEST['pb'] == "")) {
		//echo "error";
		$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> All fields are mandatory </div>';
		// msg displayed if required field missing
		//$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
	} else {
		// Assigning User Values to Variable
		$prname = $_REQUEST['pname'];
		$prprice = $_REQUEST['pprice'];
		$prqty = $_REQUEST['pqty'];

		$prcategory = $_REQUEST['pcategory'];
		$v1=rand(1111,9999);
		$v2=rand(1111,9999);
		$v3=$v1.$v2;

		$v3=md5($v3);
		$fnm=$_FILES["pimage"]["name"];
		$dst="./Product_image/".$v3.$fnm;
		$dst1="Product_image/".$v3.$fnm;

		move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

		$pbrand=$_REQUEST['pb'];

		$sql = "INSERT INTO uploadproduct(product_name,product_price,product_qty,product_image,product_category,Brand) VALUES ('$prname','$prprice', '$prqty', '$dst1', '$prcategory','$pbrand')";

		if($conn->query($sql) == TRUE) {
			// below msg display on form submit success
			//echo "Successfully";
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Uploaded Successfully </div>';
		} else {
			//echo "error";
			$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Not Uploaded </div>';
		}
	}
}
?>

<!-- form !-->
<div class="col-sm-9 col-md-10 mt-2">
	<!--<div class="block">
		<div class="box round first"> !-->
			<h2> Add new product </h2>
			<form class="mx-5" name="form1" action="" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label for="productname">Product Name</label>
					<input type="text" class="form-control" id="inputRequestInfo" placeholder="Product Name" name="pname">
				</div>

				<div class="form-group">
					<label for="inputRequestInfo">Product Price</label>
					<input type="text" class="form-control" id="inputRequestInfo" placeholder="Product Price" name="pprice">
				</div>


				<div class="form-group">
					<label for="inputRequestInfo">Product Quantity</label>
					<input type="text" class="form-control" id="inputRequestInfo" placeholder="Product Quantity" name="pqty">
				</div>


				<div class="form-group">
					<label for="inputRequestInfo">Product Image</label>
					<input type="file" class="form-control" id="inputRequestInfo" name="pimage">
				</div>

				<div class="form-group">
					<label for="inputRequestInfo">Product Category</label>
					<!--<input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">!-->
					<select name="pcategory">
						<option value="fridge"> fridge </option>
						<option value="tv"> T.V. </option>
						<option value="washing_machine"> Washing Machine </option>
					</select>
				</div>

				<div class="form-group">
					<label for="inputRequestInfo">Product Brand</label>
					<!--<input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="pb">!-->
					<select name="pb">
						<option value="Whirpool"> whirlpool </option>
						<option value="LG"> lg </option>
						<option value="Videocon"> videocon </option>
						<option value="redmi"> Redmi </option>
					</select>
				</div>

				<button type="submit" class="btn btn-danger" name="submit1">Upload</button>

			</form>
			<?php if(isset($msg)) {echo $msg; } ?>

		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>