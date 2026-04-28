<?php
include "conn.php";

if(isset($_GET["id"])){

$id=$_GET["id"];

$getstudent=$conn->prepare("SELECT * FROM students WHERE id=$id;");

$getstudent->execute();
$studet=$getstudent->fetchAll();


$name=$studet[0]["name"];
$class=$studet[0]["class"];
$year=$studet[0]["year"];

echo '<form action="dataupdate.php" method="post">';

echo '<label>Name</label><input type="text" value='."$name>";
echo "<br>";
echo "<br>";
echo '<label>Class</label><input type="text" value='."$class>";
echo "<br>";
echo "<br>";
echo '<label>Year</label><input type="text" value='."$year>";
echo "<br>";
echo "<br>";
echo "<button>Update</button>";
echo '</form>';

}


?>