
<html>
<?php 
session_start();
include("functions/functions.php");
?>
<head>
	<title>Checkout | X-Music </title>
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
				if(loggedin()){
					$userid=$_SESSION['userid'];
					$get_info="SELECT * from customer WHERE userid='$userid' ";
					$run_info=mysqli_query($con,$get_info);
					while($row=mysqli_fetch_array($run_info)){
						$firstname=$row['firstname'];
						$surname=$row['surname'];
						$email=$row['email'];
						$address=$row['address'];
					}
					?><form  method="post" action="process.php">
			<table class="feedbacktable" align="center">
					<?php
					echo "
					<tr>
						<th> First Name</th>
						<td> <input type='text' name='firstname' required size='38' value='$firstname' readonly/> </td>
					</tr>
					<tr>
						<th> Surname</th>
						<td> <input type='text' name='surname' required size='38' value='$surname' readonly/> </td>

					</tr>
					<tr>
						<th> Email</th>
						<td> <input type='text' name='email' required size='38' value='$email' readonly/> </td>

					</tr>
					
					<tr>
						<th> Address</th>
						<td> <input type='text' name='address' required size='38' value='$address' readonly/> </td>

					</tr> ";
					?>
				</table>
				<br/>
				<table width="40%" align="center">
					<tr align="center">
						<td> <input type="submit" name="Confirm" value="Confirm"> </td>
						<td>  <a href="cart.php" style="text-decoration:none;"/>Go back to Cart</a></td>
					</tr>
			</table>
		  	</form>	
			<?php
				} else {
				?>
					<form  method="post" action="registration.php">
			<table class="feedbacktable" align="center">
					<tr>
						<th> First Name</th>
						<td> <input type='text' name='firstname' required size='38'  /> </td>
					</tr>
					<tr>
						<th> Surname</th>
						<td> <input type='text' name='surname' required size='38'  /> </td>

					</tr>
					<tr>
						<th> Email</th>
						<td> <input type='text' name='email' required size='38'  /> </td>

					</tr>
					
					<tr>
						<th> Address</th>
						<td> <input type='text' name='address' required size='38'  /> </td>

					</tr>
				</table>
				<br/>
				<table width="40%" align="center">
					<tr align="center">
						<td> <input type="submit" name="Submit" value="Submit"> </td>
						<td> <input type="reset" name="reset" value="Reset" /></td>
					</tr>
			</table>
		  	</form>
<?php		
					
				}
				?>
</div>
<hr>
<?php include 'footer.php';?>

</body>
</html>