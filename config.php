<?php

/*
  Database Configuration
*/

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "shl";

$con = mysqli_connect($host,$user,$pass,$dbname) or die("Mysql could not connect!");