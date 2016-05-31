<?php

/*
 * ### Task 10
 *
 * Write a PHP script that removes the whitespaces from a string.
 *
 * Sample string : 'The quick " " brown fox'
 * Expected Output : Thequick""brownfox
 */

$pattern = '/\s/';

$inputString = 'The quick " " brown fox';

echo $inputString . PHP_EOL;

$outputString = preg_replace($pattern, '', $inputString);

echo $outputString . PHP_EOL;
