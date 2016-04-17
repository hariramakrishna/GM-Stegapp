<?php



include ('db.php');

if($_POST["x1"])
{
	session_start();
	$emailUser = $_SESSION["email"];
	
	$x1 = $_POST["x1"];
	$y1 = $_POST["y1"];
	$x2 = $_POST["x2"];
	$y2 = $_POST["y2"];
	$x3 = $_POST["x3"];
	$y3 = $_POST["y3"];
	
	
    $query_check_credentials = "UPDATE user set x1 = '$x1', y1 = '$y1', x2 = '$x2', y2 = '$y2', x3 = '$x3', y3 = '$y3' WHERE (email='$emailUser') AND status='1'";
	if(isset($emailUser))
	{
		$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
		if(!$result_check_credentials)//If the QUery Failed 
		{
			echo 'Query Failed ';
		}

		if (mysqli_affected_rows($dbc) == 1)//if Query is successfull 
		{ // A match was made.
			$_SESSION['EXPIRES'] = time();
			echo "true";
		}
		else
		{  
			echo "unexpected error found...";
			$msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
		}
	}
	else
		echo "Not able to get your email id";
	
	//echo "Welcome ". $patternCode ."!"; // Success Message
	
	//header("Location: services.php");
}
else
	echo "POST values not set";



?>