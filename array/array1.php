<?php

// $name = array("Jhon", "Jane", "Jimy"); // php old system array
$name = ["Jhon", "Jane", "Jimy"];
$fruits = ["mango", "grape", "apple", "orange", "banana", "pineapple", "jackfruit"];

// array specific element
echo $fruits[2] . "\n";
// array length
$length = count($fruits);

echo $length . "\n";

echo "Last item =" . $fruits[$length - 1] . "\n";
