<?php
$users = [
    ["id" => 1, "name" => "Rahul", "email" => "rahul@gmail.com", "status" => "active"],
    ["id" => 2, "name" => "Anita", "email" => "anita@gmail.com", "status" => "inactive"],
    ["id" => 3, "name" => "Suman", "email" => "suman@gmail.com", "status" => "active"],
];


foreach($users as $user){
   foreach($user as $key => $val){
    echo $key." is ".$val;
    echo "<br>";
   }
    echo "<br>";
}

?>