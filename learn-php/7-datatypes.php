<?php
// string, integer, float, boolean, null, array, object (class), Recourse (database connection)

// string
$name = "Mahboob Alam";

echo $name;

// get the info of a variable
echo "<br/>";

echo gettype($name);

echo "<br/>";

echo var_dump($name);

// int value 
echo "<br/>";
$num = 101; 

echo "<br/>";

echo gettype($num);

echo "<br/>";

echo var_dump($num);

echo "<br/>";


// float value
$float_num = 10.10; 

echo "<br/>";

echo gettype($float_num);

echo "<br/>";

echo var_dump($float_num);

echo "<br/>";


// null value 

$a_null_value = null; 

echo "<br/>";

echo $a_null_value;

echo "<br/>";

echo var_dump($a_null_value);

echo "<br/>";

echo gettype($a_null_value);

echo "<br/>";

// boolean value
$a_bool_value = true;

echo "<br/>";

echo $a_bool_value;

echo "<br/>";

echo gettype($a_bool_value);

echo "<br/>";

echo var_dump($a_bool_value);

echo "<br/>";


// array value 

echo "<br/>";

$arr = ["Mahboob", "Alam", 101, true];

echo "<br/>";



echo gettype($arr);

echo "<br/>";

echo var_dump($arr);

echo "<br/>";


// connection demonstratio 
echo "<br/>";

$connection = ftp_connect("127.0.0.1") or die("local host not found");

echo var_dump($connection);

echo "<br/>";