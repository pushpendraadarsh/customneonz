<?php
$dbhost   = 'localhost';
$dbuser   = 'root';
$dbpass   = '';
$dbname   = 'neon';
$timezone = date_default_timezone_set("Asia/Kolkata");
$conn     = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function CloseCon($conn)
{
 $conn->close();
}

// $version = "1.0.2";
$version = rand(0,100);