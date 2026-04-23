<?php
$host="localhost";
$user="root";
$pass="";
$database="collage";


$conn=new PDO("mysql:host=$host;dbname=collage",$user,$pass);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Connection done";
?>