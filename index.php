<html>
<head>
	<title>Welcome | X-Music </title>
	<meta name="keywords" value="xmusic, music">
	
	<link rel="shortcut icon" href="Images/favicon.ico"/>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>

	<script>
		$(document).ready(function() {
			if(!Modernizr.meter){
				alert('Sorry your brower does not support HTML5 progress bar');
			} else {
				var progressbar = $('#progressbar'),
					max = progressbar.attr('max'),
					time = (1000/max)*5,	
			        value = progressbar.val();

			    var loading = function() {
			        value += 1;
			        addValue = progressbar.val(value);
			        
			        $('.progress-value').html(value + '%');

			        if (value == max) {
			            clearInterval(animate);			           
			        }
			    };

			    var animate = setInterval(function() {
			        loading();
			    }, time);
			};
		});

	function redirect()
	{
	setTimeout("location.href = 'home.php';",5500);
	}
	</script>

</head>

<body onLoad=" redirect();">

<p align="center"><img src="Images/logo.png" style="width: 100px; height: 100px; margin: 10px"></p>

<h2 align="center"><b>Welcome to X-Music Official Website</b></h2>

<h3 id="welcomeHead">Our Team</h3>

<table width="100%" style="margin-left: 20px; text-align: center;">
	<tr>
		<td> <img src="Images/lakindu.png" height="100px" width="100px"></td>
		<td> <img src="Images/sudam.png" height="100px" width="100px"></td>
		<td> <img src="Images/vihanga.png" height="100px" width="100px"></td>
		<td> <img src="Images/kusal.png" height="100px" width="100px"></td>
		<td> <img src="Images/dilina.png" height="100px" width="100px"></td>
	</tr>

	<tr>
		<td>Lakindu Gunasekara</td>
		<td>Sudam Dissanayake</td>
		<td>Vihanga Bandara </td>
		<td>Kusal Fernando</td>
		<td>Dilina Perera</td>
	</tr>
	<tr>
		<td>UOW Number: w1582971</td>
		<td>UOW Number: w1582963</td>
		<td>UOW Number: w1582949</td>
		<td>UOW Number: w1582967</td>
		<td>UOW Number: w1583012</td>
	</tr>

</table>


<div class="cssload-container">
	<div class="cssload-whirlpool"></div>
</div>


<div class="demo-wrapper html5-progress-bar">
		<div class="progress-bar-wrapper">
			<progress id="progressbar" value="0" max="100"></progress>
			<span class="progress-value">0%</span>
		</div>
	</div>


</body>
</html>