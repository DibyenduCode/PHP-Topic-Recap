<?php
print_r($_POST);
echo "<br>";
if(isset($_POST["name"])){
    echo "Name is: ". $_POST["name"];
    echo "<br>";
    echo "Email: ". $_POST["email"];
    echo "<br>";
    echo "Password is: ". $_POST["pass"];
    echo "<br>";
    echo "Gender: ". $_POST["gender"];
    echo "<br>";
    echo "Skills is: ". implode(",",$_POST["skill"]);
    echo "<br>";
    echo "City is: ". $_POST["city"];
    echo "<br>";
    echo "Bio is: ". $_POST["bio"];
    echo "<br>";

}
?>