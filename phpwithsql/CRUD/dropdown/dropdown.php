<?php
include "conn.php";
$teachersdata=$conn->prepare("SELECT * FROM teacher");
$teachersdata->execute();
$allteachers=$teachersdata->fetchAll();


echo '<form action="">';
echo "<select>";
foreach($allteachers as $teacher){
    echo "<option>".$teacher["name"]."</option>";
    
}
echo "</select>";
echo "</form>";

?>