<?php

    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
?>
<html>
<head>
<style>


form {
background-color:#FFF;
border-radius:10px;
padding : 10px;
}
</style>
</head>
    <body bgcolor="#337AB7">
	<br><br>
        <form method="post" enctype="multipart/form-data">
        <br/>
           <input type="file" name="image" />
	    <br/>
	    
            <input type="submit" name="submit" value="Upload" />

        </form>
        <?php

            if(isset($_POST['submit']))
            {
                if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
                {
                    echo "Please select an image.";
                }
                else
                {   //$_POST['imgdesc'];
                    $image= addslashes($_FILES['image']['tmp_name']);
                    //$name= addslashes($_FILES['image']['name']);
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
                    //$imagedesc=$_POST['imgdesc'];
					//$imageloc=$_POST['imgloc'];	
		    saveimage($image);
                }
            }
            //displayimage();
            function saveimage($image)
            {
				include ('db.php');
				session_start();

				
				$emailUser = $_SESSION['email'];
				$query_check_credentials = "UPDATE user set image = '$image' WHERE (email='$emailUser') AND status='1'";

				$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
				if(!$result_check_credentials)//If the QUery Failed 
				{
					echo 'Query Failed ';
				}
				else
				{
					//when new image is uploaded, empty the xy values. As user need to add new clicks for new image
					$query_check_credentials = "UPDATE user set x1 = '', y1 = '', x2 = '', y2 = '', x3 = '', y3 = '' WHERE (email='$emailUser') AND status='1'";
					$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
					if($result_check_credentials)//If the QUery Failed 
						echo 'Query passed ';
				}
            }
        ?>
    </body>
</html>