<html>
<?php 
include("customer/db.php");
include("functions/functions.php");
session_start();
 ?>
<head>
	<title>Feedback | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myscripts.js"></script>
 
<script src="http://maps.googleapis.com/maps/api/js">
  </script>
  <script>
  
function initialize() {
  var latlng = new google.maps.LatLng(6.984304, 79.881511);
  
   var latlng_02 = new google.maps.LatLng(6.865185, 79.859850);
  var mapOptions = {
    zoom: 10,
    center: latlng,
  center: latlng_02
  
  }
  var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

  var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title: 'Bow Bow'
  });
  var marker_02 = new google.maps.Marker({
    position: latlng_02,
      map: map,
      title: 'Bow Bow'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

  </script>

</head>

<body>
<?php include 'header.php';?>

<form method="get" action="#"id="contact" class="form-horizontal" enctype="text/plain" style="position:absolute;">
  <fieldset> 
  <legend>Feedback</legend>

     <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="name" placeholder="Name" required>
      </div>
    </div>
    <div class="checkbox" style="text-align: right;">
          <label>
            <input type="checkbox" name="subscribe" checked="sub"> Subscribe us
          </label>
        </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="email" placeholder="username@service.com" required>
      </div>
          </div>
   
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Comments</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="comment" data-gramm=""
        data-txt_gramm_id="81242a5a-5454-7c97-d825-2da1aed8cc4b"></textarea>
        <span class="help-block">Please let us know how to improve our service.</span>
      </div>
    </div>
    
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Rate Us</label>
      <div class="col-lg-10">
        <select name="rating"class="form-control">
          <option value="10">10</option>
          <option value="9">9</option>
          <option value="8">8</option>
          <option value="7">7</option>
          <option value="6">6</option>
          <option value="5">5</option>
          <option value="4">4</option>
          <option value="3">3</option>
          <option value="2">2</option>
          <option value="1">1</option>
          </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="reset" class="btn-default" name="reset" value="RESET">
        <input type="submit" class="btn-primary"name="form_feed" value="SUBMIT">
      </div>
    </div>
  </fieldset>
  <?php 

		if(isset($_GET['form_feed'])){
		$name=$_GET['name'];
		$email=$_GET['email'];
		$comment=$_GET['comment'];
		$rating=$_GET['rating'];
		$form_result="INSERT INTO review(Name,Email,Comment,Rating) VALUES ('$name','$email','$comment','$rating')";
		echo $form_result;
		$run_form=mysqli_query($con,$form_result);
		}

	?>
</form>


<div id="googleMap" style="width: 500px;height: 380px;position: all"></div>  

<a href="CV.php"><img src="Images/cv.png"></a><br>
<a href="CV.php">Check Our Amazing Team - CV's</a>
<hr style="margin-top: 40%">

<p id="output"></p>

<script>
/*function display() {
  var name,subscribe,email,comment,rate;
  name=document.getElementById("name").value;
  subscribe=document.getElementById("subscribe").checked;
  email=document.getElementById("email").value;
  comment=document.getElementById("comment").value;
  rate=document.getElementById("rate").value;
  document.getElementById("output").innerHTML="Hello, "+name+
  "<br/> Subscription: "+subscribe+
  "<br/> Your email is "+email+
  "<br/> Your feedback is "+comment+ 
  "<br/> Rated " +rate +
  "<br/> Thank You!";}*/

</script>

<?php include 'footer.php';?>
</body>
</html>