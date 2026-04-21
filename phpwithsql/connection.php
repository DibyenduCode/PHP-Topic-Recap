<?php

$host="localhost";
$uesr="root";
$pass="";
$db="collage";

$conn=mysqli_connect($host,$uesr,$pass,$db);
// echo "<pre>";
// print_r($conn);

if($conn){
    echo "connection Done";
}
else{
    echo "DB not connected";
}


$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
$final=[];
while ($row = mysqli_fetch_assoc($result)) {
  
    $final[]=$row;
}

// $data = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($final);

foreach ($final as $row) {
    echo "<br>";
    echo $row['name'];
}
?>