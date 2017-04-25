
<html>
<?php 
include("customer/db.php");
include("functions/functions.php");
session_start();
?>
<head>
	<title>Home | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
<?php include 'header.php';?>


<div id="inside">

			<?php 
if(isset($_POST['Confirm'])){
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$send_check="INSERT INTO checkoutdetails(fname,sname,email,address) VALUES ('$firstname','$surname','$email','$address')";
	$run_check=mysqli_query($con,$send_check);
	echo "Proceed to checkout bill";
	echo "<a href='process.php?checkout=1'>Proceed</a> &nbsp <a href='cart.php'>Back</a>";
}
if(isset($_GET['checkout'])){
	$sql="SELECT * FROM checkoutdetails ORDER BY id DESC LIMIT 1";
	$run_sql=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_sql)){
		$id=$row['id'];
		$fname=$row['fname'];
		$sname=$row['sname'];
		$email=$row['email'];
		$address=$row['address'];
	}
	?>
	<h2 style="padding-left:10%; background-color: #e0e0e0; padding-top: 1%; padding-bottom: 1%;">Order Invoice #<?php echo $id;?></h2>
<table style="margin-left: 10%; padding-right: 1%; padding-top: 1%; width: 40%;">
  <tr>
    <td>First Name: </td>
    <td><?php echo $fname ;?></td>
  </tr>
   <tr>
    <td>Surname: </td>
    <td><?php echo $fname ;?></td>
  </tr>
<tr>
    <td>Email: </td>
    <td><?php echo $email ;?></td>
  </tr>
  <tr>
    <td>Address: </td>
    <td><?php echo $address ;?></td>
  </tr>
</table>
<table style="margin-left: 10%; padding-right: 1%; padding-top: 1%; width: 40%;">
<tr>
    <td>Grand Total</td>
    <td> LKR <?php echo total_price(); ;?></td>
  </tr>

</table>
<?php
}
?>
<div style="float: right;">
<button>
<a href="home.php">Go back to Home Page</a></button></div>
</div>
<?php include 'footer.php';?>

</body>
</html>