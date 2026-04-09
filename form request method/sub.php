<?php
if($_REQUEST){
    echo "User name ".$_REQUEST["username"];
    echo "<br>";
    echo "Password is ".$_REQUEST["password"];
}
else{
    echo "No Username and password is put";
}


?>