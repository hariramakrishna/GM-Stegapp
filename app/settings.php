<!DOCTYPE html>

<?php
include ('db.php');
/* $servername = "localhost";
$username = "hgurram"; //"hgurram";
$password = "hg7180";//"hg7180";
$dbname = "hgurram"; */

	    session_start();echo "started";
	if (!isset($_SESSION['EXPIRES']) || $_SESSION['EXPIRES'] < time()-10) {echo "in a if cond";
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
<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:01 GMT -->
<head>
  <meta charset="utf-8">
  <title>settings | StegApp</title>
  
  
 
  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <link href="patternLock/patternLock.css"  rel="stylesheet" type="text/css" />

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


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
        </div><!--/.navbar-collapse -->
      </div>
    </div>
      

    <!--Content-->
    <section id="content1" class="section">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-12">
            <h3>User Settings</h3>
            <p class="lead">Feel free to configure your patter lock and Graphical user password</p>
            <p>The options below are pretty much self explanatory. click on "pattern" button to add/update your pattern. Like wise, click on "Graphical password" to register your new clicks on the image. If you want to update a new image, click on "upload" and choose an image<i>(preferably of size 500x250)</i></p>
          </div>
		  </br>
		  <div class="control-group">
          	      <div class="controls">
						<button id="pattern-button" type="button" class="btn-main"><i class="fa fa-spinner"></i> Pattern Lock</button></br>
						</br>
						<button id="gua" type="button" class="btn-main"><i class="fa fa-object-group"></i> Graphical User Authentication</button>
						<button id="upload" type="button" class="btn-main"><i class="fa fa-object-group"></i> Uplaod</button>
          	      </div>
				  
          	      <a class="small-message" href="#"><small>Need An Account?</small></a>
          </div>
        </div>
		
					<!-- Modal Pattern -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Draw your Pattern</h4>
							</div>
							<div class="modal-body row">
								<div id="patternHolder1" class="pattern-holder patt-holder col-sm-offset-3" style="width: 310px; height: 310px; position: relative;"></div>
							  
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>
					
					<!-- Graphical User Authentication Modal -->
					<div class="modal fade" id="myModalGua" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Identify your clicks</h4>
							</div>
							<div class="modal-body" >
								<img src="" id="pointer_div" onclick="point_it(event)" style = "width:530px;height:226px;">
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>
					


					<!-- Image upload -->
					<div class="modal fade" id="myModalUpload" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Upload an image <i>(approx resolution. 500x250)</h4>
							</div>
							<div class="modal-body">
								<iframe src="uploadimages.php" style="height:200px;width:100%;border:none;overflow:hidden;">
								  <p>Your browser does not support iframes.</p>
								</iframe>
							  
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>

					
        
      </div>
    </section>
    

    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	<script src="patternLock/patternLock.js"></script>
	
	<script>
		$(document).ready(function(){ // run's on each page load
		
			/**  Pattern lock Modal
			  *
			  */
			// Validate form fields and open modal for pattern
			$("#pattern-button").click(function(){
				$("#myModal").modal("show");
			});
			
			
			/**  GUA check
			  *
			  */
			  
			var GUAImg = "";  	/// GUA: to store the img name retreived from DB
			var x=0,y=0;		/// GUA: to store the x, y coordinates retreived from DB
			
			// Validate form fields and open modal for GUA			
			$("#gua").click(function(){

				// Ajax call to get the image and coordinates from DB.
				var url = "setting_ck_img_exst.php";
				
				// post call to check if exists and get the image from db for the loggedin email
				$.post(url, function(response,status){
					//console.log("res: "+ response);
					//gets the image as a base64 string in to response.

					if(response == "nill")
					{
						window.alert(response+" No image associated with your account.");
						//sets the session
						var url = "set_session.php";
						$.post(url, function(response2,status){
							if(response2 == "true")
								window.location = <?php echo "\"/app-v/services.php\""?>;							
						});

					}
					else if(response != "false" || response != "nill")
					{
						$("#myModalGua").modal("show");
						
						$("#pointer_div").attr('src','data:image/jpg;base64,' + response);
					}
					else
					{
						window.alert(response+"failed...Try again or contach Admin");
						window.location = <?php echo "\"/app-v/login.php\""?>;
					}
				});	

			});
			
			
			/**  upload new image
			  *
			  */
			// Validate form fields and open modal for pattern			
			$("#upload").click(function(){
				$("#myModalUpload").modal("show");
			});

			
			
		});
		
		
		/**  Pattern Lock send to DB
		  *
		  */		
		var lock = new PatternLock('#patternHolder1',{
			onDraw:function(pattern){
				var url = "set_pattern.php";
				$.post(url, { patternCode : pattern }, function(response,status){
					window.alert("from set "+response);
						if(response == "true")
						{
							window.alert("Pattern updated succesfully...");
							//This post is specific to setting the php session. Because i am not able to set that here in JS
							var url = "set_session.php";
							$.post(url, function(response2,status){
								if(response2 == "true")
									window.location = <?php echo "\"/app-v/services.php\""?>;							
							});
						}
						else
						{
							window.alert("Oops...something went wrong...."+response);
							$("#myModal").modal("hide");
							lock.reset();
							//This post is specific to un-setting the php session. Because i am not able to set that here in JS
							var url = "unset_session.php";
							$.post(url, function(response3,status){
								if(response3 == "true")
									window.location = <?php echo "\"/app-v/login.php\""?>;					
							});
						}
				});
			}
		});	

		
		/*******************************************************************************************************************/
		/**  GUA: gets the click co-ordinates and upadte the DB
		  *
		  */
		var cnt = 0;// to keep track of no.of clicks on the image
		var clickXY = []; // to store all x,y values for 3 clicks.
		var c = 0;
		function point_it(event){
			//check if user is clicking more than 3 times.
			if(cnt == 3)
			{
				cnt = 0;
				c = 0;
				clickXY = [];
				window.alert("You had reached maximum attempts....Try again");
				//This post is specific to setting the php session. Because i am not able to set that here in JS
				var url = "set_session.php";
				$.post(url, function(response2,status){
					if(response2 == "true")
						window.location = <?php echo "\"/app-v/services.php\""?>;							
				});
			}
			
			
			cnt++; // increment on each click
			//console.log("clicked");
			//var x=10; var y=10;
			pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
			pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
			
			//clickXY = clickXY + pos_x + ":" + pos_y + ";";
			clickXY[c++] = pos_x;
			clickXY[c++] = pos_y;
			console.log("clicked: "+clickXY.length);
			
			if(cnt == 3)
			{
				var url = "set_GUA_xy.php"; //write the get pattern url
				$.post(url, { x1 : clickXY[0], y1 : clickXY[1], x2 : clickXY[2], y2 : clickXY[3], x3 : clickXY[4], y3 : clickXY[5] }, function(response,status){
					console.log(response);
					if(response == "true")
					{
						window.location = <?php echo "\"/app-v/services.php\""?>;
					}
					else
					{
						window.alert(response+" error in setting xy...");
						$("#myModalGua").modal("hide");
					}

				});
			}
			
		}		
	
	
	
	
	
	
	</script>
	
     
    </body>

<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:01 GMT -->
</html>