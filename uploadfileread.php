<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<br>
<br>
<br>
<button>Submit</button>
</form>
</body>
</html>

<?php
if(isset($_FILES["file"])){

$file=$_FILES["file"]["tmp_name"];
$filehandel=fopen($file,"r");
echo fread($filehandel,filesize($file));
fclose($filehandel);
}

?>