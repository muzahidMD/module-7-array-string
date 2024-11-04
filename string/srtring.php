<?php
$name = "Muzahidul";

$single_str1 = 'Hello world Single ' . $name;// . that is not manageable  way | Less use case  
$double_str2 = "Hello world Double " . $name;

$single_str3 = 'Hello world Single {$name}';
$double_str4 = "
Hello world Double {$name}.
Hello world Double {$name}.
Hello world Double {$name}.
";                                           // {} that is more manageable way | More use case    

$hereDoc_str5 = <<<Demo
This is here doc string
My name is Muzahidul Islam.
My father name is Nurul Huda.
And my mother name is Monira begum.
Demo;

$newdoc_str6 = <<<'Demo'
This is new doc string
My name is Muzahidul Islam.
My father name is Nurul Huda.
And my mother name is Monira begum.
Demo;                                       /// <<<Demo  ...... Demo | Near 0 use case inside laravel 



$city = "Rangpur is my home town";
// echo strlen($city); //length of string   
// echo str_word_count($city);
// echo strrev($city);
// echo strpos($city, "");
// echo str_replace("World", "Muzahidul", "Hello World");
$arr = ["Muzahid", "Fahim", "Zim"];
// echo implode(" ", $arr);
// print_r(explode(" ", $city));
// $str = "      Hello Muzahid              ";
// echo trim($str);

// $str = "Hello Muzahid";
// echo strtoupper($str);


// $str = "HELLO MUZAHID";
// echo strtolower($str);

// echo str_repeat("Muzahid ", 100);

echo sha1("Muzahid");
echo PHP_EOL;
echo md5("Muzahid");
echo PHP_EOL;