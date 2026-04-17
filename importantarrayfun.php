<?php
$name=["Dibyendu","Sudev","Eliyas","Prama","Jhon","Eliyas","Sudev"];
$user=["name"=>"Dibyendu","email"=>"todkkhaskel@gmail.com","phone"=>"9932982002"];

//is_array() function to know value is array or not, it return 1 if yes 0 if not, mainly it work as bull value true or false
echo is_array($name);
echo "<br>";


//count() function to konw number of elements in the array;

echo count($name);
echo "<br>";

//unset() function help to remove sepfic element form the array

unset($name[2]);
print_r($name);

//array_push() function help to set a new elment to the array
echo "<br>";
array_push($name,"Rubel");
print_r($name);

//array_pop() function help to remove last element of the array;
echo "<br>";
array_pop($name);
print_r($name);
echo "<br>";

//array_keys() function help you to get all keys of an associative array;
print_r(array_keys($user));

echo "<br>";
//impload() help convert a array into string 
echo implode($name);

echo "<br>";

//explode() help you convert a string to a array, it has 2 paramitter  1st basis of split and 2ns one is a string

$str="Hello how are you";
print_r(explode(" ",$str));

echo "<br>";


//array_merge() help to merge 2 arrays into a single array;

print_r(array_merge($name,$user));

echo "<br>";

//array_unique() help to remove all dublicate element form an array;
print_r(array_unique($name));
?>