<?php

/*
 * ### Task 6
 *
 * Write a PHP script that checks if a string contains another string
 */

$sampleText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum';

$searchText = 'Ipsum';

$nrOfOccurrences = preg_match_all('/' . $searchText . '/i', $sampleText);

//print_r($results);

echo 'Word <strong>' . $searchText . '</strong> is contained in the following
sample text <strong><i>' . $sampleText . ' ' . $nrOfOccurrences . '</i></strong> ';

if($nrOfOccurrences == 1){
    echo 'time.';
} else {
    echo 'times.';
}
