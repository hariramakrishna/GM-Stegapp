<?php



include ('db.php');

if($_POST["patternCode"] && $_POST["user_email"])
{
	$patternCode = $_POST["patternCode"];
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
		
		$pattern = $temp["pattern"];
		
		if( $patternCode == $pattern )
		{
			session_start();
			$_SESSION['EXPIRES'] = time();
			$_SESSION['email'] = $emailUser;
			echo "true";
		}
		else
			echo "Invalid pattern. please try again...!";
    }
	else
    {  
        echo "Either Your Account is inactive or Email address /Password is Incorrect";
		$msg_error= 'Either Your Account is inactive or Email address /Password is Incorrect';
    }
	
	
	//echo "Welcome ". $patternCode ."!"; // Success Message
	
	//header("Location: services.php");
}



?>