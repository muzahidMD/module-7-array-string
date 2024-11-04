<?php

$fruits = ["mango", "grape", "apple", "orange", "banana", "pineapple", "jackfruit"];
$length = count($fruits);

for ($i = 0; $i < $length; $i++) {
    // echo $fruits[$i];
    // echo PHP_EOL;
}

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

// print_r($fruits);