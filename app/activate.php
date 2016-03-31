<html>
<head>
<title>Activate Your Account</title>


    
    
    
<style type="text/css">
body {
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
	font-size:12px;
}



 .success {
	border: 1px solid;
	margin: 0 auto;
	padding:10px 5px 10px 60px;
	background-repeat: no-repeat;
	background-position: 10px center;
    
     width:450px;
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

     width:450px;
    	color: #D8000C;
	background-color: #FFBABA;
	background-image: url('images/error.png');
     
}

</style>

</head>
<body><?php
	include ('db.php');

	/*if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))
	{
		$email = $_GET['email'];
	}*/
	if (isset($_GET['key']) && (strlen($_GET['key']) == 32))//The Activation key will always be 32 since it is MD5 Hash
	{
		$key = $_GET['key'];
	}


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
				echo '<div class="success">Your account is now active. You may now <a href="login.php">Log in</a></div>';
			}
			else
			{
				//$msg ="Your account is already active, no need to activate again";
				echo '<div class="errormsgbox">Your account is already active, no need to activate again...!You may now <a href="login.php">Log in</a></div>';
			}

		}
		else
		{
			//$msg ="Wrong activation code.";
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


?>
</body>
</html>