<?php
#define('DB_SERVER', 'localhost');
#define('DB_USERNAME', 'hgurram');
#define('DB_PASSWORD', 'hg7180');
#define('DB_DATABASE', 'hgurram');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bhavana');
$dbc = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$base_url='http://localhost/repo/app';
?>
