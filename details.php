
<html>
<?php 
session_start();
include("functions/functions.php");
?>
<head>
	<title>Details | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<?php include 'header.php';?>



<div id="inside2">

				<?php
				if(isset($_GET['pro_id'])){
					
				$product_id=$_GET['pro_id'];
				$cat_id=$_GET['cat_id'];
				$get_pro="SELECT * FROM products where product_id='$product_id'";
	
				$run_pro = mysqli_query($con,$get_pro);
	
				while($row_pro = mysqli_fetch_array($run_pro)){
		
					$pro_id = $row_pro['product_id'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_image = $row_pro['product_image'];
					$pro_desc = $row_pro['product_desc'];
			
					echo "
			
						<div id='single_product'>
				
							<h3>$pro_title</h3>
							<img src='admin_area/product_images/$pro_image' width='400' height='300'/>	<a href='report.php?pro_id=$pro_id'>Report this product</a> 
							<p><b>Price : $pro_price </b></p>
							<p>Description: $pro_desc</p>
							<a href='category.php?cat=$cat_id'  id='button' style='align:left;'>Go Back</a> 
							
							<a href='category.php?pro_id=$pro_id&cat_id=$cat_id'><button id='button' style='align:right;'>Add to Cart</button></a>
							
						</div> 
				
						"; //url variable
				
						
				}	
			}			
				
				?>
				</div>

<?php include 'footer.php';?>
</body>
</html>
