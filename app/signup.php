<?php


include ('db.php');
if (isset($_POST['formsubmitted'])) {
    $error = array();//Declare An Array to store any error message  
    if (empty($_POST['Name'])) {//if no name has been supplied 
        $error[] = 'Please Enter a name ';//add to array "error"
    } else {
        $name = $_POST['Name'];
		echo $name;//else assign it a variable
    }
	

    if (empty($_POST['Email'])) {
        $error[] = 'Please Enter your Email ';
    } else {


        //if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           //regular expression for email validation
            $Email = $_POST['Email'];
        /*} else {
             $error[] = $name;
        }*/

    }


    if (empty($_POST['Password'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $Password = $_POST['Password'];
    }


    if (empty($error)) //send to Database if there's no error '

    {   // If everything's OK...

        // Make sure the email address is available:
        $query_verify_email = "SELECT * FROM user  WHERE email ='$Email'";
        $result_verify_email = mysqli_query($dbc, $query_verify_email);
        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
            echo ' Database Error Occured ';
        }

        if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .


            // Create a unique  activation code:
            $activation = md5(uniqid(rand(), true));


            $query_insert_user = "INSERT INTO user ( name, email, password, activation) VALUES ( '$name', '$Email', '$Password', '$activation')";


            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
                echo 'Query Failed ';
            }

            if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.


                // Send the email:
               /* $message = " To activate your account, please click on this link:\n\n";
                $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($Email) . "&key=$activation";
                mail($Email, 'Registration Confirmation', $message, 'From: ismaakeel@gmail.com');  */
				
				include 'smtp/Send_Mail.php';
				$to=$Email;
				$subject="Confirm Registration";
				$body='<i>Dear</i> '.$name.', <br/> <br/> Thank You for Registering for <b>Harry\'s GuestBook</b>. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'/login.php?key='.$activation.'">'.$base_url.'/signup.php?key='.$activation.'</a><br/> <br/>Thanks & Regards,<br/><b><i>-Harry</i></b>';
				Send_Mail($to,$subject,$body);

                // Flush the buffered output.


                // Finish the page:
                echo '<div class="success">Thank you for
registering! A confirmation email
has been sent to '.$Email.' Please click on the Activation Link to Activate your account </div>';


            } else { // If it did not run OK.
                echo '<div class="errormsgbox">You could not be registered due to a system
error. We apologize for any
inconvenience.</div>';
            }

        } else { // The email address is not available.
            echo '<div class="errormsgbox" >That email
address has already been registered.
</div>';
        }

    } else {//If the "error" array contains error msg , display them
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
  
    mysqli_close($dbc);//Close the DB Connection

} // End of the main Submit conditional.



?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <title>StegApp</title>

  <!-- Styles -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">

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
        </div><!--/.navbar-collapse -->
      </div>
    </div>
      

    <!--Content-->
    <section id="signup">
      <div class="container">
        <div class="row margin-40">
          
            <div class="col-sm-6 col-sm-offset-3 text-center signup">
              <h3>Sign Up</h3><br />
              
              <ul class="list-inline social-icons-signup">
      					 <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
      					 <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
      					 <li><a class="google" href="#" target="_blank"><i class="fa fa-google-plus fa-3x"></i></a></li>
    					 </ul>
    					 
    					 <p>------------ OR -------------</p>
              
              <form id="signup-form" class="form-horizontal" method="post" action="#">
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          			     <span class="add-on"><i class="fa fa-user"></i></span>
          					<input type="text" id="Name" name="Name" placeholder="Full Name">
          				</div>
          			</div>
          		</div>
          		          		
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          				<span class="add-on"><i class="fa fa-envelope"></i></span>
          					<input type="text" id="Email" name="Email" placeholder="Email">
          				</div>
          			</div>
          		</div>
          		
          		<div class="control-group">
          			<div class="controls">
          			    <div class="input-prepend">
          				<span class="add-on"><i class="fa fa-lock"></i></span>
          					<input type="Password" id="Password" name="Password" placeholder="Password" data-error="Before you wreck yourself" required>
          				</div>
          			</div>
          		</div>
          
          		<div class="control-group">
          	      <div class="controls">
          	       <button type="submit" class="btn-main" name="formsubmitted"><i class="fa fa-user"></i> Create My Account</button>
          	      </div>
          	      <a class="small-message" href="#"><small>Already Registered?</small></a>
          	  </div>
      
          	  </form>
      	  
          </div><!--End Col 6-->
          
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
    <script src="../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
   
    </body>

<!-- Mirrored from themearmada.com/demos/lava/1.5/bootstrap3/multipage/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Feb 2016 16:52:19 GMT -->
</html>