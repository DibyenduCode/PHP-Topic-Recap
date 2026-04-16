<?php
echo date("d-m-Y");
echo date("h-i-s");
echo "<br>";
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get();
echo "<br>";
echo date("h-i-sa");




?>