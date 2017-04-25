<!DOCTYPE HTML>
<html>
<?php session_start();
include("functions/functions.php");
include("customer/db.php");
?>
<head>

	<title>Quiz Result | X-Music</title>
<meta name="keywords" value="xmusic, music">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myscripts.js"></script>

</head>
<body>
	<?php include 'header.php'; ?>

 	<?php
            
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
            $answer6 = $_POST['q6'];
            $answer7 = $_POST['q7'];
            $answer8 = $_POST['q8'];
            $answer9 = $_POST['q9'];
            $answer10 = $_POST['q10'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer2 == "C") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer3 == "A") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer4 == "A") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer5 == "B") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer6 == "A") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer7 == "C") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer8 == "A") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer9 == "C") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            if ($answer10 == "A") { $totalCorrect=$totalCorrect+2; }else{$totalCorrect--;}
            $color="white";
            if($totalCorrect==20) $color="green";
            else if($totalCorrect>15) $color="#228B22";
            else if($totalCorrect>10) $color="#DAA520";
            else if($totalCorrect>5) $color="#FFA07A";
            else $color="red";
            
        ?>
	<!-- Content -->
	<div class="content" style="background-color:<?php echo $color;?>; margin-left: 100px;">
		<?php 
		       echo "<div id='results'><h1>You got $totalCorrect / 20 Marks !</h1></div>";
		?>

 
	</div>
    <div style="margin-left: 100px; border-width: 1">
    <h2>Correct Answers</h2>

    1. Which 4 instruments belong to the string family? <br>
    C) Volin, Cello, Double Bass, Viola <br><br>

    2. Trumpet belongs to the _________ family.<br>
    C) Brass<br><br>

    3. The saxophone belongs to which family of instruments?<br>
    A) Woodwind<br><br>

    4. Identify the 4 instrument families:<br>
    A) Soprano, Alto, Tenor, Bass <br><br>

    5. Which animal does the flute best imitate?<br>
    B) A Bird<br><br>

    6. What are the 3 instrument families found in a concert band?<br>
    A) Woodwind, Brass, and Percussion<br><br>

    7. An instrument that requires electricity to produce sound is a/n:<br>
    C) Electrophone<br><br>

    8. The only string instrument which is tuned in FOURTHS instead of FIFTHS is a: <br>
    A) Violin<br><br>

    9. Which of these instruments is NOT a member of the String Family?<br>
    A) Tuba<br><br>

    10. The following are all examples of stringed instruments:<br>
    A) Drum, piano, violin <br><br>
    </div>
	<!-- Footer -->
	<?php include 'footer.php'; ?>

	
</body>
</html>