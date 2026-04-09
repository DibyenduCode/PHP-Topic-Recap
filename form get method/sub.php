<?php

if($_GET){
    echo"User name ". $_GET["username"];
    echo "<br>";
    echo"Password ". $_GET["password"];
}
else{
    echo "No User Name and Password Put";
}
?>