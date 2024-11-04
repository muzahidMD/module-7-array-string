<?php

$fruits = [ // key => value {pair}
    "mango" => "আম",
    "grape" => "আঙ্গুর",
    "apple" => "আপেল"
];
$fruits["banana"] = "কলা";
print_r($fruits);
// $keys = array_keys($fruits);
// $values = array_values($fruits);

// print_r($keys);
// print_r($values);

$newArray = array_flip($fruits);
print_r($newArray);