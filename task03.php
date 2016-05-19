<?php

/*
 * ### Task 3
 *
 * Write a PHP script to get the first and last day of a month from a specified date.
 */

$date = date_create(date('Y-m-d'));

$month = $date->format('M');
$year = $date->format('Y');

echo date('Y-m-d', strtotime('first day of ' . $month . ' ' . $year)) . PHP_EOL;
echo date('Y-m-d', strtotime('last day of ' . $month . ' ' . $year)) . PHP_EOL;
