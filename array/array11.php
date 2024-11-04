<?php

$fruits = [ // key => value {pair}
    "mango" => "আম",
    "grape" => "আঙ্গুর",
    "apple" => "আপেল"
];
$fruits["banana"] = "কলা";

echo array_key_exists("mango", $fruits);

echo PHP_EOL;
echo array_search("আম", $fruits);