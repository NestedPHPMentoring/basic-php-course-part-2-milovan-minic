<?php

/*
 * ### Task 2
 *
 * Write a PHP script to print the current date in the following format.
 * To get current date's information you can use `date()` function.
 *
 * Print in formats:
 *   - 2013/09/01
 *   - 13.09.01
 *   - 01-09-13
 */

$date = date_create(date('Y-m-d'));

echo 'Date is: ' . $date->format('Y/m/d') . PHP_EOL;
echo 'Date is: ' . $date->format('y.m.d') . PHP_EOL;
echo 'Date is: ' . $date->format('d-m-y');
