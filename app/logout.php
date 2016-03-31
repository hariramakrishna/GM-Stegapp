<?php
echo "Your session has expired.... pls wait while redirecting to login page";

	session_unset();
	session_destroy();
?>
<html>
<head></head>
<body>
	<?php
	header('Location: login.php');
	?>
</body>
</html>

