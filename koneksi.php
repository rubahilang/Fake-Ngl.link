<?php

$host="localhost"; 
$user="root";       #enter your database users
$password="";       #enter your database password
$db="";             #enter your database name

$kon = mysqli_connect($host,$user,$password);

$hasil=mysqli_select_db($kon,$db);
?>