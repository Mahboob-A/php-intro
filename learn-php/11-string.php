<?php

$name = 'hey man my name is kul boi';

echo strlen($name);    // length of the string just like size in cpp, or len in python 
echo "<br>";
echo "<br>";

echo str_word_count($name);   // word count 
echo "<br>";
echo "<br>";

echo strrev($name);   // reverser the string
echo "<br>";
echo "<br>";

echo strpos($name, 'kul');  // find the pos of the sub-str in the string
echo "<br>";
echo "<br>";

echo str_replace('kul', 'thank you', $name); // replace kul with thank you. not inplace, returns a copy. 
echo "<br>";
echo "<br>";

echo str_repeat($name, 3); // repeat the string 10 times
echo "<br>";
echo "<br>";

echo str_shuffle($name);  // shuffle the string randomly, not inplace, returns a copy. 
echo "<br>";
$shuffled_str = str_shuffle($name);
echo $shuffled_str;

echo "<br>";
echo "<br>";
echo $name;
echo "<br>";
echo "<br>";






$name_2 = "mahboob";

echo 'my name is $name_2';  // wont work as we need to use double quotes when we want to use the variable inside the string
echo "<br>";

// dot operator is used to concatenate two strings in php
// in this case, we need to use like below using dot ( . ) operator. dot is concatenation operator in php
echo 'my name is ' . $name_2;
echo "<br>";
$thanks = 'thank you';
echo 'my name is : ' . $name_2 . ' and I am kul boi   ' . $thanks . ' and this is another concatenated string';
echo "<br>";
echo "my name is :  ". $name_2 . " and I am kul boi   ". $thanks . "and this is another concatenated string";

echo "<br>";
echo "my name is $name_2"; // will work as as we are using double quotes to use variable inside the string

echo "<br>";

$hello = "hello";
$world = "world";

echo $hello. " ". $world;

echo "<br>";

echo "$hello $world";

echo "<br>";

// hello will have world appended to it.
$hello .= $world; 

echo $hello;