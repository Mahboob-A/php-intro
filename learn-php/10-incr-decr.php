<?php 

$a = 10; 
$b = 20;
$c = 30;
$d = 40;

// pre-increment:  first do increment before return:  ++$a increment the value of $a by 1 and then return the value to $a
echo ++$a;
echo "<br>";

// post-increment: first return old value then increment:  $a++ return the value of $a and then increment the value of $a by 1
echo "<br>";
$tmp1 = $b++;  
echo $b++; // 21 
echo "<br>";
echo $tmp1; // 20 
echo "<br>";

// pre-decrement: first do decrement before return:   --$a decrement the value of $a by 1 and then return the value to $a
// echo --$c;
echo "<br>";
echo "--c"; 
$tmp2 = --$c;
echo "<br>";
echo $tmp2;
echo "<br>";
echo $c; echo "<br>";
echo "<br>";

// post-decrement: first return the old value then decrement:  $a-- return the value of $a  and then decrement the value of $a by 1
echo "<br>";
$tmp3 = $d--;
echo "<br>";
echo $tmp3;  // 40 
echo "<br>";
echo $d; // 39 
echo "<br>";