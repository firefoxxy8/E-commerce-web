<?php

$con=mysqli_connect("localhost:3306","root","root","ecommerce"); 
//getting the user ip address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}



//creating the shopping cart and putting it into cart database
function cart(){
		
if(isset($_GET['pro_id'])){
	global $con;
	$ip=getIp();
	$pro_id=$_GET['pro_id'];
	$cat_id=$_GET['cat_id'];
	$check_pro="SELECT * FROM cart where ip_add='$ip' ANd p_id='$pro_id'";
	
	$run_check=mysqli_query($con,$check_pro);
	
	if(mysqli_num_rows($run_check)>0){
		$insert_pro="UPDATE  `ecommerce`.`cart` SET  `qty` =  qty+1 WHERE ip_add='$ip' ANd p_id='$pro_id'";
		$run_pro=mysqli_query($con,$insert_pro);
		echo "<script>window.open('category.php?cat=$cat_id','_self')</script>";
	} else {
		
		$insert_pro="INSERT INTO cart (p_id,ip_add,qty) VALUES ('$pro_id','$ip',qty+1)";
		$run_pro=mysqli_query($con,$insert_pro);
		echo "<script>window.open('category.php?cat=$cat_id','_self')</script>";
	}
	
	
	
}
	
	
}
//getting the total added items
function total_items(){ 
	$item_total=0;
	if(isset($_GET['pro_id'])){  //pro_id is the return value of the add cart button
		global $con;
		
		$ip=getIp();
		
		$get_items ="SELECT * FROM cart WHERE ip_add='$ip'";
		
		$run_items=mysqli_query($con,$get_items);
		
		while($row_items=mysqli_fetch_array($run_items)){
			
			$item_total=$item_total+$row_items['qty']; //getting the quantity value and adding it to items total
			
		}
		
		
	} else {
		global $con;
		
		$ip=getIp();
		
		$get_items ="SELECT * FROM cart WHERE ip_add='$ip'";
		
		$run_items=mysqli_query($con,$get_items);
		
		while($row_items=mysqli_fetch_array($run_items)){
			
			$item_total=$item_total+$row_items['qty']; //getting the quantity value and adding it to items total
			
		}
		
		
		
	}
	echo $item_total;
	
}
//getting the total price of the items in the cart
function total_price(){
	$total_price=0;
	global $con;
	$ip=getIp();
	$sel_price="SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price=mysqli_query($con, $sel_price);
	
	while ($pro_price=mysqli_fetch_array($run_price)){
		
		$pro_id=$pro_price['p_id'];
		$pro_qty=$pro_price['qty'];
		$pro_price="SELECT * FROM products WHERE product_id='$pro_id'";
		
		$run_pro_price=mysqli_query($con,$pro_price);
		
		while($row_p_price=mysqli_fetch_array($run_pro_price)){
			$pro_price=$row_p_price['product_price'];
			if($pro_qty>1){
				$pro_price=$pro_price*$pro_qty;
			}
			$total_price=$total_price+$pro_price;
		}
		
		
	}
	echo "Rs ", $total_price;
}

//getting the categories

function getCats(){
	global $con; //will make the variable work inside the function
	
	$get_cats="select * from categories";
	
	$run_cats=mysqli_query($con, $get_cats);
	 //retrieve all data from the table
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['cat_id']; //fetching the cat id from table categories
		$cat_title=$row_cats['cat_title']; // and putting at as a local variable
		echo "<li><a href='category.php?cat=$cat_id' class='btn btn-default' style='text_decoration:none;'>$cat_title</a></li>";
		
	}
	
}
function getCatsdrop(){
	global $con; //will make the variable work inside the function
	
	$get_cats="select * from categories";
	
	$run_cats=mysqli_query($con, $get_cats);
	 //retrieve all data from the table
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['cat_id']; //fetching the cat id from table categories
		$cat_title=$row_cats['cat_title']; // and putting at as a local variable
		echo "<li><a href='category.php?cat=$cat_id' style='text_decoration:none;'>$cat_title</a></li>";
		
	}
	
}
function getCatshomefoot(){
	global $con; //will make the variable work inside the function
	
	$get_cats="select * from categories";
	
	$run_cats=mysqli_query($con, $get_cats);
	 //retrieve all data from the table
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['cat_id']; //fetching the cat id from table categories
		$cat_title=$row_cats['cat_title']; // and putting at as a local variable
		echo "
			<td>$cat_title</td>	
		";
		
	}
	
}
function getBrands(){
	global $con; //will make the variable work inside the function
	
	$get_brands="select * from brands";
	
	$run_brands=mysqli_query($con, $get_brands);
	 //retrieve all data from the table
	while ($row_brands=mysqli_fetch_array($run_brands)){
		$brand_id=$row_brands['brand_id']; //fetching the cat id from table categories
		$brand_title=$row_brands['brand_title']; // and putting at as a local variable
		echo "<li><a href='category.php?brand=$brand_id'>$brand_title</a></li>";
		
	}
	
}
//getting all the product for the index page
function getPro(){
	if(!isset($_GET['cat'])){//if unset or not checked to be used through category then dont go inside if
		if(!isset($_GET['brand'])){ //if unset or not checked to be used through brands then dont go inside if
	global $con; 
	
	$get_pro="SELECT * FROM products ORDER BY RAND()LIMIT 0,6";
	
	$run_pro = mysqli_query($con,$get_pro);
	
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
					<p><b>Price : Price : Rs $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a> 
					<a href='category.php?pro_id=$pro_id'><button id='button'>Add to Cart</button></a>
					</div>
				</div> 
				
				"; //url variable
	}
	}	
}
}
function getCatPro(){
//getting the products according to the category item.
if(isset($_GET['cat'])){ //if set or checked to be used through category then go inside if
	
	$cat_id = $_GET['cat'];
	
	global $con; 
	
	$get_cat_pro="SELECT * FROM products WHERE product_cat='$cat_id'";
	
	$run_cat_pro = mysqli_query($con,$get_cat_pro);
	
	$count_cats=mysqli_num_rows($run_cat_pro);
	
	if($count_cats==0){
		echo"<h2>There is no product to be shown in this category</h2>";

	}
	while($row_cat_pro = mysqli_fetch_array($run_cat_pro)){
		
			$pro_id = $row_cat_pro['product_id'];
			$pro_cat = $row_cat_pro['product_cat'];
			$pro_brand = $row_cat_pro['product_brand'];
			$pro_title = $row_cat_pro['product_title'];
			$pro_price = $row_cat_pro['product_price'];
			$pro_image = $row_cat_pro['product_image'];
			
			
			
				echo "

					<div id='single_product'>		
					<h3 style='background:#E0E0E0;'>$pro_title</h3>
					
					<img src='admin_area/product_images/$pro_image' width='180' height='180'/>	
					<p><b>Price : Rs $pro_price </b></p>
					
					
					<a href='details.php?pro_id=$pro_id&cat_id=$cat_id'><button id='button' style='align:left;'>Details</button></a> 
					<a href='category.php?pro_id=$pro_id&cat_id=$cat_id'><button id='button' style='align:right;'>Add to Cart</button></a>
				</div>
				"; //url variable
	}
}
}
function getBrandPro(){
//getting the products according to the brands
if(isset($_GET['brand'])){ //if set or checked to be used through brands then go inside if else ignore
	
	$brand_id = $_GET['brand'];
	
	global $con; 
	
	$get_brand_pro="SELECT * FROM products WHERE product_brand='$brand_id'";
	
	$run_brand_pro = mysqli_query($con,$get_brand_pro);
	
	$count_brands=mysqli_num_rows($run_brand_pro);
	
	if($count_brands==0){
		echo"<h2>There is no product to be shown in this category</h2>";

	}
	while($row_brand_pro = mysqli_fetch_array($run_brand_pro)){
		
			$pro_id = $row_brand_pro['product_id'];
			$pro_cat = $row_brand_pro['product_cat'];
			$pro_brand = $row_brand_pro['product_brand'];
			$pro_title = $row_brand_pro['product_title'];
			$pro_price = $row_brand_pro['product_price'];
			$pro_image = $row_brand_pro['product_image'];
			
			
			
				echo "
			
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='180' height='180'/>	
					<p><b>Price : Rs $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id'><button id='button' style='align:left;'>Details</button></a> 
					<a href='category.php?pro_id=$pro_id'><button id='button' style='align:right;'>Add to Cart</button></a>
				</div> 
				
				"; //url variable
	}
}
}
function loggedin(){
	//to check whether user has logged in or not
	if(isset($_SESSION['customer_user'])){
		return true;								
	} else {
		return false;
	}
	
}
?>