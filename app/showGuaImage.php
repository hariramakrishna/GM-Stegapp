<?php
include ('db.php');

if($_POST["user_email"])
{
	$emailUser = $_POST["user_email"];
	//setting email in session when logged in thriught GUA
	session_start();
	$_SESSION['email'] = $emailUser;

    $result = mysqli_query($dbc,"SELECT * FROM user WHERE email='$emailUser' and status='1'");
	if (@mysqli_num_rows($result) == 1)//if Query is successfull
    {

			while($row = mysqli_fetch_assoc($result))
			{
				$imageData = $row['image'];
				$x1 = $row['x1'];
			}
			if($x1 != "")
			{
				if($imageData != "no")
				{
					header("content-type:image/jpeg");
					//echo $imageData;
					//$dataUri = 'data:image/jpeg;base64,' . base64_encode($imageData);
					//echo $dataUri;
					echo $imageData;
				}
				else
					echo "nill";
			}
			else
				echo "no_xy";
	}
	else
	{
		echo "not_registered";
	}
}
else
{
    echo "false";
}

?>