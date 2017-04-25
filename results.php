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
				
				 if(isset($_GET['search'])){
	 
 $search_query=$_GET['user_query'];
 
 $get_pro="SELECT * FROM products where product_keywords like '%$search_query%'";
	
	$run_pro = mysqli_query($con,$get_pro);
	
	$count_pro=mysqli_num_rows($run_pro);
	
	if($count_pro==0){
		echo"<h2>No Results similiar to the word '$search_query'</h2>";

	}
	
	while($row_pro = mysqli_fetch_array($run_pro)){
		
			$pro_id = $row_pro['product_id'];
			$pro_cat = $row_pro['product_cat'];
			$pro_brand = $row_pro['product_brand'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			
			echo "
			
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='180' height='180'/>	
					<p><b>Price : $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a> 
					<a href='category.php?pro_id=$pro_id&cat_id=1'><button style='float:right;'>Add to Cart</button></a>
				</div> 
				
				"; //url variable
	}
 
 }
 


				?>
				

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
