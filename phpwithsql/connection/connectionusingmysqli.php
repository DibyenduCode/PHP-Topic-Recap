<?php
$host="localhost";
$user="root";
$pass="";
$database="collage";

$conn= new mysqli($host,$user,$pass,$database);

if($conn->connect_error){
    echo "Connection error";
}
else{
    echo "Connection done";
}

echo "<br>";
$res=$conn->query("SHOW TABLES")->fetch_all();

print_r($res);

?>