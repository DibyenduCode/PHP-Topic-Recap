<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action= "" enctype= "multipart/form-data">
        <input type="file" name="upf">
        <br>
        <button>Upload</button>
</body>

<?php


if($_FILES["upf"]){
    $fname=$_FILES["upf"]["name"];
    $path="./up/".$fname;
    move_uploaded_file($_FILES["upf"]["tmp_name"],$path);
}
?>
</html>