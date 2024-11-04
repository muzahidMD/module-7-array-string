<?php

$fruits = ["banana", "mango", "grape", "apple", "orange", "pineapple", "jackfruit"];
$position_of_banana = array_search("banana", $fruits);

echo $position_of_banana . PHP_EOL;
if ($position_of_banana !== false) {
    echo "Banana is found at position {$position_of_banana}";
} else {
    echo "Banana is not found";
}