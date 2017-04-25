<html>
<?php include("functions/functions.php");
include("customer/db.php");
session_start(); ?>
<head>
<title>Vote | X-Music </title>
  <meta name="keywords" value="xmusic, music">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myscripts.js"></script>

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
  
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
<script>
  window.onload = function(){
  var days=7;
  var hou=23;
     var min = 59;
     var sec = 60;
     setInterval(function(){

       document.getElementById("timer").innerHTML =days+" Days "+hou+" : "+ min +" : " + sec +" Time left" ;
       sec--;
       if(sec == 00){
   
         min--;
         sec = 60;
          if (min == 00){
          hou--;
          min = 59;
          sec=60;
           if(hou==00){
            days--;
            hou=23;
            min = 59;
            sec=60;
              if(days==00){
              days=7;
              }
           }
    
        }
      }
      },1000);
    }
</script>
</head>
<body>
<?php include 'header.php';?>
<div id="timer" style="float: right;font-size: 20"></div>
<div id="poll">
<h3>Which product category you like the most?</h3>
<form>
<p align="center">
<table>
<tr>
<td>
Brass Instruments: &nbsp</td>
<td><input type="radio" name="vote" value="0" onclick="getVote(this.value)"></td>
</tr>
<tr>
<td>
KeyBoard Instruments: &nbsp</td>
<td><input type="radio" name="vote" value="1" onclick="getVote(this.value)"></td>
</tr>
<tr>
<td>
Percussion Instruments: &nbsp</td>
<td>
<input type="radio" name="vote" value="2" onclick="getVote(this.value)"></td>
</tr>
<tr><td>String Instruments: &nbsp</td>
<td>
<input type="radio" name="vote" value="3" onclick="getVote(this.value)"></td>
</tr>
<tr><td>
WoodWind Instruments: &nbsp</td>
<td>
<input type="radio" name="vote" value="4" onclick="getVote(this.value)"></td>
</tr>
</table>
</form>
</p>
</div>

<?php include 'footer.php';?>
</body>
</html>