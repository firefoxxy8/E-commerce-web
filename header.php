
<div id="top">
<header>
	<img src="Images/logo1.gif" title="X-Music" height="70px" width="95px">
  <img src="Images/call.png" title="Call Us" width="30px" height="30px"> Call Us: 011-2323242 |
  

						| Welcome 
						<?php 
						if(isset($_SESSION['customer_user'])){
							$name=$_SESSION['customer_user'];
							echo $name;
							} else if(isset($_SESSION['admin_user'])){
								$name=$_SESSION['admin_user'];
							echo $name;
								}  else {
									echo "Guest";
									
								}
							
							?>
					
  
  <div id="upperMenu">
  <ul class="share-buttons">
  <li><a href="http//:www.facebook.com"><img src="images/flat_web_icon_set/color/Facebook.png"></a></li> 

  <li><a href="http//:www.twitter.com"><img src="images/flat_web_icon_set/color/Twitter.png"></a></li> 

  <li><a href="http//:www.google+.com"><img src="images/flat_web_icon_set/color/Google+.png"></a></li> 

  <li><a href="http//:www.mail.com"><img src="images/flat_web_icon_set/color/Email.png"></a></li> 
  
  <?php
				if(loggedin()){
				echo "<a href='customer/my_account.php'>| My account |</a>";
				} 				
				if(!loggedin()){
				echo "<a href='customer/customer_session.php'> Log In | </a>";
				}
				?>	
				<a href="admin_area/session.php">Admin Panel </a>								
				<?php
				if(loggedin()){
				echo "<a href='customer/custlogout.php'>| Log Out</a>";
				}
				?>								
</ul>
  </div>



</header>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
            <a class="navbar-brand" href="home.php">X-Music</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="category.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			<?php getCatsdrop(); ?>

            </ul>
        </li>

        <li><a href="quiz.php">Quiz</a></li>
        <li><a href="poll.php">Poll</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        
      </ul>
     <form class="navbar-form navbar-right" role="search" method="get" action="results.php" enctype="multipart/form-data">	
     <div class="form-group">
				<input type="text" class="form-control" placeholder="Search a product" name="user_query"/>
				<input type=submit class="btn btn-default" name="search" value="Search" />
				</form>
      </div>
    </div>
  </div>
</nav>


<div id="mar">
<marquee>Welcome to our store</marquee>
</div>
<hr id="headhr">

