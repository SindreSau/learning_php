<?php

class Fruit {
    private string $name;
    private string $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getInfo(): string
    {
        return "This {$this->name} is {$this->color}.";
    }
}

$fruits = [
    new Fruit("Apple", "red"),
    new Fruit("Pear", "green"),
    new Fruit("Orange", "orange")
];

// Using array_map
$fruitInfo = array_map(fn($fruit) => $fruit->getInfo(), $fruits);

// File ops
$filename = "fruits.txt";
file_put_contents($filename, implode("\n", $fruitInfo));

echo "Fruit information has been stored to $filename\n";

// Reading from file
$content = file_get_contents($filename);
$lines = explode("\n", $content);

foreach ($lines as $line) {
    echo $line . "\n";
}