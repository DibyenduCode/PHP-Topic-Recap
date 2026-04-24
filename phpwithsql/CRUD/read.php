<?php
include "conn.php";
$getdata= $conn->prepare("SELECT * FROM students");
$getdata->execute();
$alldata=$getdata->fetchAll();

echo "<table border>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Class</th>";
echo "<th>Course</th>";
echo "<th>Year</th>";
echo "</tr>";


foreach($alldata as $data){
echo "<tr>";
echo "<td>".$data["name"]."</td>";
echo "<td>".$data["class"]."</td>";
echo "<td>".$data["course"]."</td>";
echo "<td>".$data["year"]."</td>";
echo "</tr>";
}

echo "</table>";
?>