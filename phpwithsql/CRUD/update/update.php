<?php
include "conn.php";

$students=$conn->prepare("SELECT * FROM students");
$students->execute();
$allstudentarr=$students->fetchAll();
?>
<html>
<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Year</th>
     <th>Action</th>
</tr>


    <?php

    foreach($allstudentarr as $student){
        echo "<tr>";
        echo "<td>".$student["id"]."</td>";
        echo "<td>".$student["name"]."</td>";
        echo "<td>".$student["class"]."</td>";
        echo "<td>".$student["year"]."</td>";
        echo '<td><form action="updateform.php" method="GET">
        <input type="text" hidden value='.$student["id"].' name="id">
        <button>Update</button>
        </form></td>';
        echo "</tr>";
    }
    
    ?>
</table>

</html>