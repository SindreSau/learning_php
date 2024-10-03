<?php
/* Info: This is a simple example to show the difference between using yield and return in PHP.
 * Yield will return a generator object. This generator will not create an array in memory, but will return the values one by one.
 * Return will create an array in memory and return it, leading to higher memory usage.
 */

function yieldCountTo($n): Generator
{
    for ($i = 1; $i < $n; $i++) {
        yield $i;
    }
}

function regularCountTo($n)
{
    $result = [];
    for ($i = 1; $i < $n; $i++) {
        $result[] = $i;
    }
    return $result;
}

$testN = 1000000;

$start = microtime(true);
$peakMemory = memory_get_peak_usage();
foreach (yieldCountTo($testN) as $number) {
    sqrt($number);  // Simulate some work
}
echo "Time taken for yieldCountTo: " . (microtime(true) - $start) . " seconds\n";
echo "Peak memory for yieldCountTo: " . (memory_get_peak_usage() - $peakMemory) . " bytes\n";

$start = microtime(true);
$peakMemory = memory_get_peak_usage();
$numbers = regularCountTo($testN);
foreach ($numbers as $number) {
    sqrt($number);  // Simulate some work
}
echo "Time taken for regularCountTo: " . (microtime(true) - $start) . " seconds\n";
echo "Peak memory for regularCountTo: " . (memory_get_peak_usage() - $peakMemory) . " bytes\n";