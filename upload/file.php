<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="upfile">
        <button>Upload</button>
    </form>

    <?php
    
    if($_FILES["upfile"]){
        $filename = $_FILES["upfile"]["name"];
        $uploadpath="./uploads/".$filename;
        $temp=$_FILES["upfile"]["tmp_name"];
        move_uploaded_file($temp,$uploadpath);
        }
    
    ?>
</body>
</html>