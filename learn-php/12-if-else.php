<?php

$age = 20; 

if ($age >= 18) {
        echo "You are eligible to vote";
} else {
        echo "You are not eligible to vote";
}

$name = "mahboob";

if ($name == "mahboob"){
        echo "\nhello $name";
} else {
        echo "\nhello guest"; 
}

$price = 200;

echo "<br>";
echo "price is: "; 
if ($price >= 500) {
        echo "<h3>expensive</h3>";
} else if ($price >= 250 && $price <= 499) {
        echo "<h3>moderate</h3>";
} else {
        echo "<h3>cheap</h3>";
}