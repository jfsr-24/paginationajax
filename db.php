<?php
$dbhost = 'localhost';  
$dbuser = '';  
$dbpass = "";  
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
$dbname = 'test';  
$connection = mysql_select_db($dbname); 
?>