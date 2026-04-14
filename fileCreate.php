<?php
$filename="test.txt";
$content="It is a test file, Created by PHP";
$file=fopen($filename,"w");
fwrite($file,$content);
print_r($file);
fclose($file);
echo "File Created Successfully";

?>