<?php



include ('db.php');

if($_POST["user_email"])
{
	$emailUser = $_POST["user_email"];
	
    $query_check_credentials = "SELECT * FROM user WHERE (email='$emailUser') AND status='1'";

    $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
    if(!$result_check_credentials)//If the QUery Failed 
	{
        echo 'Query Failed ';
    }

    if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
    { // A match was made.

        $temp = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
		
		$x1 = $temp["x1"];
		$y1 = $temp["y1"];
		$x2 = $temp["x2"];
		$y2 = $temp["y2"];
		$x3 = $temp["x3"];
		$y3 = $temp["y3"];		
		
		echo $x1 .":". $y1 .";". $x2 .":". $y2 .";". $x3 .":". $y3 .";";
		
/* 		if( $otpCode == $otp )
		{
			session_start();
			$_SESSION['EXPIRES'] = time();
			echo "true";
		}
		else
			echo "Invalid OTP. please try again...!"; */
    }
	else
    {  
        echo "Either Your Account is inactive or Email address /Password is Incorrect";
		$msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
    }
	
	
	//echo "Welcome ". $patternCode ."!"; // Success Message
	
	//header("Location: services.php");
}
else
	echo "POST values not set";



?>