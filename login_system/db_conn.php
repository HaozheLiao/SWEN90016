<?php

$sname= "localhost:3300";
$unmae= "root";
$password = "";

$db_name = "spm_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}