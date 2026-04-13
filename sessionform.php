<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
<form method="post" action="">
<input type="text" name="data">
<br>
<br>
<button name="add">Add Session</button>
<br>
<br>
<button name="view">View Session</button>
<br>
<br>
<button name="del">Delete Session</button>
</form>
</body>
</html>

<?php
session_start();
if(isset($_REQUEST["add"])){
    $val=$_REQUEST["data"];
    $_SESSION["User"]=$val;
    echo "Session add successfully";
}

if(isset($_REQUEST["view"])){
    if(isset($_SESSION["User"])){
        echo $_SESSION["User"];
    }else{
        echo "No session set";
    }
}

if(isset($_REQUEST["del"])){
    unset($_SESSION["User"]);
    echo "Session is deleted";
}

?>