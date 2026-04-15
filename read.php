<?php
$file="demo.txt";
$filehandel=fopen($file,"r");
echo fread($filehandel,filesize($file));
fclose($filehandel);

?>