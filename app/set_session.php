<?php
	session_start();
	$_SESSION['EXPIRES'] = time();
	echo "true";
?>