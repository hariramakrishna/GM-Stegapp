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
  <title>Lava | Designed By Theme Armada</title>
  
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages &amp; Features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="full-width.html">Full Width</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="blog.html">Blog Loop</a></li>
                  <li><a href="blog-article.html">Blog Article</a></li>
                  <li><a href="login.html">Log In</a></li>
                  <li><a href="signup.html">Sign Up</a></li>
                  <li><a href="icons.html">Icons</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Work <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="3-column.html">3 Column</a></li>
                  <li><a href="4-column.html">4 Column</a></li>
                  <li><a href="individual-work.html">Individual Work</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
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

			






            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
		
		
	
        
        <!--First Service Row-->
        <div class="row">
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-thumbs-up fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Built w/ Bootstrap</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-flag fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Over 249 Icons</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
        </div>
        
        
        <!--Second Service Row-->
        <div class="row">
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-mobile-phone fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Mobile Responsive</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-file fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Easy To Customize</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
        </div>
        
        <!--Third Service Row-->
        <div class="row">
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-bolt fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Lightning Fast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
          
          <div class="col-sm-6 margin-60">
            <div class="row">
              <div class="col-sm-3 service-icons text-center">
                <i class="fa fa-heart fa-4x light-gray"></i>
              </div>
              
              <div class="col-sm-9 text-left">
                <h3>Good looking</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    
    <!--Message Section-->
    <section id="content2" class="section">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-12 text-center">
            <h2><span class="dark-gray"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</span></h2>
            
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12 text-center">
            <a class="btn-main" href="signup.html"><i class="icon-chevron-right"></i> Sign Up</a>
          </div>
        </div>
      </div>
    </section>
    
     <!--Twitter Feed-->
<!--     <section id="twitter" class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <i class="fa fa-twitter fa-4x gray margin-20"></i>
          </div>
        </div>
        
        <div class="row">
        
          <div class="col-sm-6">
            <blockquote class="twitter-tweet" lang="en"><p>Theme Armada New Website Launch <a href="http://t.co/YLbXUFhz5d">http://t.co/YLbXUFhz5d</a></p>&mdash; Theme Armada (@themearmada) <a href="https://twitter.com/themearmada/statuses/404968762446970880">November 25, 2013</a></blockquote>
  <script async src="../../../../../../platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          
          <div class="col-sm-6">
            <blockquote class="twitter-tweet" lang="en"><p>Our sites up and CSSMania <a href="http://t.co/KKaKX75WrH">http://t.co/KKaKX75WrH</a> <a href="https://twitter.com/cssmania">@cssmania</a> - Give it a vote if you like it!</p>&mdash; Theme Armada (@themearmada) <a href="https://twitter.com/themearmada/statuses/403515461158961152">November 21, 2013</a></blockquote>
  <script async src="../../../../../../platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          
        </div>
        
      </div>
    </section> -->

    
    <!--Bottom Section-->
    <section id="bottom">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <p>1234 Main Street Atlanta, GA 30305 | 404.555.5555  |  <a href="mailto:support@themearmada.com"><i class="icon-envelope-alt"></i> support@themearmada.com</a></p>
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
            <p>@ Copyright. All Rights Reserved. Created by <a href="http://www.themearmada.com/">Theme Armada.</a></p>
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

				window.location = <?php echo "\"/app-v/login.php\""?>;
			}
		}
	
	});
    </script>
    
   
    </body>

<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:01 GMT -->
</html>