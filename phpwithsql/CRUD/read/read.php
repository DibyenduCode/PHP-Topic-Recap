<?php
include "conn.php";
$getdata= $conn->prepare("SELECT * FROM students");
$getdata->execute();
$alldata=$getdata->fetchAll();
echo "<h3>Student</h3>";
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

$getteacher=$conn->prepare("SELECT * FROM teachers");
$getteacher->execute();
$allteacherdata=$getteacher->fetchAll();


echo "<h3>Teacher</h3>";
echo "<table border>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Subject</th>";
echo "<th>Designetion</th>";
echo "</tr>";


foreach($allteacherdata as $teacher){
echo "<tr>";
echo "<td>".$teacher["Name"]."</td>";
echo "<td>".$teacher["Subject"]."</td>";
echo "<td>".$teacher["Designetion"]."</td>";
echo "</tr>";
}

echo "</table>";
?>