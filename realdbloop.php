<?php
$users = [
    ["id" => 1, "name" => "Rahul", "email" => "rahul@gmail.com", "status" => "active"],
    ["id" => 2, "name" => "Anita", "email" => "anita@gmail.com", "status" => "inactive"],
    ["id" => 3, "name" => "Suman", "email" => "suman@gmail.com", "status" => "active"],
];

echo "<table border='1'>";
      
foreach($users as $user){
   echo "<tr>";
   foreach($user as $key => $val){
    echo "<td>".$val."</td>";
   }
    echo "</tr>";
}
echo "</table>";
?>