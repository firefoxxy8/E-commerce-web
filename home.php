<?php
include("functions/functions.php");
session_start();
$con=mysqli_connect("localhost:3306","root","root","ecommerce");

?>

<html>
<head>
	<title>Home | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	<link rel="stylesheet" href="stylesheet.css">
	<link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <script src="Testimonials/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="Testimonials/jquery.bxslider.min.js" type="text/javascript"></script>
<link href="Testimonials/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
         $(document).ready(function () {           
             $('.bxslider').bxSlider({
                 mode: 'vertical',
                 slideMargin: 3,
                 auto:true
             });             
         });
    </script>

</head>

<body>
<?php include 'header.php';?>

<div id="vertical">
<div class="btn-group-vertical">
<div class="btn btn-default">
   <?php getCats();?>
   </div>
</div>
</div>

<div id="cp_widget_4dd14fa4-4e1e-4106-9676-098eb951db75" style="width: 100%; height:430px">...</div><script type="text/javascript">
var cpo = []; cpo["_object"] ="cp_widget_4dd14fa4-4e1e-4106-9676-098eb951db75"; cpo["_fid"] = "AoJAuddIkcgU";
var _cpmp = _cpmp || []; _cpmp.push(cpo);
(function() { var cp = document.createElement("script"); cp.type = "text/javascript";
cp.async = true; cp.src = "//www.cincopa.com/media-platform/runtime/libasync.js";
var c = document.getElementsByTagName("script")[0];
c.parentNode.insertBefore(cp, c); })(); </script><noscript></noscript>

<div id="inside">

<hr id="fronthr">

<div style="width:90%;margin-left:80px;">
  <h3 style="font-style:oblique">What are customers are saying..</h3>
  <hr/>
  <ul class="bxslider">
  <?php 
$get_feedback="SELECT * FROM review ORDER BY RAND()LIMIT 0,4";
$run_feedback=mysqli_query($con,$get_feedback);
while($row_feedback=mysqli_fetch_array($run_feedback)){
		$name=$row_feedback['Name'];
		$email=$row_feedback['Email'];
		$comment=$row_feedback['Comment'];
		$rating=$row_feedback['Rating'];
		$date=$row_feedback['Date'];
		
?>
  <li><blockquote style="margin-right: 60px;"><p style="text-align:right;margin-right:60px;"><?php echo $date."-".$comment."-".$name."-".$rating." Stars"; ?></p>
  </blockquote>
  </li>
<?php } ?>

  </ul>
 </div>
<fieldset id="frontfield">
<h3> Featured Instruments </h3>
<table id="frontTable">
  <tr>
   <?php getCatshomefoot(); ?>
  </tr>
  <tr>
    <td><div class="brightness">
        <a href="category.php?cat=1"><img  src="Images/brass.jpg" style="width: 150px;height: 150px;"></a></div>
        </div>
    </td>

    <td>
      <div class="brightness">
        <a href="category.php?cat=2"><img  src="Images/keyboard.jpg"style="width: 150px;height: 150px;"></a></div>
        </div>
    </td>
    <td>
    <div class="brightness">
        <a href="category2.php?cat=3"><img  src="Images/percussion.jpg"style="width: 150px;height: 150px;"></a></div>
        </div>
        </td>
        <td>
          <div class="brightness">
        <a href="category3.php?cat=4"><img  src="Images/string.jpg"style="width: 150px;height: 150px;"></a></div>
        </div>
        </td>
        <td>
          <div class="brightness">
        <a href="category4.php?cat=5"><img  src="Images/woodwind.jpg"style="width: 150px;height: 150px;"></a></div>
        </div>
        </td>
        </tr>
  </table>
</fieldset>
</div>
<?php include 'footer.php';?>

</body>
</html>