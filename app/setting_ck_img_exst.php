<?php
//checks if image exists or not for a given email
include ('db.php');

	session_start();
	$emailUser = $_SESSION['email'];

    $result = mysqli_query($dbc,"SELECT * FROM user WHERE email='$emailUser'");
    while($row = mysqli_fetch_assoc($result))
    {
        $imageData = $row['image'];
    }
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

?>