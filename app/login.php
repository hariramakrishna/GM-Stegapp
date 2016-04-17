<?php



include ('db.php');
$pattern = "";
	//to unset the session if came to login page
	session_start();
	session_unset();
	session_destroy();
	
if (isset($_POST['formsubmitted']))
{
    // Initialize a session:
	session_start();
    $error = array();//this aaray will store all error messages
  

    if (empty($_POST['Email']))//if the email supplied is empty 
	{
        $error[] = 'You forgot to enter  your Email ';
    }
	else
	{
        /*if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail']))
		{ */          
            $Email = $_POST['Email'];
        /*}
		else
		{
             $error[] = 'Your EMail Address is invalid  ';
        }*/


    }
print "<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> I'm about to learn PHP!";

    if (empty($_POST['Password']))
	{
        $error[] = 'Please Enter Your Password ';
    }
	else
	{
        $Password = $_POST['Password'];
		print $Password;
    }


    if (empty($error))//if the array is empty , it means no error found
    {
        $query_check_credentials = "SELECT * FROM user WHERE (email='$Email' AND password='$Password') AND status='1'";
   
        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials)//If the QUery Failed 
		{
            echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.

            //$_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
			session_start();
			$_SESSION['EXPIRES'] = time();
            header("Location: services.php");
        }
		else
        {  
            $msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
        }

    }
	else
	{ 

		echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values)
		{           
            echo '	<li>'.$values.'</li>';
       
        }
        echo '</ol></div>';

    }
    
    
    if(isset($msg_error))
	{        
        echo '<div class="warning">'.$msg_error.' </div>';
    }
    /// var_dump($error);
    mysqli_close($dbc);

} // End of the main Submit conditional.



//formsubmit on pattern button. onclick, get the email and retreive pattern from DB and send to modal for validation.
if (isset($_POST['formsubmitted1']))
{
    // Initialize a session:
	session_start();
    $error = array();//this aaray will store all error messages
  

    if (empty($_POST['Email']))//if the email supplied is empty 
	{
        $error[] = 'You forgot to enter  your Email ';
    }
	else
	{
        /*if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail']))
		{ */          
            $Email = $_POST['Email'];
        /*}
		else
		{
             $error[] = 'Your EMail Address is invalid  ';
        }*/


    }
print "<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> I'm about to learn PHP!";

   /* if (empty($_POST['Password']))
	{
        $error[] = 'Please Enter Your Password ';
    }
	else
	{
        $Password = $_POST['Password'];
		print $Password;
    }*/


    if (empty($error))//if the array is empty , it means no error found
    {
        $query_check_credentials = "SELECT * FROM user WHERE (email='$Email') AND status='1'";
   
        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials)//If the QUery Failed 
		{
            echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.

            $temp = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
			
			$pattern = $temp["pattern"];
			print "<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> I'm about to learn PHP!";
			print $pattern;
			session_start();
			$_SESSION['EXPIRES'] = time();
            //header("Location: services.php");
        }
		else
        {  
            $msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
        }

    }
	else
	{ 

		echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values)
		{           
            echo '	<li>'.$values.'</li>';
       
        }
        echo '</ol></div>';

    }
    
    
    if(isset($msg_error))
	{        
        echo '<div class="warning">'.$msg_error.' </div>';
    }
    /// var_dump($error);
    mysqli_close($dbc);

}



?>





<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lava | Designed By Theme Armada</title>
  <meta name="keywords" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <meta property="og:title" content="Lava | Designed By Theme Armada">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.themearmada.com/demos/lava">
	<meta property="og:site_name" content="Theme Armada">
	<meta property="og:description" content="made with bootstrap, wrap bootstrap themes, bootstrap agency themes, creative bootstrap sites, Lava theme, responsive bootstrap theme, mobile website themes, bootstrap portfolio, theme armada">

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">

  
  <link href="patternLock/patternLock.css"  rel="stylesheet" type="text/css" />
  <link href="pin/css/bootstrap-pincode-input.css" rel="stylesheet">



  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../../apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../../apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../../apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../../../../apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../../../../../favicon.html">
  
  <style type="text/css">

 .success {
	border: 1px solid;
	margin: 0 auto;
	padding:20px 50px 10px 500px;
	background-repeat: no-repeat;
	background-position: 10px center;
    
     width:100%;
     color: #4F8A10;
	background-color: #DFF2BF;
	background-image:url('images/success.png');
     
}



 .errormsgbox {
	border: 1px solid;
	margin: 0 auto;
	padding:10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;

     width:100%;
    	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('images/error.png');
     
}

</style>
  
  
  
</head>

<body>

<?php
	//include ('db.php');

	/*if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
	{
		$email = $_GET['email'];
	}*/
	if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
	{
		$key = $_GET['key'];



	if (isset($key)) 
	{

		// Update the database to set the "status" field to '1'

		/*$query_activate_account = "UPDATE members SET Activation=NULL WHERE(Email ='$email' AND Activation='$key')LIMIT 1";

	   
		$result_activate_account = mysqli_query($dbc, $query_activate_account) ;*/

		//////////////////////////////////
		
		//$code=mysqli_real_escape_string($connection,$_GET['code']);


		$c=mysqli_query($dbc,"SELECT email FROM user WHERE activation='$key'");

		if(mysqli_num_rows($c) > 0)
		{

			$count=mysqli_query($dbc,"SELECT email FROM user WHERE activation='$key' and status='0'");

			if(mysqli_num_rows($count) == 1)
			{
				mysqli_query($dbc,"UPDATE user SET status='1' WHERE activation='$key'");
				//$msg="Your account is activated";	
				
				print "<br/> <br/> <br/> <br/>";
				echo '<div class="success">Your account is now active. You may now <a href="login.php">Log in</a></div>';
				//echo '<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"><div class="modal-dialog modal-lg"><div class="modal-content">congrats</div></div></div>';
			}
			else
			{
				//$msg ="Your account is already active, no need to activate again";
				print "<br/> <br/> <br/> <br/>";
				echo '<div class="errormsgbox">Your account is already active, no need to activate again...!You may now <a href="login.php">Log in</a></div>';
			}

		}
		else
		{
			//$msg ="Wrong activation code.";
			print "<br/> <br/> <br/> <br/>";
			echo '<div class="errormsgbox">Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>';
		}
		
		////////////////////////////////
		
		// Print a customized message:
	  /*  if (mysqli_affected_rows($dbc) == 1)//if update query was successfull
		{
		echo '<div class="success">Your account is now active. You may now <a href="login.php">Log in</a></div>';

		} else
		{
			echo '<div class="errormsgbox">Oops !Your account could not be activated. Please recheck the link or contact the system administrator.</div>';

		}*/

		mysqli_close($dbc);

	}
	else
	{
			echo '<div class="errormsgbox">Error Occured .</div>';
	}
	}

?>





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
    <section id="signup">
      <div class="container">
        <div class="row margin-40">
          
            <div class="col-sm-6 col-sm-offset-3 text-center signup">
              <h3>Log In</h3><br />

              
              <form id="signup-form" class="form-horizontal">
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          			     <span class="add-on"><i class="fa fa-envelope"></i></span>
          					<input type="text" class="input-xlarge" id="Email" name="Email" placeholder="Email">
          				</div>
          			</div>
          		</div>
          		          		          		
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          				<span class="add-on"><i class="fa fa-lock"></i></span>
          					<input type="Password" id="Password" class="input-xlarge" name="Password" placeholder="Password">
          				</div>
          			</div>
          		</div>
          
          		<div class="control-group">
          	      <div class="controls">
          	       <button id="pin" type="button" class="btn-main" ><i class="fa fa-sign-in"></i> Get OTP</button>
				   <button id="pattern-button" type="button" class="btn-main"><i class="fa fa-spinner"></i> Pattern</button></br></br>
				   <button id="gua" type="button" class="btn-main"><i class="fa fa-object-group"></i> Graphical User Authentication</button>
          	      </div>
          	      <a class="small-message" href="signup.php"><small>Need An Account?</small></a>
          	  </div>	    
			  
			  
			  <!--<button id="button2" type="button" class="btn-main" name="formsubmitted1" data-toggle="modal" data-target="#myModal"><i class="fa fa-spinner"></i>Pattern</button>-->

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
					
					<!-- Modal OTP -->
					<div class="modal fade" id="myModalPin" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							  <h4 class="modal-title">Key-in your OTP </h4>
							</div>
							<div class="modal-body" id="multi-input" style="background-color:#337AB7">
								<input type="text" id="demo">						  
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
      
          	  </form>
      	  
          </div><!--End Span6-->
          
        </div><!--End Row-->
      </div><!--End Container-->
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
	<script type="text/javascript" src="pin/js/bootstrap-pincode-input.js"></script>
   <script>
   
		$(document).ready(function(){ // run's on each page load
			

			
			/**  Pattern check
			  *
			  */
			// Validate form fields and open modal for pattern			
			$("#pattern-button").click(function(){
				if($("#Email").val())
				{
					$("#myModal").modal("show");
				}
				else
					window.alert("Enter you email id");
			});
			

			/**  OTP Pin match
			  *
			  */
			// Validate form fields and open modal for Pin Pad
			$("#pin").click(function(){
				if($("#Email").val())
				{
					// Ajax call to insert a random otp to DB and send a sms with registered mobile number.
					var url = "send_otp_sms.php";
					var email = $("#Email").val();
					console.log(email);
					/*$.post(url, { user_email : email }, function(response,status){
						if(response == "true")
						{
							$("#myModalPin").modal("show");
						}
						else
							window.alert(response);

					});	*/
						$("#myModalPin").modal("show");
						
				}
				else
					window.alert("Enter you email id");
			});
			
			
			/**  GUA check
			  *
			  */
			  
			var GUAImg = "";  	/// GUA: to store the img name retreived from DB
			var x=0,y=0;		/// GUA: to store the x, y coordinates retreived from DB
			
			// Validate form fields and open modal for GUA			
			$("#gua").click(function(){
				if($("#Email").val())
				{
					// Ajax call to get the image and coordinates from DB.
					var url = "showGuaImage.php";
					var email = $("#Email").val();
					console.log(email);
					
					// post call to get the image from db for the given email
					$.post(url, { user_email : email }, function(response,status){
						//console.log("res: "+ response);
						//gets the image as a base64 string in to response.

						if(response == "nill")
						{
							window.alert(response+" No image associated with your account.");
							window.location = <?php echo "\"/app-v/login.php\""?>;
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

				}
				else
					window.alert("Enter you email id");
			});			

		});

/**************************************************************************************************************/
/**  Pattern Lock
  *
  */		
		var lock = new PatternLock('#patternHolder1',{
			onDraw:function(pattern){
				checkPattern(pattern);
				
				/* if(pattern == '123')
					console.log("jumbooo");
				pattern=''; */
			}
		});
		function checkPattern (pattern){
			console.log(pattern);
			//var patternCode = pattern;

			var url = "pattern_check.php"; //write the get pattern url
			var email = $("#Email").val();
			$.post(url, { patternCode : pattern, user_email : email }, function(response,status){
				//alert("from php: " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
				console.log("post call back");
				console.log(response);
				$("#myModal").modal("hide");
				lock.reset();
				
				if(response == "true")
				{
					window.location = <?php echo "\"/app-v/services.php\""?>;
				}
				else
					window.alert(response);

				$("#signup-form")[0].reset();
				/* if(pattern == data){
					//write the required process code here
				} */					
			});			
		}
		
/********************************************************************************************************************************/

/**  Pin code 
  *
  */
		$('#demo').pincodeInput({

		  // 4 input boxes = code of 4 digits long
		  inputs:4,        

		  // hide digits like password input             
		  hideDigits:true,   

		  // keyDown callback             
		  keydown : function(e){},

		  // callback when all inputs are filled in (keyup event)
		  complete : function(value, e, errorElement){
			  
			  	var url = "otp_check.php"; //write the get pattern url
				var email = $("#Email").val();
				console.log(email);
				$.post(url, { otpCode : value, user_email : email }, function(response,status){

					$("#myModalPin").modal("hide");
					$('#demo').pincodeInput().data('plugin_pincodeInput').clear();
					console.log(value);
					console.log(email);
					if(response == "true")
					{
						window.location = <?php echo "\"/app-v/services.php\""?>;
					}
					else
						window.alert(response);

					$("#signup-form")[0].reset();
					
				});
		  }
		  
		});
		
		// To resize input box and add padding
		var muiltis = $("#multi-input input:not(#demo)");
		muiltis.each(function(){
			$(this).attr("style","width:35px; margin:10px");
		});

/********************************************************************************************************************************/
/**  GUA: gets the click co-ordinates 
  *
  */
		var cnt = 0;// to keep track of no.of clicks on the image
		var clickXY = ""; // to store all x,y values for 3 clicks.
		function point_it(event){
			//check if user is clicking more than 3 times.
			if(cnt == 3)
			{
				cnt = 0;
				clickXY = "";
				window.alert("You had reached maximum attempts....");
				window.location = <?php echo "\"/app-v/login.php\""?>;
			}
			
			
			cnt++; // increment on each click
			//console.log("clicked");
			//var x=10; var y=10;
			pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
			pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
			
			clickXY = clickXY + pos_x + ":" + pos_y + ";";
			console.log("clicked "+clickXY);
			
			if(cnt == 3)
			{
				var url = "get_GUA_xy.php"; //write the get pattern url
				var email = $("#Email").val();
				$.post(url, { user_email : email }, function(response,status){
					if(response != "false")
					{
						console.log("response "+response);
						//response has full string of xy's from DB. x1:y1;x2:y2;x3:y3;
						if(compareXY(clickXY, response))
						{
							//This post is specific to setting the php session. Because i am not able to set that here in JS
							var url = "set_session.php";
							$.post(url, function(response,status){
								if(response == "true")
									window.location = <?php echo "\"/app-v/services.php\""?>;							
							});
						}
						else
						{
							cnt = 0;
							clickXY = "";
							window.alert("you got it wrong...try again...");
							window.location = <?php echo "\"/app-v/login.php\""?>;
						}
					}
					else
						window.alert(response+" error in getting xy...");

				});
			}
			
		}

		function compareXY(userXY, dbXY)
		{
			var a1,b1,a2,b2,a3,b3,x1,y1,x2,y2,x3,y3,temp1,temp2;
			temp1 = userXY.split(";");
				temp2 = temp1[0].split(":");  a1 = parseInt(temp2[0]); b1 = parseInt(temp2[1]);
				temp2 = temp1[1].split(":");  a2 = parseInt(temp2[0]); b2 = parseInt(temp2[1]);
				temp2 = temp1[2].split(":");  a3 = parseInt(temp2[0]); b3 = parseInt(temp2[1]);
			
			temp1 = dbXY.split(";");
				temp2 = temp1[0].split(":");  x1 = parseInt(temp2[0]); y1 = parseInt(temp2[1]);
				temp2 = temp1[1].split(":");  x2 = parseInt(temp2[0]); y2 = parseInt(temp2[1]);
				temp2 = temp1[2].split(":");  x3 = parseInt(temp2[0]); y3 = parseInt(temp2[1]);
		
			if(a1 >= x1-10 && a1 <= x1+10 && b1 >= y1-10 && b1 <= y1+10)
			{
				if(a2 >= x2-10 && a2 <= x2+10 && b2 >= y2-10 && b2 <= y2+10)
				{
					if(a3 >= x3-10 && a3 <= x3+10 && b3 >= y3-10 && b3 <= y3+10)
					{
						return true;
					}
					else
						return false;
				}
				else
					return false;
			}
			else
				return false;
		
		}
		
		//$("#pointer_div").attr("style","background-image:url('img/pic3.jpg');width:500px;height:111px;");
		
	
		
  </script>

    </body>

<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:19 GMT -->
</html>