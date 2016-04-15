<?php
include ('db.php');

if($_POST["user_email"])
{
	$emailUser = $_POST["user_email"];

    $result = mysqli_query($dbc,"SELECT * FROM user WHERE email='$emailUser'");
    while($row = mysqli_fetch_assoc($result))
    {
        $imageData = $row['image'];
    }
    header("content-type:image/jpeg");
    //echo $imageData;
	//$dataUri = 'data:image/jpeg;base64,' . base64_encode($imageData);
	//echo $dataUri;
	echo $imageData;

}
else
{
    echo "false";
}

?>