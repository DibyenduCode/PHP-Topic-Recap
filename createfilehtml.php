<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="filename">
    <br>
    <br>
    <textarea name="content" rows="5" cols="30" placeholder="Write something..."></textarea>
    <br>
    <br>
    <button>Create File</button>
    </form>
</body>

<?php
if(isset($_POST["filename"])){
    $filename=$_POST["filename"];
    $content=$_POST["content"];
    $file=fopen($filename,"w");
    fwrite($file,$content);
    fclose($file);
    echo "File cerated done";
}


?>
</html>