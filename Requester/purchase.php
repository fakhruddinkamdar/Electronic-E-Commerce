<?php
define('TITLE', 'Purchase');
define('PAGE', 'Purchase');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}


?>
<!--<div class="col-sm-4"><br>!-->
<?php
$sql="select * from uploadproduct";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
{
while($row=mysqli_fetch_assoc($result))
{
		$id=$row['id'];
		$img=$row['product_image'];
		$price=$row['product_price'];
		$brand=$row['Brand'];
?>		
	
					
					
						<!--<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:50px; padding:16px;margin-bottom:10px;width:500px !important;float:left;margin-right:2px;" align="center">!-->
						
						<!--<div class="col-sm-4"><center>!-->
						<table width="300" border="0" cellpadding="20">
						<tr>
						<td align="center" valign="center">
						
						<?php echo "<img src='../Admin/$img' height='150px' width='150px'>";?></center>
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
			
	
	<div class="container" style="clear:both;">
		<h1 align="center">Brands</h1>
		<a href="whirpool.php">whirpool</a>
		<a href="lg.php">LG</a>
		<a href="videocon.php">videcon</a>
		<a href="redmi.php">Redmi</a>
	</div>


<?php
include('includes/footer.php'); 
?>
