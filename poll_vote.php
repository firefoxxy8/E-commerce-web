<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$brass = $array[0];
$keyboard = $array[1];
$percussion = $array[2];
$string = $array[3];
$woodwind = $array[4];

if ($vote == 0) {
  $brass = $brass + 1;
}
if ($vote == 1) {
  $keyboard = $keyboard + 1;
}

if ($vote == 2) {
  $percussion = $percussion + 1;
}
if ($vote == 3) {
  $string = $string + 1;
}
if ($vote == 4) {
  $woodwind = $woodwind + 1;
}



//insert votes to txt file
$insertvote = $brass."||".$keyboard."||".$percussion."||".$string."||".$woodwind;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Brass Instruments:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($brass/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>'
height='20'>
<?php echo(100*round($brass/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>%
</td>
</tr>
<tr>
<td>KeyBoard:</td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($keyboard/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>'
height='20'>
<?php echo(100*round($keyboard/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>%
</td>
</tr>

<tr>
<td>Percussion: </td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($percussion/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>'
height='20'>
<?php echo(100*round($percussion/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>%
</td>
</tr>

<tr>
<td>String: </td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($string/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>'
height='20'>
<?php echo(100*round($string/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>%
</td>
</tr>

<tr>
<td>WoodWind: </td>
<td>
<img src="Images/poll.gif"
width='<?php echo(100*round($woodwind/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>'
height='20'>
<?php echo(100*round($woodwind/($brass+$keyboard+$percussion+$string+$woodwind),5)); ?>%
</td>
</tr>
</table>