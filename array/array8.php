<?php

$fruits = ["mango", "grape", "apple"];
$newFruits = ["banana", "orange", "pineapple"];

$allFruits = array_merge($fruits, $newFruits);

print_r($allFruits);

// Common items in array 2 array

$class6 = ["A", "B", "C"];
$class7 = ["D", "E", "F", "C", "B"];

$commonItems = array_intersect($class6, $class7);

print_r($commonItems);
// unique element of 2 array 
$class7_unique = array_diff($class7, $class6);

print_r($class7_unique);