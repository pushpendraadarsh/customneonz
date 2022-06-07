<?php
$dbhost   = 'localhost:3306';
$dbuser   = 'neonz_xis';
$dbpass   = 'Ep#xtc?E2k64Wmuo';
$dbname   = 'neonz_xis_app';
$timezone = date_default_timezone_set("Asia/Kolkata");
$conn     = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function CloseCon($conn)
{
 $conn->close();
}

// $version = "1.0.2";
$version = rand(0,100);
