<?php
/* Database credentials. Pls don't abuse */
define('DB_SERVER', 'd83217.mysql.zonevs.eu');
define('DB_USERNAME', 'd83217_map');
define('DB_PASSWORD', 'Kureametikool');
define('DB_NAME', 'd83217_map');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>