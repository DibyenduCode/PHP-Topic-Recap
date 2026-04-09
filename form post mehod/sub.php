<?php
if(isset($_POST)){
    echo "User name ". $_POST["username"];
    echo "<br>";
    echo "Password is ".$_POST["password"];
}
else{
    echo "User name and password not put";
}
?>