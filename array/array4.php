<?php


$fruits = ["mango", "grape", "apple", "orange"];

// delete the first element of the array
array_shift($fruits);

// add the first element of the array
array_unshift($fruits, "banana");


print_r($fruits);