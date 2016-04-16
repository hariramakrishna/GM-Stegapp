<?php



include ('db.php');

session_start();
if($_POST["patternCode"] && isset($_SESSION['email']) )
{
	$patternCode = $_POST["patternCode"];
	$emailUser = $_SESSION['email'];
	
	
    $query_check_credentials = "UPDATE user set pattern = '$patternCode' WHERE (email='$emailUser') AND status='1'";

    $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
    if(!$result_check_credentials)//If the QUery Failed 
	{
        echo 'Query Failed ';
    }

    if (mysqli_affected_rows($dbc) == 1)//if Query is successfull 
    { // A match was made.

		echo "true";
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
	echo "npooooooo  email:" .$_SESSION['email'];



?>