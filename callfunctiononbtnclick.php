<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <button name="button">Click me</button>
    </form>
</body>

<?php
if(isset($_POST["button"])){
    click();
}

function click(){
   echo "Button is Clicked"; 
}

?>
</html>