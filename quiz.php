<html>
<?php 
include("functions/functions.php");
include("customer/db.php");
session_start();
?>
<head>
    <title>Quiz | X-Music </title>
    <meta name="keywords" value="xmusic, music">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" href="Images/favicon.ico"/>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="myscripts.js"></script>



</head>

<body>

<?php include 'header.php';?>
<div id="vertical">
<div class="btn-group-vertical">
    <a href="#" class="btn btn-default">Brass Instruments</a>
    <a href="#" class="btn btn-default">KeyBoard Instruments</a>
    <a href="#" class="btn btn-default">Percussion Instruments</a>
    <a href="#" class="btn btn-default">String Instruments</a>
    <a href="#" class="btn btn-default">WoodWind Instruments</a>
   
</div>
</div>
 <div class="content">
    <hr width="80%">
    <script type="text/javascript">

        var timeInSecs;
        var ticker;

        function startTimer(secs){
            timeInSecs = parseInt(secs)-1;
            ticker = setInterval("tick()",1000);   // every second
            }

            function tick() {
            var secs = timeInSecs;
            if (secs>0) {
            --timeInSecs;
            }
            else {
            clearInterval(ticker);// stop counting at zero
            alert(" Sorry Your Time is Up ! ! ");
            location.reload();
            }

            document.getElementById("countdown").innerHTML = secs;
        }

        startTimer(60);   

    </script>

        <h1 style="background-color: #e0e0e0; margin-left: 200px;">
            Quiz Time 
          </h1>
          <div id="count" style="position: fixed; left: 89%;">
            <span id="countdown" style="font-family:arial, sans-serif; font-size:25px; color:#000">60</span>  SECONDS LEFT
          </div>
            
        <form action="grades.php" method="post" id="quiz" style="margin-left: 200px">
        
            <ol>
            
                <li style="background-color: #E6E6FA;padding: 1%; margin-bottom: 1%; margin-right: 15%;">                
                    <h3>Which 4 instruments belong to the string family? </h3>                    
                    <div>
                        <input type="radio" name="q1" id="q1" value="A" />
                        <label>A) Violin, Cello, Flute, Oboe </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q1" id="q1" value="B" />
                        <label>B) Violin, Cello, Trumpet, French horn </label>
                    </div> 
                    <div>
                        <input type="radio" name="q1" id="q1" value="C" />
                        <label>C) Volin, Cello, Double Bass, Viola</label> 
                    </div> 
                    <div>
                        <input type="radio" name="q1" id="q1" value="D" />
                        <label>D) Violin, Cello, Piano, Guitar </label>
                    </div>        
                </li>
                
               
                <li style="background-color: #F0F8FF; padding: 1%; margin-bottom: 1%; margin-right: 15%">                

                    <h3>Trumpet belongs to the _________ family. </h3> 

                    <div>
                        <input type="radio" name="q2" id="q2" value="A" />
                        <label>A) Woodwind </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q2" id="q2" value="B" />
                        <label>B) Percussion  </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q2" id="q2" value="C" />
                        <label>C) Brass </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q2" id="q2" value="D" />
                        <label>D) Strings </label>
                    </div>        
                </li>




                <li style="background-color: #E6E6FA ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3>The saxophone belongs to which family of instruments?</h3>                    
                    <div>
                        <input type="radio" name="q3" id="q3" value="A" />
                        <label>A) Woodwind </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q3" id="q3" value="B" />
                        <label>B) Brasswind </label>
                    </div> 
                    <div>
                        <input type="radio" name="q3" id="q3" value="C" />
                        <label>C) Strings</label> 
                    </div> 
                    <div>
                        <input type="radio" name="q3" id="q3" value="D" />
                        <label>D)  Percussions</label>
                    </div>        
                </li>
                
                <li style="background-color: #F0F8FF ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3> Identify the 4 instrument families:</h3>                    
                    <div> 
                        <input type="radio" name="q4" id="q4" value="A" />
                        <label>A) Soprano, Alto, Tenor, Bass </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q4" id="q4" value="B" />
                        <label>B) Woodwind, Brass, String, Percussion  </label>
                    </div> 
                    <div>
                        <input type="radio" name="q4" id="q4" value="C" />
                        <label>C) Aerophone, idiophone, chordophone, electrophone </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q4" id="q4" value="D" />
                        <label>D) Treble, Alto, Contra, Bass </label>
                    </div>        
                </li>
                
                <li style="background-color: #E6E6FA ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                 
                    <h3>Which animal does the flute best imitate?</h3>                    
                    <div>
                        <input type="radio" name="q5" id="q5" value="A" />
                        <label>A) An Elephant  </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q5" id="q5" value="B" />
                        <label>B) A Bird </label>
                    </div> 
                    <div>
                        <input type="radio" name="q5" id="q5" value="C" />
                        <label>C) A Monkey </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q5" id="q5" value="D" />
                        <label>D) A Snake </label>
                    </div>        
                </li>
                

                <li style="background-color: #F0F8FF ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3> What are the 3 instrument families found in a concert band? </h3>                    
                    <div>
                        <input type="radio" name="q6" id="q6" value="A" />
                        <label>A) Woodwind, Brass, and Percussion </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q6" id="q6" value="B" />
                        <label>B) Flute, Trombone, and Cymbals </label>
                    </div> 
                    <div>
                        <input type="radio" name="q6" id="q6" value="C" />
                        <label>C) Large, Medium, and Small  </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q6" id="q6" value="D" />
                        <label>D) Brass, Strings, and Percussion </label>
                    </div>        
                </li>
                
                <li style="background-color: #E6E6FA ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                 
                    <h3>An instrument that requires electricity to produce sound is a/n: </h3>                    
                    <div>
                        <input type="radio" name="q7" id="q7" value="A" />
                        <label>A) Sousaphone </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q7" id="q7" value="B" />
                        <label>B) Vibraphone </label>
                    </div> 
                    <div>
                        <input type="radio" name="q7" id="q7" value="C" />
                        <label>C) Electrophone </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q7" id="q7" value="D" />
                        <label>D) Aerophone </label>
                    </div>        
                </li>
                
               
                 
                <li style="background-color: #F0F8FF ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3>The only string instrument which is tuned in FOURTHS instead of FIFTHS is a: </h3>                    
                    <div>
                        <input type="radio" name="q8" id="q8" value="A" />
                        <label>A) Violin  </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q8" id="q8" value="B" />
                        <label>B) Viola  </label>
                    </div> 
                    <div>
                        <input type="radio" name="q8" id="q8" value="C" />
                        <label>C) Cello </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q8" id="q8" value="D" />
                        <label>D) Bass </label>
                    </div>        
                </li>
                
                <li style="background-color: #E6E6FA ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3>Which of these instruments is NOT a member of the String Family? </h3>                    
                    <div>
                        <input type="radio" name="q9" id="q9" value="A" />
                        <label>A) Tuba </label>
                    </div>                                        
                    <div>
                        <input type="radio" name="q9" id="q9" value="B" />
                        <label>B) Harp </label>
                    </div> 
                    <div>
                        <input type="radio" name="q9" id="q9" value="C" />
                        <label>C) String Bass </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q9" id="q9" value="D" />
                        <label>D) Piano </label>
                    </div>        
                </li>
                
                <li style="background-color: #F0F8FF ; padding: 1%; margin-bottom: 1%; margin-right: 15%">                
                    <h3>The following are all examples of stringed instruments: </h3>                    
                    <div>
                        <input type="radio" name="q10" id="q10" value="A" />
                        <label>A) Drum, piano, violin  </label> 
                    </div>                                        
                    <div>
                        <input type="radio" name="q10" id="q10" value="B" />
                        <label>B) Triangle, tuba, cello </label>
                    </div> 
                    <div>
                        <input type="radio" name="q10" id="q10" value="C" />
                        <label>C) Double bass, viola, violin </label> 
                    </div> 
                    <div>
                        <input type="radio" name="q10" id="q10" value="D" />
                        <label>D) Harp, flute, clarinet </label>
                    </div>        
                </li>
                
                           
               
            <input type="submit" value="Submit Quiz" style="margin-top:1%;" />
            </ol>
            
        </form>
    </div>
    <?php include 'footer.php';?>

</body>
</html>

