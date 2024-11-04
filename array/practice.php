<?php

$multiDimensionalArray = [
    [1, 2, 3],
    ["X", "Y", "Z"],
    [7, 8, 9]
];
$length = count($multiDimensionalArray);

// for ($i = 0; $i < $length; $i++) {
//     $item = $multiDimensionalArray[$i];
//     $innerLength = count($item);
//     for ($j = 0; $j < $innerLength; $j++) {
//         echo $item[$j];
//         echo PHP_EOL;
//     }
// }

foreach ($multiDimensionalArray as $item) {
    foreach ($item as $innerItem) {
        echo $innerItem . PHP_EOL;
    }
}