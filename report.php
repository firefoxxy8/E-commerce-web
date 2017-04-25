<html>
<?php 
session_start();
include("functions/functions.php");
?>
<head>
	<title>Report Product | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</head>

<body>
<?php include 'header.php';?>

<div id="vertical">
<div class="btn-group-vertical">
    
   
</div>
</div>

<div id="inside">

				<?php
if(isset($_GET['pro_id'])){
	$product_id=$_GET['pro_id'];
	$get_product="SELECT * FROM products WHERE product_id='$product_id'";
	$run_product=mysqli_query($con,$get_product);
	while($row_product=mysqli_fetch_array($run_product)){
		$product_name=$row_product['product_title'];
		$product_image=$row_product['product_image'];
		
	}
	?>

	
	<form method="GET" action="report.php" name="report" enctype="multipart/form-data">
	<table>
	<tr>
		<th colspan="2">Report about product  <?php echo $product_name;?></th>
	</tr>
	<tr>
		<th colspan="2"><?php echo "<img src='admin_area/product_images/$product_image' width='750px' height='500px'/>"; ?> </th>
	</tr>
	<tr>
		<th> Name : </th>
		<td><input type="text" name="name" placeholder="Type your name here"size="30" required/></td>
	</tr>
	<tr>
		<th> Email : </th>
		<td><input type="email" name="email" placeholder="Type your e-mail address here" size="30" required/></td>
	</tr>
	<tr>
		<td>Reasons for reporting this product </td>
		<td><textarea cols="20" rows="5" name="complaint"></textarea></td>
	</tr>
	<tr>
		<td><input type="submit" name="report_submit" value="Submit" style="float:right;"/></td>
		<td><input type="reset" name="reset" value="Reset"/> &nbsp &nbsp </td> <a style="font-weight:bolder;"href="index.php">Go back to Home Page</a>
	</tr>
	</table>
	</form>
<?php } ?>	

</div>


</body>
<footer>
<?php include 'footer.php';?></footer>
</html>
<?php 
if(isset($_GET['report_submit'])){
	$customer_name=$_GET['name'];
	$customer_email=$_GET['email'];
	$customer_complaint=$_GET['complaint'];
	
	$get_report="INSERT INTO new_product_complaint(name,email,complaint) VALUES('$customer_name','$customer_email','$customer_complaint')";
	$run_report=mysqli_query($con,$get_report);
	if($run_report){
			echo"<script>alert('Your Complaint has been recorded!')</script>";
			echo "<script>window.open('category.php','_self')</script>"; //javascript redirection to same page
			
		}
	
}
?>
