<?php

$a = 10; 
$b = 20;
$c = "10";


var_dump($a == $c); // true. 


var_dump($a != $b);
var_dump($a <> $c);

echo "<br>";
echo "<br>";

// identical operator: === (if the value and the type are the same)
// identical operator: !== (if the value and the type are not the same)
var_dump($a === $c);   // false. identical operator: the value and the data type should be the same
var_dump(($a == $c) && ($a === $b));
var_dump($a === $b);
var_dump($a !== $c);  // true: although true as the values are same but the data type is different


// spaceship operator:  ($a <=> $b === 0)
// $a <=> $b === 0: if $a is equal to $b, it will return 0
// $a <=> $b === 0: if $a is less than $b, it will return -1
// $a <=> $b === 0: if $a is greater than $b, it will return 1

echo $a <=> $b; 
echo "<br>";