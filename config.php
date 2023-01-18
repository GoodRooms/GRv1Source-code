<?php	
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql106.epizy.com');
define('DB_USERNAME', 'epiz_31892593');
define('DB_PASSWORD', 'WMYWIXALrnxUX');
define('DB_NAME', 'epiz_31892593_assets');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>