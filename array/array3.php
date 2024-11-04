<?php

$fruits = ["mango", "grape", "apple", "orange"];

// add the element any index or blank(added in last) index of the array
$fruits[1] = "banana";

// add the last element of the array
array_push($fruits, "jackfruit");

// delete or pop last element of the array 
array_pop($fruits);

print_r($fruits);