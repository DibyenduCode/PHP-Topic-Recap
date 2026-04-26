<?php
$host="localhost";
$user="root";
$pass="";
$db="collage";

$conn=new PDO("mysql:host:$host;dbname=$db;",$user,$pass);
echo "Connection Done";



?>