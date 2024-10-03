<?php

$fruits = ["Apple", "Orange", "Pear", "Banana"];

foreach ($fruits as $fruit) {
    if ($fruit === "Pear") {
        echo "$fruit is not good :(\n";
        continue;
    }
    echo $fruit . " is good!\n";
}

echo "\n";

function getOrdinal(int $number): string
{
    return match ($number) {
        1 => "st",
        2 => "nd",
        3 => "rd",
        default => "th",
    };
}

for ($i = 0; $i < count($fruits); $i++) {
    echo "{$fruits[$i]} is the " . ($i + 1) . getOrdinal($i + 1) . " fruit in the array\n";
}