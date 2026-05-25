<?php

declare(strict_types=1);

$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

// This is like an object in Ts/Js
$user = [
    "name" => "Antonius",
    "role" => "Developer"
];

foreach ($user as $key => $value) {
    echo "$key: $value";
    echo "\n";
}