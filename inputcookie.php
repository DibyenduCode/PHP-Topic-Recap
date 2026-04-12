<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="val">
        </br>
        </br>
<button name="set">Set cookis</button>
</br>
</br>
<button name="view"> View cookis</button>
</br>
</br>
<button name="del">Delete cookis</button>
    </form>
</body>
</html>

<?php
if(isset($_REQUEST["set"])){
    $val=$_REQUEST["val"];
    setcookie("user_name",$val);
    echo "Cookis Set Done";
}
if(isset($_REQUEST["view"])){
    if(isset($_COOKIE["user_name"])){
        echo $_COOKIE["user_name"];
       
    }else{
         echo "No Cookie Set,Please set a Coolie";
    }  
}
if(isset($_REQUEST["del"])){
setcookie("user_name","",time()-3600);
echo "Cookie Delete Success";
}
?>