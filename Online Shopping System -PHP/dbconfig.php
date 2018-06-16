<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to maiisuu');

$dbname = 'maiisuu';
mysqli_select_db($conn,$dbname);

?>
