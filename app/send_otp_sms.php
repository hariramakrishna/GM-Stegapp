<?php
require 'sms/class-Clockwork.php';
include ('db.php');

if($_POST["user_email"])
{
	$emailUser = $_POST["user_email"];
	
    //generate a random 4-digit number between 1000 - 9999
	$otp = rand(1000, 9999);

	$query_check_credentials = "UPDATE user set otp = '$otp' WHERE (email='$emailUser') AND status='1'";
	//$query_check_credentials = "SELECT * FROM user WHERE (email='$emailUser') AND status='1'";

    $result_check_credentials = mysqli_query($dbc, $query_check_credentials);

    if(!$result_check_credentials)//If the QUery Failed 
	{
        echo 'Query Failed ';
    }

    if (mysqli_affected_rows($dbc) == 1)//if Query is successfull 
    { 	// A match was made.
	
		//retreive mobile number from DB
		$query_check_credentials_mobile = "SELECT * FROM user WHERE (email='$emailUser') AND status='1'";
		$result_check_credentials_mobile = mysqli_query($dbc, $query_check_credentials_mobile);
		
		$temp = mysqli_fetch_array($result_check_credentials_mobile, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
		
		$mobile = "1".$temp["mobile"]; // adding '1' infront of mobile number
		
		try
		{
			$API_KEY = 'b8ddad30e9debb25bba2aae59f167bb8879d38f2';
			// Create a Clockwork object using your API key
			$clockwork = new Clockwork( $API_KEY );

			// Setup and send a message
			$message = array( 'to' => $mobile, 'message' => $otp );
			$result = $clockwork->send( $message );

			// Check if the send was successful
			if($result['success']) {
				echo "true";
			} else {
				echo 'Message failed - Error: ' . $result['error_message'];
			}
		}
		catch (ClockworkException $e)
		{
			echo 'Exception sending SMS: ' . $e->getMessage();
		}

    }
	else
    {  
        echo "Internal SQL error... Pls report to the Admi...!". @mysqli_num_rows($result_check_credentials);
    }
}


?>