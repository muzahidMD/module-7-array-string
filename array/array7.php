<?php

$fruits = ["mango", "grape", "apple", "orange", "banana", "pineapple"];

array_splice($fruits, 1, 0, "watermelon"); // adding
array_splice($fruits, 3, 1); // removing

print_r($fruits);