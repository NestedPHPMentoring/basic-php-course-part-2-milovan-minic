<?php

/*
 * ### Task 5
 *
 * Write a PHP script to increment date by one month.
 */

$date = new DateTime('2016-01-30');

echo 'Today is: ' . $date->format('Y-m-d') . PHP_EOL;

$date->add(new DateInterval('P1M'));

echo 'Date in one month from now is going to be: ' . $date->format('Y-m-d') . PHP_EOL;
