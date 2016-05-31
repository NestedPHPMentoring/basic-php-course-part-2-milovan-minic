<?php

/*
 * ###task 9
 *
 * Write a PHP script to remove non numeric characters except comma and dot.
 *
 * Sample string : '$123,34.00A'
 * Expected Output : 12,334.00
 */

$pattern = '/[^0-9\.\,]+/';

$inputString = "'$123,34.00A'";

echo $inputString . PHP_EOL;

$outputString = preg_replace($pattern, '', $inputString);

echo $outputString . PHP_EOL;
