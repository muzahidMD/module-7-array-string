<?php

// multidimensional array
$multidimensionalFruitsArray = [
    "berries" => [
        "strawberry",
        "blueberry",
        "blackberry"
    ],
    "citrus" => [
        "orange",
        "lemon",
        "lime"
    ],
    "tropical" => [
        "banana",
        "mango",
        "pineapple"
    ]
];
/*
foreach ($multidimensionalFruitsArray as $key => $value) {
    echo $key . PHP_EOL;
    foreach ($value as $fruit) {
        echo " - " . $fruit . PHP_EOL;
    }
}
*/

$students = [
    "john" => [
        "age" => 25,
        "class" => 12,
        "roll" => 5
    ],
    "doe" => [
        "age" => 25,
        "class" => 12,
        "roll" => 6
    ],
    "smith" => [
        "age" => 27,
        "class" => 10,
        "roll" => 7
    ]
];

$multidimensionalNumber = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$invoice = [
    "invoiceNumber" => "INV-123",
    "invoiceDate" => "2024-10-21",
    "invoiceItems" => [
        [
            "item" => "item1",
            "quantity" => 2,
            "price" => 100
        ],
        [
            "item" => "item2",
            "quantity" => 3,
            "price" => 200
        ],
        [
            "item" => "item3",
            "quantity" => 4,
            "price" => 300
        ]
    ]
];

echo $invoice["invoiceNumber"];
echo PHP_EOL;
echo "___________________________________________________";
echo PHP_EOL;
echo $invoice["invoiceDate"];
echo PHP_EOL;
echo "___________________________________________________";
echo PHP_EOL;
foreach ($invoice['invoiceItems'] as $item) {
    echo $item["item"] . " _ " . $item["quantity"] . " _ " . $item["price"];
    echo PHP_EOL;
}
echo "___________________________________________________";
