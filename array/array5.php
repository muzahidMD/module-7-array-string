<?php

// associative array
$fruits = [ // key => value {pair}
    "mango" => "আম",
    "grape" => "আঙ্গুর",
    "apple" => "আপেল"
];
$fruits["banana"] = "কলা"; // add element

unset($fruits["apple"]);

// for each loop for associative array
/*
foreach ($fruits as $key => $value) {
    echo "The translation of {$key} is {$value}\n";
}
*/


print_r($fruits);