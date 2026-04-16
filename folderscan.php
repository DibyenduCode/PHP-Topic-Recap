<?php
$path="scanme";
$filelist=scandir($path);
// print_r($filelist);
$fnalfile=array_diff($filelist,[".",".."]);
foreach($fnalfile as $file){
    echo "<a href='scanme/$file'>".$file."</a>";
    echo "<br>";
}
?>