<!DOCTYPE html>


<?php
include ('db.php');
/* $servername = "localhost";
$username = "hgurram"; //"hgurram";
$password = "hg7180";//"hg7180";
$dbname = "hgurram"; */

	    session_start();echo "started";
	if (!isset($_SESSION['EXPIRES']) || $_SESSION['EXPIRES'] < time()-40) {echo "in a if cond";
		session_unset();
		session_destroy();
		$_SESSION = array();
		header("Location: login.php");
	}
	else
	{echo "else a if cond";
		$_SESSION['EXPIRES'] = time();
	}
echo "endedd";
	
?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Steganalysis | StegApp</title>
  
  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="dragdist/bootstrap.fd.css">
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  
  <link href='css/pixelj.css' type='text/css' rel='stylesheet' />


  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../../apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../../apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../../apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../../../../apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../../../../../favicon.html">
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand img-responsive" href="index.html"><img src="img/logo.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="services.php">Services</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="login.php">Log In</a></li>
                  <li><a href="signup.php">Sign Up</a></li>
                </ul>
              </li>
			  <li><a href="settings.php">User Settings</a></li>
              <li><a href="contact.html">Contact</a></li>
			  <li><a href="logout.php">LogOut</a></li>
          </ul>
        </div>
      </div>
    </div>
	
 
<!-- 	  <p> jhgsfjr</p>

	<div id='main' class='section1 dark1'>
        <div class='step'>Choose an imagea</div>
        <img id='preview' class='preview1 hide1' />
        <div class='sectionbody1'>
            <input type='file' id='file' />
        </div>
    </div>
    <div id='choose' class='section1 dark1 hide1'><p> jhgsfjr1</p>
        <div class='step1'>What do you want to do?</div><p> jhgsfjr2</p>
        <div class='sectionbody1'><p> jhgsfjr3</p>
            <div class='left1'><p> jhgsfjr4</p>
                <textarea id='message' class='message1' maxlength='1000'
                    placeholder='Type hidden message'></textarea>
                <input type='password' id='password' class='password1'
                    placeholder='Password (optional)' />
                <button id='encode' class='submit1'>Hide message</button>
            </div>
            <div class='right1'>
                <input type='password' id='password2' class='password1'
                    placeholder='Password' />
                <button id='decode' class='submit1'>Reveal message</button>
            </div>
        </div>
    </div>
    <div id='reveal1' class='section1 dark1 hide1'>
        <div class='step1'>Hidden message</div>
        <div id='messageDecoded' class='sectionbody1'></div>
    </div>
    <canvas id='canvas' class='hide1'></canvas>
    <img id='output' /> -->


	  
	  

    <!--Content-->
    <section id="content1" class="section">
      <div class="container">
        <div class="row margin-60">
          <div class="col-sm-12">
            <h3>Services</h3>
			
			
			
<!--             <p class="lead">See what we do</p>
			 <div id='main' class='section dark'>
				<div class='step'>Choose an image</div>
				<img id='preview' class='preview hide' />
				<input type='file' id='file' /> -->
        
            
					<!-- id="open_btn" // from dragdrop to open modal-->
					<!-- onclick="encode()"  // from core.js to perform encode operation-->
					<!-- <button id="open_btn" onclick="encode()" class="btn btn-primary">Open Choose File</button> -->
<!-- 					<canvas id='canvas' class='hide'></canvas>
					<img id='output' />

			</div> --> 
			

			<iframe src="pj/index.html" style="height:800px;width:70%;border:none;overflow:hidden;">
			  <p>Your browser does not support iframes.</p>
			</iframe>

			
          </div>
        </div>
		
		
	

        
      </div>
    </section>
    
    
    
    <!--Bottom Section-->
    <section id="bottom">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <p> 198 Riverside St, Lowell, MA 01854 | 816.745.9286  |  <a href="mailto:hariramakrishna_gurram@student.uml.edu"><i class="icon-envelope-alt"></i> HariRamaKrishna_Gurram@student.uml.edu</a></p>
            <hr>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <!--Social Icons-->          
            <ul class="social-icons">
    					<li><a class="twitter" href="http://www.twitter.com/themearmada" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
    					<li><a class="facebook" href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
    					<li><a class="google" href="http://www.googleplus.com/" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></li>
    					<li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fa fa-camera-retro fa-3x"></i></a></li>
    					<li><a class="pinterest" href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest fa-3x"></i></a></li>
    					<li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a></li>
    					<li><a class="Github" href="http://www.github.com/" target="_blank"><i class="fa fa-github-alt fa-3x"></i></a></li>
    				</ul>
          </div>
        </div>
        
      </div>
    </section>
    
    
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p>@ Copyright. All Rights Reserved. Created by <a href="http://www.themearmada.com/">Hari Rama Krishna Gurram</a></p>
          </div>
        </div>
      </div>
    </section>    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="js/jquery-1.11.2.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script src='js/core.js' type='text/javascript'></script>
	<script src='js/sjcl.js' type='text/javascript'></script>
	<script src="dragdist/bootstrap.fd.js"></script>
	
	
	<script type="text/javascript">



	var idleTime = 0; // to find page inactivity
	$(document).ready(function(){ // run's on each page load	


	/**************************************************************************************************************/			
	/**  Mapage inactivity finder
	  *
	  */	
		//Increment the idle time counter every minute.
		idleInterval = setInterval(timerIncrement, 10000); // 10 seconds

		//Zero the idle timer on mouse movement.
		$('body').mousemove(function (e) {
		 //alert("mouse moved" + idleTime);
		 idleTime = 0;
		});

		$('body').keypress(function (e) {
		  //alert("keypressed"  + idleTime);
			idleTime = 0;
		});



		$('body').click(function() {
		  //alert("mouse moved" + idleTime);
		   idleTime = 0;
		});


		function timerIncrement() {
			idleTime = idleTime + 10;//adding 10 seconds
			console.log("time: "+ idleTime);
			if (idleTime > 40) { // 10 minutes
				window.alert("Your session has expired due to inactivity.");
				window.location = <?php echo "\"/app-v/login.php\""?>;
			}
		}
	
	});
    </script>
    
   
    </body>

<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:01 GMT -->
</html>