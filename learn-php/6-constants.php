<?php 

// constants are global variables
// constants are defined using define() function and const keyword
// constants are case sensitive


$__ = "hi"; 

echo $__; 


// constants using const keyword
const PI = 3.14; 

// constants using define() function
// define() function is case sensitive (MIN_AGE and min_age are different)
// value, name, case_sensitive : bool 
define("MIN_AGE", 18); 


echo PI;
echo "<br/>";
echo MIN_AGE;

const min_age = 18;

echo "<br/>";
echo min_age;   // case sensitive

// const min_age = 18; can't declatre again as already declared


